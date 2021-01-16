
/*
 * Editor client script for DB table tbl_barang
 * Created by http://editor.datatables.net/generator
 */

(function($){

	var base_url = window.location.origin + "/inv-poltek/";

$(document).ready(function() {
	var editor = new $.fn.dataTable.Editor( {
		ajax: base_url+'assets/editor/php/table.tbl_barang.php',
		table: '#tbl_barang',
		fields: [
			{
				"label": "kode barang:",
				"name": "kode_barang",
				attr: {
					type: 'number'
				  }
			},
			{
				"label": "nama barang:",
				"name": "nama_barang"
			},
			{
				"label": "jumlah:",
				"name": "jumlah",
				attr: {
					type: 'number'
				  }
			},
			{
				"label": "satuan:",
				"name": "satuan",
				"type": "select",
				"options": [
					"Buah",
					"Bungkus",
					"Meter",
					"Pack",
					"Roll",
					"Set",
					"Unit"
				]
			},
			{
				"label": "keterangan:",
				"name": "keterangan"
			}
		]
	} );

	var table = $('#tbl_barang').DataTable( {
		// dom: 'Bfrtip',
        
		ajax: base_url+'assets/editor/php/table.tbl_barang.php',
		"columnDefs": [ 
			{
                "render": function ( data, type, row ) {
					if(data == 'Terpinjam') {
						return '<span class="btn btn-danger">'+data+'</span>';
					} else {
						return data;
					}
                },
                "targets": 4
            },
         ],
		columns: [
			{
				"data": "kode_barang"
			},
			{
				"data": "nama_barang"
			},
			{
				"data": "jumlah"
			},
			{
				"data": "satuan"
			},
			{
				"data": "keterangan"
			}
		],
		// buttons: [
        //     'copy', 'csv', 'excel', 'pdf', 'print'
        // ],
		select: true,
		lengthChange: false
	} );

	new $.fn.dataTable.Buttons( table, [
		{ extend: "create", editor: editor },
		{ extend: "edit",   editor: editor },
		{ extend: "remove", editor: editor }
	] );

	table.buttons().container()
		.appendTo( $('.col-sm-6:eq(0)', table.table().container() ) );
} );

}(jQuery));

