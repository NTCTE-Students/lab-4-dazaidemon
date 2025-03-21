<?php
function sortArrayAscending($array) {
    sort($array);
    return $array;
}
$testArray = [5, 2, 9, 1, 5, 6];
$sortedArray = sortArrayAscending($testArray);
echo "Отсортированный массив: " . implode(", ", $sortedArray);