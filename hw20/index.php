<?php
session_start();
require "getUsersHW20.php";
require "getaddress_citiesHW20.php";
require "getAddressCountriesHW20.php";
require "getAddresStreetsHW20.php";
require "getCategoriesHW20.php";

if ($_POST['tables'] == "users" OR $_POST['tables'] == "address_cities" OR $_POST['tables'] == "address_countries" OR $_POST['tables'] == "address_streets" OR $_POST['tables'] == "categories") {
    $_SESSION['tables'] = $_POST['tables'];
    $nTable = $_SESSION['tables'];
    $_SESSION['editU'] = $_POST['editU'];
    echo "<form>
<a href='add.php'><strong>Add new data</strong></a><br>
<a href='delete.php'><strong>Delete existent data</strong></a>

</p></form>";


    if ($_POST['tables'] == "users") {
        $users = new getUsersHW20();
        $users->getUsers();
    } elseif ($_POST['tables'] == "address_cities") {
        $cities = new getaddress_citiesHW20();
        $cities->getAddress_cities();
    } elseif ($_POST['tables'] == "address_countries") {
        $countries = new getAddressCountriesHW20();
        $countries->getAddressCountries();
    } elseif ($_POST['tables'] == "address_streets") {
        $streets = new getAddresStreetsHW20();
        $streets->getAddressStreets();
    } elseif ($_POST['tables'] == "categories") {
        $categories = new getCategoriesHW20();
        $categories->getCategories();
    }
} else {
    //echo '<form><input type="button" value="Go back!" onclick="history.back()"></form>';
    echo("<script>alert('Are not ready yet');</script>");
}
