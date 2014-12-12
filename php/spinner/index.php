<?php

	// init functions
	include 'functions.php';
	
	// init database object
	// include '../db/db.php';
	
	echo 'index load successful';
	
	// if the request method is a POST request
	if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	
		// header for json output
		header('Content-Type: application/json');
		
		// if POST action == synonym
		if ( $_POST['action'] == 0 ) {
		}
		
		// if else POST action == antonym
		if ( $_POST['action'] == 1 ) {
		}
	}
	// else if it is not a POST request, return 0
	else {
	
		// return 0 to ajax request
		return 0;
	}
?>