<?php
require_once   (__DIR__."/../../autoload.php");

use Barber\adicionar\config\Connection;
use src\ControladorDeVenda;

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