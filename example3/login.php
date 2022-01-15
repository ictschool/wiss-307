<?php
$title = "Home";
include '_head.php';
?>
    <h1>Login</h1>
    <p>Login-Formular</p>
    <form action="" method="post">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" required class="form-control" id="email" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" required class="form-control" id="password" name="password">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="loggedin">
            <label class="form-check-label" for="exampleCheck1">Angemeldet bleiben</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php
include '_footer.php';
