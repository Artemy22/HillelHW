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

        require_once "getUsersHW20.php";
        session_start();
        $edit = new getUsersHW20();
        $edit->editUsers();

        if (isset($_POST['push'])) {
            $edit->pushUsers();
        }
        ?>
    </p>

</form>
</body>
</html>
