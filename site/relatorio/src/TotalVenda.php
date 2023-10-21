<?php

namespace src;

interface TotalVenda
{
    public function pegarValorTotal(string $startDate, string $endDate);
}