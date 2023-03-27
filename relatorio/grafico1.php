<!DOCTYPE HTML>
<html>
     <head>
          <meta charset="utf-8">
          <title>Criar relatórios com PHP</title>
          <link href="css/style.css" rel="stylesheet" />
          <script src="js/RGraph.common.core.js" ></script>
          <script src="js/RGraph.common.annotate.js" ></script>
          <script src="js/RGraph.common.context.js" ></script>
          <script src="js/RGraph.common.tooltips.js" ></script>
          <script src="js/RGraph.common.resizing.js" ></script>
          <script src="js/RGraph.bar.js" ></script>
          <?php
               include "conexao.php";
               $sqlbandas=mysqli_query($conecta, "Select * from tb1_bandas");
               $i = 1;
               while($result = mysqli_fetch_array($sqlbandas)){
                    $bandas[$i] = $result['nome_tb1_bandas'];
                    $idbanda[$i]= $result['id_tb1_bandas'];
                    $sqldiscos=mysqli_query($conecta, "Select * from tb1_discos WHERE id_tb1_bandas = $i" );	
                    $result=mysqli_fetch_array($sqldiscos);
                    $qte[$i]=mysqli_num_rows($sqldiscos);
                    $i++;
               }
               $aux=$i;
               $i=1;
               $dadosBandas="";
               while ($i <= $aux-1){
                    if ($i == $aux-1){
                         $dadosBandas = $dadosBandas . $qte[$i] ;
                    }
                    else{
                         $dadosBandas = $dadosBandas . $qte[$i] . ",";
                    }
                    $i++;
               }
               $dadosBandas = join(",", array($dadosBandas));
               $dadosBandas = "[$dadosBandas]";
               echo "<script>" . "\n";
               echo "var dadosBandas = $dadosBandas" . ";\n";
               $i=1;
               while ($i <= $aux-1){
                    echo "var banda$i = $qte[$i]; \n";
                    $i++;
               }
               echo "</script>" . "\n";
               echo "<script>" . "\n";
               echo "	 window.onload = function ()" . "\n";
               echo " {" . "\n";
               echo " var meuGraficobandas = new RGraph.Bar('meuCanvasGraficobandas', dadosBandas);" . "\n";
               echo " meuGraficobandas.Set('chart.background.barcolor1', 'white');" . "\n";
               echo " meuGraficobandas.Set('chart.background.barcolor2', 'white');" . "\n";
               echo " meuGraficobandas.Set('chart.title', 'Como gerar gráficos com PHP');" . "\n";
               echo " meuGraficobandas.Set('chart.title.vpos', 0.6);" . "\n";
               echo " meuGraficobandas.Set('chart.labels', [";
               $i=1;
               while ($i <= $aux-1){
                    if ($i == $aux-1){
                         echo "'". $bandas[$i] . "'";
                    }
                    else{
                         echo "'". $bandas[$i] . "', ";
                    }
                    $i++;
               }
               echo "]);\n";
               echo " meuGraficobandas.Set('chart.tooltips', [";
               $i=1;
               while ($i <= $aux-1){
                    if ($i == $aux-1){
                         echo "'$bandas[$i] tem ' + banda$i + ' discos'";
                    }
                    else{
                         echo "'$bandas[$i] tem ' + banda$i + ' discos', ";
                    }
                    $i++;
               }
               echo "]);\n";
               echo " meuGraficobandas.Set('chart.text.angle', 45);" . "\n";
               echo " meuGraficobandas.Set('chart.gutter', 35);" . "\n";
               echo " meuGraficobandas.Set('chart.shadow', true);" . "\n";
               echo " meuGraficobandas.Set('chart.shadow.blur', 5);" . "\n";
               echo " meuGraficobandas.Set('chart.shadow.color', '#aaa');" . "\n";
               echo " meuGraficobandas.Set('chart.shadow.offsety', -3);" . "\n";
               echo " meuGraficobandas.Set('chart.colors', ['#00CED1']);" . "\n";
               echo " meuGraficobandas.Set('chart.key.position', 'gutter');" . "\n";
               echo " meuGraficobandas.Set('chart.text.size', 10);" . "\n";
               echo " meuGraficobandas.Set('chart.text.font', 'Georgia');" . "\n";
               echo " meuGraficobandas.Set('chart.text.angle', 0);" . "\n";
               echo " meuGraficobandas.Set('chart.grouping', 'stacked');" . "\n";
               echo " meuGraficobandas.Set('chart.strokecolor', 'rgba(0,0,0,0)');" . "\n";
               echo " meuGraficobandas.Draw();" . "\n";
               echo " }" . "\n";
               echo " </script>";
          ?>
     </head>
     <body>
          <div id="conteudo">
               <h1>Criar relatório com PHP</h1>
               <div class="borda"></div>
               <div style="width: 450px;">
                    <canvas id="meuCanvasGraficobandas" width="700" height="350">[No canvas support]</canvas>
               </div>
               <div class="clear"></div>
               <?php
                    $sqlbandas=mysqli_query($conecta, "Select * from tb1_bandas");
                    while ($resulta=mysqli_fetch_array($sqlbandas)){
               ?>
                         <h1><?php echo $resulta['nome_tb1_bandas']; ?></h1>
                         <div class="borda"></div>
                    <?php
                         $sqldiscos=mysqli_query($conecta, "Select * from tb1_discos WHERE id_tb1_bandas = " . $resulta['id_tb1_bandas']);
                         while ($resultdiscos=mysqli_fetch_array($sqldiscos)){
                    ?>
                              <div class="discos"><span class="qtde"><?php echo $resultdiscos['titulo_tb1_discos']; ?></span><br/>
                                   <img src="<?php echo $resultdiscos['capa_tb1_discos']; ?>">
                              </div>
                    <?php } ?>
                    <div class="clear"></div>
                    <?php 
                         }
                    ?>
               </div>
     </body>
</html>