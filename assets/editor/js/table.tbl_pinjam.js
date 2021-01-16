
/*
 * Editor client script for DB table tbl_barang
 * Created by http://editor.datatables.net/generator
 */

(function($){

	var base_url = window.location.origin + "/inv-poltek/";

$(document).ready(function() {


	// var editor = new $.fn.dataTable.Editor( {
	// 	ajax: base_url+'assets/editor/php/table.tbl_barang.php',
	// 	table: '#tbl_pinjam',
	// 	fields: [
	// 		{
	// 			"label": "kode barang:",
	// 			"name": "kode_barang",
	// 			attr: {
	// 				type: 'number'
	// 			  }
	// 		},
	// 		{
	// 			"label": "nama barang:",
	// 			"name": "nama_barang"
	// 		},
	// 		{
	// 			"label": "jumlah:",
	// 			"name": "jumlah",
	// 			attr: {
	// 				type: 'number'
	// 			  }
	// 		},
	// 		{
	// 			"label": "satuan:",
	// 			"name": "satuan",
	// 			"type": "select",
	// 			"options": [
	// 				"Buah",
	// 				"Bungkus",
	// 				"Meter",
	// 				"Pack",
	// 				"Roll",
	// 				"Set",
	// 				"Unit"
	// 			]
	// 		},
	// 		{
	// 			"label": "keterangan:",
	// 			"name": "keterangan"
	// 		}
	// 	]
	// } );

	var table = $('#tbl_pinjam').DataTable( {
		// dom: 'Bfrtip',
        
        ajax: base_url+'assets/editor/php/table.tbl_pinjam.php',
        "columnDefs": [ 
    
            {
                "targets": 5,
                "data": null,
                "defaultContent": "<button class='btn btn-sm btn-info getRow' style='width: 60px;'>Pinjam</button>"
			},
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
        order: false,
		select: false,
		lengthChange: false
	} );

	// new $.fn.dataTable.Buttons( table, [
	// 	{ extend: "create", editor: editor },
	// 	{ extend: "edit",   editor: editor },
	// 	{ extend: "remove", editor: editor }
    // ] );
    
    $('#tbl_pinjam tbody').on( 'click', 'button', function () {
        var data = table.row( $(this).parents('tr') ).data();
        // alert( data['nama_barang'] +" kode barang: "+ data['kode_barang'] );
        console.log(data);
        
        $('#showModal').trigger("click");

        $('#labelkodebarang').text(data['kode_barang']);

        $('#nama_barang').val(data['nama_barang']);
        $('#kode_barang').val(data['kode_barang']);
        $('#stok_barang').val(data['jumlah']);
        $('#satuan_barang').val(data['satuan']);
        $('#ket_barang').val(data['keterangan']);

		$('#select_mk').change(function(){
			var valMK = $(this).val();
			var valtext = $('#select_mk option:selected').text();

			$('#mata_kuliah').val(valtext);
			// $('#kode_mk').val(valMK);

			// console.log(valMK + ' & ' + valtext);
		})

        $('#jml_pinjam').val(0);
        $('#jml_pinjam').attr('max',data['jumlah']);

    } );

    $('#btn-simpan').click(function(){

		swal({   
            title: "Apakah Anda Yakin?",   
            text: "Anda Akan Meminjam Barang ini!",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Ya, Pinjam Barang!",   
            closeOnConfirm: false 
        }, function(isConfirm){   
			if (isConfirm){

				var form = $('#formPinjam').serialize();
				console.log(form);
				$.getJSON(base_url+'admin/api?case=insertBarang&'+form,function(json){
					console.log(json);
					if(json.data == 'success') {
						swal("Berhasil!", "Data barang ini akan dikirim ke admin untuk di proses.", "success"); 
						table.ajax.reload();
						setTimeout(function() {
							document.location.reload();
							// $('#btn-close').trigger('click');
						},2000);
					} else {
                        swal("Gagal!", "Silahkan Coba Lagi.", "error");
                    }
				})
			} else {
				swal("Gagal!", "Data barang ini gagal di proses.", "error"); 
				setTimeout(function() {
					document.location.reload();
					// $('#btn-close').trigger('click');
				},2000);
			}
        });

       
    })

	table.buttons().container()
		.appendTo( $('.col-sm-6:eq(0)', table.table().container() ) );
} );

}(jQuery));

