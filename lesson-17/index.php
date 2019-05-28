<?php

use App\Config\ConfigRouts;
use App\Config\FactoryModel;
use Sunrise\Http\ServerRequest\ServerRequestFactory;

require_once '/home/artem/PhpstormProjects/HillelHW/lesson-17/vendor/autoload.php';

FactoryModel::ini('test', 'root', 'root', '127.0.0.1', '13306');

$request = ServerRequestFactory::fromGlobals();

$configRouts = new ConfigRouts($request);
$router = $configRouts->init();

$router->matchCurrentRequest();