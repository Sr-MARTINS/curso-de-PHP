<?php

namespace App\DAO;

use App\Model\PessoaModel;
use PDO;

class PessoaDAO extends DAO
{
    // private $conexao;

    public function __construct()
    {
        parent::__construct();
    }

    public function select() 
    {
        $sql = " SELECT * FROM pessoa ";

        $stmt = $this->conexao->query($sql);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function selectById($id)
    {
        $sql = " SELECT * FROM pessoa WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        
        return $stmt->fetchObject("App\Model\PessoaModel");
    }

    public function insert(PessoaModel $model)
    {
        $sql = " INSERT INTO pessoa (nome, cpf, data_nascimento) VALUES (?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(3, $model->data_nascimento);

        $stmt->execute();
    }

    public function update(PessoaModel $model)
    {
        $sql = " UPDATE pessoa SET nome=?, cpf=?, data_nascimento=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(3, $model->data_nascimento);
        $stmt->bindValue(4, $model->id);

        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = " DELETE FROM pessoa WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}