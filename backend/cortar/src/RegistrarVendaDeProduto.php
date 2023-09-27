<?php

namespace src;

class RegistrarVendaDeProduto implements Venda
{
    private array $produtos;
    private float $valor;
    private \mysqli $consulta;

    public function __construct(array $produtos, float $valor, \mysqli $consulta)
    {
        $this->produtos = $produtos;
        $this->valor = $valor;
        $this->consulta = $consulta;
    }
    public function registrarVenda()
    {
        foreach ($this->produtos as $produto) {
            $this->registrarnoBd($produto);
        }
        return true;
    }
    private function registrarnoBd($produto)
    {
                $qr = "INSERT INTO `log_venda_produto` (`produto`, `valor`, `data`)
                VALUES (
                        '".addslashes($produto)."',
                         '".addslashes($this->valor)."', NOW()) ";
                $this->consulta->query($qr);
    }
}