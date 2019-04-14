Article-Spinner

===============
<h2>PLEASE NOTE</h2>
<p>
	This branch is now deprecated. I'm currently in the middle of merging the dev branch into the master. NodeJS will no longer be the environment used for this project. I abandoned this project a long time ago, but have been receiving messages/stars/forks/watches from a handful of people about continuing it. Hence, I will continue this project in Python. Check the dev branch for current updates.
</p>

Allows users to enter text and replaces words with synonyms to generate new text.

<h1>What Works Right Now</h1>
<p>
	Once you clone the repository, run npm install in command line to install the necessary dependencies. Than start the server using any method you wish. Once the server is up and running, send a POST request to '/api/articles', with a JSON as the request body. Store your content/text/article as the value for a key called 'article', like so: { article: "This is the sample text."}.
</p>
<p>
	If all goes well, it should respond back with "spun" text. I will continue to work on this in my free time.
</p>
<h2>Future Updates</h2>
<ul>
	<li>More accurate and appropriate synonym swaps.</li>
	<li>Specifications for levels of synonyms. (Meaning, instead of getting the first synonym, maybe getting the 2nd or 3rd or random.)</li>
	<li>Possible front-end SPA UI, maybe with AngularJS since I like it.</li>
</ul>
