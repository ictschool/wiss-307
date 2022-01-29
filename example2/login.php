<?php

if(isset($_GET['logout'])){
    session_unset();
    session_destroy();
}

if(isset($_POST['username'])){
    $pdo = new MyPDO();
    $stm = $pdo->prepare("select * from user where username = :username;");
    // select * from user where username = '' union select host,password,user from mysql.user order by id -- '
    $stm->execute(['username'=>$_POST['username']]);
    // select * from user where username = '\' union select host,password,user from mysql.user order by id -- \''
    //$result = $stm->fetchAll(PDO::FETCH_CLASS);
    $result = $stm->fetchObject();
    if($result && $result->password == $_POST['password']){
        $_SESSION['username'] = $result->username;
    }
}
if(isset($_SESSION['username'])) {
    echo "Hallo Benutzer: {$_SESSION['username']}";
    echo "<a href='index.php?file=_login.php&logout'>Logout</a>";
}else{
?>
            <form action="index.php?file=login.php" method="post">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required><br>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required><br>
                <button type="submit" value="login">Login</button>
            </form>
<?php
}
?>
