<?php
require_once   (__DIR__."/../../autoload.php");

use Barber\adicionar\config\Connection;
use src\dataBase\ControladorDeVenda;
if(!isset($_POST['quantidade_produtos']) && !isset($_POST['quantidade_servicos']))
{
    header("Location: http://localhost:8080/site/cortar/main.php?error=empty");
}
$consulta = (new Connection())->dbConnect();
$filtro = new \src\Filtro($_POST);
$banco = new \src\dataBase\BancoDeDados($consulta);
$arrayProdutos = $banco->pegarProdutosPorId($filtro->tratarProdutos());
$arrayServicos = $banco->pegarServicosPorId($filtro->tratarServicos());
$controlador = new ControladorDeVenda($arrayProdutos, $arrayServicos, $consulta);

if($controlador->registrarServico()) header("Location: http://localhost:8080/site/cortar/main.php?msg=success");
$consulta->close();
exit();
