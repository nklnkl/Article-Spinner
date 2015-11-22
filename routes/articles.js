var express = require('express');
var router = express.Router();
var thesaurus = require ('thesaurus');
thesaurus.find("cheese");

/* GET home page. NOT USED */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Express' });
});

router.post('/', function (req, res, next) {

  // The original article's string.
  var article = req.body.article;
  // Where we will be storing the synonyms for valid words.
  var newArticle = [];
  // Where we will temporarily store each valid word in the string, before pushing
  // it to the newArticle.
  var tempWord = '';
  // Where we will temporarily store each scanned char's ascii value.
  var tempAscii;
  // Where we will temporarily store each valid word's first synonym.
  var tempSynonym;
  // The new string to be sent back.
  var newString = ''
  var i = 0;

  /*
    Splits the content by spaces and special characters.
    I'm terrible at RegEx expressions so I used multiple booleans instead.
    Refactor this for RegEx if you can.
  */
  while ( i < article.length ) {
    tempAscii = article[i].charCodeAt(0);
    if ( ( tempAscii > 47 && tempAscii > 58 ) || ( tempAscii > 64 && tempAscii < 91 ) || ( tempAscii > 96  && tempAscii < 123 )  ) {
      tempWord += article[i];
    } else {
      newArticle.push(tempWord);
      tempWord = '';
      newArticle.push(article[i]);
    }
    i++;
  }

  /*
    Replaces each valid word with its first synonym.
  */
  for ( var i = 0; i < newArticle.length; i++ ) {
    tempSynonym = thesaurus.find(newArticle[i])[0];
    if ( tempSynonym !== undefined ) newArticle[i] = tempSynonym;
  }

  /*
    Recombines the array into a string.
  */
  for ( var i = 0; i < newArticle.length; i++) {
    newString += newArticle[i];
  }
  return res.status(200).json({ article: newString }).end();
});

module.exports = router;
