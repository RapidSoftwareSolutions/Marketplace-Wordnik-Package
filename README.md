[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Wordnik/functions?utm_source=RapidAPIGitHub_WordnikFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Wordnik Package
Wordnik APIs let you request definitions from the The Century Dictionary, frequency data reflecting occurrences in our corpus, example sentences for words, spelling suggestions, word autocompletion, and words of the day, and more on the way.
* Domain: [Wordnik](http://wordnik.com/)
* Credentials: apiKey

## How to get credentials: 
0. Browse to [Wordnik](Browse to http://www.wordnik.com)
1. Register or log in
2. Browse to [Settings page](http://www.wordnik.com/users/edit) to get your apiKey



## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 

## Wordnik.getAccessToken
Get your access token

| Field   | Type       | Description
|---------|------------|----------
| usename | String     | Your username
| password| String     | Your password
| apiKey  | credentials| Your apiKey

## Wordnik.listMyWordsLists
Fetches WordList objects for the logged-in user

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Your apiKey
| accessToken| String     | Access token you recieved
| skip       | Number     | Results to skip
| limit      | Number     | Maximum number of results to return

## Wordnik.getMyApiTokenStatus
Returns usage statistics for the API account.

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Your apiKey
| accessToken| String     | Access token you recieved

## Wordnik.getCurrentUserInfo
Returns the logged-in User

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Your apiKey
| accessToken| String     | Access token you recieved

## Wordnik.listWordExamples
Returns examples for a word

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Your apiKey
| word             | String     | Word to return examples for
| includeDuplicates| Select     | Show duplicate examples from different sources
| useCanonical     | Select     | If true will try to return the correct word root ('cats' -> 'cat'). If false returns exactly what was requested.
| skip             | Number     | Results to skip
| limit            | Number     | Maximum number of results to return

## Wordnik.getWordObject
Given a word as a string, returns the WordObject that represents this word

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Your apiKey
| word             | String     | Word to return examples for
| includeDuplicates| Select     | Show duplicate examples from different sources
| useCanonical     | Select     | If true will try to return the correct word root ('cats' -> 'cat'). If false returns exactly what was requested.

## Wordnik.listWordDefinitions
Returns definitions for a word

| Field             | Type       | Description
|-------------------|------------|----------
| apiKey            | credentials| Your apiKey
| word              | String     | Word to return examples for
| partOfSpeech      | Select     | Speech type
| includeRelated    | Select     | Return related words with definitions
| sourceDictionaries| List       | Source dictionary to return definitions from. If 'all' is received, results are returned from all sources. If multiple values are received (e.g. 'century,wiktionary'), results are returned from the first specified dictionary that has definitions. If left blank, results are returned from the first dictionary that has definitions. By default, dictionaries are searched in this order: ahd, wiktionary, webster, century, wordnet
| useCanonical      | Select     | If true will try to return the correct word root ('cats' -> 'cat'). If false returns exactly what was requested.
| includeTags       | Select     | Return a closed set of XML tags in response
| limit             | Number     | Maximum number of results to return

## Wordnik.getWordTopExample
Returns a top example for a word

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Your apiKey
| word        | String     | Word to return examples for
| useCanonical| Select     | If true will try to return the correct word root ('cats' -> 'cat'). If false returns exactly what was requested.

## Wordnik.listWordRelatedWords
Given a word as a string, returns relationships from the Word Graph

| Field                   | Type       | Description
|-------------------------|------------|----------
| apiKey                  | credentials| Your apiKey
| word                    | String     | Word to return examples for
| useCanonical            | Select     | If true will try to return the correct word root ('cats' -> 'cat'). If false returns exactly what was requested.
| relationshipTypes       | Select     | Limits the total results per type of relationship type
| limitPerRelationshipType| Number     | Restrict to the supplied relationship types

## Wordnik.getWordPronounciations
Returns text pronunciations for a given word

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your apiKey
| word            | String     | Word to return examples for
| sourceDictionary| Select     | Get from a single dictionary
| useCanonical    | Select     | If true will try to return the correct word root ('cats' -> 'cat'). If false returns exactly what was requested.
| typeFormat      | Select     | Text pronunciation type
| limit           | Number     | Maximum number of results to return

## Wordnik.getWordHyphenation
Returns syllable information for a word

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your apiKey
| word            | String     | Word to return examples for
| sourceDictionary| Select     | Get from a single dictionary
| useCanonical    | Select     | If true will try to return the correct word root ('cats' -> 'cat'). If false returns exactly what was requested.
| limit           | Number     | Maximum number of results to return

## Wordnik.getWordFrequency
Returns word usage over time

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Your apiKey
| word        | String     | Word to return examples for
| useCanonical| Select     | If true will try to return the correct word root ('cats' -> 'cat'). If false returns exactly what was requested.
| startYear   | Number     | Starting Year
| endYear     | Number     | Ending Year

## Wordnik.listWordBigramPhrases
Fetches bi-gram phrases for a word

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Your apiKey
| word        | String     | Word to return examples for
| useCanonical| Select     | If true will try to return the correct word root ('cats' -> 'cat'). If false returns exactly what was requested.
| wlmi        | Number     | Minimum WLMI for the phrase
| limit       | Number     | Maximum number of results to return

## Wordnik.getWordEtymology
Fetches etymology data

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Your apiKey
| word        | String     | Word to return examples for
| useCanonical| Select     | If true will try to return the correct word root ('cats' -> 'cat'). If false returns exactly what was requested.

## Wordnik.getWordAudio
Fetches audio metadata for a word

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Your apiKey
| word        | String     | Word to return examples for
| useCanonical| Select     | If true will try to return the correct word root ('cats' -> 'cat'). If false returns exactly what was requested.

## Wordnik.searchWords
Searches words

| Field              | Type       | Description
|--------------------|------------|----------
| apiKey             | credentials| Your apiKey
| query              | String     | Search query
| caseSensitive      | Select     | Search case sensitive
| includePartOfSpeech| List       | Only include this list of parts of speech
| excludePartOfSpeech| List       | Exclude this list of parts of speech
| minCorpusCount     | Number     | Minimum corpus frequency for terms
| maxCorpusCount     | Number     | Maximum corpus frequency for terms
| minDictionaryCount | Number     | Minimum number of dictionary entries for words returned
| maxDictionaryCount | Number     | Maximum number of dictionary entries for words returned
| minLength          | Number     | Minimum word length
| maxLength          | Number     | Maximum word length
| skip               | Number     | Results to skip
| limit              | Number     | Maximum number of results to return

## Wordnik.getWordOfTheDay
Returns a specific WordOfTheDay

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your apiKey
| date  | DatePicker | Fetches by date in yyyy-MM-dd

## Wordnik.reverseDictionarySearch
Reverse dictionary search

| Field                    | Type       | Description
|--------------------------|------------|----------
| apiKey                   | credentials| Your apiKey
| query                    | String     | Search query
| findSenseForWord         | Select     | Restricts words and finds closest sense
| includeSourceDictionaries| List       | Only include this list of source dictionaries
| excludePartOfSpeech      | List       | Exclude this list of source dictionaries
| minCorpusCount           | Number     | Minimum corpus frequency for terms
| maxCorpusCount           | Number     | Maximum corpus frequency for terms
| minLength                | Number     | Minimum word length
| maxLength                | Number     | Maximum word length
| expandTerms              | Select     | Expand terms
| includeTags              | Select     | Return a closed set of XML tags in response
| sortBy                   | Select     | Attribute to sort by
| sortOrder                | Select     | Sort direction
| skip                     | Number     | Results to skip
| limit                    | Number     | Maximum number of results to return

## Wordnik.listRandomWords
Returns an array of random WordObjects

| Field              | Type       | Description
|--------------------|------------|----------
| apiKey             | credentials| Your apiKey
| hasDictionaryDef   | Select     | Search case sensitive
| includePartOfSpeech| List       | Only include this list of parts of speech
| excludePartOfSpeech| List       | Exclude this list of parts of speech
| minCorpusCount     | Number     | Minimum corpus frequency for terms
| maxCorpusCount     | Number     | Maximum corpus frequency for terms
| minDictionaryCount | Number     | Minimum number of dictionary entries for words returned
| maxDictionaryCount | Number     | Maximum number of dictionary entries for words returned
| minLength          | Number     | Minimum word length
| maxLength          | Number     | Maximum word length
| limit              | Number     | Maximum number of results to return
| sortBy             | Select     | Attribute to sort by
| sortOrder          | Select     | Sort direction

## Wordnik.getSingleRandomWord
Returns a random WordObject

| Field              | Type       | Description
|--------------------|------------|----------
| apiKey             | credentials| Your apiKey
| hasDictionaryDef   | Select     | Search case sensitive
| includePartOfSpeech| List       | Only include this list of parts of speech
| excludePartOfSpeech| List       | Exclude this list of parts of speech
| minCorpusCount     | Number     | Minimum corpus frequency for terms
| maxCorpusCount     | Number     | Maximum corpus frequency for terms
| minDictionaryCount | Number     | Minimum number of dictionary entries for words returned
| maxDictionaryCount | Number     | Maximum number of dictionary entries for words returned
| minLength          | Number     | Minimum word length
| maxLength          | Number     | Maximum word length

## Wordnik.addWordlist
Creates a WordList

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Your apiKey
| accessToken| String     | Access token you recieved
| name       | String     | Name of the wordlist
| type       | Select     | Type of the wordlist
| description| String     | Description of the wordlist

## Wordnik.getSingleWordlist
Fetches single wordlist

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Your apiKey
| accessToken| String     | Access token you recieved
| permalink  | String     | Permalink of the wordlist

## Wordnik.updateWordlist
Updates single wordlist

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Your apiKey
| accessToken| String     | Access token you recieved
| permalink  | String     | Permalink of the wordlist
| name       | String     | Name of the wordlist
| type       | Select     | Type of the wordlist
| description| String     | Description of the wordlist

## Wordnik.listWordlistWords
Fetches words from the single wordlist

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Your apiKey
| accessToken| String     | Access token you recieved
| permalink  | String     | Permalink of the wordlist
| sortBy     | Select     | Attribute to sort by
| sortOrder  | Select     | Sort direction
| skip       | Number     | Results to skip
| limit      | Number     | Maximum number of results to return

## Wordnik.addWordsToWordlist
Add words to single wordlist

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Your apiKey
| accessToken| String     | Access token you recieved
| permalink  | String     | Permalink of the wordlist
| words      | List       | List of words to add

## Wordnik.deleteWordsFromWordlist
Removes words from wordlist

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Your apiKey
| accessToken| String     | Access token you recieved
| permalink  | String     | Permalink of the wordlist
| words      | List       | List of words to remove

## Wordnik.deleteWordlist
Deletes single wordlist

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Your apiKey
| accessToken| String     | Access token you recieved
| permalink  | String     | Permalink of the wordlist

