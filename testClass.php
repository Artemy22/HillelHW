<?php

include ('testInterface.php');

class arrayMang implements testInterface
{
 public $arr1;
 public $arr2;
 public $arr3;
    public function addSom($arr1, $arr2): array
    {
        $res = $arr1 + $arr2;
        return $res;
    }

    public function countAr($arr)
    {
        return count($arr);
    }
}

$arr1 = [1,2,3,4,5];
$arr2 = [6,7,8,9,10];

$resArr = new arrayMang();
//$resArr->addSom($arr1, $arr2);
$resArr->countAr($arr1);

print_r($resArr);