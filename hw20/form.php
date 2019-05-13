<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form enctype="multipart/form-data" method="POST" action="index.php">
    <p>
        <?php
        session_start();
        $dsn = 'mysql:host=127.0.0.1;port=3306;dbname=db';
        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ];
        $user = 'test';
        $pass = '123';
        $pdo = new PDO($dsn, $user, $pass, $opt);
        $sql = 'SHOW tables;';
        echo "Select table:<br><br><select name='tables'>";
        foreach ($pdo->query($sql) as $key => $value) {
            foreach ($value as $key2 => $value2) {
                echo "<option value=$value2>$value2</option>";
            }
        }
        echo "</select><br><br><input type='submit'>";
        ?>
    </p>

</form>
</body>
</html>