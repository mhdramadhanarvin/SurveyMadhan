<?php
	session_start();
	date_default_timezone_set('Asia/Jakarta');
	$dbhost = '127.0.0.1';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'formboby';

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	if (mysqli_connect_error()) {
		echo 'Connection Error!';
	}