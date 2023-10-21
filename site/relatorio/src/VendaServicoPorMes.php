<?php

namespace src;

class VendaServicoPorMes implements TotalVenda
{
 private \mysqli $consulta;
    public function __construct(\mysqli $consulta)
    {
        $this->consulta = $consulta;
    }
    public function pegarValorTotal( string $startDate, string $endDate) : ?array
    {
       $qr = "SELECT SUM(valor) as total FROM `log_venda_servico` WHERE data >= '{$startDate}' and data <= '{$endDate}'";
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