<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>

<?php

    $universo = "DC";
    $heroi = "Mulher Maravilha"
    $qtd_heroi = 5;

    if($universo == "Marvel"){
        if($heroi == "Hulk"){
            for($x=1;$x<=$qtd_heroi;$x++){
                echo "<img src='imgs/hulk.avif' width='250px'>";
            }  
        }
        else if($heroi == "Thor"){
            for($x=1;$x<=$qtd_heroi;$x++){
                echo "<img src='imgs/1.jpg' width='250px'>";
            }
        }
        else if($heroi == "Pantera Negra"){
            for($x=1;$x<=$qtd_heroi;$x++){
                echo "<img src='imgs/4.webp' width='250px'>";
            }
        }
        else if($heroi == "Groot"){
            for($x=1;$x<=$qtd_heroi;$x++){
                echo "<img src='imgs/6.webp' width='250px'>";
            }
        }
        else if($heroi == "Homem Aranha"){
            for($x=1;$x<=$qtd_heroi;$x++){
                echo "<img src='imgs/3.webp' width='250px'>";
            }
        }
        else{
            echo "Herói inexistente!";
        }
    }

    else if($universo == "DC"){
        if($heroi == "Mulher Maravilha"){
            for($x=1;$x<=$qtd_heroi;$x++){
                echo "<img src='imgs/3dc.webp' width='250px'>";
            }  
        }
        else if($heroi == "Shazam"){
            for($x=1;$x<=$qtd_heroi;$x++){
                echo "<img src='imgs/2dc.webp' width='250px'>";
            }
        }
        else if($heroi == "Super Homem"){
            for($x=1;$x<=$qtd_heroi;$x++){
                echo "<img src='imgs/4dc.webp' width='250px'>";
            }
        }
        else if($heroi == "Flash"){
            for($x=1;$x<=$qtd_heroi;$x++){
                echo "<img src='imgs/Flash.webp' width='250px'>";
            }
        }
        else if($heroi == "Batman"){
            for($x=1;$x<=$qtd_heroi;$x++){
                echo "<img src='imgs/batman.jpg' width='250px'>";
            }
        }
        else{
            echo "Herói inexistente!";
        }
    }

    else{
        echo "Universo inexistente!";
    }

?>
<script src="js/script.js"></script>
<a href="index.php">Voltar</a>

</body>
</html>