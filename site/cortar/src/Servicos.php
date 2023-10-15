<?php

namespace src;

class Servicos
{
 private \mysqli $consulta;
    public function __construct(\mysqli $consulta)
    {
        $this->consulta = $consulta;
    }

    public function pegarServicosBancoDeDados() : ?array
    {
        $qr = "SELECT * FROM `servicos`";
        $trigger = $this->consulta->query($qr);
        if($trigger->num_rows > 0)
        {
            $resultado = [];
            $controlador = 0 ;
            while ($row = $trigger->fetch_array())
            {
                $resultado[$controlador]['nome'] = $row['nome'];
                $resultado[$controlador]['valor'] = $row['valor'];
                $resultado[$controlador]['id'] = $row['id'];
                $controlador++;
            }
            return $resultado;
        }
        return null;
    }
}