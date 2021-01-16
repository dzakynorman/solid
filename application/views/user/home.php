<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Welcome <?php echo $this->session->userdata('nama'); ?></h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>

    </div>

    <?php $msg = $this->session->flashdata('msg'); ?>
    <?php if (isset($msg)): ?>
        <div class="alert alert-success delete_msg pull" style="width: 100%"> <i class="fa fa-check-circle"></i> <?php echo $msg; ?> &nbsp;
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
        </div>
    <?php endif ?>

    <?php $error_msg = $this->session->flashdata('error_msg'); ?>
    <?php if (isset($error_msg)): ?>
        <div class="alert alert-danger delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i> <?php echo $error_msg; ?> &nbsp;
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
        </div>
    <?php endif ?>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Base Class</h4>
                    <?php foreach ($class as $p): ?>
                    <div class="col-md-12">
                        <button class="btn btn-inverse m-b-10" type="button" onclick="showclass(<?php echo $p['id_class'] ?>);"><i class="fa fa-table"></i> <?php echo $p['name_class']; ?></button>
                        <a href="<?php echo base_url('user/dashboard/deleteclass/'.$p['id_class']) ?>">
                            <button class="btn btn-danger m-b-10" type="button" onclick=""><i class="fa fa-trash"></i> delete</button>
                        </a>
                    </div>

                    <?php endforeach ?>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Sub Class</h4>
                    <?php foreach ($subclass as $p): ?>
                    <div class="col-md-12">
                        <button class="btn btn-info m-b-10" type="button" ><i class="fa fa-table"></i> <?php echo $p['class_induk']; ?></button> <i class="fa fa-arrow-right"></i>
                        <button class="btn btn-inverse m-b-10" type="button" onclick="showsubclass(<?php echo $p['id_class'] ?>);"><i class="fa fa-table"></i> <?php echo $p['name_class']; ?></button>
                        <a href="<?php echo base_url('user/dashboard/deleteclass/'.$p['id_class']) ?>">
                            <button class="btn btn-danger m-b-10" type="button" onclick=""><i class="fa fa-trash"></i> delete</button>
                        </a>
                    </div>

                    <?php endforeach ?>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambahkan Diagram Kelas Anda Disini</h4>

                    <button class="btn btn-primary m-b-10" type="button" onclick="div_class();"><i class="fa fa-plus"></i> Tambah Base Class</button>
                    <button class="btn m-b-10" type="button" onclick="div_subclass();"><i class="fa fa-plus"></i> Tambah Sub Class</button>

                <form id="formclass" method="post" action="<?php echo base_url('user/dashboard/addclass') ?>">
                    <input type="hidden" id="id_solid" name="id_solid" value="<?php echo $this->session->userdata('id_solid'); ?>">
                    <input type="hidden" id="id_users" name="id_users" value="<?php echo $this->session->userdata('id'); ?>">
                    <div id="div_class" class=""></div>
                    <div id="div_subclass" class=""></div>
                    <button id="btnsubmitclass" class="btn btn-block btn-success" type="submit" onclick="" hidden> Kirim Data Class</button>
                    <button id="btnsubmitsubclass" class="btn btn-block btn-success" type="submit" onclick="" hidden> Kirim Data SubClass</button>
                </div>
                    <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                </form>
            </div>
        </div>
    </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> Cek Diagram Kelas : SOLID <b id="myidsolid"><?php echo $this->session->userdata('id_solid');?></b></h4>
                    <button class="btn btn-primary m-b-10" type="button" onclick="srp();"><i class="fa fa-recycle"></i> SRP</button>
                    <button class="btn btn-inverse m-b-10" type="button" onclick="ocp();"><i class="fa fa-recycle"></i> OCP</button>
                    <button class="btn btn-info m-b-10" type="button" onclick="lsp();"><i class="fa fa-recycle"></i> LSP</button>
                    <button class="btn btn-warning m-b-10" type="button" onclick="isp();"><i class="fa fa-recycle"></i> ISP</button>
                    <!-- <button id="btnisp" onclick="ispraw();"></button> -->
                    <button class="btn btn-success m-b-10" type="button" onclick="dip();"><i class="fa fa-recycle"></i> DIP</button>
                    <button class="btn btn-danger m-b-10" type="button" onclick="result();"><i class="fa fa-recycle"></i> Result</button>

                    <div id="div_srp" class="row"></div>
                    <div id="div_ocp" class="row"></div>
                    <div id="div_lsp" class="row"></div>
                    <div id="div_isp" class="row"></div>
                    <div id="div_dip" class="row"></div>
                    
                </div>
            </div>
        </div>


        

        <!--  Modal content for the above example -->
        <div class="modal fade" id="class-modal" tabindex="-1" role="dialog"
            aria-labelledby="fieldclasslabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header d-flex align-items-center">
                        <h4 class="modal-title" id="fieldclasslabel">Show Data</h4>
                        <button type="button" class="close ml-auto" data-dismiss="modal"
                            aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <input id="valzerofield" type="hidden" value="0">
                                    <h2>Name Field</h2>
                                    <div id="" class="div_classfield"></div>
                                    <hr>
                                    <h2>Name Method</h2>
                                    <div id="" class="div_classmethod"></div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!--  Modal content for the above example -->
        <div class="modal fade" id="subclass-modal" tabindex="-1" role="dialog"
            aria-labelledby="fieldclasslabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header d-flex align-items-center">
                        <h4 class="modal-title" id="fieldsubclasslabel">Show Data</h4>
                        <button type="button" class="close ml-auto" data-dismiss="modal"
                            aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <input id="valzerofield" type="hidden" value="0">
                                    <h2>Name Field</h2>
                                    <div id="" class="div_subclassfield"></div>
                                    <hr>
                                    <h2>Name Method</h2>
                                    <div id="" class="div_subclassmethod"></div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
   
    </div>
    
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

<script>


function result() {
    isp();
    dip();
    ocp();
    lsp();
    srp();

    var myidsolid = $('#myidsolid').text();

    $('#div_isp').show();
    $('#div_dip').show();
    $('#div_lsp').show();
    $('#div_ocp').show();
    $('#div_srp').show();

}


function checkIfDuplicateExists(w){
    return new Set(w).size !== w.length 
}

function isp() {

    // interfaces = [];

    // var locinter = [];

    var myidsolid = $('#myidsolid').text();

    $('#div_isp').show();
    $('#div_dip').hide();
    $('#div_lsp').hide();
    $('#div_ocp').hide();
    $('#div_srp').hide();


    // $.getJSON('/solid/admin/api?case=isp&id_solid='+myidsolid,function(data){

    //     $.each(data[0].interface,function(x,y){
    //         interfaces.push({'class' : y.name_class})
    //     });

    // });

    // setTimeout(function(){
    //     $.each(interfaces,function(x,z){
    //             console.log(z);
    //     })
    // },1000)

    $('#div_isp').html('');

    $('#div_isp').append('<div class="col-md-6"><div class="m-b-10" id=""></div><table id="isptable" class="table table-hover"><thead class="bg-info text-white"><tr><th>Nama Kelas</th><th>SRP</th><th>LSP</th><th>CISP</th></tr></thead><tbody id="bodyisp"></tbody></table></div>')

    $.getJSON('/solid/admin/api?case=isp&id_solid='+myidsolid,function(data){
        if(data != 'empty') {
            // console.log(data);

            $.each(data[0]['item'],function(ispi,ispv){
                $('#bodyisp').append('<tr><td>'+ispv.name_class+'</td><td>'+ispv.srp+'</td><td>'+ispv.lsp+'</td><td>'+ispv.isp+'</td></tr>')
            });


        } else {
            alert('data isp tidak ditemukan');
        }

    });



}

function dip() {
    var myidsolid = $('#myidsolid').text();
    $('#div_isp').hide();
    $('#div_dip').show();
    $('#div_lsp').hide();
    $('#div_ocp').hide();
    $('#div_srp').hide();

    $('#div_dip').html('');

    $('#div_dip').append('<div class="col-md-6"><div class="m-b-10" id="sumdip"></div><table id="diptable" class="table table-hover"><thead class="bg-info text-white"><tr><th>Nama Kelas (DCC)</th><th>Nama</th><th>Status</th><th>CDIP</th></tr></thead><tbody id="bodydip"></tbody></table></div>')

    $.getJSON('/solid/admin/api?case=dip&id_solid='+myidsolid,function(data){
        // console.log(data);
        if(data != 'empty') {

            $.each(data[0].dip,function(dipi,dipv){
                // console.log(dipv);
                $('#bodydip').append('<tr><td>'+dipv.dcc+'</td><td>'+dipv.nama+'</td><td>'+dipv.status+'</td><td>'+dipv.cdip+'</td></tr>')
            });

            // $.each(data[1].sum,function(slspi,slspv){
            //     var sumclass = slspv.class;
            //     var sumclsp = slspv.clsp;
            //     $('#sumlsp').text('VLSP = (∑ CLSP) / Jumlah Kelas = '+sumclass+' / '+sumclsp+' = '+sumclass/sumclsp);

            // });



        } else {
            alert('data dip tidak ditemukan');
        }

    });

}

function lsp() {
    var myidsolid = $('#myidsolid').text();
    $('#div_isp').hide();
    $('#div_dip').hide();
    $('#div_lsp').show();
    $('#div_ocp').hide();
    $('#div_srp').hide();

    $('#div_lsp').html('');

    $('#div_lsp').append('<div class="col-md-6"><div class="m-b-10" id="sumlsp"></div><table id="lsptable" class="table table-hover"><thead class="bg-info text-white"><tr><th>Class</th><th>NMIK</th><th>NMIA</th><th>Subclass</th><th>NME</th><th>NMO</th><th>Kepatuhan LSP</th></tr></thead><tbody id="bodylsp"></tbody></table></div>')

    $.getJSON('/solid/admin/api?case=lsp&id_solid='+myidsolid,function(data){
        console.log(data);
        if(data != 'empty') {

            $.each(data[0].lsp,function(lspi,lspv){
                // console.log(lspv);
                if (lspv.clsp == 'TIDAK') {
                    var vclsp = '<span class="btn btn-danger">TIDAK</span>';
                } else {
                    var vclsp = '<span class="btn btn-success">YA</span>';
                }
                $('#bodylsp').append('<tr><td>'+lspv.class+'</td><td>'+lspv.nmik+'</td><td>'+lspv.nmia+'</td><td>'+lspv.subclass+'</td><td>'+lspv.nme+'</td><td>'+lspv.nmo+'</td><td>'+vclsp+'</td></tr>')

                // interfaces.push({'lspclass' : lspv.class},{'klsp' : lspv.clsp});

            });

            $.each(data[1].sum,function(slspi,slspv){
                var sumclass = slspv.class;
                var sumclsp = slspv.clsp;
                // $('#sumlsp').text('VLSP = (∑ CLSP) / Jumlah Kelas = '+sumclass+' / '+sumclsp+' = '+sumclass/sumclsp);

            });



        } else {
            alert('data lsp tidak ditemukan');
        }

    });
}

function ocp() {
    var myidsolid = $('#myidsolid').text();


    $('#div_isp').hide();
    $('#div_dip').hide();
    $('#div_lsp').hide();
    $('#div_ocp').show();
    $('#div_srp').hide();

    $('#div_ocp').html('');

    $('#div_ocp').append('<div class="col-md-6"><table id="ocptable" class="table table-hover"><thead class="bg-inverse text-white"><tr><th>Nama Kelas</th><th>NOC</th><th>Status Kelas</th><th>OCP/Tidak</th></tr></thead><tbody id="bodyocp"></tbody></table></div>')

    $.getJSON('/solid/admin/api?case=ocp&id_solid='+myidsolid,function(data){
        console.log(data);
        
        if(data != 'empty') {

            $.each(data.item,function(ind,val){
                // console.log(val);
                $('#bodyocp').append('<tr><td>'+val.name_class+'</td><td>'+val.noc+'</td><td>'+val.name_parent+'</td><td>'+val.cocp+'</td></tr>')
            });


        } else {
            alert('data ocp tidak ditemukan');
        }

    });
}

function srp() {
    var myidsolid = $('#myidsolid').text();

    $('#div_isp').hide();
    $('#div_dip').hide();
    $('#div_lsp').hide();
    $('#div_ocp').hide();
    $('#div_srp').show();

    $('#div_srp').html('');
    // $('#div_srp').append('<div class="col-md-12"><div class="m-b-10" id="sumsrp"></div></div>');


    $.getJSON('/solid/user/dashboard/getclassinfo/'+myidsolid+'/class',function(data){
        console.log(data);
        
    if(data != 'empty') {

        var idclass = [];
    

        $.each(data,function(x,y){
            $('#div_srp').append('<div class="col-md-2">'+
                '<div class="card text-center">'+
                    '<div class="card-body bg-primary text-white">'+
                        '<div class="d-inline-block judul-srp" style="font-size:12px;">'+
                            y.name_class +' (id:'+y.id_class+') : <i> '+y.name_parent+'</i>' +
                        '</div>'+
                    '</div>'+
                    '<div class="card-footer text-cyan bg-white detail-srp-'+y.id_class+'" style="font-size:10px;"></div>'+
                '</div>'+
            '</div>');

            idclass.push(y.id_class);
            
        });

    $('#div_srp').append('<div class="col-md-6"><table id="diptable" class="table table-hover"><thead class="bg-info text-white"><tr><th>Nama Kelas</th><th>CAMC</th><th>Kepatuhan SRP</th></tr></thead><tbody id="bodysrp"></tbody></table></div>')



        $.each(idclass,function(xm,ym){
            $('.detail-srp-'+ym).append(
                '<ul class="m-b-5" style="text-align:left;">'+
                '<li class="srpnom-'+ym+'">-</li>'+
                '<li class="srpt-'+ym+'">-</li>'+
            '</ul>'+
            '<b class="srphasil-'+ym+'">-</b>'

            );
            $.getJSON('/solid/admin/api?case=srp&id_class='+ym+'&id_solid='+myidsolid,function(datam){
                $('.srpnom-'+ym).text('NOM : '+datam.nom);
                $('.srpt-'+ym).text('|T| : '+datam.t);
                $('.srphasil-'+ym).text('CAMC'+datam.name_class+' = (∑ '+datam.jml_nom+') / '+datam.nom+'x'+datam.t+' = '+datam.jml_nom+'/'+datam.nom*datam.t+' = '+datam.hasil);
                
                if(datam.hasil > 0.35){
                    var ksrp = 'YA';
                } else {
                    var ksrp = 'TIDAK';
                }

                // console.log(datam.hasil);

                $('#bodysrp').append('<tr><td>'+datam.name_class+'</td><td>'+datam.hasil+'</td><td>'+ksrp+'</td></tr>')
                
                // interfaces.push({'srpclass' : datam.name_class[0]},{'ksrp' : ksrp});
                // console.log(ksrp);

            });


        });



    } else {
        alert('data srp tidak ditemukan');
    }

    });

}



// ==============================================================

var room = 0;
var room2 = 0;
var roomfieldclass = 0;
var roomfieldsubclass = 0;
var roommethodclass = 0;
var roommethodsubclass = 0;

function showclass(id) {
    $('#class-modal').modal('show');
    $('#fieldclasslabel').text('Show id : '+id);
    $('.div_classfield').html('');
    $('.div_classmethod').html('');
    $.getJSON('/solid/user/dashboard/getclassinfo/'+id+'/field',function(data){
        $.each(data,function(x,y){
            // console.log(y.name_field);
            $('.div_classfield').append('<b class="efield'+y.id_field+'">'+y.id_field+'</b> - '+y.name_field+' : '+y.typedata+' | <a href="<?php echo base_url('user/dashboard/updateField/') ?>'+y.id_field+'" class="btn btn-info btn-xs">edit</a></br>');
        })
    })
    $.getJSON('/solid/user/dashboard/getclassinfo/'+id+'/method',function(data){
        $.each(data,function(x,y){
            console.log(y);
            $('.div_classmethod').append('<b class="enom'+y.id_nom+'">'+y.id_nom+'</b> - '+y.method+' ( '+y.param+' )| <a href="<?php echo base_url('user/dashboard/updateMethod/') ?>'+y.id_nom+'" class="btn btn-info btn-xs">edit</a></br>');
        })
    })
}
function div_class() {
    $('.divclass').show();
    $('.divsubclass').hide();

    room2 = 0;

    $('#div_subclass').html('');
    $('#btnsubmitclass').prop('hidden',false);
    $('#btnsubmitsubclass').prop('hidden',true);

    if(room >= 1){
        return;
    }

    room++;
    var objTo = document.getElementById('div_class')
    var divtest = document.createElement("div");
    divtest.setAttribute("class", "form-group removeclass" + room);
    var rdiv = 'removeclass' + room;
    divtest.innerHTML = '<div class="row divclass">'+
	'<div class="col-sm-2">'+
		'<div class="form-group">'+
			'<input type="text" class="form-control" id="name_class" name="name_class[]" placeholder="Name Class">'+
			'</div>'+
        '</div>'+
        '<input type="hidden" class="form-control" id="type_class" name="type_class[]" value="class">'+
		'<div class="col-sm-2">'+
			'<div class="form-group">'+
				'<select class="form-control" id="name_parent" name="name_parent[]">'+
					'<option value="">- Type -</option>'+
					'<option value="concrete"selected>concrete</option>'+
					'<option value="abstract">abstract</option>'+
					'<option value="interface">interface</option>'+
				'</select>'+
			'</div>'+
		'</div>'+
		'<div class="col-sm-4">'+
			'<div class="form-group">'+
				'<button class="btn btn-danger" type="button" onclick="remove_div_class(' + room + ');">'+
					'<i class="fa fa-minus"></i>'+
                '</button>'+
                ' <button class="btn btn-info" type="button" onclick="addfieldclass('+room+');">Add Field</button>'+
                ' <button class="btn btn-info" type="button" onclick="addmethodclass('+room+');">Add Method</button>'+
			'</div>'+
		'</div>'+
    '</div>'+
    '<div class="row"><div class="col-md-6"><div class="card"><div class="card-body">'+
    '<div id="div_classfield'+room+'" class=""></div></div></div></div>'+
    '<div class="col-md-6"><div class="card"><div class="card-body">'+
    '<div id="div_classmethod'+room+'" class=""></div></div></div></div></div>';
    objTo.appendChild(divtest)
}
function addfieldclass(id) {
    
        roomfieldclass++;
        var objTofieldclass = document.getElementById('div_classfield'+id)
        var divtestfieldclass = document.createElement("div");
        divtestfieldclass.setAttribute("class", "form-group removefieldclass" + roomfieldclass);
        var rdiv = 'removefieldclass' + roomfieldclass;
        divtestfieldclass.innerHTML = '<div class="row divclass">'+
            '<div class="col-sm-4">'+
            '<div class="form-group">'+
                '<input type="text" class="form-control" id="name_field" name="name_field[]" placeholder="Name Field">'+
                '</div>'+
            '</div>'+
            '<div class="col-sm-4">'+
            '<div class="form-group">'+
                '<input type="text" class="form-control" id="typedata" name="typedata[]" placeholder="Type Data">'+
                '</div>'+
            '</div>'+
            '<div class="col-sm-4">'+
                '<div class="form-group">'+
                    '<button class="btn btn-danger" type="button" onclick="remove_div_fieldclass(' + roomfieldclass + ');">'+
                        '<i class="fa fa-minus"></i>'+
                    '</button>'+
                    
                '</div>'+
            '</div>'+
        '</div>';
        objTofieldclass.appendChild(divtestfieldclass)
}
function addmethodclass(id) {
    
    roommethodclass++;
    var objTomethodclass = document.getElementById('div_classmethod'+id)
    var divtestmethodclass = document.createElement("div");
    divtestmethodclass.setAttribute("class", "form-group removemethodclass" + roommethodclass);
    var rdiv = 'removemethodclass' + roommethodclass;
    divtestmethodclass.innerHTML = '<div class="row divclass">'+
        '<div class="col-sm-4">'+
        '<div class="form-group">'+
            '<input type="text" class="form-control" id="method" name="method[]" placeholder="Name Method">'+
            '</div>'+
        '</div>'+
        '<div class="col-sm-4">'+
        '<div class="form-group">'+
            '<input type="text" class="form-control" id="param" name="param[]" placeholder="Name Param">'+
            '</div>'+
        '</div>'+
        '<div class="col-sm-4">'+
			'<div class="form-group">'+
				'<select class="form-control" id="method_parent" name="method_parent[]">'+
					'<option value="">- Type -</option>'+
					'<option value="concrete"selected>concrete</option>'+
					'<option value="abstract">abstract</option>'+
				'</select>'+
			'</div>'+
		'</div>'+
        '<div class="col-sm-4">'+
            '<div class="form-group">'+
                '<button class="btn btn-danger" type="button" onclick="remove_div_methodclass(' + roommethodclass + ');">'+
                    '<i class="fa fa-minus"></i>'+
                '</button>'+
                
            '</div>'+
        '</div>'+
    '</div>';
    objTomethodclass.appendChild(divtestmethodclass)

}
function showsubclass(id) {
    $('#subclass-modal').modal('show');
    $('#fieldsubclasslabel').text('Show id : '+id);
    $('.div_subclassfield').html('');
    $('.div_subclassmethod').html('');
    $.getJSON('/solid/user/dashboard/getclassinfo/'+id+'/field',function(data){
        $.each(data,function(x,y){
            // console.log(y.name_field);
                
            $('.div_subclassfield').append(' - '+y.name_field+' : '+y.typedata+' | <a href="<?php echo base_url('user/dashboard/updateField/') ?>'+y.id_field+'" class="btn btn-info btn-xs">edit</a></br>');

        })
    })
    $.getJSON('/solid/user/dashboard/getclassinfo/'+id+'/method',function(data){
        $.each(data,function(x,y){
            // console.log(y.method);
            $('.div_subclassmethod').append(' - '+y.method+' ( '+y.param+')| <a href="<?php echo base_url('user/dashboard/updateMethod/') ?>'+y.id_nom+'" class="btn btn-info btn-xs">edit</a></br>');
        })
    })
}
function div_subclass() {
    $('#btnsubmitclass').prop('hidden',true);

    room = 0;
    $('#div_class').html('');
    $('.divclass').hide();


    var idsolid =$('#id_solid').val();
    
    $.getJSON('/solid/user/dashboard/checkexistclass/'+idsolid,function(data){
        if(data != 'empty') {

            console.log(data);
            $('#btnsubmitsubclass').prop('hidden',false);
            
            if(room2 >= 1){
                return;
            }
            room2++;
            var objTo = document.getElementById('div_subclass')
            var divtest = document.createElement("div");
            divtest.setAttribute("class", "form-group removesubclass" + room2);
            var rdiv = 'removesubclass' + room2;
            divtest.innerHTML = '<div class="row divsubclass">'+
            '<div class="col-sm-2">'+
                '<div class="form-group">'+
                    '<input type="text" class="form-control" id="name_class" name="name_class[]" placeholder="Name SubClass">'+
                    '</div>'+
                '</div>'+
                '<div class="col-sm-2">'+
                    '<div class="form-group">'+

                        '<select class="form-control sclass_induk'+room2+'" id="sclass_induk" name="sclass_induk[]">'+
                            '<option value="">- Select Class Induk-</option>'+
                        '</select>'+
                    '</div>'+
                '</div>'+
                '<input type="hidden" class="form-control class_induk'+room2+'" id="class_induk" name="class_induk[]">'+
                '<input type="hidden" class="form-control" id="type_class" name="type_class[]" value="subclass">'+
                '<div class="col-sm-2">'+
                    '<div class="form-group">'+
                        '<select class="form-control" id="name_parent" name="name_parent[]">'+
                            '<option value="">- Type -</option>'+
                            '<option value="concrete"selected>concrete</option>'+
                            '<option value="abstract">abstract</option>'+
                            '<option value="interface">interface</option>'+
                        '</select>'+
                    '</div>'+
                '</div>'+
                '<div class="col-sm-4">'+
                    '<div class="form-group">'+
                        '<button class="btn btn-danger" type="button" onclick="remove_div_subclass(' + room2 + ');">'+
                            '<i class="fa fa-minus"></i>'+
                        '</button>'+
                        ' <button class="btn btn-info" type="button" onclick="addfieldsubclass('+room2+');">Add Field</button>'+
                        ' <button class="btn btn-info" type="button" onclick="addmethodsubclass('+room2+');">Add Method</button>'+
                    '</div>'+
                '</div>'+
            '</div>'+
            '<div class="row"><div class="col-md-6"><div class="card"><div class="card-body">'+
            '<div id="div_subclassfield'+room2+'" class=""></div></div></div></div>'+
            '<div class="col-md-6"><div class="card"><div class="card-body">'+
            '<div id="div_subclassmethod'+room2+'" class=""></div></div></div></div></div>';
            objTo.appendChild(divtest)
            
            $('.sclass_induk').html('');
            $('.sclass_induk').html('<option value="">- Select Class Induk -</option>');
            $.each(data,function(key,val){
                console.log(val);
                $('.sclass_induk'+room2).append('<option value="'+val.id_class+'">'+val.name_class+'</option>');
            });

            $('.sclass_induk'+room2).change(function(e){
                var sci = $('.sclass_induk'+room2+' option:selected').text();
                // console.log(sci);
                $('.class_induk'+room2).val(sci);
            })
        } else {
            alert('class tidak di temukan');
        }
    })
    
}
function addfieldsubclass(id) {
    
        roomfieldsubclass++;
        var objTofieldsubclass = document.getElementById('div_subclassfield'+id)
        var divtestfieldsubclass = document.createElement("div");
        divtestfieldsubclass.setAttribute("class", "form-group removefieldsubclass" + roomfieldsubclass);
        var rdiv = 'removefieldsubclass' + roomfieldsubclass;
        divtestfieldsubclass.innerHTML = '<div class="row divsubclass">'+
            '<div class="col-sm-4">'+
            '<div class="form-group">'+
                '<input type="text" class="form-control" id="name_field" name="name_field[]" placeholder="Name Field">'+
                '</div>'+
            '</div>'+
            '<div class="col-sm-4">'+
            '<div class="form-group">'+
                '<input type="text" class="form-control" id="typedata" name="typedata[]" placeholder="Type Data">'+
                '</div>'+
            '</div>'+
            '<div class="col-sm-4">'+
                '<div class="form-group">'+
                    '<button class="btn btn-danger" type="button" onclick="remove_div_fieldsubclass(' + roomfieldsubclass + ');">'+
                        '<i class="fa fa-minus"></i>'+
                    '</button>'+
                    
                '</div>'+
            '</div>'+
        '</div>';
        objTofieldsubclass.appendChild(divtestfieldsubclass)

}
function addmethodsubclass(id) {

    
    roommethodsubclass++;
    var objTomethodsubclass = document.getElementById('div_subclassmethod'+id)
    var divtestmethodsubclass = document.createElement("div");
    divtestmethodsubclass.setAttribute("class", "form-group removemethodsubclass" + roommethodsubclass);
    var rdiv = 'removemethodsubclass' + roommethodsubclass;
    divtestmethodsubclass.innerHTML = '<div class="row divsubclass">'+
        // '<div class="col-sm-4">'+
        // '<div class="form-group">'+
        //     '<input type="text" class="form-control" id="method" name="method[]" placeholder="Name Method">'+
        //     '</div>'+
        // '</div>'+
        
        '<div class="col-sm-4">'+
            '<div class="form-group">'+

                '<select class="form-control classind'+roommethodsubclass+'" id="classind" name="classind[]">'+
                    '<option value="">- Select classind-</option>'+
                '</select>'+
            '</div>'+
        '</div>'+
        '<div class="col-sm-4">'+
            '<div class="form-group">'+

                '<select class="form-control smethod'+roommethodsubclass+'" id="smethod" name="smethod[]">'+
                    '<option value="">- Select method -</option>'+
                '</select>'+
            '</div>'+
        '</div>'+
        '<input type="hidden" class="form-control method'+roommethodsubclass+'" id="method" name="method[]">'+

        '<div class="col-sm-4 divothermethod'+roommethodsubclass+'">'+
        '<div class="form-group">'+
            '<input type="text" class="form-control" id="othermethod'+roommethodsubclass+'" name="othermethod[]" placeholder="other method">'+
            '</div>'+
        '</div>'+
        '<div class="col-sm-4">'+
            '<div class="form-group">'+

                '<select class="form-control sparam'+roommethodsubclass+'" id="sparam" name="sparam[]">'+
                    '<option value="">- Select param -</option>'+
                '</select>'+
            '</div>'+
        '</div>'+
        '<input type="hidden" class="form-control param'+roommethodsubclass+'" id="param" name="param[]">'+

        '<div class="col-sm-4 divotherparam'+roommethodsubclass+'">'+
        '<div class="form-group">'+
            '<input type="text" class="form-control" id="otherparam'+roommethodsubclass+'" name="otherparam[]" placeholder="other param">'+
            '</div>'+
        '</div>'+
        
        
        '<div class="col-sm-4">'+
			'<div class="form-group">'+
				'<select class="form-control" id="method_parent" name="method_parent[]">'+
					'<option value="">- Type -</option>'+
					'<option value="concrete"selected>concrete</option>'+
					'<option value="abstract">abstract</option>'+
				'</select>'+
			'</div>'+
		'</div>'+
        '<div class="col-sm-4">'+
            '<div class="form-group">'+
                '<button class="btn btn-danger" type="button" onclick="remove_div_methodsubclass(' + roommethodsubclass + ');">'+
                    '<i class="fa fa-minus"></i>'+
                '</button>'+
                
            '</div>'+
        '</div>'+
    '</div>';
    objTomethodsubclass.appendChild(divtestmethodsubclass)

    $('.divothermethod'+roommethodsubclass).hide();
    $('.divotherparam'+roommethodsubclass).hide();

    var thisclass = $('#sclass_induk').val();
    var thisclasstext = $('#sclass_induk option:selected').text();
    $('.classind'+roommethodsubclass).html('');
    $('.classind'+roommethodsubclass).append('<option>- Select class -</option>');
    $('.classind'+roommethodsubclass).append('<option value="'+thisclass+'">'+thisclasstext+'</option>');

    $('.classind'+roommethodsubclass).change(function(e){
        var valci = e.target.value;
        $.getJSON('/solid/user/dashboard/checkmethod/'+valci,function(cmdata){
            $('.smethod'+roommethodsubclass).html('');
            $('.smethod'+roommethodsubclass).append('<option>- Select method -</option><option>other</option>');

            $.each(cmdata,function(cm1,cmv){
                $('.smethod'+roommethodsubclass).append('<option value="'+cmv.id_nom+'">'+cmv.method+'</option>')
            });
        });

        

    });

    $('.smethod'+roommethodsubclass).change(function(e){
        var valmet = e.target.value;
        $.getJSON('/solid/user/dashboard/checkparam/'+valmet,function(cpdata){
            $('.sparam'+roommethodsubclass).html('');
            $('.sparam'+roommethodsubclass).append('<option>- Select param -</option><option></option><option>other</option>');

            $.each(cpdata,function(cpi,cpv){
                if(cpv.param !== '') {
                    $('.sparam'+roommethodsubclass).append('<option value="'+cpv.id_nom+'">'+cpv.param+'</option>')
                }

            });
        });

        if(valmet == 'other') {
            $('.divothermethod'+roommethodsubclass).show();
        } else {
            $('.divothermethod'+roommethodsubclass).hide();
        }

        var vmety = $('.smethod'+roommethodsubclass+' option:selected').text();
        $('.method'+roommethodsubclass).val(vmety);

        

    });


    $('.sparam'+roommethodsubclass).change(function(e){
        var valmpar = e.target.value;
        if(valmpar == 'other') {
            $('.divotherparam'+roommethodsubclass).show();
        } else {
            $('.divotherparam'+roommethodsubclass).hide();
        }

        var vpary = $('.sparam'+roommethodsubclass+' option:selected').text();
        $('.param'+roommethodsubclass).val(vpary);
    })
   
}
function remove_div_class(rid) {
    room = 0;
    $('.removeclass' + rid).remove();
}
function remove_div_subclass(rid) {
    room2 = 0;
    $('.removesubclass' + rid).remove();
}
function remove_div_fieldclass(rid) {
    $('.removefieldclass' + rid).remove();
}
function remove_div_methodclass(rid) {
    $('.removemethodclass' + rid).remove();
}
function remove_div_fieldsubclass(rid) {
    $('.removefieldsubclass' + rid).remove();
}
function remove_div_methodsubclass(rid) {
    $('.removemethodsubclass' + rid).remove();
}


    
</script>
            