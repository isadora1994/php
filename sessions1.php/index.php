<?php 
     session_start();
?>

<?php
     
     $_SESSION["topico"]="Trabalhando com sessões em PHP";
     $_SESSION["ler"]="sim";
?>

<?php
    
     if($_SESSION["ler"]!=="sim"){
          echo "Você não está habilitado a acessar este tópico!";
     }
     else{
          echo "Você está habilitado a acessar o tópico ". $_SESSION["topico"] . "! Boa leitura!";
     }
?>

<?php
    
     session_unset();
     session_destroy();
     echo "Sessão destruída!";
?>