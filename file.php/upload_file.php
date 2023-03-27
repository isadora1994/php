<html>
     <head>
          <title>Trabalhando com $_FILES</title>
     </head>
     <body>
          <form action="upload_file.php" method="post" enctype="multipart/form-data">
               <label for=" txt_nome">Nome:</label>
               <input type="text" name="txt_nome" id="txt_nome"><br />
               <label for="file">Foto:</label>
               <input type="file" name="file" id="file" />
               <br />
               <input type="submit" name="submit" value="Enviar" />
          </form>

          <?php
     if ((($_FILES["file"]["type"] == "image/gif")|| ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/jpg")) && ($_FILES["file"]["size"] < 20000)) {
          if ($_FILES["file"]["error"] > 0) {
               echo "Código de retorno: " . $_FILES["file"]["error"] . "<br />";
          }
          else {
               echo "Arquivo: " . $_FILES["file"]["name"]."<br />";
               echo "Tipo: " . $_FILES["file"]["type"]."<br />";
               echo "Tamanho: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
               echo "Arquivo temporário: " . $_FILES["file"]["tmp_name"] . "<br />";
               if (file_exists("upload/".$_FILES["file"]["name"])){
                    echo $_FILES["file"]["name"] . " já existe.";
               }
               else {
                    move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $_FILES["file"]["name"]);
                    echo "Guardado em: upload/" . $_FILES["file"]["name"];
               }
          }
     }
     else {
          echo "Arquivo inválido";
     }
?>
<img src="upload/<?php echo $_FILES["file"]["name"]; ?>"/>
     </body>
</html>