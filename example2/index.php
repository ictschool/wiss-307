<?php
include_once 'vendor/autoload.php';
include_once 'MyPDO.php';

session_start();

$file = (isset($_GET['file']) && $_GET['file'] != "index.php")?$_GET['file']:'login.php';

$title = strtoupper(explode(".", $file)[0]);

include 'template/header.php';

include $file;

include 'template/footer.php';
