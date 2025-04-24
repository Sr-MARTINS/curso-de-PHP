<?php

namespace App\Controller;

abstract class Controller
{
    protected static function render($view, $model = null)
    {
        // $arquivo_view = "View/modules/$view.php";
        $arquivo_view = VIEWS . $view . ".php";
        
        // var_dump($arquivo_view) ."<br>";
        // exit;

        if(file_exists($arquivo_view)) {
            $arquivo_view;
        }else {
            exit ('Arquivo da View nao encontrado. Arquivo: ' .$view);
        }

        include "View/modules/$view.php";
    }
}