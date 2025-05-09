<?php

namespace App\DAO;

use \PDO;

abstract class DAO
{
    protected $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=" .$_ENV['db']['host'] .";dbname=" .$_ENV['db']['dbname'];
        
        $this->conexao = new PDO($dsn, $_ENV['db']['user'], $_ENV['db']['password']); 
    }
}