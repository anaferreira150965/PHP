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
    <table border="1"><tr>
    <?php
      $c = range(5, 20, 2); // Cria um array com valores de 5 a 20, pulando de 2 em 2
      foreach($c as $v) {
        echo "<td> $v ";
      } 
        
    ?>
    </table>
  </pre>
</div>
</body>
</html>
 