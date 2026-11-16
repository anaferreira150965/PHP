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
    
        $frase = "Gosto de estudar Tecnologias";
        $novaFrase = str_replace("Tecnologias", "PHP", $frase);
        print($novaFrase);
        
            
    ?>
</div>
</body>
</html>
 