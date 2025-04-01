<?php
function findMaxValue($array) {
    // Проверяем, что входящий параметр является массивом и что он не пустой
    if (!is_array($array) || empty($array)) {
        return null; // Возвращаем null, если это не массив или он пуст
    }
    $max = $array[0];
    foreach ($array as $value) {
        if ($value > $max) {
            $max = $value;
        }
    }

    return $max; 
}
$numbers = [3, 5, 7, 2, 8];
$maxValue = findMaxValue($numbers);
echo "самое большое число в массиве это : " . $maxValue;
?>