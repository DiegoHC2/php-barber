<?php

namespace Barber\editar\src;

use Barber\adicionar\src\Product as Product2;

class Product
{

    private \mysqli $consulta;
    public function __CONSTRUCT(\mysqli $consulta){
        $this->consulta = $consulta;
    }
    public function pegarProdutoPorId($id) : array
    {
        return $this->pegarNoBancoPorId($id);
    }
    private function pegarNoBancoPorId($id) : array
    {
        $qr = "SELECT * FROM produtos  WHERE id = {$id}";
        $geting = $this->consulta->query($qr);
         return $geting->fetch_array();
    }

    public function editarProduto(Product2 $product, int $id) : bool
    {

            if($this->consulta->query(
                "UPDATE produtos SET nomeProduto='{$product->getNome()}', quantidade={$product->getQuantidade()}, valor = {$product->getValor()} WHERE id={$id}"
            )) return true;
            return false;
    }

}