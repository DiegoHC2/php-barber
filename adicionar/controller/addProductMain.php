<?php
require_once "..\..\autoload.php";

use Barber\adicionar\config\Connection;
use Barber\adicionar\model\ProductModel;
use Barber\adicionar\src\Product;
use Barber\adicionar\src\validation\NewProductValidation;

$product = new Product("Espuma de barbear",1,10.5,"2023-05-02");
$connect = (new Connection())->dbConnect();


$productModel = new ProductModel($product, $connect);
$validation = new NewProductValidation($product);

try {
    $validation->verify();
    $productModel->add();
} catch (Exception $e){
    echo "Retornar algum erro no front avisando !";
}

$connect->close();


