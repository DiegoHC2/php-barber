<?php
require_once ("../../autoload.php");
use Barber\adicionar\config\Connection;
use src\Produtos;
use src\Servicos;

$consulta = (new Connection())->dbConnect();
$arrayProdutos = (new Produtos($consulta))->pegarProdutosDoBancoDeDados();
$arrayServicos = (new Servicos($consulta))->pegarServicosBancoDeDados();
$consulta->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap-4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/main.css">
    <link href="../../fontawesome-6.4.2/css/fontawesome.min.css" rel="stylesheet">
    <link href="../../fontawesome-6.4.2/css/brands.css" rel="stylesheet">
    <link href="../../fontawesome-6.4.2/css/solid.css" rel="stylesheet">
    <script src="../../jquery/code.jquery.com_jquery-3.5.1.min.js"></script>
    <script src="../../bootstrap-4.0.0/js/bootstrap.min.js"></script>
    <script src="../../maskMoney/src/jquery.maskMoney.js" type="text/javascript"></script>
    <title>Cortar</title>
</head>
<body class="text-center" >
<div class=" d-flex flex-row" style="padding: 70px;height: 800px;">
    <div class="mr-2" style="padding: 0px 15px;width:40%;margin-top:20%;">
        <div>
            <button class="btn" id="buttonCorte">Cortar</button>
        </div>
    </div>
    <div id="body_menu" >
        <div class="d-flex align-content-end" style="width: 100%;">
            <div class="d-flex flex-column" style="width: 40%;">
                <form id="form" action="../../backend/cortar/registrarCorte.php" method="POST">
                    <span class="bg_letter_primary">Serviços</span>
                    <?php if($arrayServicos !=null ){
                        $controlador = 0;
                        foreach ($arrayServicos as $key=>$servico){
                            $controlador = $key;
                            ?>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="<?php echo "servico{$key}";?>" value="<?php echo $servico['id'];?>" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    <?php echo $servico['nome'];?>
                                </label>
                            </div>
                        <?php } ?>
                        <input type="hidden" name="quantidade_servico" value="<?php echo $controlador;?>">
                            <?php
                    } else { ?>
                        <span>Sem Servicos cadastrados !</span>
                    <?php } ?>
            </div>
            <div class="d-flex flex-column" style="width: 50%;">
                <span class="bg_letter_primary">Produtos</span>
                <?php
                if($arrayProdutos != null){
                    $controlador = 0;
                    foreach($arrayProdutos as $key=>$produto) {
                        $controlador = $key;
                        ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="<?php echo "produto{$key}";?>" value="<?php echo $produto['id'];?>" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                <?php echo $produto['nome'];?>
                            </label>
                        </div>
                    <?php } ?>
                    <input type="hidden" name="quantidade_produtos" value="<?php echo $controlador;?>">
                        <?php } else {?>
                    <span>Sem Produtos cadastrados !</span>
                <?php }?>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    $("#buttonCorte").on('click', function(){
        $("form").submit();
    });
</script>
</html>