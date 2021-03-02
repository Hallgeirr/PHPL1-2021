<?php

require_once 'functions.php';

if ($_POST['data']) {
    $data = $_POST['data'];
    $numberOfCharacters = numberOfCharacters($data);
    $numberOfWords = numberOfWords($data);
    $numberOfSentences = numberOfSentences($data);
    $charactersStatistic = charactersStatistic($data);
    $averageWordLength = averageWordLength($data);
    $averageNumberOfWordsInASentence = averageNumberOfWordsInASentence($data);
    $topTenMostUsedWords = topTenMostUsedWords($data);
    $topLongestTenWords = topTenWords($data);
    $topShortestTenWords = topTenWords($data, 0);
    $topTenLongestSentences = topTenSentences($data);
    $topTenShortestSentences = topTenSentences($data, 10, 0);
    $numberOfPalindromeWords = numberOfPalindromeWords($data);
    $topTenLongestPalindromeWords = topTenLongestPalindromeWords($data, 10);
    $isPalindrome = isPalindrome($data);
    $reportTime = reportTime();
    $reversedText = reversedText($data);
    $reversedKeptIntact = reversedKeptIntact($data);
    $processTime = processTime();
}