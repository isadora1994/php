<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orientação a objetos EM PHP</title>
</head>
<body>
<?php
     class Aluno{
          public $nome;
          public $ra;
          public $endereco;
 
          //construtor da classe
          function Aluno(){
               $this->DadosAluno();
          }
          function DadosAluno(){
               $this->nome = "isadora";
               $this->ra = "1234567890";
               $this->endereco = "escritorio";
          }
     }
     $aluno = new Aluno();
     echo "Nome:" .$aluno->nome;
     echo "<br>";
     echo "RA: " .$aluno->ra;
     echo "<br>";
     echo "Endereço:" .$aluno->endereco; 
    
?>
</body>
</html>