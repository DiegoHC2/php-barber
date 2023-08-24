<?php

namespace src;


class addProduct
{
    private Product $product;
    private \mysqli $mysqli;

    private string $query1;

    public function __CONSTRUCT(Product $product, \mysqli $mysqli)
    {
        $this->product = $product;
        $this->mysqli = $mysqli;
    }

    public function add(): void
    {
        try {
            $this->mysqli->query(
                "INSERT INTO produtos (nomeProduto, quantidade, valor) VALUES ('" .
                addslashes($this->product->getNome()) . "', " .
                addslashes($this->product->getQuantidade()) . ", " .
                addslashes($this->product->getValor()).")"
            );
        } catch (Exception $e){
            echo "Inserir log error";
        }
    }
}