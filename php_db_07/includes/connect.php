<?php
	define("HOST", "localhost");
	define("USER", "root");
	define("PASS", "");
	define("DBNAME", "form");
	
	$dbc = mysqli_connect(HOST, USER, PASS, DBNAME) OR 
	die("ERROR connect to MariaDB" . mysqli_connect_error() . " " . mysqli_connect_errno());
	
	mysqli_set_charset($dbc, "utf-8");
?>