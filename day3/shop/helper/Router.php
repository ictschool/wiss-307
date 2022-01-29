<?php

class Router {

    public static function cart($get, $cart){

        if (isset($get['clear']) && $get['clear'] == 'cart'){
            if(isset($get['article_id']))
                $cart->dropFromCart($get['article_id']);
            else
                $cart->clear();
        }else{
            if(isset($get['article_id'])) {
                $cart->addToCart($get['article_id']);
            }
        }

        return $cart;
    }

    public static function form(){
        define("RECAPTCHA_V3_SECRET_KEY", '6Lf_U0QeAAAAAEbrTbN7VfSkQfUSxlJq2RkO8OMv');

        if (isset($_POST['email']) && $_POST['email']) {
            $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);

            $token = $_POST['g-recaptcha-response'];

            $recaptcha = new \ReCaptcha\ReCaptcha(RECAPTCHA_V3_SECRET_KEY);
            $resp = $recaptcha->setExpectedAction($_POST['action'])
                ->setScoreThreshold(0.5)
                ->verify($token, $_SERVER['REMOTE_ADDR']);

            if ($resp->isSuccess()) {
                var_dump("success");
            } else {
                $errors = $resp->getErrorCodes();
                var_dump($errors);
            }


        } else {
            //header('location: ' . Path::url("contact"));
            //exit;
        }
    }

    public static function login(){
        if (isset($_POST['name']) && isset($_POST['password']) &&
        $_POST['name'] == "enrico" && $_POST['password'] == 'enrico'){
            $_SESSION['login'] = "enrico";
            header("location: " . Path::url('articles'));
            exit;
        }
    }

    public static function isLoggedIn(){
        return (isset($_SESSION['login']) && $_SESSION['login'] != "")?true:false;
    }

    public static function logout(){
        unset($_SESSION['login']);
        header("location: " . Path::url('login'));
    }


}
