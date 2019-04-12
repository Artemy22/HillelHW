<?php
/*
 *Сортировка массива
Многомерный массив необходимо отсортировать. 
Сортировка по двум полям, при этом должна быть возможность сортировать в обратном порядке:
 `age` - по возрастанию, `gender` - по убыванию. Сам массив:
*/
echo "Задание №6<br>";

$array = [
    'a1' => ['id' => '1', 'age' => '16', 'gender' => 'm', 'login' => 'Вася'],
    'a2' => ['id' => '2', 'age' => '18', 'gender' => 'm', 'login' => 'Петя'],
    'a3' => ['id' => '3', 'age' => '20', 'gender' => 'g', 'login' => 'Катя'],
    'a4' => ['id' => '4', 'age' => '20', 'gender' => 'm', 'login' => 'Стас'],
    'a5' => ['id' => '5', 'age' => '12', 'gender' => 'g', 'login' => 'Маша'],
    'a6' => ['id' => '6', 'age' => '44', 'gender' => 'g', 'login' => 'Галя'],
    'a7' => ['id' => '7', 'age' => '45', 'gender' => 'm', 'login' => 'Макс'],
    'a8' => ['id' => '8', 'age' => '20', 'gender' => 'm', 'login' => 'Илья'],
    'a9' => ['id' => '9', 'age' => '20', 'gender' => 'g', 'login' => 'Даша']
];

$age = [];
$gender = [];

foreach ($array as $key => $arr) {
    $age[$key] = $arr['age'];
    $gender[$key] = $arr['gender'];
}

array_multisort($age, SORT_NUMERIC, SORT_DESC, SORT_DESC, $gender, $array);
var_export($array);


