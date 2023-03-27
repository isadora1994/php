<?php
     session_start();
     include 'conexao.php';
?>

<?php
     session_start();
     include 'conexao.php';
?>
<!DOCTYPE HTML>
<html lang="br" class="no-js">
     <head>
          <title>Sistema de Login e Senha Criptografados</title>
          <link href="../style.css" rel="stylesheet" />
     </head>
     <body>
          <div id="conteudo">
                <h1>Sistema de login e senha criptografados - Verificando Informações</h1>
                <div class="borda"></div>
                <?php
              
              $recebeEmail = $_POST['email'];
              $filtraEmail = filter_var($recebeEmail,FILTER_SANITIZE_SPECIAL_CHARS);
              $filtraEmail = filter_var($filtraEmail);
              $recebeSenha = $_POST['senha'];
              $filtraSenha = filter_var($recebeSenha,FILTER_SANITIZE_SPECIAL_CHARS);
              $filtraSenha = filter_var($filtraSenha);
              
              function criptoSenha($criptoSenha){
                  return md5($criptoSenha);
              } 
              
           
              $conexao = mysqli_connect("localhost","usuario","senha","banco_de_dados");
              
              $criptoSenha = criptoSenha($filtraSenha);
              $consultaInformacoes = mysqli_query($conexao, "SELECT * FROM tblusuario1 WHERE email_tblusuario = '$filtraEmail' AND senha_tblusuario = '$criptoSenha'") or die (mysqli_error($conexao));
              $verificaInformacoes = mysqli_num_rows($consultaInformacoes);
              
              if($verificaInformacoes == 1){
                  while ($result=mysqli_fetch_array($consultaInformacoes)){
                      $_SESSION['login']=true;
                      $_SESSION['nome_usuario']=$result['nome_tblusuario'];
                      header("Location: conteudoExclusivo.php");
                  }
              } else {
                  echo "<p>Nome de Usuário ou Senha informada não confere. Por favor, <a href='javascript:history.back();'>volte</a> e tente novamente!</p>";
              }
          ?>
          </div>
     </body>
</html>