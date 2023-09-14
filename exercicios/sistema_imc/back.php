<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <title>Sistema de IMC</title>
</head>
<body>

<?php

    $varPeso = $_POST["peso"];
    $varAltura = $_POST["altura"];
    $varAltura = $varAltura / 100; 

    $varImc = $varPeso / ($varAltura ** 2);

    echo "<h3 class = 't'> ". $varImc. "</h3>";

    if($varImc < 16){
        echo "<h3 class='t'> Magreza Extrema. </h3>";
    }
    else if($varImc >= 16 && $varImc < 17){
        echo "<h3 class='t'> Magreza Média. </h3>";
    }
    else if($varImc >= 17 && $varImc < 18.5){
        echo "<h3 class='t'> Magreza Leve. </h3>";
    }
    else if($varImc >= 18.5 && $varImc < 25){
        echo "<h3 class='t'> Saudável. </h3>";
    }
    else if($varImc >= 25 && $varImc < 30){
        echo "<h3 class='t'> Sobrepeso. </h3>";
    }
    else if($varImc >= 30 && $varImc < 35){
        echo "<h3 class='t'> Obesidade Grau 1. </h3>";
    }
    else if($varImc >= 35 && $varImc < 40){
        echo "<h3 class='t'> Obesidade Grau 2. </h3>";
    }
    else{
        echo "<h3 class='t'> Obesidade Grau 3 (mórbida). </h3>";
    }

?>


</body>
</html>
