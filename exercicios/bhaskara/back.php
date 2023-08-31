<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <title>Fórmula Quadrática</title>
</head>
<body>

<?php

    $varA = $_POST["a"];
    $varB = $_POST["b"];
    $varC = $_POST["c"];

    $varDelta = ($varB ** 2) - 4 * $varA * $varC;

    $varX1 = (-$varB + sqrt($varDelta)) / 2 * $varA;
    $varX2 = (-$varB - sqrt($varDelta)) / 2 * $varA;

    
    if($varA == 0){
        echo "O valor de A não pode ser igual a 0."
    }
    

?>


</body>
</html>
