<?php

namespace App\Controller;

use App\Model\PessoaModel;

class PessoaController
{
    public static function index()
    {
        $model = new PessoaModel();
        $model->getAllRows();
        
        include 'View/modules/Pessoas/ListaPessoa.php';
    }

    public static function form()
    {
        $model = new PessoaModel();

        if(isset($_GET['id'])) {

            $model = $model->getById((int) $_GET['id']); 
        }

        include_once 'View/modules/Pessoas/FromPessoa.php';
    }

    public static function save()
    {
        $model = new PessoaModel();
        
        $model->id              = $_POST['id'];
        $model->nome            = $_POST['nome'];
        $model->cpf             = $_POST['cpf'];
        $model->data_nascimento = $_POST['data_nascimento'];
    
        $model->save();

        header("Location: /pessoa");
    }

    public static function delete()
    {
        $model = new PessoaModel();
        $model->delete( (int) $_GET['id']);

        header("Location: /pessoa");
    }
}