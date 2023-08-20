<?php

namespace Barber\deletar\src;

use http\Header;

class DeletarProduto
{
    private \mysqli $consulta;
    public function __CONSTRUCT(\mysqli $consulta){
        $this->consulta = $consulta;
    }

    public function deletarPorId(int $id) : Header
    {
        $qr = "DELETE FROM produtos WHERE id = {$id}";

        if($this->consulta->query($qr)){
            header("Location: http://localhost:8080/produtos?success=delete");
        } else {
            header("Location: http://localhost:8080/produtos?error=delete");
        };
    }
}