<?php

	$mysqli = new mysqli("localhost", "root", "", "article-spinner");
	if ( $mysqli-> connect_errno) {
		exit();
	}

?>