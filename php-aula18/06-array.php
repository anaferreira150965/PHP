<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP </title>
</head>
<body>
<div>
  <pre>
    
    <?php
      $v = array ( "nome" => "Ana",
                   "idade" => 61,
                    "peso" => 72.6);
      foreach ($v as $k => $c) {
        echo "O campo $k possui o conteudo $c<br/>";
      }
        
    ?>
    
  </pre>
</div>
</body>
</html>
 