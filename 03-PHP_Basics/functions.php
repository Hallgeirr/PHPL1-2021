<?php

function sortedWordsArray($data)
{
    $data = mb_strtolower($data);
    $data = preg_replace('/\"|\'/', '', $data);
    $data = preg_split('/(\s+)?[ .;,!?...\r\n](\s+)?/', $data);
    array_pop($data);
    asort($data);
    return $data;
}

function numberOfCharacters(string $data): int
{
    $data = str_replace("\r\n", "", $data);
    return mb_strlen($data);
}

function numberOfWords(string $data)
{
    return str_word_count(strip_tags($data));
}

function numberOfSentences($data)
{
    return preg_match_all('/[^\s](\.(?!\ [a-z]|"|\')|\!|\?)(?!\w)/', $data);
}

function charactersStatistic($data): string
{
    $data = count_chars($data, 1);
    $result = '<table><tr><th>Character</th><th>Frequency</th><th>Percentage</th></tr>';
    foreach ($data as $character => $frequency) {
        $percentage = round($frequency / array_sum($data) * 100, 1);
        $result .= "<tr><td>" . chr($character) . "</td><td>$frequency</td><td>$percentage%</td></tr>";
    }
    $result .= '</table>';
    return $result;
}

function averageWordLength($data)
{
    $data = sortedWordsArray($data);
    $wordsLengthSum = 0;
    foreach ($data as $key => $val) {
        $wordsLengthSum += mb_strlen($val);
    }
    return round($wordsLengthSum / count($data), 1);
}

function averageNumberOfWordsInASentence($data)
{
    $data = preg_split('/[^\s](\.(?!\ [a-z]|"|\')|\!|\?)(?!\w)/', $data);
    array_pop($data);
    $result = 0;
    foreach ($data as $val) {
        $result += str_word_count(strip_tags($val)) / count($data);
    }
    return $result;
}

function topTenMostUsedWords($data): string
{
    $data = array_count_values(sortedWordsArray($data));
    arsort($data);
    return implode(', ', array_keys(array_slice($data, 0, 10)));
}

function topTenWords($data, $direction = 1): string
{
    $data = sortedWordsArray($data);
    $data = array_unique($data);
    if ($direction) {
        return implode(', ', array_slice($data, 0, 10));
    }
    return implode(', ', array_slice($data, -10, 10));
}

function topTenSentences($data, $length = 10, $direction = 1): string
{
    $data = preg_split('/[^\s](\.(?!\ [a-z]|"|\')|\!|\?)(?!\w)/', $data);
    array_pop($data);
    asort($data);
    if ($direction) {
        return implode('<br>', array_slice($data, 0, $length));
    }
    return implode('<br>', array_slice($data, -10, $length));
}

function palindromeWords($data): array
{
    $data = sortedWordsArray($data);
    $data = array_unique($data);

    $result = [];
    foreach ($data as $key => $value) {
        if ($value == strrev($value)) {
            $result[] = $value;
        }
    }

    return $result;
}

function numberOfPalindromeWords($data): int
{
    return count(palindromeWords($data));
}

function topTenLongestPalindromeWords($data, $length): string
{
    $data = palindromeWords($data);
    asort($data);
    return implode(', ', array_slice($data, 0, $length));
}

function isPalindrome($data): bool
{
    $data = preg_replace("#[[:punct:]]#", "", $data);
    if (substr($data, 0, 1) == substr($data, strlen($data) - 1, 1)) {
        if (strlen($data) > 3) {
            return isPalindrome(substr($data, 1, strlen($data) - 2));
        }
        return true;
    }
    return false;
}

function processTime(): string
{
    return round(microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'], 3) . ' sec';
}

function reportTime()
{
    return date("Y-m-d H:i:s", time());
}

function reversedText($data): string
{
    return strrev($data);
}

function reversedKeptIntact($data)
{
    $data = preg_split('//u', $data, -1, PREG_SPLIT_NO_EMPTY);
    $data = implode('', $data);
    $data = explode(' ', $data);

    return implode(' ', array_reverse($data));
}




