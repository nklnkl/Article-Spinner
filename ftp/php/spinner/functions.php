<?php

	// synonym function string return
	function synonym( $str ) {
	
		// returning a hash just for fun because im still working on the synonym algorithm :[
		return hash('md5', $str);
		
	}
	
	// antonym function string return
	function antonym( $str ) {
	
		// returning a hash just for fun because im still working on the synonym algorithm :[
		return hash('sha512', $str);
		
	}

?>