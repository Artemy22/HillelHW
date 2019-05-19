<?php
session_start();

class Delete
{
    public function deleteRow()
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
        $target = $_SESSION['tables'];
        $id = $_POST['id'];
        $sql = "DELETE FROM db.$target WHERE id=$id";
        $pdo->exec($sql);
    }
}

echo "<form enctype='multipart/form-data' method='POST' >";
echo "<input type='text' id='inputNewData' name=id placeholder='ID of needed rows'><br>";
echo "<button type='submit' name='delete'>Submit</button></form>";

if (isset($_POST['delete'])) {
    $deleteRow = new Delete();
    $deleteRow->deleteRow();
    if ($deleteRow) {
        echo "<br>successful";
    }
}