<?php

if(isset($_GET['path'])) {
    switch($_GET['path']){
        case 'articles': include_once '_articles.php'; break;
        case 'contact': include_once '_contact.php'; break;
        case 'answer':
            define("RECAPTCHA_V3_SECRET_KEY", '6Lf_U0QeAAAAAEbrTbN7VfSkQfUSxlJq2RkO8OMv');

            if (isset($_POST['email']) && $_POST['email']) {
                $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);

                $token = $_POST['g-recaptcha-response'];

                $recaptcha = new \ReCaptcha\ReCaptcha(RECAPTCHA_V3_SECRET_KEY);
                $resp = $recaptcha->setExpectedAction(Path::url("answer"))
                    ->setScoreThreshold(0.5)
                    ->verify($token, $_SERVER['REMOTE_ADDR']);

                if ($resp->isSuccess()) {
                    var_dump("success");
                } else {
                    $errors = $resp->getErrorCodes();
                    var_dump($errors);
                }


            } else {
                header('location: ' . Path::url("contact"));
                exit;
            }

            include_once '_answer.php';
            break;
        case 'cart': include_once '_cart.php'; break;
        default: include_once '_home.php';
    }
}else{
    include_once '_home.php';
}

?>
