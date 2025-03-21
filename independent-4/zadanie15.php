<?php
function secondLargest($array) {
    if (count($array) < 2) {
        return null; // Массив слишком мал
    }
    $largest = $secondLargest = PHP_INT_MIN;

    foreach ($array as $value) {
        if ($value > $largest) {
            $secondLargest = $largest;
            $largest = $value;
        } elseif ($value > $secondLargest && $value < $largest) {
            $secondLargest = $value;
        }
    }
    
    return ($secondLargest === PHP_INT_MIN) ? null : $secondLargest;
}
?>
