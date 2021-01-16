<html>
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
</head>
<body>
    <!-- <div style="float: left;margin-right: 10px;">
        <img src="cid:logo_mynotescode" alt="Logo" style="height: 50px">
    </div> -->

    <h2 style="margin-bottom: 0;">SURAT PEMBERITAHUAN PENGEMBALIAN BARANG</h2>
    

    <div style="clear: both"></div>
    <hr />

    <div style="text-align: justify">
        <?php 
        // $connection = mysqli_connect("172.18.80.201","dev","KFPlanning@D3v","elpro");
        $connection = mysqli_connect("localhost","root","","invpoltek");

        // $no_order = $_GET['no_order'];
        // $noinduk = $_GET['no_induk'];
    
        $query = "SELECT no_order,no_induk,nama,nama_barang,satuan,jumlah,nama_mk,waktu_peminjaman,waktu_pengembalian FROM tbl_barang WHERE no_order = '$no_order' AND no_induk = '$noinduk' ";
    
        $result = mysqli_query($connection,$query);
    
        echo "<table> <tr>";
        echo "<th>No Order</th> ";
        echo "<th>No Induk</th> ";
        echo "<th>Nama</th> ";
        echo "<th>Nama Barang</th> ";
        echo "<th>Satuan</th> ";
        echo "<th>Jumlah</th> ";
        echo "<th>Mata Kuliah</th> ";
        echo "<th>Waktu Peminjaman</th>";
    
        while($row = mysqli_fetch_array($result)){  
            echo "<tr><td>" . $row['no_order'] . "</td><td>" . $row['no_induk'] . "</td><td>" . $row['nama'] . "</td>
            <td>" . $row['nama_barang'] . "</td><td>" . $row['satuan'] . "</td><td>" . $row['jumlah'] . "</td>
            <td>" . $row['nama_mk'] . "</td><td>" . $row['waktu_peminjaman'] . "</td></tr>"; 
            // echo $row;
        }
    
        echo "</table>"; 
        ?>
    </div>
</body>
</html>
