<?php
session_start();
require "GetEdit.php";


    $_SESSION['tables'] = $_POST['tables'];
    $nTable = $_SESSION['tables'];
echo "<form><a href='AddRow.php'><strong>Add new data</strong></a><br></p></form>";
echo "<form><a href='Delete.php'><strong>Delete row</strong></a><br></p></form>";
$users = new getEdit();
$users->getTables();