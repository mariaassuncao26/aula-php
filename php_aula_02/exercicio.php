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

    if($universo == "Marvel"){
        echo "<img src='imgs/hulk.avif' width='250px'><br>";
        echo "<img src='imgs/1.jpg' width='250px'><br>";
        echo "<img src='imgs/2.jpg' width='250px'><br>";
        echo "<img src='imgs/3.webp' width='250px'><br>";
        echo "<img src='imgs/4.webp' width='250px'><br>";
        echo "<img src='imgs/5.webp' width='250px'><br>";
        echo "<img src='imgs/6.webp' width='250px'><br>";
        echo "<img src='imgs/7.webp' width='250px'><br>";
        echo "<img src='imgs/8.jpg' width='250px'><br>";
        echo "<img src='imgs/9.jpg' width='250px'><br>";
    }

    else if($universo == "DC"){
        echo "<img src='imgs/1dc.webp' width='250px'><br>";
        echo "<img src='imgs/2dc.webp' width='250px'><br>";
        echo "<img src='imgs/3dc.webp' width='250px'><br>";
        echo "<img src='imgs/4dc.webp' width='250px'><br>";
        echo "<img src='imgs/5dc.webp' width='250px'><br>";
        echo "<img src='imgs/6dc.webp' width='250px'><br>";
        echo "<img src='imgs/7dc.webp' width='250px'><br>";
        echo "<img src='imgs/8dc.webp' width='250px'><br>";
        echo "<img src='imgs/9dc.webp' width='250px'><br>";
        echo "<img src='imgs/10dc.webp' width='250px'><br>";
    }

?>
<script src="js/script.js"></script>
<a href="index.php">Voltar</a>

</body>
</html>