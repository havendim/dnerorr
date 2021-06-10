<?php
	// Database configuration 
	$dbHost     = "freedb.tech"; 
	$dbUsername = "freedbtech_havendim"; 
	$dbPassword = "qwert123"; 
	$dbName     = "freedbtech_dnerror"; 
	 
	// Create database connection 
	$con = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
	 
	// Check connection 
	if ($con->connect_error) { 
	    die("Connection failed: " . $con->connect_error); 
	}

    
?>