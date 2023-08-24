<?php

use Barber\adicionar\config\Connection;
use src\Product;

require_once "../autoload.php";

$consulta = (new Connection())->dbConnect();

if(empty($_GET['id'])) header("Location: http://localhost:8080/produtos");
$id = $_GET['id'];

$produto = (new Product($consulta))->pegarProdutoPorId($id);

$consulta->close();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-4.0.0/css/bootstrap.min.css">
    <script src="../jquery/code.jquery.com_jquery-3.5.1.min.js"></script>
    <script src="../bootstrap-4.0.0/js/bootstrap.min.js"></script>
    <script src="../maskMoney/src/jquery.maskMoney.js" type="text/javascript"></script>
    <title>Editar produto</title>
</head>
<body class="d-flex ">
<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
    <form>
        <div class="d-flex flex-column">
            <spa>Nome do produto</spa>
            <input type="text" value="<?php echo $produto['nomeProduto'];?>">
        </div>
        <div class="d-flex flex-column mb-3 mt-3">
            <spa>Quantidade</spa>
            <input type="number" value="<?php echo $produto['quantidade'];?>">
        </div>
        <div class="d-flex flex-column">
            <spa>Valor</spa>
            <input type="text" value="<?php echo $produto['valor'];?>">
        </div>
    </form>
</div>
</body>
<script>

</script>
</html>