<?php


class getCategoriesHW20
{
    protected $sql;
    protected $dsn;
    protected $opt;
    protected $user;
    protected $pass;

    public function getCategories()
    {
        $dsn = 'mysql:host=127.0.0.1;port=3306;dbname=db';
        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ];
        $user = 'test';
        $pass = '123';
        $pdo = new PDO($dsn, $user, $pass, $opt);
        $sql = 'SELECT * FROM categories';
        echo " <table border=\"1\" ><caption><h4>Categories</h4></caption>";
        foreach ($pdo->query($sql) as $key => $value) {
            foreach ($value as $key2 => $value2) {
                if ($key2 === "id") {
                    echo "<tr><td bgcolor='gray'><strong>$key2</strong></td><td bgcolor='gray'><strong>$value2</strong></td></tr>";
                } else echo "<tr><td>$key2</td><td>$value2</td></tr>";
            }
        }
        return "</table>";
    }
}
