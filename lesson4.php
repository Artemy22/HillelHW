<?php
/*
 * Создание сокращенного варианта ФИО.
Например, вводим: Иванов Иван Петрович, а в результате должны получить: Иванов И. П.
1 - с использованием только функций для работы со строками
2 - с использованием массивом

 */



echo "Part 4 array!<br>";
$phrase  = "Иванов Иван Петрович.";
$old = ["Иванов Иван", "Петрович"];
$new = ["Иванов И.", "П"];
$newphrase = str_replace($old, $new, $phrase);
echo $newphrase."<hr>";

echo "Part 4 str<br>";
$new1 = "A.";
$new2 = "B.";
$phrase  = "Иванов Артем Вячеславович";
printf ('Иванов %s %s', $new1, $new2);

