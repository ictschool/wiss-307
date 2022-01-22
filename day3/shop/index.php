<?php
session_start();
include_once 'helper/Path.php';
include_once 'helper/Filter.php';
include_once 'helper/MyPdo.php';
include_once 'dto/Article.php';
$pdo = new MyPDO('settings.ini');
$articleDto = new Article($pdo);
include 'template/_header.php';
include_once 'template/_navigation.php';
include_once 'template/_head.php';
include_once 'template/_content.php';
include 'template/_footer.php';
