<?php

//require "/home/zzgh/PhpstormProjects/HillelHW/vendor/autoload.php";
require "getUsersHW20.php";
require "getaddress_citiesHW20.php";
require "getAddressCountriesHW20.php";
require "getAddresStreetsHW20.php";
require "getCategoriesHW20.php";


$users = new getUsersHW20();
$users->getUsers();

$users->editUsers();

$users->addUser();

$cities = new getaddress_citiesHW20();
$cities->getAddress_cities();

$countries = new getAddressCountriesHW20();
$countries->getAddressCountries();

$streets = new getAddresStreetsHW20();
$streets->getAddressStreets();

$categories = new getCategoriesHW20();
$categories->getCategories();