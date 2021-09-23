<?php
    session_start();
    require_once("./funcoes.php");

    // realizarLogin("cristiano", "123456", lerArquivo("./dados/usuarios.json"));

    // echo "NOME USUARIO: " . $_SESSION["usuario"] . "<br />";
    // echo "ID SESSÃO: " . $_SESSION["id"] . "<br />";
    verificarLogin();
?>



<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>ÁREA RESTRITA</title>
</head>

<body>
    
    <h1>ÁREA RESTRITA</h1>
    
    <div class='toolbar'>

        <h2>
            <?php echo 'Olá ' . strtoupper($_SESSION['usuario']) . ' - Login efetutado em: ' .$_SESSION['data_hora']; ?>
        </h2>

        <h2>
           <a class="material-icons" href="processa_login.php?logout=true">logout</a>
        </h2>

    </div>

</body>


</html>