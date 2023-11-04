<?php

namespace src;

class VendaProduto
{
    private \mysqli $consulta;

    public function __construct(\mysqli $consulta)
    {
        $this->consulta = $consulta;
    }

    public function pegarValorTotalVenda(string $startDate, string $endDate) : ?float
    {
        $qr = "SELECT sum(valor) as total FROM `log_venda_produto` WHERE data >= '{$startDate}' and data <= '{$endDate}'";
        $trigger = $this->consulta->query($qr);
        if($trigger->num_rows > 0)
        {
            while($row = $trigger->fetch_array())
            {
                return $row['total'];
            }
        }
        return null;
    }
}