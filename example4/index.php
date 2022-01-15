<?php
include_once 'Person.php';
//$p1 = new Person('Buchs');
//$p2 = new Person('Auto');
$p1 = Person::getInstance('Buchs');
$p2 = Person::getInstance('auto');

echo $p1->toString();
echo $p2->toString();
