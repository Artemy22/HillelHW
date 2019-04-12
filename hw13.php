<?php
$time_start = microtime(true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form enctype="multipart/form-data" method="POST" action="hw13.php">
    <p>
        <input type="text" name="name" value="<?php
        if ($_POST['name'] == null) {
            echo $_COOKIE['name'];
        } else {
            echo $_POST['name'];
        }
        ?>"/><br/>
        <input type="submit" value="Отправить"></p>
</form>
</body>
</html>
<?php
/**
 * Создайте страничку где будет выводиться количество ее посищения и поле для задание ника,
 * если пользователь уже задал свой ник, то подставлять его в это поле.
 * Для выполнения использовать куки.
 */

setcookie('key', 1);
setcookie('name', null);


if ($_COOKIE['key'] > 0 && !(empty($_POST['name']))) {
    setcookie('key', ($_COOKIE['key']) + 1);
    setcookie('name', ($_POST['name']));
    echo "name: <b>" . ($_POST['name']) . "</b><br>Количество заходов на страницу: " . $_COOKIE['key'];

} elseif ($_COOKIE['key'] > 0 && empty($_POST['name'])) {

    setcookie('key', ($_COOKIE['key']) + 1);
    setcookie('name', ($_COOKIE['name']));
    echo "name: <b>" . ($_COOKIE['name']) . "</b><br>Количество заходов на страницу: " . $_COOKIE['key'];

} elseif ($_COOKIE['key'] && empty($_POST['name'])) {

    setcookie('key', 1);
    setcookie('name', ($_COOKIE['name']));
    echo "name: не указано<br>Количество заходов на страницу: 1";

} elseif ($_COOKIE['key'] && !(empty($_POST['name']))) {

    setcookie('key', 1);
    setcookie('name', ($_POST['name']));
    echo "name: " . ($_POST['name']) . "<br>Количество заходов на страницу: 1";
} else {
    setcookie('key', 2);
    echo "name: <b>" . ($_POST['name']) . "</b><br>Количество заходов на страницу: 1";
}
$time_end = microtime(true);
$execution_time = ($time_end - $time_start);
echo '<b>Total Execution Time:</b> '.$execution_time.' Mins';