<?php 
function average($array) {
    if (count($array) === 0) return 0;
    $sum = 0;
    foreach ($array as $value) {
        $sum += $value;
    }
    return $sum / count($array);
}
?>