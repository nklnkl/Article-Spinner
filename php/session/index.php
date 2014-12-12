<?php

	// init functions
	include 'functions.php';

	// init database object
	// include '../db/db.php';
	
	echo 'index load successful';
	
	// if the request method is a GET request
	if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) {
	
		// header for json output
		header('Content-Type: application/json');
		
		// function to retrieve db session data
		getSession();
		
	}
	// else if the request method is a POST
	else if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	
		// function to send to db, session data
		sendSession();
		
	}
	// else if it is neither a GET or POST, return 0 (nothing)
	else {
	
		// return 0 to ajax request
		return 0;
		
	}

	// to get session data from database
	function getSession() {
	}
	// to post session data to database
	function sendSession() {
	}
	
?>