<?php
use Barber\adicionar\config\Connection;
use src\CustoProdutoPorMes;
use src\CustoServicoPorMes;
session_start();
if(!isset($_POST['data']) && !isset($_SESSION['date']))
{
    header("Location: http://localhost:8080/site/relatorio/controlador.php?erro=selecione-data");
}
if(isset($_POST['data'])) $_SESSION['date'] = $_POST['data'];
require_once(__DIR__."/../../autoload.php");
$consulta = (new Connection())->dbConnect();
$consulta->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap-4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../fontawesome-6.4.2/css/fontawesome.css">
    <link rel="stylesheet" href="../../fontawesome-6.4.2/css/brands.css">
    <link rel="stylesheet" href="../../fontawesome-6.4.2/css/solid.css">
    <script src="../../jquery/code.jquery.com_jquery-3.5.1.min.js"></script>
    <script src="../../bootstrap-4.0.0/js/bootstrap.min.js"></script>
    <script src="../../fontawesome-6.4.2/js/fontawesome.min.js"></script>
    <title>Gerar Relatório</title>
</head>
<body class="bg-dark ">
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#" style="font-size: 35px;font-weight: bold; color: lightsalmon; letter-spacing: -2px; text-transform: uppercase; font-family: ui-rounded;">Barbearia</a>
</nav>
<div class="container-fluid " style="margin-top:50px;">
    <div class="row">
        <nav class="d-none d-md-block bg-light sidebar" style="border-radius:5px;padding:20px;height: 300px;">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <div class="nav-link active" style="background-color: #1a2d3f; color:white; border-radius: 5px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            Inicio
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link disabled" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                            Venda Serviços
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link disabled" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                            Venda Produtos
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="vendasTotais.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                            Venda Produtos e Servicos
                        </a>
                    </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Relatórios</span>
                </h6>

            </div>
        </nav sty style>
    </div>
</div>
</body>
<script>
</script>
<style>
    a{
        text-decoration: none;
        color: black;
    }
    li{
        width: 250px;
    }
</style>
</html>

