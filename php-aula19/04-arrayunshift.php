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
      $v = array("A", "J", "M", "X", "K");
      print_r($v);
      array_unshift($v, "O");
      print_r($v);
        
    ?>
  </pre>
</div>
</body>
</html>
 