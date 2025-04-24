<?php

// $test = dirname(__FILE__);

    //CAMINHA DE DIRETORIO
define('BASEDIR', dirname(__FILE__) ."/../");
define('VIEWS', dirname(__FILE__) ."/View/modules/");
// echo BASEDIR ."<br>";

    //CONEXAO-BANCO
$_ENV['db']['host']     = 'localhost';
$_ENV['db']['user']     = 'root';
$_ENV['db']['password'] = '';
$_ENV['db']['dbname']   = 'db_mvc';
