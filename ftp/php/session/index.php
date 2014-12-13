<?php

	// init functions
	include 'functions.php';

	// init database object
	// include '../db/db.php';
	
	echo 'index session load successful';
	
	// else if the request method is a POST
	if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
		
		// if action is for sending
		if ( $_POST['action'] == 'send' ) {

			// set post variables into local scope
			$id = $_SESSION['id'];
			$input = $_POST['input'];
			$output = $_POST['output'];
		
			// function to send to db, session data
			sendSession($mysqli, $id, $input, $output);
		}
		// if action is for loading (multiple rows)
		else if ( $_POST['action'] == 'load' ) {
		
			// set post variables into local scope
			$id = $SESSION['id'];
			
			// function to get data from db
			getSessions($mysqli, $id);
		
		}
		// if action is for retrieving one row for display
		else if ( $_POST['action'] == 'get' ) {
		
			// set post variables into local scope
			$sessionId = $_POST['sessionId'];
		
			// function to get from db
			getSession($mysqli, $sessionId);
		}
		
	}
	// else if it is not a POST request, return 0 (nothing)
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