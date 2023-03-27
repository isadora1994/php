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
               .cor3{
                    color: #000;
               }
          </style>

</head>
<body>
          <? 
               $a = 5;
               $b = 6;
               if ($a == $b) {
          ?>
                    <p class="cor1">A variável $a é igual a variável $b</p>
          <?
               }
               elseif (($a + $b) == 11) {
          ?>
                    <p class="cor2">A soma das variáveis $a + $b é igual a 11</p>
          <?
          }
          else{
          ?>     
                    <p class="cor3">A soma das variáveis $a + $b é diferente a 11</p>
          <?
                    } 
          ?>
</body>
</html>