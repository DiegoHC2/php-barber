<?php

namespace Barber\adicionar\servico\src\service;
use Barber\adicionar\servico\src\service\NovoServico;

class VerificarExistenciaBanco
{
    private NovoServico $servico;
    private \mysqli $consulta;

    public function __construct(NovoServico $servico, \mysqli $consulta)
    {
        $this->servico = $servico;
        $this->consulta = $consulta;
        $this->verificarNoBanco();
    }

    private function verificarNoBanco() : ?\DomainException
    {
        $qr  = "SELECT * FROM  `servicos` where nome='{$this->servico->getNome()}'";
        $trigger = $this->consulta->query($qr);
        if($trigger->num_rows > 0 ) {
            $this->consulta->close();
            throw new \DomainException('Servico já cadastrado');
        }
        return null;

    }
}