<?php

namespace src;
class Produtos
{
    private \mysqli $consulta;

    public function __construct(\mysqli $consulta)
    {
        $this->consulta = $consulta;
    }

    private array $resultado;
    public function pegarProdutosDoBancoDeDados() : ?array
    {
        $qr = "SELECT * FROM `produtos`";
        $trigger = $this->consulta->query($qr);
        if($trigger->num_rows > 0)
        {
            $controlador = 0;
            while($row = $trigger->fetch_array())
            {
                $this->resultado[$controlador]['nome'] = $row['nomeProduto'];
                $this->resultado[$controlador]['id'] = $row['id'];
                $this->resultado[$controlador]['valor'] = $row['valor'];
                $controlador++;
            }
            return $this->resultado;
        }
        return null;
    }
}