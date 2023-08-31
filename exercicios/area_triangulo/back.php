<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <title>Área do Triângulo</title>
</head>
<body>

<?php

    $varB = $_POST["base"];
    $varH = $_POST["altura"];
    

    $varResultado = ($varB * $varH)/2;

    
    echo "<h3 class='t'>". $varResultado. "</h3>";
    

?>


</body>
</html>
