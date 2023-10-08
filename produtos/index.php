<?php
require_once "../autoload.php";

use Barber\adicionar\config\Connection;
use Barber\src\service\BancoDeDados;

$consulta = (new Connection())->dbConnect();
$arrayProdutos = (new BancoDeDados($consulta))->pegarTodosProdutos();

$consulta->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-4.0.0/css/bootstrap.min.css">
    <link href="../fontawesome-6.4.2/css/fontawesome.min.css" rel="stylesheet">
    <link href="../fontawesome-6.4.2/css/brands.css" rel="stylesheet">
    <link href="../fontawesome-6.4.2/css/solid.css" rel="stylesheet">
    <script src="../jquery/code.jquery.com_jquery-3.5.1.min.js"></script>
    <script src="../bootstrap-4.0.0/js/bootstrap.min.js"></script>
    <script src="../maskMoney/src/jquery.maskMoney.js" type="text/javascript"></script>
    <title>Produtos</title>
</head>
<body class="text-center bg-white">
<table class="table table-striped">
    <thead class="thead-dark">
    <tr>
        <th scope="col">id</th>
        <th scope="col">Nome</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Valor</th>
        <th scope="col">Ultima Compra</th>
        <th scope="col">Ações</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if($arrayProdutos != null){
    foreach($arrayProdutos as $item){ ?>
    <tr>
        <th scope="row"><?php echo $item['id']; ?></th>
        <td><?php echo $item['nomeProduto']; ?></td>
        <td><?php echo $item['quantidade']; ?></td>
        <td><?php echo $item['valor']; ?></td>
        <td><?php echo $item['dataCompra']; ?></td>
        <td>
            <div class="d-flex">
                <a href="../editar/index.php?id=<?php echo $item['id']; ?>" style="color:darkblue;"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="../deletar/index.php?id=<?php echo $item['id']; ?>" class="ml-4" style="color:red;"><i class="fa-solid fa-trash-can"></i></a>
            </div>
        </td>
    </tr>
<?php }
    } else {
    ?>
    <tr>
        <td colspan="6">
            <strong>Nenhum produto cadastrado !</strong>
        </td>
    </tr>
    <?php  } ?>
    </tbody>
</table>
</body>
<script>

</script>
</html>