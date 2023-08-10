<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>

<!-- aula_02 -->

<?php

    $tipo1 = "ETEC";
    $tipo2 = "FATEC";
    $mantenedora = "CPS";
    $cidade = "Registro";

    //Concatenação
    echo "A ". $tipo1. " ". $cidade. " é mantida pelo ".$mantenedora. ".<hr>";

    //Sem concatenação
    echo "A $tipo1 $cidade é mantida pelo $mantenedora. .<hr>";

?>

<?php

    $heroi = "Hulk";
    if($heroi == "Hulk" or $heroi == "hulk"){
        echo "O herói é o Hulk <br> <img src='imgs/hulk.avif' width='250px'>";
    }
    else if($heroi == "Thor"){
        echo "O herói é o Thor!";
    }
    else{
        echo "Herói inválido";
    }

?>

<a href="exercicio.php">Exercício </a>



</body>
</html>