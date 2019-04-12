<?php
/**
 * Создайте две функции add() и sub(),
 * которые принимают пару аргументов и возвращают сумму и разницу соответственно.
 * Создайте функцию operation(), которая принимает два числовых аргумента $numOne и $numTwo,
 * и третий строковый - имя функции которую нужно вызвать для выполнения операции над числамы.
 */

function add($first, $second): float
{
    return $first + $second;
}

function sub($first, $second): float
{
    return $first - $second;
}

function operation(float $numOne, float $numTwo, string $oper)
{
    if ($oper == 'add') {
        echo add($numOne, $numTwo);
    } elseif ($oper == 'sub') {
        echo sub($numOne, $numTwo);
    }
}

$numOne = 19.87;
$numTwo = 9.8;

operation($numOne, $numTwo, 'add');
echo "\n";
