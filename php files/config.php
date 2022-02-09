<?php

	$servername = "127.0.0.1:3036";
	$username = "root";
	$password = "123456";
	$dbname = "banksysphp";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>