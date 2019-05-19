<?php
session_start();

class getEdit
{


    public function getTables()
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
        $target = $_POST['tables'];
        $sql = "SELECT * FROM $target";
        echo " <table border=\"1\" ><caption><h4>" . $_POST['tables'] . "</h4></caption>";
        foreach ($pdo->query($sql) as $key => $value) {
            foreach ($value as $key2 => $value2) {
                if ($key2 === "id") {
                    $_SESSION['userId'] = $value2;
                    echo "<tr><td bgcolor='gray'><strong>$key2</strong></td><td bgcolor='gray'><strong>$value2</strong></td><p><a href='edit.php'><strong>Edit by id $value2</strong></a></p></tr>";
                } else echo "<tr><td>$key2</td><td>$value2</td></tr>";
            }
        }
        return "</table>";
    }

    public function editTables()
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
        $id = $_SESSION['userId'];
        $tables = $_SESSION['tables'];
        $sqlColumns = "SELECT * FROM $tables WHERE db.$tables.id=$id";
        echo '<form enctype="multipart/form-data" method="POST" >';
        foreach ($pdo->query($sqlColumns) as $key => $value) {
            foreach ($value as $key2 => $value2) {
                if ($key2 != 'id') {
                    $_SESSION["$key2"] = $value2;
                    echo "<input type='text' placeholder=\"$value2\" name=\"$key2\"> <-$key2<br>";
                }
            }
        }
        echo "<button type='submit' formaction='edit.php' name='push'>Submit</button></form>";
    }
}
