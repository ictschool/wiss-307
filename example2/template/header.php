<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo (isset($title))?$title:'Unset'; ?></title>
</head>
<body>
<nav>
    <ul>
        <?php
        foreach (glob("*.php") as $f){
            $text = ucfirst(explode(".", $f)[0]);
            echo "<li><a href='index.php?file={$f}'>{$text}</a></li>";
        }
        ?>
    </ul>
</nav>
<main>
