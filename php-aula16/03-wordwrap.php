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
      $t = "Aqui tem um texto gigante que vai ser quebrado em várias linhas, dependendo do tamanho da tela do usuário. Vamos ver como o PHP lida com isso.";
      $r = wordwrap($t, 20, "<br/>");
      echo $r;
        
    ?>
</div>
</body>
</html>
 