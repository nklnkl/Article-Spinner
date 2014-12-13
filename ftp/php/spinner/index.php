<?php

	// init functions
	include 'functions.php';
	
	// init database object
	// include '../db/db.php';
	
	// if the request method is a POST request
	if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	
		// header for json output
		header('Content-Type: text/plain');
		
		// if POST action == synonym
		if ( $_POST['action'] == 0 ) {
			
			// set input text to local
			$str = $_POST['input'];
			
			// pass str to function and return
			$str = synonym( $str );
			
			// print string for dev test
			echo $str;
			
		}
		
		// if else POST action == antonym
		if ( $_POST['action'] == 1 ) {
			
			// set input text to local
			$str = $_POST['input'];
			
			// pass str to function and return
			$str = antonym( $str );
			
			// print string for dev test
			echo $str;
			
		}
		
	}
	// else if it is not a POST request, return 0
	else {
	
		// return 0 to ajax request
		return 0;
	}
?>