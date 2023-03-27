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
      $aluno = array("Curso" => "Tec. em Análise e Desenv. de Sistemas",
            "Nome" => "isadora pratt ramos",
            "RA" => 12345);
      echo ("Dados do aluno:" .
            "<BR><strong>Nome: </strong>". $aluno['Nome'] .
            "<BR><strong>Curso: </strong>". $aluno['Curso'] .
            "<BR><strong>RA: </strong>". $aluno['RA']);
?>
</body>
</html>