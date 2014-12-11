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
		
		<!-- Text Counter -->
		<script src="textcounter.min.js"></script>
		
		<style>
			
			textarea {
				resize: none;
				height: 240px;
			}
			.top {
				height: 40px;
			}
			.top > div {
				padding-top: 10px;
				height: 100%;
				border-bottom: 1px solid lightgrey;
			}
			.top > div:nth-child(1) {
				border-left: 1px solid lightgrey;
				border-right: 1px solid lightgrey;
			}
			.top > div:nth-child(2) {
				border-right: 1px solid lightgrey;
			}
			
			#file-bar {
				height: 30px;
			}
			#file-bar > div {
				padding-top: 6px;
				height: 100%;
				display: inline-block;
			}
			#file-bar > div:hover {
				background: lightgrey;
			}
		</style>
		
		<script type="text/javascript">
		
			$(document).ready( function() {
				
				// When user enters a key on the #inputText
				$('#inputText').on( "keyup", function() {
					
					// first, get the text from #inputText as as string
					var char = $(this).val();
					// second, remove all spaces
					char = char.replace(/\s/g, '');
					// set str character count equal to str's length (without spaces now)
					var charCount = char.length;
					// output the character count in #character-count element
					$('#character-count').html(charCount);
					
					// first, get the text from #inputText as as string
					var word = $(this).val();
					// set word character count equal to word's length
					var wordCount = word.match(/\S+/g).length;
					// output the word count in #word-count element
					$('#word-count').html(wordCount);
					
				});
			});
			
		</script>
		
		<meta charset="UTF-8" />
		
	</head>

	<body>

		<header id="header" class="container-fluid col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
		
			<section id="file-bar" class="row">
				
				<div class="col-sm-2 col-xs-1">
					<i class="fa fa-file-text-o"></i>
					<span class="hidden-xs">New</span>
				</div>
				<div class="col-sm-2 col-xs-1">
					<i class="fa fa-floppy-o"></i>
					<span class="hidden-xs">Save</span>
				</div>
				<div class="col-sm-2 col-xs-1">
					<i class="fa fa-folder-open-o"></i>
					<span class="hidden-xs">Load</span>
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
						<span>Adjectives Changed: </span>
						<span id="adjective-change-count"></span>
					</div>
					<div class="col-xs-6">
						<span>Verbs Changed: </span>
						<span id="verb-change-count"></span>
					</div>
				</div>
				
				<div class="col-md-6 col-sm-12">
					<div class="col-xs-6">
						<span>Total Changed: </span>
						<span id="change-count"></span>
					</div>
					<div class="col-xs-6">
						<span>Percentage Changed: </span>
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