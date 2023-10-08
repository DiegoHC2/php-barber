<?php
require_once ("../../../autoload.php");

use Barber\adicionar\config\Connection;
use Barber\adicionar\servico\src\service\BancoDeDados;
use Barber\adicionar\servico\src\service\NovoServico;
use Barber\adicionar\servico\src\service\VerificarExistenciaBanco;

$consulta = (new Connection())->dbConnect();
$servico = new NovoServico($_POST['servico'], (float)$_POST['valor']);
try {
    (new VerificarExistenciaBanco($servico, $consulta));
} catch ( DomainException $e)
{
    header("Location: http://localhost:8080/adicionar/servico/main.php?error=exist");
}
if((new BancoDeDados($consulta, $servico))->salvar())
{
    header("Location: http://localhost:8080/adicionar/servico/main.php?success=ok");
} else {
    header("Location: http://localhost:8080/adicionar/servico/main.php?error=query");
}
$consulta->close();
