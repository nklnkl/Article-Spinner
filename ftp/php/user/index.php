<?php

	header("Content-type: text/plain");

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