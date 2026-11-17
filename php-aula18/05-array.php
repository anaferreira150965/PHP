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
      $v = array ( 0 => 4,
                   1 => 8,
                   2 => 3,
                   3 => 9);
      unset($v[0]);
      print_r($v);
        
    ?>
    
  </pre>
</div>
</body>
</html>
 