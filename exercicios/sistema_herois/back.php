<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
    <div class="fundo">
<?php

    $varUniverso = $_POST["Universo"];
    $varHeroi = $_POST["Herois"];
    $varQtd = $_POST["qtd"];

    if($varUniverso == "marvel"){
        if($varHeroi == "hulk"){
            for($x=1;$x<=$varQtd;$x++){
                echo "<img src='imgs/hulk.avif' width='250px' id='i'>";
            }  
        }
        else if($varHeroi == "thor"){
            for($x=1;$x<=$varQtd;$x++){
                echo "<img src='imgs/1.jpg' width='250px' id='i'>";
            }
        }
        else if($varHeroi == "pn"){
            for($x=1;$x<=$varQtd;$x++){
                echo "<img src='imgs/4.webp' width='250px' id='i'>";
            }
        }
        else if($varHeroi == "groot"){
            for($x=1;$x<=$varQtd;$x++){
                echo "<img src='imgs/6.webp' width='250px' id='i'>";
            }
        }
        else if($varHeroi == "ha"){
            for($x=1;$x<=$varQtd;$x++){
                echo "<img src='imgs/3.webp' width='250px' id='i'>";
            }
        }
        else{
            echo "O herói não pertence a esse universo!";
        }
    }

    else if($varUniverso == "dc"){
        if($varHeroi == "mm"){
            for($x=1;$x<=$varQtd;$x++){
                echo "<img src='imgs/3dc.webp' width='250px' id='i'>";
            }  
        }
        else if($varHeroi == "s"){
            for($x=1;$x<=$varQtd;$x++){
                echo "<img src='imgs/2dc.webp' width='250px' id='i'>";
            }
        }
        else if($varHeroi == "sh"){
            for($x=1;$x<=$varQtd;$x++){
                echo "<img src='imgs/4dc.webp' width='250px' id='i'>";
            }
        }
        else if($varHeroi == "flash"){
            for($x=1;$x<=$varQtd;$x++){
                echo "<img src='imgs/Flash.webp' width='250px' id='i'>";
            }
        }
        else if($varHeroi == "batman"){
            for($x=1;$x<=$varQtd;$x++){
                echo "<img src='imgs/batman.jpg' width='250px' id='i'>";
            }
        }

        else{
            echo "O herói não pertence a esse universo!";
        }
    }

?>
</div>

</body>
</html>
