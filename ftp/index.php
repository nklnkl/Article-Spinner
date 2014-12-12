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
		
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		
		<script src="js/script.js" type="text/javascript"></script>
		
		<meta charset="UTF-8" />
		
	</head>

	<body>

		<header id="header" class="container-fluid col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
		
			<section id="file-bar" class="row">
				
				<div class="col-sm-1 col-xs-3">
					<i class="fa fa-file-text-o"></i>
					<span>New</span>
				</div>
				<div class="col-sm-1 col-sm-offset-0 col-xs-3">
					<i class="fa fa-floppy-o"></i>
					<span>Save</span>
				</div>
				<div class="col-sm-1 col-sm-offset-0 col-xs-3">
					<i class="fa fa-folder-open-o"></i>
					<span>Load</span>
				</div>
				<div class="col-sm-1 col-sm-offset-0 col-xs-3">
					<i class="fa fa-eraser"></i>
					<span>Clear</span>
				</div>
				
			</section>
			
		</header>
		
		<!-- Input Article Area -->
		<section id="input-article" class="container-fluid col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
			
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
		
	</body>
	
</html>