import requests
import json

# Load keys from environment
from dotenv import load_dotenv
load_dotenv()
import os

class Spin:
  
  def __init__(self):
    self.url = "https://od-api.oxforddictionaries.com:443/api/v1/entries/"
    self.app_id = os.getenv("APP_ID")
    self.app_key = os.getenv("APP_KEY")
    self.headers = {
      "app_id": self.app_id,
      "app_key": self.app_key
    }
    self.language = "en"
  
  def word (self, word, iteration):
    # If no synonymous iterations are to be run.
    if (iteration < 1):
      return word

    # Otherwise proceed with request
    url = self.url + self.language + "/" + word.lower() + "/synonyms"
    request = requests.get(url, headers = self.headers)

    # If no synonyms are available
    if (request.status_code == 404):
      return word

    # Otherwise proceed to process response
    response = request.json()

    # Retrieve synonyms from response and append to array
    synonyms = []
    for entry in response['results'][0]['lexicalEntries'][0]['entries'][0]['senses'][0]['synonyms']:
      synonyms.append(entry['id'])

    # If the iteration given exceeds number of synonyms available
    if (iteration > len(synonyms)):
      return synonyms[(len(synonyms) % iteration) - 1]

    # If the iteration is within range of synoynms available
    else:
      return synonyms[iteration-1]

  def sentence (self, sentence, iteration):
    newSentence = []

    for i in sentence:
      newWord = self.word(i, iteration)
      newSentence.append(newWord)
    
    return newSentence
  
  def paragraph (self, paragraph, iteration):
    newParagraph = []

    for sentence in paragraph:
      newSentence = self.sentence(sentence, iteration)
      newParagraph.append(newSentence)

    return newParagraph
    