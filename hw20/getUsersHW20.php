<?php


class getUsersHW20
{


    public function getUsers()
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
        $sql = 'SELECT * FROM users';
        echo " <table border=\"1\" ><caption><h4>Users</h4></caption>";
        foreach ($pdo->query($sql) as $key => $value) {
            foreach ($value as $key2 => $value2) {
                if ($key2 === "id") {
                    echo "<tr><td bgcolor='gray'><strong>$key2</strong></td><td bgcolor='gray'><strong>$value2</strong></td></tr>";
                } else echo "<tr><td>$key2</td><td>$value2</td></tr>";
            }
        }
        return "</table>";
    }

    public function editUsers()
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
        $sql = "UPDATE users SET first_name='Patrick' WHERE id=3";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    }

    public function addUser()
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
        $sql = "INSERT INTO users (first_name, last_name, phone, email, password, role_id, address_streets_id)
    VALUES ('Pat', 'Mool', '159', 'pat@hru.com', 'nilp', '1', '2')";
        $pdo->exec($sql);
    }
}
