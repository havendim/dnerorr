<?php
	// Database configuration 
	$dbHost     = "db4free.net"; 
	$dbUsername = "havendim"; 
	$dbPassword = "havendim"; 
	$dbName     = "dnerror"; 
	 
	// Create database connection 
	$con = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
	 
	// Check connection 
	if ($con->connect_error) { 
	    die("Connection failed: " . $con->connect_error); 
	}

    
?>
