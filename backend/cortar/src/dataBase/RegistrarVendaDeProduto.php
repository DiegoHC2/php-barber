<?php

namespace src\dataBase;

use src\Venda;

class RegistrarVendaDeProduto implements Venda
{
    private array $produtos;
    private float $valor;
    private \mysqli $consulta;

    public function __construct(array $produtos, \mysqli $consulta)
    {
        $this->produtos = $produtos;
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
                        '".addslashes($produto['produto']['nome'])."',
                         '".addslashes($produto['produto']['valor'])."', NOW()) ";
                $this->consulta->query($qr);
    }


}