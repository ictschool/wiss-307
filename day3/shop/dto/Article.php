<?php

class Article{

    private $pdo;
    private $stm;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function popular(int $popular = 7): Article{
        $stm = "select * from whisky where own_judgment >= :pop;";
        $this->stm = $this->pdo->prepare($stm);
        $this->stm->execute(['pop'=>$popular]);
        return $this;
    }

    public function all():Article{
        $stm = "select * from whisky;";
        $this->stm = $this->pdo->prepare($stm);
        $this->stm->execute();
        return $this;
    }

    public function fetch(){
        return $this->stm->fetchAll(\PDO::FETCH_CLASS);
    }


}
