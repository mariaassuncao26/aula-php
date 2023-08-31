<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <title>Sistema de Notas</title>
</head>
<body>
    
    <form action="back.php" method="post">

        <h2 class="t">Escolha um universo:</h2>
        <select name="Universo">

            <option value="marvel">Marvel</option>
            <option value="dc">DC</option>

        </select>

        <h2 class="t">Escolha um herói:</h2>
        <select name="Herois">

            <option value="thor">Thor</option>
            <option value="ha">Homem-Aranha</option>


        </select>  
            <br>

        <input type="number" name="qtd">
        <input type="submit" value="Enviar">


    </form>


</body>
</html>
