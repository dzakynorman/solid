
/*
 * Editor client script for DB table tbl_databarang
 * Created by http://editor.datatables.net/generator
 */

(function($){

    var base_url = window.location.origin + "/inv-poltek/";

    $(document).ready(function() {
    
        var table = $('#tbl_broadcast').DataTable( {
            dom: 'Bfrtip',
            ajax: base_url+'assets/editor/php/table.tbl_broadcast.php',
            "columnDefs": [ 
    
                {
                    "targets": 11,
                    "data": null,
                    "defaultContent": "<button class='btn btn-sm btn-danger getRow' style='width: 60px;'>Send Mail</button>"
                },
             ],
            columns: [
                {
                    "data": "no_order"
                },
                {
                    "data": "no_induk"
                },
                {
                    "data": "nama"
                },
                {
                    "data": "kode_barang"
                },
                {
                    "data": "nama_barang"
                },
                {
                    "data": "satuan"
                },
                {
                    "data": "jumlah"
                },
                {
                    "data": "nama_mk"
                },
                {
                    "data": "status"
                },
                {
                    "data": "status_barang"
                },
                {
                    "data": "waktu_peminjaman"
                }
            ],
            select: true,
            responsive: true,
            lengthChange: false,
            buttons: [
                // { extend: 'create', editor: editor },
                // { extend: 'edit',   editor: editor },
                // { extend: 'remove', editor: editor }
            ]
        } );

            $('#tbl_broadcast tbody').on( 'click', 'button', function () {
                var data = table.row( $(this).parents('tr') ).data();
                // alert( data['no_order'] +" nama barang: "+ data['nama_barang'] );
                console.log(data);

                var noder = data['no_order'];
                var noinduk = data['no_induk'];
                var myname = data['nama'];

        $.getJSON(base_url+"admin/api?case=get_email&no_induk="+noinduk,function(json){
                    var email = json.email;
                    console.log(json);
                    console.log(noinduk);
        
                swal({   
                    title: "Apakah Anda Yakin?",   
                    text: "Anda Akan kirim broadcast ke email "+email+" | "+myname+" ("+noinduk+")",   
                    type: "warning",   
                    showCancelButton: true,   
                    confirmButtonColor: "#DD6B55",   
                    confirmButtonText: "Ya, Print Barang!",   
                    closeOnConfirm: false 
                }, function(isConfirm){   
                    if (isConfirm){
                        swal("Berhasil!", "Mohon Tunggu Hingga Halaman Notif Berhasil Terbuka..", "success"); 
                        var url = base_url + "assets/broadcast/broadcast_send.php?no_order="+noder+"&email_penerima="+email+"+&no_induk="+noinduk
                        setTimeout(function(){
                            window.open(url);
                        },2000)
                    } else {
                        swal("Gagal!", "Data barang ini gagal di print.", "error"); 
                        setTimeout(function() {
                            document.location.reload();
                        },2000);
                    }
            });    
        });

    
        } );
        

    } );
    
    }(jQuery));
    