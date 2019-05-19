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
        session_start();

        class AddRow
        {
            public $array;

            public function getTable()
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

                $this->array = [];
                foreach ($pdo->query($sqlColumns) as $key => $value) {
                    foreach ($value as $key2 => $value2) {
                        if ($key2 != 'id') {
                            $this->array[] = $key2;
                        }
                    }
                }
                echo "<form enctype='multipart/form-data' method='POST' >";
                foreach ($this->array as $key => $value) {
                    echo "<input type='text' id='inputNewData' name=$key placeholder='* Required field'> <- $value<br>";
                }
                echo "<button type='submit' name='result'>Submit</button></form>";

            }

            public function pushRow()
            {

                $dsn = 'mysql:host=127.0.0.1;port=3306;dbname=db';
                $opt = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false
                ];
                $user = 'root';
                $pass = 'root';
                $pdo = new PDO($dsn, $user, $pass, $opt);
                $tables = $_SESSION['tables'];

                $resP = array_pop($_POST);
                $res = array_combine($this->array, $_POST);


                $sql = "INSERT INTO db.$tables";
                $sql .= " (`" . implode("`, `", array_keys($res)) . "`)";
                $sql .= " VALUES ('" . implode("', '", $res) . "') ";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                if ($stmt->execute()) {
                    echo "Successful insertion";
                }

            }
        }

        $addRow = new AddRow();
        $addRow->getTable();


        if (isset($_POST['result'])) {
            $addRow->pushRow();
        }
        ?>
    </p>

</form>
</body>
</html>
