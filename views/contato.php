<div class="panel panel-default">
    <div class="panel-body">
        <h3>Contato</h3>
        <p><h4>Desde já agradeçemos o contato</h4></p>
        <ul>
            <li><i class="glyphicon glyphicon-phone"></i> Leandro - <a href="tel:+553183507880">(31) 8350-7880</a></li>
            <li><i class="glyphicon glyphicon-envelope"></i> <a href="mailto:contato@alquimiacapilar.com">contato@alquimiacapilar.com</a></li>
        </ul>
    </div>
</div>
<!--            
<div class="row" style="text-align: center">
<form role="form" class="form-horizontal" method="post" action="contato.php" >
<div class="col-lg-12">
<div class="form-group">
<input type="text" class="form-control" placeholder="Nome (Obrigatório)" name="name" id="InputName"  required>
</div>
<div class="form-group">
<input type="email" class="form-control" placeholder="Email (Obrigatório)" id="InputEmail" name="email" required  >
</div>
<div class="form-group">
<input type="text" class="form-control" placeholder="Telefone (Obrigatório)" name="telefone" id="InputTel"  required>
</div>
<div class="form-group">
<textarea name="message" id="InputMessage" class="form-control" rows="5" placeholder="Sua mensagem aqui!! (Obrigatório)" required></textarea>

</div>
<input type="submit" name="submit" id="submit" value="Enviar" class="btn btn-success">
</div>
<div class="form-group">
<div class="col-sm-10 col-sm-offset-2">
<?php if(isset($result)) echo $result; ?>  
</div>
</div>
</form>             
</div> -->
</div>
<?php

// require 'vendor/PHPMailer-master/PHPMailerAutoload.php';
// if (isset($_POST)) {
//  if(isset($_POST['name'])){
//      $name = $_POST['name'];
//      $email = $_POST['email'];
//      $message = $_POST['message'];
//      $telefone = $_POST['telefone'];
//      $mail = new PHPMailer;
//                      $mail->isSMTP();                                      // Set mailer to use SMTP
//                      $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
//                      $mail->SMTPAuth = true;                      // Enable SMTP authentication
//                      $mail->Username = 'paulofalkaniere@gmail.com';                 // SMTP username
//                      $mail->Password = 'SfHp1712';                           // SMTP password
//                      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
//                      $mail->Port = 587;                                    // TCP port to connect to

//                      $mail->From = 'contato@alquimiacapilar.com';
//                      $mail->FromName = 'Contato - Alquimia capilar';

//                      $mail->addAddress('contato@alquimiacapilar.com', 'User');             
//                      $mail->isHTML(true);                                  // Set email format to HTML

//                      $mail->Subject = 'Contato';
//                      $mail->Body    = '<h1>Contato via site</h1> <br> <br/> Nome: '.$name.'<br> E-Mail: '.$email.'<br> Telefone: '.$telefone.'<br> Menssagem:<br> '.$message."<br/><br/><br/><br/> <h6>Não responda esse email</h6>" ;
//                      if(!$mail->send()) {
//                          echo '<div class="container" style="margin-top:20px"><div class="row"><div class="alert alert-danger">Opa ocorreu um erro ao enviar seu email =/. Favor tentar novamente mais tarde. Mailer Error: ' . $mail->ErrorInfo . '</div></div></div';
//                      } else {
//                          echo '<div class="container" style="margin-top:20px"><div class="row"><div class="alert alert-success">Obrigado! Vamos entrar em contato com você em algumas horas.</div></div></div>';
//                      }
//                  }
//              }
?>
