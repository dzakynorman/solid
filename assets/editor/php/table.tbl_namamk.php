<?php

/*
 * Editor server script for DB table master_matakuliah
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
// $db->sql( "CREATE TABLE IF NOT EXISTS `master_matakuliah` (
// 	`id` int(10) NOT NULL auto_increment,
// 	`kode_mk` varchar(255),
// 	`nama_mk` varchar(255),
// 	`keterangan` varchar(255),
// 	PRIMARY KEY( `id` )
// );" );

// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'master_matakuliah', 'id' )
	->fields(
		Field::inst( 'kode_mk' ),
		Field::inst( 'nama_mk' ),
		Field::inst( 'keterangan' )
	)
	->process( $_POST )
	->json();