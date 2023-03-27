<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
               .cor1{
                    color: #f00;
               }
               .cor2{
                    color: #00f;
               }
          </style>

</head>
<body>
          <? 
               $a = 5;
               $b = 5;
               if ($a == $b) {
          ?>
               <p class="cor1">A variável $a é igual a variável $b</p>
          <?
               }
               else {
          ?>
               <p class="cor2">A variável $a é diferente a variável $b</p>
          <?
               }
          ?>
</body>
</html>