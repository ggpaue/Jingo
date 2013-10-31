<?php
	//This file checks the connection to database 'jingo'

	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "jingo";
	
	$mysql = new mysqli($hostname, $username, $password, $database);
	
	if ($mysql -> connect_errno) {
		printf("Connection failed: %s\n", $mysql -> connect_error);
		exit();
	}
	
	// echo "Connection OK!";
?>