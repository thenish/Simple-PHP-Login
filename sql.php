<?php

	$host = 'localhost';
	$user = 'root';
	$db = 'test';
	$pass = '';

$connect = @mysql_connect($host, $user, $pass) or die('Database could not connect');
$select = @mysql_select_db($db, $connect) or die('Database could not select');
?>