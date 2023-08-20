<?php

namespace Barber\adicionar\src;

use Barber\adicionar\src\validation\NewProductValidation;

class Product
{
    protected string $nome;

    protected int $quantidade;
    protected float $valor;
    public function __construct(string $nome, int $quantidade, float $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
        $this->quantidade = $quantidade;
    }
    public function getNome(): string
    {
        return $this->nome;
    }
    public function getQuantidade(): int
    {
        return $this->quantidade;
    }
    public function getValor(): float
    {
        return $this->valor;
    }

}