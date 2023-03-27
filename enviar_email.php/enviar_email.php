<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$to = "destinatario@example.com";
$subject = "Assunto do e-mail";
$message = "Este é um e-mail de teste enviado usando PHP.";
$headers = "From: remetente@example.com\r\n" .
    "Reply-To: remetente@example.com\r\n" .
    "X-Mailer: PHP/" . phpversion();
    
     mail ($to, $subject, $msg, $header);
?>

<?php
     $nome = htmlspecialchars(strip_tags($_POST['nome']));
     $texto = htmlspecialchars(strip_tags($_POST['texto']));
     $email = htmlspecialchars(strip_tags($_POST['email']));
     $refresh = '<meta http-equiv="refresh" content="1; url=form.html" />';
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          echo '<script type="text/javascript">alert("E-mail inválido!.")</script>';
          exit ($refresh);
     }
     elseif (!filter_var($email, FILTER_SANITIZE_EMAIL)){
          echo '<script type="text/javascript">alert("E-mail inválido!. Contém caracteres não permitidos.")</script>';
          exit ($refresh);
     }
?>

<?php
   
     $nome = htmlspecialchars(strip_tags($_POST['nome']));
     $texto = htmlspecialchars(strip_tags($_POST['texto']));
     $email = htmlspecialchars(strip_tags($_POST['email']));
     $refresh = "<meta http-equiv=\"refresh\" content=\"1; url=form.html\" />";
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          echo "<script type=\text/javascript\">alert(\"E-mail inválido!. Contém caracteres não permitidos.\")</script>";
          exit ($refresh);
          
     }
     elseif (!filter_var($email, FILTER_SANITIZE_EMAIL)){
          echo "<script type=\text/javascript\">alert(\"E-mail inválido!. Contém caracteres não permitidos.\")</script>";
          exit ($refresh);
     }
     $msg = "<strong>Nome:</strong> $nome<br>";
     $msg .= "<strong>E-mail:</strong> $email<br>";
     $msg .= "<strong>Mensagem:</strong> $texto<br>";
     $destinatario = "seuemail@algumlugar.com.br";
     $assunto = "Contato Website";
     $header = "MIME-Version: 1.0\r\n";
     $header .= "Content-Type: text/html; charset=iso-8859-1\r\n";
     $header .= "From: $email\r\n";
     $header .= "X-Priority: 1\r\n";
     $header .= "cc: umemail@destinatario.com\r\n";
     $header .= "Bcc: outroemail@destinatario.com.br\r\n";
     $header .= "Reply-To: $email\r\n";
     if (mail ($destinatario, $assunto, $msg, $header)){
          echo "E-mail enviado com sucesso!";
          exit ($refresh);
     } else {
          echo "Problema no envio da mensagem. Por favor tente mais tarde.";
          exit ($refresh);
     }
?>




</body>
</html>
