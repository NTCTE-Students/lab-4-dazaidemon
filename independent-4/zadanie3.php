<?php
function countWords($string) {
    $words = preg_split('/\s+/', trim($string));
    return count($words);
}


$testString = "привет мой дорогой друг,как у тебя дела?";
$wordCount = countWords($testString);
echo "Количество слов в строке: " . $wordCount;