<?php

include("PdoCreatorHW19.php");

//$conn = PdoCreatorHW19::getPDO();
//
//$exec = 'SELECT * FROM users';
//
//print_r($conn->exec($exec));

$dsn = 'mysql:host=127.0.0.1;port=3306;dbname=db';
$user = 'test';
$pass = '123';
$res = new PDO($dsn, $user, $pass);
var_dump($res);