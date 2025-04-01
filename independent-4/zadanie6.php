<?php
function getDigits($number) {
    $digits = str_split(abs($number));
    return $digits;
}
$testNumber = -12345;
$digitsArray = getDigits($testNumber);
echo "Цифры числа: " . implode(", ", $digitsArray);
?>