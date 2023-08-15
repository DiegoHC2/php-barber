<?php
namespace Barber\adicionar\config;
class Connection
{
    private \mysqli $mysqli;
    public function dbConnect(): \mysqli
    {
        $this->mysqli = new \mysqli("localhost","root","","newbarber");
        return $this->mysqli;
    }
}