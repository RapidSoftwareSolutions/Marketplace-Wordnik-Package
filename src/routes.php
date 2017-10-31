<?php
$routes = [
    'metadata',
    'getAccessToken',
    'listMyWordsLists',
    'getMyApiTokenStatus',
    'getCurrentUserInfo',
    'listWordExamples',
    'getWordObject',
    'listWordDefinitions',
    'getWordTopExample',
    'listWordRelatedWords',
    'getWordPronunciations',
    'getWordHyphenation',
    'getWordFrequency',
    'listWordBigramPhrases',
    'getWordEtymology',
    'getWordAudio',
    'searchWords',
    'getWordOfTheDay',
    'reverseDictionarySearch',
    'listRandomWords',
    'getSingleRandomWord',
    'addWordlist',
    'getSingleWordlist',
    'updateWordlist',
    'listWordlistWords',
    'addWordsToWordlist',
    'deleteWordsFromWordlist',
    'deleteWordlist'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

