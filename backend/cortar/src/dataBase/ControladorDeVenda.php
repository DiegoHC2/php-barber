<?php

namespace src\dataBase;


class ControladorDeVenda
{
    private ?int $minutos;
    private ?array $produtos;
    private ?array $servicos;
    private float $valor;

    private \mysqli $consulta;

    public function __construct(?int $minutos, ?array $produtos, ?array $servicos, float $valor, \mysqli $consulta)
    {
        $this->minutos = $minutos;
        $this->produtos = $produtos;
        $this->servicos = $servicos;
        $this->valor = $valor;
        $this->consulta = $consulta;
    }

    public function registrarServico()
    {
        if($this->minutos == null && $this->servicos == null){
            $venda = new RegistrarVendaDeProduto($this->produtos, $this->valor, $this->consulta);
            $venda->registrarVenda();
            return true;
        }
        if($this->produtos == null)
        {
            $venda = new RegistrarVendaDeServico($this->servicos,$this->minutos,$this->valor,$this->consulta);
            $venda->registrarVenda();
            return true;
        }

    }


}