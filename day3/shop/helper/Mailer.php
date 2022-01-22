<?php
namespace WISS\example3;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mailer {

    private $mail;

    /**
     * [mail]
     * host=smtp.google.com
     * auth=true
     * username=meinemail@mail.com
     *
     * @param string $config
     * @throws Exception
     */
    public function __construct($config = 'settings.ini'){
        if (!$settings = parse_ini_file($config, TRUE)) throw new exception('Unable to open ' . $file . '.');
        $this->mail = new PHPMailer(true);
        //$this->mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $this->mail->isSMTP();                                            //Send using SMTP
        $this->mail->Host       = $settings['mail']['host'];                     //Set the SMTP server to send through
        $this->mail->SMTPAuth   = $settings['mail']['auth'];                                   //Enable SMTP authentication
        $this->mail->Username   = $settings['mail']['username'];                     //SMTP username
        $this->mail->Password   = $settings['mail']['password'];                               //SMTP password
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $this->mail->Port       = $settings['mail']['port'];
    }

    public function addSender($sender){
        $this->mail->setFrom($sender);
        return $this;
    }

    public function addAddress($receiver){
        $this->mail->addAddress($receiver);
        return $this;
    }

    public function setSubject($subject){
        $this->mail->Subject  = $subject;
        return $this;
    }

    public function setHTML($html){
        $this->mail->isHTML(true);
        $this->mail->Body = $html;
        return $this;
    }

    public function send(){
        $this->mail->send();
    }



}
