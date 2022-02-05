<?php
session_start();
include "vendor/autoload.php";
include_once 'helper/Router.php';
include_once 'helper/Path.php';
include_once 'helper/Filter.php';
include_once 'helper/MyPdo.php';
include_once 'dto/Article.php';
include_once 'dto/Cart.php';
$pdo = new MyPDO('settings.ini');
$articleDto = new Article($pdo);

var_dump($articleDto->single(1)->fetch());