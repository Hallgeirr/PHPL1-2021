<?php

header('Content-Type: text/html; charset=utf-8');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1 class="title">Text Analyzer</h1>
    <?php
    if (!$_POST['data']) : ?>
        <div class="form-container">
            <form method="post">
                <textarea name="data" id="data"></textarea>
                <input type="submit" id="submitButton"/>
            </form>
        </div>
    <?php
    else : require_once 'form_handler.php'; ?>
        <table>
            <caption>Table of result:</caption>
            <tr>
                <th>Task</th>
                <th>Result</th>
            </tr>
            <?php
            if ($numberOfCharacters) : ?>
                <tr>
                    <td>Number Of Characters</td>
                    <td>
                        <?= $numberOfCharacters ?>
                    </td>
                </tr>
            <?php
            endif; ?>
            <?php
            if ($numberOfWords) : ?>
                <tr>
                    <td>Number Of Words</td>
                    <td>
                        <?= $numberOfWords ?>
                    </td>
                </tr>
            <?php
            endif; ?>
            <?php
            if ($numberOfSentences) : ?>
                <tr>
                    <td>Number Of Sentences</td>
                    <td>
                        <?= $numberOfSentences ?>
                    </td>
                </tr>
            <?php
            endif; ?>
            <?php
            if ($charactersStatistic) : ?>
                <tr>
                    <td>Characters Statistic</td>
                    <td>
                        <?= $charactersStatistic ?>
                    </td>
                </tr>
            <?php
            endif; ?>
            <?php
            if ($averageWordLength) : ?>
                <tr>
                    <td>Average Word Length</td>
                    <td>
                        <?= $averageWordLength ?>
                    </td>
                </tr>
            <?php
            endif; ?>
            <?php
            if ($averageNumberOfWordsInASentence) : ?>
                <tr>
                    <td>The Average Number Of Words In A Sentence</td>
                    <td>
                        <?= $averageNumberOfWordsInASentence ?>
                    </td>
                </tr>
            <?php
            endif; ?>
            <?php
            if ($topTenMostUsedWords) : ?>
                <tr>
                    <td>Top Ten Most Used Words</td>
                    <td>
                        <?= $topTenMostUsedWords ?>
                    </td>
                </tr>
            <?php
            endif; ?>
            <?php
            if ($topLongestTenWords) : ?>
                <tr>
                    <td>Top Longest Ten Words</td>
                    <td>
                        <?= $topLongestTenWords ?>
                    </td>
                </tr>
            <?php
            endif; ?>
            <?php
            if ($topShortestTenWords) : ?>
                <tr>
                    <td>Top Shortest Ten Words</td>
                    <td>
                        <?= $topShortestTenWords ?>
                    </td>
                </tr>
            <?php
            endif; ?>
            <?php
            if ($topTenLongestSentences) : ?>
                <tr>
                    <td>Top Ten Longest Sentences</td>
                    <td>
                        <?= $topTenLongestSentences ?>
                    </td>
                </tr>
            <?php
            endif; ?>
            <?php
            if ($topTenShortestSentences) : ?>
                <tr>
                    <td>Top Ten Shortest Sentences</td>
                    <td>
                        <?= $topTenShortestSentences ?>
                    </td>
                </tr>
            <?php
            endif; ?>
            <?php
            if ($numberOfPalindromeWords) : ?>
                <tr>
                    <td>Number Of Palindrome Words</td>
                    <td>
                        <?= $numberOfPalindromeWords ?>
                    </td>
                </tr>
            <?php
            endif; ?>
            <?php
            if ($topTenLongestPalindromeWords) : ?>
                <tr>
                    <td>Top Ten Longest Palindrome Words</td>
                    <td>
                        <?= $topTenLongestPalindromeWords ?>
                    </td>
                </tr>
            <?php
            endif; ?>
            <?php
            if ($isPalindrome) : ?>
                <tr>
                    <td>Is The Whole Text A Palindrome?</td>
                    <td>
                        <?= $isPalindrome ?>
                    </td>
                </tr>
            <?php
            endif; ?>
            <?php
            if ($reversedText) : ?>
                <tr>
                    <td>Reversed Text</td>
                    <td>
                        <?= $reversedText ?>
                    </td>
                </tr>
            <?php
            endif; ?>
            <?php
            if ($reversedKeptIntact) : ?>
                <tr>
                    <td>Reversed Kept Intact</td>
                    <td>
                        <?= $reversedKeptIntact ?>
                    </td>
                </tr>
            <?php
            endif; ?>
            <?php
            if ($reportTime) : ?>
                <tr>
                    <td>Report Time</td>
                    <td>
                        <?= $reportTime ?>
                    </td>
                </tr>
            <?php
            endif; ?>
            <?php
            if ($processTime) : ?>
                <tr>
                    <td>Process Time</td>
                    <td>
                        <?= $processTime ?>
                    </td>
                </tr>
            <?php
            endif; ?>
        </table>

    <?php
    endif; ?>
</div>
</body>
</html>
