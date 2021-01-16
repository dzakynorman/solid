
/*
 * Editor client script for DB table tbl_barang
 * Created by http://editor.datatables.net/generator
 */

(function($){

	var base_url = window.location.origin + "/inv-poltek/";

$(document).ready(function() {
	var editor = new $.fn.dataTable.Editor( {
		ajax: base_url+'assets/editor/php/table.tbl_namamk.php',
		table: '#tbl_namamk',
		fields: [
			{
				"label": "kode_mk:",
				"name": "kode_mk"
			},
			{
				"label": "nama_mk:",
				"name": "nama_mk"
			},
			{
				"label": "keterangan:",
				"name": "keterangan"
			}
		]
	} );

	var table = $('#tbl_namamk').DataTable( {
		// dom: 'Bfrtip',
        
		ajax: base_url+'assets/editor/php/table.tbl_namamk.php',
		columns: [
			{
				"data": "kode_mk"
			},
			{
				"data": "nama_mk"
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

