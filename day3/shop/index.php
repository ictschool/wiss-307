<?php
session_start();
include "vendor/autoload.php";
include_once 'helper/Path.php';
include_once 'helper/Filter.php';
include_once 'helper/MyPdo.php';
include_once 'dto/Article.php';
include_once 'dto/Cart.php';
$pdo = new MyPDO('settings.ini');
$articleDto = new Article($pdo);
$cart = new Cart($articleDto);

if (isset($_GET['clear']) && $_GET['clear'] == 'cart'){
    if(isset($_GET['article_id']))
        $cart->dropFromCart($_GET['article_id']);
    else
        $cart->clear();
}else{
    if(isset($_GET['article_id'])) {
        $cart->addToCart($_GET['article_id']);
    }
}



include 'template/_header.php';
include_once 'template/_navigation.php';
include_once 'template/_head.php';
include_once 'template/_content.php';
include 'template/_footer.php';
