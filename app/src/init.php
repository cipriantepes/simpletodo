<?php

session_start();

$_SESSION['user_id'] = 1;

// Config to connect to DB

$host    = 'simpletodo_db_1';
$db      = 'mysql';
$user    = 'root';
$pass    = 'pass';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$pdo = new PDO( $dsn, $user, $pass );

if ( ! isset( $_SESSION['user_id'] ) ) {
	die( 'hahaha' );
}
//$conn = mysqli_connect($host, $user, $pass, $db);

