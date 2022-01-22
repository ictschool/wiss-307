<?php

if(isset($_GET['path'])) {
    switch($_GET['path']){
        case 'articles': include_once '_articles.php'; break;
        case 'contact': include_once '_contact.php'; break;
        case 'answer': include_once '_answer.php'; break;
        default: include_once '_home.php';
    }
}else{
    include_once '_home.php';
}

?>
