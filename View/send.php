<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
if(isset($_POST["send"])){
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'mohamedhedi.lengliz@esprit.tn';
$mail->Password = 'xboetpcnyfptgajm';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('mohamedhedi.lengliz@esprit.tn');

$mail->addAddress('mohamedhedi.lengliz@esprit.tn','mohamedhedi lengliz');

$mail->isHTML(true);

$mail->Subject = $_POST["Subject"];
$mail->Body = $_POST["message"];

$mail->send();
echo
"
<script>
alert('Sent Successfully');
document.location.href = 'addrdv.php';
</script>
";
}