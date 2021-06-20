<?php

	$servername = "sql6.freesqldatabase.com";
	$username = "sql6420214";
	$password = "EvkxwLPyWc";
	$dbname = "sql6420214";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>