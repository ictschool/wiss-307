<?php
//https://en.wikipedia.org/wiki/Software_design_pattern
// Ist nicht optimal für ein Singleton jedoch als Exemplarisches Beispiel gedacht
class Person {

    private static $instance;

    private $name;

    public static function getInstance($name){
        if(Person::$instance == null){
            Person::$instance = new Person($name);
        }
        return Person::$instance;
    }

    private function __construct($name)
    {
        $this->name = $name;
    }

    public function toString(){
        return $this->name . '<br>';
    }

}
