<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <title>Métodos</title>
</head>
<body>
    
    <h1>RESULTADO</h1>
    
    
    <?php
    //variável especial: chamada post
        $varEmail = $_POST["email"];
        $varSenha = $_POST["senha"];

        echo "O email é $varEmail e a senha é $varSenha!"

    ?>

</body>
</html>
