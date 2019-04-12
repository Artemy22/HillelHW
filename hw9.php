<?php

/*
 * Дан массив с числами. Числа могут быть положительными и отрицательными.
 * Найдите сумму положительных и отрицательных элементов этого массива.
 * Например массив: $arr = [2, -5, -9, 15, 11, -4, 7, 1, -10];
 */

$arr = [2, -5, -9, 15, 11, -4, 7, 1, -10];
$positive = 0;
$negative = 0;


foreach ($arr as $value) {
    if ($value < 0) {
        $positive = $positive + $value;
    } else {
        $negative = $negative + $value;
    }
}

echo '$Positive sum = ' . $positive . "<br>";
echo '$Negative sum = ' . $negative . "<br>";