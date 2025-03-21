<?php
function removeDuplicates($array) {
    $uniqueArray = [];
    foreach ($array as $value) {
        if (!in_array($value, $uniqueArray)) {
            $uniqueArray[] = $value;
        }
    }
    return $uniqueArray;
}
?>