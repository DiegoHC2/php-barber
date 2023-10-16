<?php

namespace src\dataBase;

use src\Venda;

class RegistrarVendaDeServico implements Venda
{
    private array $servicos;
    private float $valor;
    private \mysqli $consulta;

    public function __construct(array $servicos, \mysqli $consulta)
    {
        $this->servicos = $servicos;
        $this->consulta = $consulta;
    }

    public function registrarVenda()
    {
        foreach ($this->servicos as $servico) {
            $this->registrarBd($servico);
        }
    }
    private function registrarBd($servico)
    {
        $qr = "INSERT INTO `log_venda_servico` (`servico`, `valor`, `minutos`, `data`)
VALUES (
        '".addslashes($servico['servico']['nome'])."',
        {$servico['servico']['valor']},
         1, NOW())";

        $this->consulta->query($qr);
    }

}