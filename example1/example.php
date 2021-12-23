<?php

for($i = 0; $i <= 100; $i++){
    /*if($i % 2 == 0) {
        echo $i . '<br>';
    }*/
    echo ($i % 2 == 0)? $i . '<br>': '';
}
$i = 0;
for(;;){
    echo ($i % 2 == 0)? $i . '<br>': '';
    if($i == 100)
        break;
    $i++;
}
$i = 0;
do{
    echo ($i % 2 == 0)? $i . '<br>': '';
    $i++;
}while($i <= 100);

$i = 0;
while($i <= 100){
    echo ($i % 2 == 0)? $i . '<br>': '';
    $i++;
}
