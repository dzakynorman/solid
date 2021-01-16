
/*
 * Editor client script for DB table tbl_barangrusak
 * Created by http://editor.datatables.net/generator
 */

(function($){

    var base_url = window.location.origin + "/inv-poltek/";

    $(document).ready(function() {
        var editor = new $.fn.dataTable.Editor( {
            ajax: base_url+'assets/editor/php/table.tbl_barangrusak.php',
            table: '#tbl_barangrusak',
            fields: [
                {
                    "label": "no_order:",
                    "name": "no_order"
                },
                {
                    "label": "no_induk:",
                    "name": "no_induk"
                },
                {
                    "label": "nama:",
                    "name": "nama"
                },
                {
                    "label": "kode_barang:",
                    "name": "kode_barang"
                },
                {
                    "label": "nama_barang:",
                    "name": "nama_barang"
                },
                {
                    "label": "satuan:",
                    "name": "satuan"
                },
                {
                    "label": "jumlah:",
                    "name": "jumlah"
                },
                {
                    "label": "mata_kuliah:",
                    "name": "nama_mk"
                },
                {
                    "label": "status:",
                    "name": "status",
                    "type": "select",
                    "options": ['Pending','Ongoing','Finish']
                },
                {
                    "label": "status_barang:",
                    "name": "status_barang",
                    "type": "select",
                    "options": ['Belum Kembali','Sudah Kembali','Barang Rusak','Belum Diambil','Belum Checkout']
                }
                // {
                //     "label": "waktu_peminjaman:",
                //     "name": "waktu_peminjaman",
                //     "type": "datetime",
                //     "format": "YYYY-MM-DD HH:mm:ss"
                // },
                // {
                //     "label": "waktu_pengembalian:",
                //     "name": "waktu_pengembalian",
                //     "type": "datetime",
                //     "format": "YYYY-MM-DD HH:mm:ss"
                // }
            ]
        } );
    
        var table = $('#tbl_barangrusak').DataTable( {
            dom: 'Bfrtip',
            ajax: base_url+'assets/editor/php/table.tbl_barangrusak.php',
            "columnDefs": [ 
    
                {
                    "targets": 10,
                    "data": null,
                    "defaultContent": "<button class='btn btn-sm btn-danger getRow' style='width: 60px;'>Print</button>"
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
                }
                // {
                //     "data": "waktu_peminjaman"
                // },
                // {
                //     "data": "waktu_pengembalian"
                // }
            ],
            select: false,
            responsive: false,
            lengthChange: false,
            buttons: [
                { extend: 'create', editor: editor },
                { extend: 'edit',   editor: editor },
                { extend: 'remove', editor: editor }
            ]
        } );

        $('#tbl_barangrusak tbody').on( 'click', 'button', function () {
            var data = table.row( $(this).parents('tr') ).data();
            // alert( data['no_order'] +" nama barang: "+ data['nama_barang'] );
            console.log(data);

            var noder = data['no_order'];
            var noinduk = data['no_induk'];
            var myname = data['nama'];
    
            swal({   
                title: "Apakah Anda Yakin?",   
                text: "Anda Akan Print Data Barang Rusak ini!",   
                type: "warning",   
                showCancelButton: true,   
                confirmButtonColor: "#DD6B55",   
                confirmButtonText: "Ya, Print Barang!",   
                closeOnConfirm: false 
            }, function(isConfirm){   
                if (isConfirm){
                    swal("Berhasil!", "Mohon Tunggu Hingga Halaman Print Terbuka..", "success"); 
                    var url = base_url + "admin/barang/print_rusak?no_order="+noder+"&no_induk="+noinduk+"&nama="+myname
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
            
            // $('#showModal').trigger("click");
    
            // $('#labelkodebarang').text(data['kode_barang']);
    
            // $('#nama_barang').val(data['nama_barang']);
            // $('#kode_barang').val(data['kode_barang']);
            // $('#stok_barang').val(data['jumlah']);
            // $('#satuan_barang').val(data['satuan']);
            // $('#ket_barang').val(data['keterangan']);
    
            // $('#select_mk').change(function(){
            // 	var valMK = $(this).val();
            // 	var valtext = $('#select_mk option:selected').text();
    
            // 	$('#mata_kuliah').val(valtext);
            // 	$('#kode_mk').val(valMK);
    
            // })
    
            // $('#jml_pinjam').val(0);
            // $('#jml_pinjam').attr('max',data['jumlah']);
    
        } );
        

    } );

    
    }(jQuery));
    