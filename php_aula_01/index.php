<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
<!-- aula_01 -->
    <?php
        $escola = "ETEC";
        $instituicao = "Centro Paula Souza";
    ?>

    A  echo $escola Registro é mantida pelo 
     echo $instituicao;

    <br>

    A  echo "'<span class='e f'>'" $escola "'</span>'" Registro é mantida pelo 
     echo "<span class='c f'> Centro Paula Souza </span>";

    ?>
</body>
</html>