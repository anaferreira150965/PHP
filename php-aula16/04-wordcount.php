<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP </title>
</head>
<body>
<div>
    <?php
      $frase = "Eu vou estudar PHP agora";
      $cont = str_word_count($frase, 0);
      echo "A frase tem $cont palavras!";
        
    ?>
</div>
</body>
</html>
 