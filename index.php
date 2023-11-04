<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="adicionar/public/inserirFolhaEstilo.css">
    <link rel="stylesheet" href="fontawesome-6.4.2/css/fontawesome.css">
    <link rel="stylesheet" href="fontawesome-6.4.2/css/brands.css">
    <link rel="stylesheet" href="fontawesome-6.4.2/css/solid.css">
    <script src="jquery/code.jquery.com_jquery-3.5.1.min.js"></script>
    <script src="bootstrap-4.0.0/js/bootstrap.min.js"></script>
    <script src="fontawesome-6.4.2/js/fontawesome.min.js"></script>
    <script src="maskMoney/src/jquery.maskMoney.js" type="text/javascript"></script>
    <title>Home</title>
</head>
<body style="background-color: #000000">
<div class="navbar navbar-expand-lg navbar-light bg-light justify-content-end">
    <div class="mr-3">
        <span class="mr-2"><i class="fa-solid fa-user"></i></span>
        <span style="font-size:14px;">Olá Guilherme!</span>
    </div>
</div>
<nav class="navbar navbar-expand-lg  justify-content-center">
    <div class="image-container">
        <div id="menu" class="d-flex flex-column justify-content-center align-content-center">
            <div class="option" >
                <a href="site/cortar/main.php" style="text-decoration: none;" class="d-flex row" >
                    <span>Cortar</span>
                </a>
            </div>
            <div class="option" >
                <a href="/produtos/index.php" style="text-decoration: none" class="d-flex row">
                   <span>Estoque </span>
                </a>
            </div>
            <div class="option text-center"  >
                <a  href="/adicionar/index.php" style="text-decoration: none" class="d-flex row">
                    <span>Adicionar Produto</span>
                </a>
            </div>
            <div class="option text-center"  >
                <a  href="/adicionar/servico/main.php" style="text-decoration: none" class="d-flex row">
                    <span>Adicionar Serviço</span>
                </a>
            </div>
            <div class="option text-center"  >
                <a  href="/site/relatorio/controlador.php" style="text-decoration: none" class="d-flex row">
                    <span>Relatórios</span>
                </a>
            </div>
        </div>
    </div>
</nav>
</body>
<script>

</script>
<style>
    .option{
        display:flex;
        justify-content: center;
    }
    .image-container #menu {
        padding: 20px;
        margin-top:20%;
        width: 480px;
        border-radius: 15px;
        background-color: rgba(84, 83, 83, 0.18);
    }

    #menu .option{
        font-size:25px;
        font-weight: bold;
        letter-spacing: 2px;
        margin-top: 10px;
        margin-bottom: 10px;

    }
    a{
        border: none;
        color: #5a6268;
        transition: color 0.5s ease-in-out;
    }
    a:hover{
        color: floralwhite;
    }
</style>
</html>