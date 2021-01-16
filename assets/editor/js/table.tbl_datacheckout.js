
/*
 * Editor client script for DB table tbl_databarang
 * Created by http://editor.datatables.net/generator
 */

(function($){

    var base_url = window.location.origin + "/inv-poltek/";

    $(document).ready(function() {
        var noinduk = $('#no_induk').val();

        var editor = new $.fn.dataTable.Editor( {
            ajax: base_url+'assets/editor/php/table.tbl_datacheckout.php?no_induk='+noinduk,
            table: '#tbl_checkout',
            // fields: [
            //     {
            //         "label": "jumlah:",
            //         "name": "jumlah"
            //     }
            // ]
        } );
    
        var table = $('#tbl_checkout').DataTable( {
            dom: 'Bfrtip',
            ajax: base_url+'assets/editor/php/table.tbl_datacheckout.php?no_induk='+noinduk,
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
                    "data": "waktu_peminjaman"
                }
            ],
            select: true,
            lengthChange: false,
            buttons: [
                // { extend: 'create', editor: editor },
                // { extend: 'edit',   editor: editor },
                { extend: 'remove', editor: editor }
            ]
        } );

        var table2 = $('#tbl_history').DataTable( {
            dom: 'Bfrtip',
            ajax: base_url+'assets/editor/php/table.tbl_datahistory.php?no_induk='+noinduk,
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
                        var noinduk = $('#noinduk').text();
                        var myname = $('#nama').val();
                        var base_url = window.location.origin + "/inv-poltek/";
                        var items = [];
                        $('#tbl_checkout tbody tr td:nth-child(4)').each( function(){
                            //add item to array
                            items.push( $(this).text() );       
                        });
                        // var datarow = table.row( $('#tbl_checkout tbody').parents('tr') ).data();

                        var items = $.unique( items );
                        // console.log(items)

                        var url = base_url + "user/barang/print_barang?no_order="+noder+"&nama="+myname

                        // console.log(base_url+'admin/api?case=upd_statusCheckout&no_order='+noder+'&kode_barang='+items);
                        
                       
                        $.getJSON(base_url+'admin/api?case=upd_statusCheckout&no_order='+noder+'&kode_barang='+items,function(json){
                            console.log(json);
                            console.log(base_url+'admin/api?case=upd_statusCheckout&no_order='+noder+'&kode_barang='+items)
                            if(json.data == 'success') {
                                swal("Berhasil!", "Data barang ini akan masuk ke data history anda.", "success"); 
                                    table.ajax.reload();
                                    table2.ajax.reload();
                                    setTimeout(function(){
                                        window.open(url);
                                    },2000)
                            } else {
                                swal("Gagal!", "Silahkan Coba Lagi.", "error");
                                setTimeout(function(){
                                    document.location.reload();
                                },2000)
                            }

                            $.getJSON(base_url+'admin/api?case=cek_checkout&no_induk='+noinduk,function(json){
                                var hasil = json.item;
                                $('#jml_checkout').text(hasil);
                            });
                        })
                        
                    } else {
                        swal("Gagal!", "Data barang ini gagal di proses.", "error"); 
                        setTimeout(function() {
                            document.location.reload();
                        },2000);
                    }
            });
        });

        editor.on( 'remove', function ( e, json, data ) {
            alert( 'data deleted' );
            document.location.reload();
        } );
    } );
    
    }(jQuery));
    