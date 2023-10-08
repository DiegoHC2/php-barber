<?php
$success = false;
if(isset($_GET['success'])){
    $success = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/inserirFolhaEstilo.css">
    <script src="../jquery/code.jquery.com_jquery-3.5.1.min.js"></script>
    <script src="../bootstrap-4.0.0/js/bootstrap.min.js"></script>
    <script src="../maskMoney/src/jquery.maskMoney.js" type="text/javascript"></script>
    <title>Adicionar produto</title>
</head>
<body style="background-color: #2f2f2f;">
<?php if($success) { ?>
<div class="alert alert-success" style="position: fixed;right: 0px;">
    Produto adicionado com sucesso !
</div>
<?php } ?>
<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
    <h1 class="cover-heading" style="margin-top:5%;color: #ff6b47;">Adicionar Produto</h1>
    <div class="text-center">
        <div class="d-flex justify-content-center flex-column">
            <div class=" ml-auto mr-auto" style="background-color: #363839;width: 70%;padding: 50px;border-radius:129px;">
                <form method="POST" action="../adicionar/controller/addProductMain.php" >
                    <span style="color:white;font-size:21px;">Nome do produto</span>
                    <div class="m-4 d-flex justify-content-center">
                        <input style="width: 65%;" class="text-center form-control" type="text" id="nomeProduto" name="nomeProduto">
                    </div>
                    <span style="color:white;font-size:21px;">Quantidade</span>
                    <div class="m-4 d-flex justify-content-center">
                        <input style="width: 65%;" class="text-center form-control" type="number" id="quantidade" name="quantidade" >
                    </div>
                    <span style="color:white;font-size:21px;">Valor</span>
                    <div class="m-4 d-flex justify-content-center">
                        <input style="width: 65%;" class="text-center form-control" id="inputValor" type="text" >
                        <input  type="hidden" type="number" id="valor" name="valor">
                    </div>
                    <div class=" m-2">
                        <button class="btn " style="font-size: 15px;font-weight: bold;">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="mastfoot mt-auto text-center">
        <div class="inner" style="color:darkgrey;">
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