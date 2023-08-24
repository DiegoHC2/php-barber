<?php

require_once "../../autoload.php";


use Barber\adicionar\config\Connection;
use Barber\adicionar\src\Product;
use Barber\editar\src\Product as ProductInsert;

$consulta = (new Connection())->dbConnect();

$nome = "teste";
$quantidade = 2;
$valor = 20.2;
$produto = (new ProductInsert($consulta))->editarProduto(new Product($nome,$quantidade,$valor),5);

if($produto){
    echo "Deu bom";
} else {
    echo "Sei lá";
}
