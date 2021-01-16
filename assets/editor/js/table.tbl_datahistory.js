
/*
 * Editor client script for DB table tbl_databarang
 * Created by http://editor.datatables.net/generator
 */

(function($){

    var base_url = window.location.origin + "/inv-poltek/";

    $(document).ready(function() {
        var editor = new $.fn.dataTable.Editor( {
            ajax: base_url+'assets/editor/php/table.tbl_datahistory.php',
            table: '#tbl_history',
            fields: [
                {
                    "label": "jumlah:",
                    "name": "jumlah"
                }
            ]
        } );

        console.log(base_url+'assets/editor/php/table.tbl_datahistory.php');
    
        var table = $('#tbl_history').DataTable( {
            dom: 'Bfrtip',
            ajax: base_url+'assets/editor/php/table.tbl_datahistory.php',
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
                    "data": "status_barang"
                },
                {
                    "data": "waktu_peminjaman"
                }
            ],
            select: true,
            lengthChange: false,
            buttons: [
                // { extend: 'create', editor: editor },
                // { extend: 'edit',   editor: editor },
                // { extend: 'remove', editor: editor }
            ]
        } );

        $('#btn-printPinjam').click(function(){

            swal({   
                    title: "Apakah Anda Yakin?",   
                    text: "Anda Akan Print dan Checkout Barang ini!",   
                    type: "warning",   
                    showCancelButton: true,   
                    confirmButtonColor: "#DD6B55",   
                    confirmButtonText: "Ya, Checkout Barang!",   
                    closeOnConfirm: false 
                }, function(isConfirm){   
                    if (isConfirm){
                        var noder = $('#no_order').val();
                        var myname = $('#nama').val();
                        var base_url = window.location.origin + "/inv-poltek/";
                        var url = base_url + "user/barang/print_barang?no_order="+noder+"&nama="+myname
                       
                        $.getJSON(base_url+'admin/api?case=upd_statusCheckout&no_order='+noder,function(json){
                            console.log(json);
                            console.log(base_url+'admin/api?case=upd_statusCheckout&no_order='+noder)
                            if(json.data == 'success') {
                                swal("Berhasil!", "Data barang ini akan masuk ke data history anda.", "success"); 
                                    table.ajax.reload();
                                    setTimeout(function(){
                                window.open(url);
                                    },2000)
                            } else {
                                swal("Gagal!", "Silahkan Coba Lagi.", "error");
                            }
                        })
                        
                    } else {
                        swal("Gagal!", "Data barang ini gagal di proses.", "error"); 
                        setTimeout(function() {
                            document.location.reload();
                        },2000);
                    }
            });
        });
        
    } );
    
    }(jQuery));
    