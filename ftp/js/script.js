$(document).ready( function() {

	/** Set Event Listeners **/

	// When user enters a key on the #inputText
	// Updates on screen stats
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
	
	// if the type button is clicked
	$('#type-button').on('click', function() {
	
		// find the icon in this
		var $icon = $('#type-button > i');
		
		// find the span text in this
		var $text = $('#type-button > span');
	
		// if the icon has the class fa-link
		if ( $icon.hasClass( 'fa-link' ) ) {
		
			// remove the fa-link class
			$icon.removeClass( 'fa-link' );
			
			// add the fa-chain-broken class
			$icon.addClass('fa-chain-broken');
			
			// change the text to antonyms
			$text.html('Antonyms* beta');
			
			// change action's value to 1
			$('#action').val('1');
			
		}
		// else if the icon has the class fa-chain-broken
		else if ( $icon.hasClass( 'fa-chain-broken' ) ) {
		
			// remove the fa-chain-broken class
			$icon.removeClass( 'fa-chain-broken' );
			
			// add the fa-link class
			$icon.addClass('fa-link');
			
			// change the text to synonyms
			$text.html('Synonyms');
			
			// change action's value to 0
			$('#action').val('0');
		}
	
	});
	
	// if the spin button is clicked
	$('#spin-button').on('click', function() {
		
		// find string of input text area
		var inputText = $("#inputText").val();
		
		// find the action value (whether 0:synonym, or 1:antonym)
		var action = $('#action').val();
		
		// place the string and action into a javascript object
		var toBack = { "action" : action, "input" : inputText };
		
		// set object into URL string
		var toBackString = $.param( toBack );
		
		// output for dev test purposes
		console.log ( toBackString );
		
		// call ajax function, send data to backend php
		$.ajax({
			type: "POST",
			url: "php/spinner/",
			data: toBack,
			dataType: "text"
		});
			
	});
	
	// if the clear button is clicked
	$('#clear-button').on('click', function() {
	
		// clear the input text area
		$('#inputText').val('');
		
	});
	
});