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

    $estado = isset($_GET["estado"]) ? $_GET["estado"] : "";

    switch (strtoupper($estado)) {
        case "AC":
        case "AP":
        case "AM":
        case "PA":
        case "RO":
        case "RR":
        case "TO":
            $regiao = "Norte";
            break;

        case "AL":
        case "BA":
        case "CE":
        case "MA":
        case "PB":
        case "PE":
        case "PI":
        case "RN":
        case "SE":
            $regiao = "Nordeste";
            break;

        case "DF":
        case "GO":
        case "MT":
        case "MS":
            $regiao = "Centro-Oeste";
            break;

        case "ES":
        case "MG":
        case "RJ":
        case "SP":
            $regiao = "Sudeste";
            break;

        case "PR":
        case "RS":
        case "SC":
            $regiao = "Sul";
            break;

        default:
            $regiao = "Estado não encontrado!";
    }

    echo "Estado: $estado <br/>";
    echo "Região: $regiao";
        
        
    ?>
    <br><a href="exercicio03.html" class="botao">Voltar</a>

</div>
</body>
</html>
 