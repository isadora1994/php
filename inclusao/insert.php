<?php
     include "conexao.php";
?>
<!DOCTYPE HTML>
<html>
     <head>
          <meta charset="utf-8">
          <title>Sistema de cadastro</title>
          <link href="css/style.css" rel="stylesheet" />
     </head>
     <body>
          <div id="conteudo">
               <h1>Cadastro de usuário</h1>
               <div class="borda"></div>
               <?php
                    
                    $recebeNome = $_POST['nome'];
                    $filtraNome = filter_var($recebeNome,FILTER_SANITIZE_SPECIAL_CHARS);
                    $filtraNome = filter_var($filtraNome);
 
                    $recebeEmail = $_POST['email'];
                    $filtraEmail = filter_var($recebeEmail,FILTER_SANITIZE_SPECIAL_CHARS);
                    $filtraEmail = filter_var($filtraEmail);
                    
                    $recebeSenha = $_POST['senha'];
                    $filtraSenha = filter_var($recebeSenha,FILTER_SANITIZE_SPECIAL_CHARS);
                    $filtraSenha = filter_var($filtraSenha);
 
                    //Função para criptografar a senha
                    function criptoSenha($criptoSenha){
                         return md5($criptoSenha);
                    }
 
                    $criptoSenha = criptoSenha($filtraSenha);
                    
                    $consultaBanco = mysqli_query($conecta, "SELECT * FROM tblusuario1 WHERE email_tblusuario = '$recebeEmail'") or die (mysqli_error($conexao));
                    $verificaBanco = mysqli_num_rows($consultaBanco);
 
                    if($verificaBanco == 1){
                         echo "<p>Prezado(a) <strong>$confereSeuNome</strong>, o endereço de e-mail informado (<strong><em>$recebeEmail</em></strong>) já consta em nossa base de dados!</p>";
                         echo "<p><a href='javascript:history.back();'>Volte</a> para a página anterior e informe um novo endereço! Obrigado!</p>";
                         return false;
                    }
                    $insereDados = mysqli_query($conecta, "INSERT INTO tblusuario1 (nome_tblusuario, email_tblusuario, senha_tblusuario) VALUES ('$filtraNome', '$filtraEmail', '$criptoSenha')") or die (mysqli_error($conexao));
 
 
                    echo "<p>Seu cadastro foi efetuado com sucesso!</p>";
                    echo "<p>As informações cadastradas foram:<br />";
                    echo "<strong>Nome</strong>: $filtraNome<br />";
                    echo "<strong>Email</strong>: $filtraEmail</p>";
               ?>
          </div>
     </body>
</html>