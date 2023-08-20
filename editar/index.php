<?php

use Barber\adicionar\config\Connection;

require_once "../autoload.php";

$consulta = (new Connection())->dbConnect();

$id = 5;

$consulta->close();