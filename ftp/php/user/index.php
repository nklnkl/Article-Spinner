<?php
	session_start();
	header("Content-type: text/plain");

	/**
		functions called from this index return/echo plain text to front end
		they will usually return integers
		that will instruct the front end javascript what to prompt the user
		besides returning plain text, they do other things such as assigning variables to session variables
	**/
	
	include 'functions.php';
	
	if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) {
	
		// if action is set
		if ( isset( $_GET['action'] ) ) {
		
			switch ( $_GET['action'] ) {
			
				case 0:
					break;
					
				default:
					echo '0';
					
			}
			
		}
		// if action is not set
		else {
			echo '0';
		}
	
	}
	else if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	
		// if action is set
		if ( isset( $_POST['action'] ) ) {
		
			switch ( $_POST['action'] ) {
			
				case '0':
					register( $mysqli, $_POST['email'], $_POST['password'] );
					break;
					
				case '1':
					login( $_POST['email'], $_POST['password'] );
					break;
				case '2':
					getSession();
					break;
				default:
					echo '0';
					
			}
			
		}
		// if action is not set
		else {
			echo '0';
		}
	
	}
	// all else
	else {
		echo '0';
	}
	
?>