<?php
require_once "..\..\autoload.php";

use Barber\adicionar\config\Connection;
use Barber\adicionar\model\ProductModel;
use Barber\adicionar\src\Product;
use Barber\adicionar\src\validation\NewProductValidation;


$product = new Product($_POST['nomeProduto'],$_POST['quantidade'],$_POST['valor']);
$connect = (new Connection())->dbConnect();


$productModel = new ProductModel($product, $connect);
$validation = new NewProductValidation($product);

try {
    $validation->verify();
    $productModel->add();
    header("Location: http://localhost:8080/adicionar?success=adicionar");
} catch (Exception $e){
    echo "Retornar algum erro no front avisando !";
    header("Location: http://localhost:8080/adicionar?error=adicionar");

}


$connect->close();


