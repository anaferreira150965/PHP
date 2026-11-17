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
      $v = array(4=>"A", 3=>"B", 1=>"C", 2=>"D", 0=>"E");
      print_r($v);
      ksort($v);
      print_r($v);
        
    ?>
  </pre>
</div>
</body>
</html>
 