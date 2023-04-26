<?php
include '../confi.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';



if (isset($_POST["sendd"])) {
    $mail = new PHPMailer(true) ;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true ;
    $mail->Username = 'malekeljendoubi@gmail.com';
    $mail->Password = 'rkwvfxqximonqaqs';
    $mail->SMTPSecure = 'ssl' ;
    $mail->Port = 465 ;
    $mail->setFrom('malekeljendoubi@gmail.com');
    $mail->addAddress($_POST["email_r"]);
    $mail->isHTML(true); 
    $mail->Subject = 'Confirmation de rendez-vous' ;
    $mail->Body = 'Bonjour  Mr/Mme   ' . $_POST["Nom"]. ' '.  $_POST["Prenom"] .  ', <br><br>Votre rendez-vous  a été traité avec succès .<br><br> '.  $_POST["Date_RDV"] . ' à '. $_POST["dt"]  .' <br><br>Cordialement,<br>L\'équipe de Therapico' ;
    $mail->send();
    echo 
    " 
    <script> 
   
    document.location.href = 'index.html'; 
    </script> 
    ";
}