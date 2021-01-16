<?php if (!defined('DATATABLES')) exit(); // Ensure being used in DataTables env.

/*
 * DB connection script for Editor
 * Created by http://editor.datatables.net/generator
 */

// Enable error reporting for debugging (remove for production)
error_reporting(E_ALL);
ini_set('display_errors', '1');

/*
 * Edit the following with your database connection options
 */
$sql_details = array(
	"type" => "Mysql",
	"user" => "dev",
	"pass" => "KFPlanning@D3v",
	"host" => "172.18.80.201",
	"port" => "3306",
	"db"   => "elpro",
	"dsn"  => "charset=utf8"
);

// $sql_details = array(
// 	"type" => "Mysql",
// 	"user" => "root",
// 	"pass" => "",
// 	"host" => "localhost",
// 	"port" => "3306",
// 	"db"   => "invpoltek",
// 	"dsn"  => "charset=utf8"
// );

