<html>
     <head>
          <title>Aprendendo a instrução WHILE</title>
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
                    while ($i <= 10) {
                         echo $i . " ";
                         $i++;
                    }
               ?>
          </p>
     </body>
</html>