<?php
	// Database configuration 
	$dbHost     = "sql5.freesqldatabase.com"; 
	$dbUsername = "sql5419495"; 
	$dbPassword = "tH2ZZhGQF3"; 
	$dbName     = "sql5419495"; 
	 
	// Create database connection 
	$con = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
	 
	// Check connection 
	if ($con->connect_error) { 
	    die("Connection failed: " . $con->connect_error); 
	}

    
?>
