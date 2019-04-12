<?php
/**
 *
 * Сallback функции
 * Для всех заданий:
 * - использовать array_filter или array_map;
 * - на входе для всех заданий, дан массив:
 * - выводить результирующий массив в табличном виде.

 * 2) Всем сотрудникам кто работал больше 180 часов, добавить премию 20%.

 */

$mainArray = [
    ['name' => 'Yan', 'salary' => '1200', 'work_hours' => 180],
    ['name' => 'Barda', 'salary' => '2150', 'work_hours' => 160],
    ['name' => 'Piter', 'salary' => '1500', 'work_hours' => 160],
    ['name' => 'Alex', 'salary' => '3340', 'work_hours' => 167],
    ['name' => 'Deiv', 'salary' => '1700', 'work_hours' => 176],
    ['name' => 'Bob', 'salary' => '1150', 'work_hours' => 182],
    ['name' => 'Claus', 'salary' => '2810', 'work_hours' => 155],
    ['name' => 'Lina', 'salary' => '1600', 'work_hours' => 169],
    ['name' => 'Rod', 'salary' => '2780', 'work_hours' => 191],
    ['name' => 'Kristy', 'salary' => '2180', 'work_hours' => 144],
    ['name' => 'Ron', 'salary' => '1670', 'work_hours' => 157],
];
echo "<table class='table' border='1%'><thead><tr><th scope='col'>Name</th><th scope='col'>Salary</th><th scope='col'>Work_hours</th></tr></thead><tbody>";

$arrays = array_map(
    function ($arr) {

        if ($arr['work_hours'] >= 180) {
            $arr['salary'] = $arr['salary'] + ($arr['salary']/5);
        }
        echo "<tr><td scope='col'>" . $arr['name'] . "</td><td scope='col'>" . $arr['salary'] . "</td><td scope='col'>" . $arr['work_hours'] . "</td></tr>";
    },
    $mainArray);

echo "</tbody></table>";