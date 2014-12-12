Article-Spinner
===============

Allows users to enter text and replaces words with synonyms to generate new text.

<h1>Why</h1>
<p>
	On my first job in a small office, my employer needed to be able to take content from other articles
	and be able to make it his own. I do not condone this behavior, but at the time I had no other job offer
	as I had no job experience either. At this point, he was the only person paying me and I needed money to
	pay for my tuition. I believe he needed this application to help him generate blog sites to push SEO
	to his main websites. (Grey hat SEO is what I believe it's called).
</p>

<h1>What</h1>
<p>
	It's a minimal JavaScript/PHP RESTful application. You copy the files in the server_files folder into any server, and
	import the MySQL database file into the database of the server. The database file holds two tables, one table as a
	thesaurus reference (to use to be able to change text accurately), and one table to save/load user sessions.
</p>

<h1>How</h1>
<ol>
  <li>User enters text in the input text box.</li>
  <li>JavaScript takes the text, displays statistics about the text as needed. (Like character count, etc.)</li>
  <li>JavaScript takes the text, and sends it to synonym.php via GET request.</li>
  <li>Synonym.php matches mainly, adjectives and verbs and replaces them with synonyms.</li>
  <li>Synonym sends back data via GET request callback to mainpage's JavaScript.</li>
  <li>Main page JavaScript renders new text to output text box with amount changed (percentage, count, etc.).</li>
</ol>

<h1>Etc.</h1>
<p>
	The master branch is pushed to the actual
	release application on article-spin.nikolagman.com
	Must be very well maintained, and kept clean.
	The dev branch can be made a mess where anything goes.
</p>