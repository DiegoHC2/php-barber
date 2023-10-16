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
            $resultado[$key]['produto'] = $this->produtosPorId($produto['idProduto']);
        }
        return $resultado;
    }
    private function produtosPorId(int $id)
    {
        $qr = "SELECT * FROM `produtos` WHERE id='{$id}'";
        $trigger = $this->consulta->query($qr);
        if($trigger->num_rows > 0)
        {
            $resultado = [];
            while($row = $trigger->fetch_array())
            {
                $resultado['nome'] = $row['nomeProduto'];
                $resultado['valor'] = $row['valor'];
            }
            return $resultado;
        }
        return null;
    }
    public function pegarServicosPorId(?array $idServicos)
    {
        if($idServicos == null) return null;
        $resultado = [];
        foreach ($idServicos as $key=>$servico)
        {
            $resultado[$key]['servico'] = $this->servicosPorId($servico['idServico']);
        }
        return $resultado;
    }
    private function servicosPorId(int $id)
    {
        $qr = "SELECT * FROM `servicos` WHERE id='{$id}'";
        $trigger = $this->consulta->query($qr);
        if($trigger->num_rows > 0)
        {
            $resultado = [];
            while($row = $trigger->fetch_array())
            {
                $resultado['nome'] = $row['nome'];
                $resultado['valor'] = $row['valor'];
            }
            return $resultado;
        }
        return null;
    }
}