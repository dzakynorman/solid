<?php

/*
 * Editor server script for DB table tbl_barang
 * Created by http://editor.datatables.net/generator
 */

// DataTables PHP library and database connection
include( "lib/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Mjoin,
	DataTables\Editor\Options,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate,
	DataTables\Editor\ValidateOptions;

// The following statement can be removed after the first run (i.e. the database
// table has been created). It is a good idea to do this to help improve
// performance.
// $db->sql( "CREATE TABLE IF NOT EXISTS `tbl_barang` (
// 	`id` int(10) NOT NULL auto_increment,
// 	`kode_barang` varchar(255),
// 	`nama_barang` varchar(255),
// 	`jumlah` varchar(255),
// 	`satuan` varchar(255),
// 	`keterangan` varchar(255),
// 	PRIMARY KEY( `id` )
// );" );

// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'master_barang', 'id' )
	->fields(
		Field::inst( 'kode_barang' ),
		Field::inst( 'nama_barang' ),
		Field::inst( 'jumlah' ),
		Field::inst( 'satuan' ),
		Field::inst( 'keterangan' )
    )
    ->where('jumlah',0, '>')
	->process( $_POST )
	->json();
