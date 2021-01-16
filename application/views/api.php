<?php
    date_default_timezone_set('Asia/Kuala_Lumpur');

	// $con = mysqli_connect("172.18.80.201","dev","KFPlanning@D3v","solid");
	$con = mysqli_connect("localhost","root","","solid");

	if (!$con){
		die ("connection error: ". mysql_error());
	}

	set_time_limit(0);

	switch($_GET['case']){

//BEGIN API header_data ===================================================================================

// BEGIN download
        case "isp":
            
            $id_solid = $_GET['id_solid'];

            $cekexist = mysqli_query($con,"SELECT *,
            case when srp = 'YA' AND lsp = 'YA' then 'YA' else 'TIDAK' end isp
            from
            (SELECT i.id_solid,i.name_class, s.vsrp as srp, l.vlsp as lsp FROM `vwisp_field` i
            INNER JOIN hsrp s ON s.name_class = i.name_class
            INNER JOIN hlsp l ON l.name_class = i.name_class
            WHERE i.id_solid = '$id_solid') tab
            group by name_class
            ");

            $array = array();

            $cek = array();

            while($row = mysqli_fetch_assoc($cekexist)){
                $cek['item'][] = $row;
            }

            array_push($array,$cek);

            if(mysqli_num_rows($cekexist) > 0) {
                print json_encode($array, JSON_NUMERIC_CHECK);
            } else {
                print json_encode('empty');
            }


        break;
        
        case "dip":

            
            $id_solid = $_GET['id_solid'];

            $query = mysqli_query($con,"SELECT *,
            case when status = 'concrete' then 'TIDAK' else 'YA' end as cdip
            from
            (select la.dcc,la.nama, cl.name_parent as status
            from
            (SELECT c.name_class AS dcc,f.name_field AS nama,c.name_parent AS `status`
            FROM (SELECT * FROM tbl_class) c
            INNER JOIN tbl_field f ON f.id_class = c.id_class
            WHERE c.id_solid = '$id_solid' AND f.typedata IN (
            SELECT DISTINCT name_class
            FROM tbl_class)) la
            inner join tbl_class cl on cl.name_class = la.nama
            where cl.id_solid = '$id_solid') sa
            ");

            $array = array();

            $dip = array();
            $getsum = array();

            while($row = mysqli_fetch_assoc($query)){
                $dip['dip'][] = $row;
            }

            array_push($array,$dip);

            if(mysqli_num_rows($query) > 0) {
                print json_encode($array, JSON_NUMERIC_CHECK);
            } else {
                print json_encode('empty');
            }


        break;

        case "lsp":
            
            $id_solid = $_GET['id_solid'];

            $query = mysqli_query($con,"select *
            from vw_lsp
            where id_solid = '$id_solid'
            ");

            $quegetsum = mysqli_query($con,"SELECT
            count(class) as class,
            SUM(case when lsp = 'CLSP' then 1 else 0 end) as clsp from(select class, case when clsp = 'YA' then 'CLSP' else 'NCLSP' end lsp
            from vw_lsp where id_solid = '$id_solid' group by class) tab");

            $array = array();

            $lsp = array();
            $getsum = array();

            while($row = mysqli_fetch_assoc($query)){
                $lsp['lsp'][] = $row;
            }

            while($row1 = mysqli_fetch_assoc($quegetsum)){
                $getsum['sum'][] = $row1;
            }

            array_push($array,$lsp);
            array_push($array,$getsum);

            $joson = json_encode($lsp);
            $josonarray = json_decode($joson,true);
            // print_r(count($josonarray));
            if(count($josonarray) !== 0)
            {

                for ($i=0;$i<count($josonarray['lsp']);$i++){
                    $nclass = $josonarray['lsp'][$i]['class'];
                    $vlsp = $josonarray['lsp'][$i]['clsp'];
                    mysqli_query($con,"INSERT INTO hlsp (id,id_solid,name_class,vlsp) VALUES ('','$id_solid','$nclass','$vlsp') ");
                }
            }


            if(mysqli_num_rows($query) > 0) {
                print json_encode($array, JSON_NUMERIC_CHECK);
            } else {
                print json_encode('empty');
            }
        break;

        case "ocp":
            
            $id_solid = $_GET['id_solid'];

            $query = mysqli_query($con,"SELECT *,
            case when tab1.name_parent = 'concrete' or noc = 0  then 'TIDAK' ELSE 'YA' END AS cocp
            FROM
            (
            SELECT u.name_class, COUNT(temp.name_class) AS noc, u.name_parent
            
            FROM tbl_class AS u
            LEFT JOIN (SELECT * FROM tbl_class where id_solid = '$id_solid') as temp ON u.name_class = temp.class_induk
            WHERE u.id_solid = '$id_solid' and u.isInduk = 1
            GROUP BY name_class
            ) tab1
            ");


            $array = array();

            while($row = mysqli_fetch_assoc($query)){
                $array['item'][] = $row;
            }

            if(mysqli_num_rows($query) > 0) {
                print json_encode($array, JSON_NUMERIC_CHECK);
            } else {
                print json_encode('empty');
            }


        break;

        case "srp":
            
            $id_class = $_GET['id_class'];
            $id_solid = $_GET['id_solid'];


            $queryc = mysqli_query($con,"SELECT `name_class`
                FROM tbl_class WHERE id_class = '$id_class' and id_solid = '$id_solid' limit 1
            ");

            $query = mysqli_query($con,"SELECT c.id_solid,m.id_class,method,`param` FROM tbl_method m
                left join tbl_class c on c.id_class = m.id_class WHERE m.id_class = '$id_class' and c.id_solid = '$id_solid'
            ");

            $countm = mysqli_query($con,"SELECT COUNT(*) as val FROM tbl_method m left join tbl_class c on c.id_class = m.id_class 
                WHERE m.id_class = '$id_class' and c.id_solid = '$id_solid'
            ");

            $summ = mysqli_query($con,"SELECT SUM(total) AS total FROM vwmethod
            WHERE id_class = $id_class and id_solid = '$id_solid' ");

            $selectP = mysqli_query($con,"SELECT DISTINCT param AS param
            FROM vwmethod
            WHERE id_class = $id_class AND param != '' and id_solid = '$id_solid' ");

            $array = array();

            $param = array();
            while($rowp = mysqli_fetch_assoc($selectP)){
                $param[] = $rowp['param'];
            }

            $dd = implode(',',$param);
            $ss = explode(',',$dd);
            $aa = array_unique($ss);

            $countT = count(array_filter($aa, function($x) { return !empty($x); }));

            $ct = $countT+1;

            while($rowc = mysqli_fetch_assoc($queryc)){
                $array['name_class'][] = $rowc['name_class'];
            }

            while($row = mysqli_fetch_assoc($query)){
                $array['method'][] = $row['method'];
                $array['param'][] = $row['param'];
            }

            while($rowcm = mysqli_fetch_assoc($countm)){
                $array['nom'] = $rowcm['val'];

                $sumnom = $rowcm['val'];
            }

            $array['t'] = $ct;

            while($rowsm = mysqli_fetch_assoc($summ)){
                $array['jml_nom'] = $rowsm['total'];

                $sumtotal = $rowsm['total'];
            }
            $hasil = round($sumtotal/($sumnom*$ct),2);

            if($hasil > 0.35) {
                $vsrp = 'YA';
            } else {
                $vsrp = 'TIDAK';
            }

            $array['hasil'] = $hasil;
            $array['vsrp'] = $vsrp;


            $joson = json_encode($array);
            $josonarray = json_decode($joson,true);

            $nclass = $josonarray["name_class"][0];
            $nsrp = $josonarray["vsrp"];

            mysqli_query($con,"INSERT INTO hsrp (id,id_solid,name_class,vsrp) VALUES ('','$id_solid','$nclass','$nsrp') ");

            print json_encode($array, JSON_NUMERIC_CHECK);

        break;
        
        case "get_email":

            $no_induk = $_GET['no_induk'];

            $query = mysqli_query($con,"SELECT email
            FROM tbl_user WHERE no_induk = '$no_induk' ");

            $array = array();

            while($row = mysqli_fetch_assoc($query)){
                $array['email'] = $row['email'];
            }

            print json_encode($array, JSON_NUMERIC_CHECK);

        break;


	}

?>
