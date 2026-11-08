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
    
      $nome = $_GET["nome"];
      $ano = $_GET["ano"];
      $sexo = $_GET["sexo"];
      $idade = date("Y") - $ano; 
      echo "$nome é $sexo e tem $idade anos.";
    ?>
    <a href="02exercicio.html">Voltar</a>

</div>
</body>
</html>
 