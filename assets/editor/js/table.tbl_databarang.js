
/*
 * Editor client script for DB table tbl_databarang
 * Created by http://editor.datatables.net/generator
 */

(function($){

    var base_url = window.location.origin + "/inv-poltek/";

    $(document).ready(function() {
        var editor = new $.fn.dataTable.Editor( {
            ajax: base_url+'assets/editor/php/table.tbl_databarang.php',
            table: '#tbl_databarang',
            fields: [
                {
                    "label": "no_order:",
                    "name": "no_order",
                    "type":  "readonly",
                },
                {
                    "label": "no_induk:",
                    "name": "no_induk",
                    "type":  "readonly",
                },
                {
                    "label": "nama:",
                    "name": "nama",
                    "type":  "readonly",
                },
                {
                    "label": "kode_barang:",
                    "name": "kode_barang",
                    "type":  "readonly",
                },
                {
                    "label": "nama_barang:",
                    "name": "nama_barang",
                    "type":  "readonly",
                },
                {
                    "label": "satuan:",
                    "name": "satuan",
                    "type":  "readonly",
                },
                {
                    "label": "jumlah:",
                    "name": "jumlah",
                    "type":  "readonly",
                },
                {
                    "label": "mata_kuliah:",
                    "name": "nama_mk",
                    "type":  "readonly",
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
                },
                {
                    "label": "waktu_peminjaman:",
                    "name": "waktu_peminjaman",
                    "type": "readonly",
                    "format": "YYYY-MM-DD HH:mm:ss",
                    // attr: {
                    //     "readonly": true,
                    //     "autocomplete": false
                    //  }
                },
                {
                    "label": "waktu_pengembalian:",
                    "name": "waktu_pengembalian",
                    "type": "datetime",
                    "format": "YYYY-MM-DD HH:mm:ss"
                }
            ]
        } );

        // editor.field( 'waktu_peminjaman' ).disable();

        editor.on( 'preSubmit', function ( e, data, action ) {
            // $.each( data.data, function ( key, values ) {
            //   data.data[ key ][ 'numberField' ] = parseInt( values[ 'numberField' ], 10 );
            // } );
            var status = editor.field( 'status' ).val();
            var status_barang = editor.field( 'status_barang' ).val();
            // var no_order = editor.field( 'no_order' ).val();
            // var no_induk = editor.field( 'no_induk' ).val();
            var kode_barang = editor.field( 'kode_barang' ).val();
            var jumlah = editor.field( 'jumlah' ).val();
            console.log('status : '+status+' | '+status_barang);
            // console.log(no_order+'&'+no_induk+'&'+kode_barang+'&'+jumlah);

            if((status == 'Finish') && (status_barang == 'Sudah Kembali')) {
                $.getJSON(base_url+'admin/api?case=barang_kembali&kode_barang='+kode_barang+'&jumlah='+jumlah,function(json){
                    console.log(json.data)
                });
            } else {
                console.log('None')
            }
            
          } );
    
        var table = $('#tbl_databarang').DataTable( {
            dom: 'Bfrtip',
            ajax: base_url+'assets/editor/php/table.tbl_databarang.php',
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
                },
                {
                    "data": "waktu_pengembalian"
                }
            ],
            select: true,
            responsive: true,
            lengthChange: false,
            buttons: [
                { extend: 'create', editor: editor },
                { extend: 'edit',   editor: editor },
                { extend: 'remove', editor: editor }
            ]
        } );
    } );
    
    }(jQuery));
    