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
    
        $nome = "Ana Ferreira";
        //$novo = str_pad($nome, 30, "#", STR_PAD_BOTH);
        //$novo = str_pad($nome, 30, "#", STR_PAD_LEFT);
        $novo = str_pad($nome, 30, "#", STR_PAD_RIGHT);
         
        print("O meu nome é: $novo");
            
    ?>
</div>
</body>
</html>
 