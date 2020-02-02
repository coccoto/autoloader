<?php

define('Root', realpath('../') . '/');

require_once Root . 'src/Autoloader.php';

$autoloader = new Autoloader(Root);
$autoloader->load();

use app\controllers as controllers;

$indexController = new controllers\IndexController();
$indexController->method();