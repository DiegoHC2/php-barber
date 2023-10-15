<?php

namespace src\dataBase;

class BancoDeDados
{
    private \mysqli $consulta;

    /**
     * @param \mysqli $consulta
     */
    public function __construct(\mysqli $consulta)
    {
        $this->consulta = $consulta;
    }

    public function pegarProdutosPorId(?array $idProdutos)
    {
        $resultado = [];
        foreach ($idProdutos as $key=>$produto)
        {
            $resultado[$key]['nome'] = $this->produtosPorId($produto['idProduto']);
        }
        return $resultado;
    }
    private function produtosPorId(int $id)
    {
        $qr = "SELECT * FROM `produtos` WHERE id='{$id}'";
        $trigger = $this->consulta->query($qr);
        if($trigger->num_rows > 0)
        {
            while($row = $trigger->fetch_array())
            {
                return $row['nomeProduto'];
            }
        }
        return null;
    }
    public function pegarServicosPorId(?array $idServicos)
    {
        $resultado = [];
        foreach ($idServicos as $key=>$servico)
        {
            $resultado[$key]['nome'] = $this->servicosPorId($servico['idServico']);
        }
        return $resultado;
    }
    private function servicosPorId(int $id)
    {
        $qr = "SELECT * FROM `servicos` WHERE id='{$id}'";
        $trigger = $this->consulta->query($qr);
        if($trigger->num_rows > 0)
        {
            while($row = $trigger->fetch_array())
            {
                return $row['nome'];
            }
        }
        return null;
    }
}