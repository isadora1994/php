<?php
     session_start();
     $_SESSION['nome']="isadora pratt";
?>
<p> 
    olá, <?php echo $_SESSION['nome']; ?>, seja bem vindo!! 
</p>
   //apagar usuario
<?php
    unset($_SESSION['usuario']);
?>

<?php
     
     $_SESSION = array();
?>

