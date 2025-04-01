<?php
function capitalizeWords($string) {
    return ucwords($string);
}
$testString = "hello world! this is a test.";
$capitalizedString = capitalizeWords($testString);

echo "Результат: " . $capitalizedString;