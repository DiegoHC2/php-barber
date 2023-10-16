<?php

namespace src\dataBase;


class ControladorDeVenda
{
    private ?int $minutos;
    private ?array $produtos;
    private ?array $servicos;
    private float $valor;

    private \mysqli $consulta;

    public function __construct(?array $produtos, ?array $servicos, \mysqli $consulta)
    {
        $this->produtos = $produtos;
        $this->servicos = $servicos;
        $this->consulta = $consulta;
    }

    public function registrarServico()
    {
        if($this->produtos != null && $this->servicos == null){
            $venda = new RegistrarVendaDeProduto($this->produtos, $this->consulta);
            $venda->registrarVenda();
            return true;
        }
        if($this->produtos == null && $this->servicos != null)
        {
            $venda = new RegistrarVendaDeServico($this->servicos,$this->consulta);
            $venda->registrarVenda();
            return true;
        }
        if($this->produtos != null && $this->servicos != null)
        {
            $venda = new RegistrarVendaDeServico($this->servicos,$this->consulta);
            $venda->registrarVenda();
            $venda = new RegistrarVendaDeProduto($this->produtos, $this->consulta);
            $venda->registrarVenda();
            return true;
        }
    }


}