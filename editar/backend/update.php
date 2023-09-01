<?php

require_once "../../autoload.php";


use Barber\adicionar\config\Connection;
use Barber\adicionar\src\Product;
use Barber\editar\src\Product as ProductInsert;

$consulta = (new Connection())->dbConnect();

$nome = $_POST['nome'];
$quantidade = $_POST['qtd'];
$valor = $_POST['valor'];
$id = $_POST['id'];
$produto = (new ProductInsert($consulta))->editarProduto(new Product($nome,$quantidade,$valor),$id);

if($produto){
    header("Location: http://localhost:8080/produtos?sucess=ok");
} else {
    header("Location: http://localhost:8080/produtos?error=ok");
}
