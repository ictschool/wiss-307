<?php
$title = "Kontakt";
include '_head.php';
?>
    <h1>Kontakt</h1>
    <p>Kontaktformular</p>
<?php
if(isset($_POST['submit'])){
    include_once './lib/Mailer.php';
    $mail = new \WISS\example3\Mailer();
    $mail->addSender('enrico.buchs@bict.ch')
        ->addAddress('enrico.buchs@bict.ch')
        ->addAddress($_POST['email'])
        ->setSubject('Kontakt')
        ->setHTML('<h1>Kontaktanfrage</h1><p>'.$_POST['message'].'</p>');
    try {
        //$mail->send();
        echo <<<EOF
    <div class="alert alert-info" role="alert">
        Formular erfolgreich gesendet
    </div>
EOF;

    }catch (\Exception $e){
        echo <<<EOF
    <div class="alert alert-danger" role="alert">
        Formular konnte nicht gesendet werden: {$mail->ErrorInfo} 
    </div>
EOF;

    }
}
?>
    <div CLASS="row">
    <form action="" method="post" class="col-9">
        <div class="mb-3">
            <label for="email" class="form-label ">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Nachricht</label>
            <textarea class="form-control" id="message" name="message"></textarea>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
        <div class="col-3">
            Adresse
        </div>
    </div>
<?php
include '_footer.php';
