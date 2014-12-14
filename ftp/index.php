<?php

	session_start();
	
?>


<!DOCTYPE html>

<html lang="en-US">
	
	<head>
		
		<!-- JQuery -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
		
		<!-- Font Awesome -->
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		
		<!-- Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200' rel='stylesheet' type='text/css'>
		
		<!-- Mobile View Compatibility -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="apple-mobile-web-app-title" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
		
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		
		<script src="js/script.js" type="text/javascript"></script>
		
		<meta charset="UTF-8" />
		
	</head>

	<body>
	
		<section id="message-box" class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
		</section>
		
		<section id="register-box" class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
		
			<form id="register-form">
			
				<div class="row">
					<span class="col-xs-6">Registration Form</span>
					<span id="register-close" class="col-xs-2 col-xs-offset-4">Close</span>
				</div>
				<div class="row">
					<input type="text" id="email-register" name="email-register" class="col-sm-4 col-xs-12" placeholder="Enter your email please" />
					<input type="password" id="password-register" name="email-register" class="col-sm-4 col-xs-12" placeholder="Create a password" />
					<input type="submit" id="submit-register" name="submit-register" class="col-sm-4 col-xs-12" />
				</div>
			
			</form>
		
		</section>
		
		<section id="account-box" class="col-xs-4 col-xs-offset-4">
		
			<span id="account-close" class="col-xs-2 col-xs-offset-10">Close</span>
			<span class="col-xs-12">New Session</span>
			<span class="col-xs-12">Save Session</span>
			<span class="col-xs-12">Load Session</span>
			<span class="col-xs-12">Account Settings</span>
			<span class="col-xs-12">Log Out</span>
		
		</section>

		<header id="header" class="container-fluid col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
		
			<section id="account-bar" class="row">
				
				<form id="login-form" name="login-form">
					<input id="email-login" type="text" name="email-login" class="col-sm-2 col-sm-offset-4 col-xs-3 col-xs-offset-0" placeholder="Email" />
					<input id="password-login" type="password" name="password-login" class="col-sm-2 col-xs-3" placeholder="Password" />
					<input id="submit-login" type="submit" name="submit-login" class="col-sm-2 col-xs-3" value="Login" />
					
					<input id="register-button" type="button" name="register-button" class="col-sm-2 col-xs-3" value="Register" />
					
					<input id="account-button" type="button" value="" class="col-sm-3 col-sm-offset-9 col-xs-4 col-xs-offset-8" />
				</form>
				
			</section>
		
			<section id="file-bar" class="row">
				
				<div id="type-button" class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
					<i class="fa fa-link"></i>
					<span>Synonyms</span>
				</div>
				<div id="spin-button" class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
					<i class="fa fa-refresh"></i>
					<span>Spin</span>
				</div>
				<div id="clear-button" class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
					<i class="fa fa-eraser"></i>
					<span>Clear</span>
				</div>
				
				<input id="action" name="action" type="hidden" value="0" />
				
			</section>
			
		</header>
		
		<section class="container-fluid col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
		
			<!-- Input Article Area -->
			<div class="row top">
				
				<div class="col-md-6 col-sm-12">
					<div class="col-xs-6">
						<span>Characters: </span>
						<span id="character-count"></span>
					</div>
					<div class="col-xs-6">
						<span>Words: </span>
						<span id="word-count"></span>
					</div>
				</div>
				
				<div class="col-md-6 col-sm-12">
					<input type="file" accept=".txt/*">
				</div>
				
			</div>
				
			<div class="row middle">
				<textarea id="inputText" class="col-xs-12" placeholder="Please enter or upload your article that you wish to spin."></textarea>
			</div>
			
			<!-- Output Article Area -->
			<div class="row top">
				
				<div class="col-md-6 col-sm-12">
					<div class="col-xs-6">
						<span>Adjectives: </span>
						<span id="adjective-change-count"></span>
					</div>
					<div class="col-xs-6">
						<span>Verbs: </span>
						<span id="verb-change-count"></span>
					</div>
				</div>
				
				<div class="col-md-6 col-sm-12">
					<div class="col-xs-6">
						<span>Total: </span>
						<span id="change-count"></span>
					</div>
					<div class="col-xs-6">
						<span>Percentage: </span>
						<span id="change-percentage"></span>
					</div>
				</div>
				
			</div>
			
			<div class="row middle">
				<textarea id="outputText" class="col-xs-12" readonly></textarea>
			</div>

		</section>
		
		<footer id="footer" class="container-fluid col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
		
			<section class="row">
			
				<span class="col-xs-4 col-xs-offset-8">
					developed by Niko Lagman
				</span>
			
			</section>
		
		</footer>
		
	</body>
	
</html>