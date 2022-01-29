<?php

class Cart {

    private $article;

    public function __construct(Article $articleDto){
        (!isset($_SESSION['cart']))?$_SESSION['cart']=[]:null;
        $this->article = $articleDto;
    }

    public function clear(){
        $_SESSION['cart'] = [];
    }

    public function dropFromCart(int $article_id){
        //session['cart'=>[1=>["article"=>{}, "count"=>1]], 2=>[],...]
        if($_SESSION['cart'][$article_id]['count'] == 1)
            unset($_SESSION['cart'][$article_id]);
        else
            $_SESSION['cart'][$article_id]['count'] = $_SESSION['cart'][$article_id]['count']-1;
    }

    public function addToCart(int $article_id){
        $article = $this->article->single($article_id)->fetch()[0];
        if(isset($_SESSION['cart'][$article->id])){
            $_SESSION['cart'][$article->id] = ["article"=>$article, "count"=>$_SESSION['cart'][$article->id]['count']+1];
        }else {
            $_SESSION['cart'][$article->id] = ["article" => $article, "count" => 1];
        }

        return $article;
    }

    public function getArticlesInCart():array{
        return ($_SESSION['cart'] != null)? $_SESSION['cart']: [];
    }

}