<?php
require 'vendor/PHPMailer-master/PHPMailerAutoload.php';
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$telefone = $_POST['telefone'];
$mail = new PHPMailer;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                      // Enable SMTP authentication
$mail->Username = 'paulofalkaniere@gmail.com';                 // SMTP username
$mail->Password = 'SfHp1712';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'contato@alquimiacapilar.com';
$mail->FromName = 'Contato - Alquimia capilar';

$mail->addAddress('contato@alquimiacapilar.com', 'User');
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Contato';
$mail->Body    = '<h1>Contato via site</h1> <br> <br/> Nome: '.$name.'<br> E-Mail: '.$email.'<br> Telefone: '.$telefone.'<br> Menssagem:<br> '.$message."<br/><br/><br/><br/> <h6>Não responda esse email</h6>" ;
if($mail->send()) {
  return 'true';
} else {
  return 'false';
}
return 'true';
?>
