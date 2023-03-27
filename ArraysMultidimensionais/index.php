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
     $alunos=array("TADS" => array("Descricao" => "Tec. em Análise e Desenvolvimento de Sistemas", 
          "Disciplina" => "Programação web"),
          "TSIN" => array("Descricao" => "Tec. em Sistemas para Internet", "Disciplina" => "Comércio Eletrônico"),
          "SI" => array("Descricao" => "Sistemas de Informação", "Disciplina" => "Design de Interface"));
     echo("Cursos e disciplinas ...".
          "<BR><BR>".
          "<strong>Sigla:</strong> TADS: " .
          "<BR><strong>Descrição: </strong>" . $alunos['TADS']['Descricao'] .
          "<BR><strong>Disciplina: </strong>" . $alunos['TADS']['Disciplina'] .
          "<BR><BR>".
          "<strong>Sigla: </strong>TSIN".
          "<BR><strong>Descrição: </strong>" . $alunos['TSIN']['Descricao'] .
          "<BR><strong>Disciplina: </strong>" . $alunos['TSIN']['Disciplina'] .
          "<BR><BR>
          <strong>Sigla:</strong> SI" .
          "<BR><strong>Descrição: </strong>" . $alunos['SI']['Descricao'] .
          "<BR><strong>Disciplina: </strong>" . $alunos['SI']['Disciplina']);
?>
</body>
</html>