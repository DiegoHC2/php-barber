<?php

namespace src\dataBase;

use src\Venda;

class RegistrarVendaDeServico implements Venda
{
    private array $servicos;
    private int $minutos;
    private float $valor;
    private \mysqli $consulta;

    public function __construct(array $servicos, int $minutos, float $valor, \mysqli $consulta)
    {
        $this->servicos = $servicos;
        $this->minutos = $minutos;
        $this->valor = $valor;
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
        '".addslashes($servico['nome'])."',
        {$this->valor},
         {$this->minutos}, NOW())";

        $this->consulta->query($qr);
    }

}