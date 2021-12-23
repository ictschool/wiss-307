<form method="post" enctype="multipart/form-data">
    <input type="number" name="size">
    <input type="submit">
</form>

<?php

$size = (isset($_POST['size']))?$_POST['size']:8;

function chess($size)
{
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size; $j++) {
            echo (($i + $j) % 2 == 0) ? 'X' : 'O';
        }
        echo "<br>";
    }
}

for($i = 0; $i <= $size; $i++){
    chess($i);
    echo '<br>';
}

for($i = 0; $i <= $size; $i++){
    for($j = 0; $j < $i; $j++){
        echo (($i+$j)%2 == 0)? 'X': 'O';
    }
    echo "<br>";
}
