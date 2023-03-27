<html>
     <head>
          <title>Aprendendo a instrução DO...WHILE</title>
          <style>
               .cor1{
                    color: #f00;
               }
          </style>
     </head>
     <body>
          <p class="cor1">
               <?php
                    $i=1; // inicialização do nosso contador;
                    do{
                         echo $i . " ";
                         $i++;
                    } while ($i <= 10);
               ?>
          </p>
     </body>
</html>