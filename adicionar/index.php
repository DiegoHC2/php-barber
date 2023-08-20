<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="adicionar/public/inserirFolhaEstilo.css">
    <script src="../jquery/code.jquery.com_jquery-3.5.1.min.js"></script>
    <script src="../bootstrap-4.0.0/js/bootstrap.min.js"></script>
    <script src="../maskMoney/src/jquery.maskMoney.js" type="text/javascript"></script>
    <title>Adicionar produto</title>
</head>
<body class="text-center bg-primary">
<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto d-flex justify-content-center">
        <div class="inner bg-white justify-content-center" style="width: 700px;border-radius: 15px;">
            <h3 class="masthead-brand">RG</h3>
            <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link linkHover navLink noSelected" style="text-decoration: none;" href="#">Home</a>
                <a class="nav-link linkHover active2 navLink" style="text-decoration: none;" href="#">Adicionar</a>
            </nav>
        </div>
    </header>

    <main role="main" class="inner cover">
        <h1 class="cover-heading">Adicionar Produto</h1>
        <div class="d-flex justify-content-center flex-column">
            <form method="POST" action="controller/addProductMain.php" >
                <div class="m-4">
                    <input type="text" id="nomeProduto" name="nomeProduto" placeholder="Nome do produto">
                </div>
                <div class="m-4">
                    <input type="number" id="quantidade" name="quantidade" placeholder="quantidade">
                </div>
                <div class="m-4">
                    <input id="inputValor" type="text" placeholder="valor">
                    <input type="hidden" type="number" id="valor" name="valor">
                </div>
                <div class="d-flex justify-content-center m-2">
                    <button class="btn btn-success">Cadastrar</button>
                </div>
            </form>
        </div>
    </main>

    <footer class="mastfoot mt-auto">
        <div class="inner">
            Todos direitos reservados a <a href="https://www.instagram.com/rg_barbeariia/">@RG_Barbearia</a>
        </div>
    </footer>
</div>

</body>
<script>
    $(document).ready(function(){
        $("#inputValor").maskMoney({prefix:'R$ ', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
        $("#inputValor").on('keyup',function () {
            $("#valor").val($('#inputValor').maskMoney('unmasked')[0]);
        });
    });
</script>
</html>