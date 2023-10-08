<?php
require_once   (__DIR__."/../../autoload.php");

use backend\cortar\src\ControladorDeVenda;
use Barber\adicionar\config\Connection;

$minutos = 123;
$servicos = [
    "corte",
];
$minutos = null;
$servicos = null;
$produtos = [
    "Tinta",
    "Gel"
];
$valor = 45.20;
$consulta = (new Connection())->dbConnect();
$controlador = new ControladorDeVenda($minutos, $produtos, $servicos, $valor, $consulta);

$controlador->registrarServico();

$consulta->close();