<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP</title>
  <style>
	h1 { font: 20pt Arial; }
  </style>
</head>
<body>
<div>
    <?php
       $n = isset($_GET["num"])?$_GET["num"]:1;
	   echo "<h1>Mostrando a Tabuada de $n </h1>";
	   for ($c = 1; $c <= 10; $c++) {
		 $r = $n * $c;
		 echo "$n x $c = $r <br/>";
	   }
    ?>
	<br/>
	<a href="03-index.html" class="botao">Voltar</a>
</div>
</body>
</html>
 