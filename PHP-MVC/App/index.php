<?php

include 'Controller/PessoaController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url) 
{
    case "/":
        PessoaController::index();
        break;
    
    case '/pessoa':
        PessoaController::form();
        break;
    
    case '/pessoa/form':
        echo "formulario para salvar pessoas";
        break;

    case '/pessoa/form/save':
        PessoaController::save();
    
    default:
        echo "Erro 404";
        break;
}