<?php
require_once '../autoload.php';
use Barber\adicionar\config\Connection;
use Barber\deletar\src\DeletarProduto;

$id = $_GET['id'];

$consulta = (new Connection())->dbConnect();

(new DeletarProduto($consulta))->deletarPorId($id);
$consulta->close();






