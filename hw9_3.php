<?php
/**
 * Дано число, например 30.
 * У этого числа есть делители - числа, на которое оно делится без остатка.
 * Делители числа 30 - это 1, 2, 3, 5, 6, 10, 15, 30.
 * Задача: сделайте массив делителей нашего числа и вывести его.
 * Число может быть любым, не обязательно, 30.
 */

$int = 70;
$i = 1;
$result = [];

for ($i = 1; $i <= $int; $i++) {
    $res = $int % $i;

    if ($res == 0) {
        $result[] = $i;
    }
}

print_r($result);
