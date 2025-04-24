<?php

spl_autoload_register(function( $nome_da_class) {

    $arquivo = BASEDIR . $nome_da_class .'.php';
    // var_dump($nome_da_class) ."<br>";
    // var_dump($arquivo) ."<br>";
    // exit;

    if(file_exists($arquivo)) 
    {
        include $arquivo;

    } else {
        exit("Aquirvo nao encontrado; Arquivo: " .$arquivo);
    }

    // echo "Tentou incluir a " .$nome_da_class ."<br>";
    // Tentou incluir a App\Controller\PessoaController
    // C:\xampp\htdocs\cursoPHP\PHP-MVC\App App\Controller\PessoaController

    // echo dirname(__FILE__) ."<br>";
    // $class_controller = 'Controller/' .$nome_da_class .".php";
    // $class_model      = 'Model/' .$nome_da_class .".php";
    // $class_dao        = 'DAO/' .$nome_da_class .".php";


    // include '../' . $nome_da_class .".php";

    // if(file_exists($class_controller)) 
    // {
    //     include $class_controller;

    // } elseif (file_exists($class_model)) 
    // {
    //     include $class_model;
    
    // } elseif (file_exists($class_dao))
    // {
    //     include $class_dao;
    // }
});