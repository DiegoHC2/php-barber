<?php
require_once   (__DIR__."/../../autoload.php");

use Barber\adicionar\config\Connection;
use src\dataBase\ControladorDeVenda;

$consulta = (new Connection())->dbConnect();
$filtro = new \src\Filtro($_POST);
$banco = new \src\dataBase\BancoDeDados($consulta);
$arrayProdutos = $banco->pegarProdutosPorId($filtro->tratarProdutos());
$arrayServicos = $banco->pegarServicosPorId($filtro->tratarServicos());
$controlador = new ControladorDeVenda($arrayProdutos, $arrayServicos, $consulta);

$controlador->registrarServico();
$consulta->close();
exit();
