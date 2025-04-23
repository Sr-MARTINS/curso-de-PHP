<?php

class PessoaDAO
{
    private $conexao;

    public $serveName = "localhost";
    public $dbName = "db_mvc";
    public $user = "root";
    public $password = "";

    public function __construct()
    {
        $dsn = "msql:host=$this->serveName;dbname=$this->dbName";
        $this->conexao = new PDO($dsn, $this->user, $this->password); 
    }

    public function select() 
    {

    }

    public function insert(PessoaModel $model)
    {
        $sql = "INSERT INTO pessoa (nome, cpf, data_nascimento) VALUES (?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(3, $model->data_nascimento);

        $stmt->execute();
    }

    public function update(PessoaModel $model)
    {

    }
}