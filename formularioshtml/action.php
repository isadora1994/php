<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>form</title>
</head>
<body> 
    
    <form action="action.php" method="post">
        <p>Nome: <input type="text" name="txtnome" /></p>
        <p>Idade: <input type="text" name="txtidade" /></p>
        <p><input type="submit" value="Enviar" /></p>
   </form>

   Olá, <?php echo $_POST['txtnome']; ?>.
Você tem <?php echo $_POST['txtidade']; ?> anos.
 

</body>
</html>