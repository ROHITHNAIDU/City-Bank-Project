<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("database error --> ".mysqli_connect_error());
	}

?>