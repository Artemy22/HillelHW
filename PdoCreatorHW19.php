<?php
/**
 * Created by PhpStorm.
 * User: zzgh
 * Date: 01.05.19
 * Time: 18:56
 */

class PdoCreatorHW19
{
    public static function getPDO(): PDO
    {
        $dsn = 'mysql:host=127.0.0.1;port=3306;dbname=db';
        $user = 'test';
        $pass = '123';
        return new PDO($dsn, $user, $pass);
    }
}

