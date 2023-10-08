<?php

namespace Barber\src;

use Barber\adicionar\config\Connection;

class BancoDeDados
{
    private \mysqli $consulta;
    private array $array;
    private int $control;

    public function __CONSTRUCT(\mysqli $consulta)
    {
        $this->consulta = $consulta;
    }
    public function pegarTodosProdutos() : ?array
    {
        $qr = "SELECT * FROM `produtos`";
        $retorno = $this->consulta->query($qr);
        $this->control = 0;
        while($row = $retorno->fetch_array()){
            $this->array[$this->control]['id'] = $row['id'];
            $this->array[$this->control]['nomeProduto'] = $row['nomeProduto'];
            $this->array[$this->control]['quantidade'] = $row['quantidade'];
            $this->array[$this->control]['valor'] = $row['valor'];
            $this->array[$this->control]['dataCompra'] = $row['dataCompra'];
            $this->control++;
        }

        return ($this->array ?? null);


    }
}