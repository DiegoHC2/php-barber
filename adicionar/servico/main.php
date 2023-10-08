<?php
$success = false;
if(isset($_GET['success'])){
    $success = true;
}
$error = false;
$msg = '';
if(isset($_GET['error']))
{
    $error = true;
    if($_GET['error'] == 'exist')
    {
        $msg = "Servico já inserido !";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap-4.0.0/css/bootstrap.min.css">
    <script src="../../jquery/code.jquery.com_jquery-3.5.1.min.js"></script>
    <script src="../../bootstrap-4.0.0/js/bootstrap.min.js"></script>
    <script src="../../maskMoney/src/jquery.maskMoney.js" type="text/javascript"></script>
    <title>Adicionar Serviço</title>
</head>
<body style="background-color: #2f2f2f;">
<?php if($success) { ?>
    <div class="alert alert-success" style="position: fixed;right: 0px;">
        Servico cadastrado com sucesso !
    </div>
<?php } ?>
<?php if($error) { ?>
    <div class="alert alert-danger" style="position: fixed;right: 0px;">
        <?php echo $msg;?>
    </div>
<?php } ?>
<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
    <h1 class="cover-heading" style="margin-left:auto;margin-right:auto;margin-top:5%;color: #ff6b47;">Adicionar Serviço</h1>
    <div class="text-center">
        <div class="d-flex justify-content-center flex-column">
            <div class=" ml-auto mr-auto" style="background-color: #363839;width: 70%;padding: 50px;margin-top:5px;">
                <form method="POST" action="backend/controllerService.php" >
                    <span style="color:white;font-size:21px;">Nome do produto</span>
                    <div class="m-4 d-flex justify-content-center">
                        <input style="width: 65%;" class="text-center form-control" type="text" id="servico" name="servico">
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