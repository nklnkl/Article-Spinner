$(document).ready( function() {
	
	// Hide user dependent elements
	$('#message-box').slideUp(0);
	$('#account-button').slideUp(0);
	$('#register-box').slideUp(0);
	$('#account-box').slideUp(0);

	/** Set Event Listeners **/

	// When user enters a key on the #inputText
	// Updates on screen stats
	$('#inputText').on( "keyup", function() {
		
		inputTextKeyup( $(this) );
		
	});
	
	// if the type button is clicked
	$('#type-button').on('click', function() {
	
		typeButtonClick();
	
	});
	
	// if the spin button is clicked
	$('#spin-button').on('click', function() {
	
		spinButtonClick();
			
	});
	
	// if the clear button is clicked
	$('#clear-button').on('click', function() {
		
		clearButtonClick();
		
	});
	
	// if the submit button on the login form is clicked
	$("#login-form").submit( function() {
	
		loginFormSubmit();
		
	});
	
	// if the register button is clicked
	$("#register-button").on('click', function() {
	
		registerButtonClick();
		
	});
	
	// if the register close button is clicked
	$("#register-close").on('click', function() {
	
		registerCloseButtonClick();
		
	});
	
	// if the account button is clicked
	$("#account-button").on("click", function() {
	
		accountButtonClick();
	
	});
	
	// if the account close button is clicked
	$("#account-close").on('click', function() {
	
		accountCloseButtonClick();
	
	});
	
});

/** Functions to be called **/
	
function inputTextKeyup( $handler ) {

	// first, get the text from #inputText as as string
	var char = $( $handler ).val();
	
	// second, remove all spaces
	char = char.replace(/\s/g, '');
	
	// set str character count equal to str's length (without spaces now)
	var charCount = char.length;
	
	// output the character count in #character-count element
	$('#character-count').html(charCount);
	
	// first, get the text from #inputText as as string
	var word = $( $handler ).val();
	
	// set word character count equal to word's length
	var wordCount = word.match(/\S+/g).length;
	
	// output the word count in #word-count element
	$('#word-count').html(wordCount);
	
}

function typeButtonClick() {

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

}

function spinButtonClick() {
	
	// find string of input text area
	var inputText = $("#inputText").val();
	
	// find the action value (whether 0:synonym, or 1:antonym)
	var action = $('#action').val();
	
	// place the string and action into a javascript object
	var toBack = { "action" : action, "input" : inputText };
	
	// call ajax function, send data to backend php
	$.ajax({
		type: "POST",
		url: "php/spinner/",
		data: toBack,
		dataType: "text",
		success: function( result ) {
			$('#outputText').val( result );
		}
	});
	
}

function clearButtonClick() {

	// clear the input text area
	$('#inputText').val('');
	
}

function loginFormSubmit() {

	var data = {
		"action" : "1",
		"email" : $("#email-login").val(),
		"password" : $("#password-login").val()
		}
		
		// call ajax function, send data to backend php
		$.ajax({
			type: "POST",
			url: "php/user/",
			data: data,
			dataType: "text",
			success: function( result ) {
				
				// call login success function
				loginSuccess( result );
				
			}
		});
	
		// stop default form submit
		event.preventDefault();
		
		
}

function loginSuccess( result ) {

	// if there is no match
	if ( result == '0' ) {
		
		// show message box, prompt personal hello
		$('#message-box').html('That email address is not on record, are you registered? Please try again if you are.');
		// hide message box
		$('#message-box').slideDown(500).delay(4000).slideUp(500);
		
	}
	// if there is more than one match
	else if ( result == '1' ) {
		
		// show message box, prompt personal hello
		$('#message-box').html('There seems to be an error regarding your account. Please try to log in again after 24 hours. Sorry for the inconvenience.');
		// hide message box
		$('#message-box').slideDown(500).delay(4000).slideUp(500);
		
	}
	// if there is a match
	else {
	
		// show user email on account button
		$('#account-button').val( result );
		// show account button
		$('#account-button').slideDown(500);
		// hide everything else
		$('#account-button').siblings().slideUp(500);
		
		// show message box, prompt personal hello
		$('#message-box').html('Hello ' + result + '!');
		// hide message box
		$('#message-box').slideDown(500).delay(4000).slideUp(500);
		
	}
	
}

function registerButtonClick() {

	$('#register-box').slideDown(500);

}

function registerCloseButtonClick() {

	$('#register-box').slideUp(500);

}

function accountButtonClick() {

	$('#account-box').slideDown(500);

}
function accountCloseButtonClick() {

	$('#account-box').slideUp(500);

}