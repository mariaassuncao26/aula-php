<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <title>Sistema de Notas</title>
</head>
<body>

<?php

    $varNota = $_POST["nota"];

    if($varNota <= 4){
        echo "<h3 class='t' Instisfatório (Menção I). </h3>";
    }
    else if($varNota <= 6){
        echo "<h3 class='t' Regular (Menção R). </h3>";
    }

    else if($varNota <= 8){
        echo "<h3 class='t' Bom (Menção B). </h3>";
    }
    else if($varNota <= 10){
        echo "<h3 class='t' Muito Bom (Menção MB). </h3>";
    }


?>


</body>
</html>
