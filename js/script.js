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