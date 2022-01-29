<?php

if(isset($_GET['path'])) {
    switch($_GET['path']){
        case 'articles': include_once '_articles.php'; break;
        case 'edit': (Router::isLoggedIn())?include_once '_edit.php':include_once '_articles.php'; break;
        case 'contact': include_once '_contact.php'; break;
        case 'answer': Router::form(); include_once '_answer.php'; break;
        case 'login': Router::form(); Router::login(); include_once '_login.php'; break;
        case 'logout': Router::logout(); include_once '_login.php'; break;
        case 'cart': include_once '_cart.php'; break;
        default: include_once '_home.php';
    }
}else{
    include_once '_home.php';
}

?>
