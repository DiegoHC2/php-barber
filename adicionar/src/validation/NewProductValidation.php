<?php

namespace Barber\adicionar\src\validation;

use Barber\adicionar\src\Product;

class NewProductValidation
{
    private Product $product;
    public function __construct(Product $product){
        $this->product = $product;
    }
    public function verify(): void
    {
        if ($this->containsNumber($this->product->getNome())){
            throw  new \Exception("Nome caracteres inválidos.");
        }
    }
    private function containsNumber($str): bool
    {
        return preg_match('/\d/', $str) === 1;
    }
    private function onlyNumber($str): bool
    {
        return preg_match('/[0-9]*/', $str) === 1;
    }
}

