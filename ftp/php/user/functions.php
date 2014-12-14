<?php

	

	function register() {
	
	}
	
	// sets session variable
	function login( $email, $password ) {
	
		// db
		include '../db.php';
		
		// select the row that matches the email given
		$query = "SELECT * FROM users WHERE `email` = '$email' ";
		// run query and store results
		$result = $mysqli->query( $query );
		
		// if there is more than one match (report error, there should only be one match)
		$count = $result->num_rows;
		if ( $count > 1 ) {
		
			// echo 2, more than one user with email, prompt user at front end to try again in 24 hours.
			echo '1';
			
		}
		// if there is no match
		else if ($count < 1 ) {
		
			// echo '0', prompt user that records do not match, suggest register/sign up
			echo '0';
			
		}
		// last, if there is a match, and only one match
		else {
		
			// get result row
			$row = $result ->fetch_row();
			
			// set session id equal to matched id
			$_SESSION['id'] = $row[0];
		
			// echo email to indicate to front end to prompt user of successful login
			echo $row[1];
		
		}
	
	}
	
	// echo session id
	function getSession() {
		/**
		// if session id is set
		if ( isset( $_SESSION['id'] ) ) {
		
			$lol = $_SESSION['id'].toString();
		
			// print out session id
			echo 'lol';
			
		}
		// else if it is not set
		else {
		
			// print out 0
			echo '34';
			
		}
		**/
		echo $_SESSION['id'];
		
	}

?>