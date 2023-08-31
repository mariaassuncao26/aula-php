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
    <form action="back.php" method="post">

        <h2>Escolha um universo:</h2>
        <select name="Universo">

            <option value="marvel">Marvel</option>
            <option value="dc">DC</option>

        </select>

        <h2>Escolha um herói:</h2>
        <select name="Herois">

            <option value="thor">Thor</option>
            <option value="ha">Homem-Aranha</option>
            <option value="hulk">Hulk</option>
            <option value="groot">Groot</option>
            <option value="pn">Pantera Negra</option>
        
            <option value="s">Shazam</option>
            <option value="mm">Mulher-Maravilha</option>
            <option value="batman">Batman</option>
            <option value="flash">Flash</option>
            <option value="Sh">Super-Homem</option>

        </select>  
            <br>

        <input type="number" name="qtd">
        <input type="submit" value="Enviar">


    </form>
</div>

</body>
</html>
