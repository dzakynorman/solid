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
// 	`no_order` varchar(255),
// 	`no_induk` varchar(255),
// 	`nama` varchar(255),
// 	`kode_barang` varchar(255),
// 	`nama_barang` varchar(255),
// 	`jumlah` varchar(255),
// 	`mata_kuliah` varchar(255),
// 	`status` varchar(255),
// 	`status_barang` varchar(255),
// 	`waktu_peminjaman` datetime,
// 	`waktu_pengembalian` datetime,
// 	PRIMARY KEY( `id` )
// );" );

// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'tbl_barang', 'id' )
	->fields(
		Field::inst( 'no_order' ),
		Field::inst( 'no_induk' ),
		Field::inst( 'nama' ),
		Field::inst( 'kode_barang' ),
		Field::inst( 'nama_barang' ),
		Field::inst( 'satuan' ),
		Field::inst( 'jumlah' ),
		// Field::inst( 'kode_mk' ),
		Field::inst( 'nama_mk' ),
		Field::inst( 'status' ),
		Field::inst( 'status_barang' ),
		Field::inst( 'waktu_peminjaman' )
			->validator( Validate::dateFormat( 'Y-m-d H:i:s' ) )
			->getFormatter( Format::datetime( 'Y-m-d H:i:s', 'Y-m-d H:i:s' ) )
			->setFormatter( Format::datetime( 'Y-m-d H:i:s', 'Y-m-d H:i:s' ) ),
		Field::inst( 'waktu_pengembalian' )
			->validator( Validate::dateFormat( 'Y-m-d H:i:s' ) )
			->getFormatter( Format::datetime( 'Y-m-d H:i:s', 'Y-m-d H:i:s' ) )
			->setFormatter( Format::datetime( 'Y-m-d H:i:s', 'Y-m-d H:i:s' ) )
    )
    ->where('status_barang','Barang Rusak')
	->process( $_POST )
	->json();