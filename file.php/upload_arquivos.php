<html>
     <head>
          <title>Upload de arquivos</title>
     </head>
     <body>
          <form action="upload_arquivos.php" method="post" enctype="multipart/form-data">
               <label for="arquivo">Arquivo:</label>
               <input type="file" name="arquivo" id="arquivo" />
               <br />
               <input type="submit" name="submit" value="Enviar" />
          </form>

          <?php
     $nome_temporario=$_FILES["arquivos"]["tmp_name"];
     $nome_real=$_FILES["arquivos"]["name"];
     if (copy($nome_temporario,"imagens/image/$nome_real")){
          echo "Upload: $nome_real efetuado com êxito";
     }
     else{
          echo "Erro ao fazer o upload do arquivo: $nome_real";
     }
?>
     </body>
</html>