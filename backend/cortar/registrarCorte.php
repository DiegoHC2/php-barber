<?php
require_once   (__DIR__."/../../autoload.php");

use Barber\adicionar\config\Connection;
use src\dataBase\ControladorDeVenda;

$consulta = (new Connection())->dbConnect();
$filtro = new \src\Filtro($_POST);
$banco = new \src\dataBase\BancoDeDados($consulta);
$arrayProdutos = $banco->pegarProdutosPorId($filtro->tratarProdutos());
$arrayServicos = $banco->pegarServicosPorId($filtro->tratarServicos());
var_dump($arrayServicos);
/*$minutos = 123;
$servicos = [
    "corte",
];
$minutos = null;
$servicos = null;
$produtos = [
    "Tinta",
    "Gel"
];*/
$valor = 45.20;
$controlador = new ControladorDeVenda(1, null, $arrayServicos, $valor, $consulta);

$controlador->registrarServico();
$consulta->close();
exit();
