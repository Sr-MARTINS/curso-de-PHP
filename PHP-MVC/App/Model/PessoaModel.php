<?php

class PessoaModel
{
    public $id, $nome, $cpf, $data_nascimento;

    public $rows;

    public function save()
    {
        $dao = new PessoaDAO();

        if (empty($this->id)) {
            $dao->insert($this);
        } else {
            $dao->update($this);
        }
    }

    public function getAllRows()
    {
        $dao = new PessoaDAO();

        $this->rows = $dao->select();
    }

    public function getById($id)
    {
        $dao = new PessoaDAO();

        $obj = $dao->selectById($id);

        if(isset($obj)) {
            return $obj;
        } else {
            return new PessoaModel();
        }
    }

    public function delete(int $id)
    {
        $dao = new PessoaDAO();

        $dao->delete($id); 
    }
}