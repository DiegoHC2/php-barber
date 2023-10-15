<?php

namespace src;

class Filtro
{
    private array $post;

    public function __construct(array $post)
    {
        $this->post = $post;
    }

    public function tratarProdutos()  : ?array
    {
        $resultado = [];
        for ($i = 0; $i <= $this->post['quantidade_produtos']; $i ++)
        {
           if(!isset($this->post["produto{$i}"]))
           {
               continue;
           }
           $resultado[$i]['idProduto'] = $this->post["produto{$i}"];

        }
        return empty($resultado) ? null : $resultado;
    }

    public function tratarServicos() : ?array
    {
        $resultado = [];
        for ($i = 0; $i <= $this->post['quantidade_servico']; $i ++)
        {
            if(!isset($this->post["servico{$i}"]))
            {
                continue;
            }
            $resultado[$i]['idServico'] = $this->post["servico{$i}"];

        }

        return empty($resultado) ? null : $resultado;
