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
        $nota1 = isset($_GET["nota1"])?$_GET["nota1"]:0;
    $nota2 = isset($_GET["nota2"]) ? $_GET["nota2"] : 0;
    $media = ($nota1 + $nota2) / 2;

        if ($media >= 7) {
            $situacao = "aprovado";
        } else {
            $situacao = "reprovado";
        }
    ?>
           
        <h2>Resultado da Média</h2>
        <p>Nota 1: <?php echo $nota1; ?></p>
        <p>Nota 2: <?php echo $nota2; ?></p>
        <p>Média: <?php echo $media; ?></p>
        <p>Situação: <?php echo $situacao; ?></p>
        
    
    <a href="exercicio02.html">Voltar</a>

</div>
</body>
</html>
 