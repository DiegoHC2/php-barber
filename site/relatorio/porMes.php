<?php
use Barber\adicionar\config\Connection;
use src\VendaServicoPorMes;

require_once(__DIR__."/../../autoload.php");
$consulta = (new Connection())->dbConnect();

$startDate = '2023-10-01';
$endDate = '2023-10';
$valorVendaServico = (new VendaServicoPorMes($consulta))->pegarValorTotal($startDate, $endDate);
$consulta->close();