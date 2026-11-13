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
    
        function soma($a, $b){
    
            return $a + $b;      
        }

      $x = 5;
      $y = 6;   
      $r = soma($x, $y);
      echo "<p>A soma entre $x e $y vale $r</p>";
        
    ?>
</div>
</body>
</html>
 