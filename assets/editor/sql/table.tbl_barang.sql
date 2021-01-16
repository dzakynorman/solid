-- 
-- Editor SQL for DB table tbl_barang
-- Created by http://editor.datatables.net/generator
-- 

CREATE TABLE IF NOT EXISTS `tbl_barang` (
	`id` int(10) NOT NULL auto_increment,
	`kode_barang` varchar(255),
	`nama_barang` varchar(255),
	`jumlah` varchar(255),
	`satuan` varchar(255),
	`keterangan` varchar(255),
	PRIMARY KEY( `id` )
);