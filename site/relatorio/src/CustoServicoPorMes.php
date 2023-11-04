<?php

namespace src;

class CustoServicoPorMes implements TotalCusto
{
 private \mysqli $consulta;
    public function __construct(\mysqli $consulta)
    {
        $this->consulta = $consulta;
    }
    public function pegarValorTotal( string $startDate, string $endDate) : ?array
    {
       $qr = "SELECT SUM(valor) as total FROM `servicos` WHERE dataCompra >= '{$startDate}' and dataCompra <= '{$endDate}'";
       $trigger = $this->consulta->query($qr);
       if($trigger->num_rows > 0)
       {
           while($row = $trigger->fetch_array())
           {
               return ['total'=> $row ['total']];
           }
       }
       return null;

    }

}