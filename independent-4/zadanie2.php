<?php
function isPalindrome($string) {
    $cleanedString = preg_replace('/[^A-Za-z0-9]/', '', strtolower($string));
    $reversedString = strrev($cleanedString);
    return $cleanedString === $reversedString;
}
$testString1 = "человек, череп, лук, луна";
$testString2 = "привет, МИР!";

if (isPalindrome($testString1)) {
    echo "\"$testString1\" является палиндромом.\n";
} else {
    echo "\"$testString1\" не является палиндромом.\n";
}

if (isPalindrome($testString2)) {
    echo "\"$testString2\" является палиндромом.\n";
} else {
    echo "\"$testString2\" не является палиндромом.\n";
}
?>