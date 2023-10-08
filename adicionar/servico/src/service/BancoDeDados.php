<?php

namespace Barber\adicionar\servico\src\service;

class BancoDeDados
{
    private \mysqli $consulta;
    private NovoServico  $servico;
    public function __construct(\mysqli $consulta, NovoServico $servico)
    {
        $this->consulta = $consulta;
        $this->servico = $servico;
    }

    public function salvar() : bool
    {
        $qr="INSERT INTO `servicos` (`nome`, `valor`) VALUES ('{$this->servico->getNome()}', '{$this->servico->getValor()}')";
        if($this->consulta->query($qr)){
            return true;
        }
        return false;
    }

}