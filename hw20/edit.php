<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form enctype="multipart/form-data" method="POST">
    <p>
        <?php


        require_once "GetEdit.php";
        session_start();
        $edit = new getEdit();
        $edit->editTables();

        $dsn = 'mysql:host=127.0.0.1;port=3306;dbname=db';
        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ];

        $user = 'root';
        $pass = 'root';
        $pdo = new PDO($dsn, $user, $pass, $opt);
        $id = $_SESSION['userId'];
        $tables = $_SESSION['tables'];
        foreach ($_POST as $key => $value) {
            if ($_POST["$key"] != 'push') {
                $sqlPush = "UPDATE $tables SET $key = \"$value\" WHERE id = $id";
                $stmt = $pdo->prepare($sqlPush);
                $stmt->execute();
            }
        }
        if ($_POST) {
            echo "Success";
        }
        ?>
    </p>

</form>
</body>
</html>
