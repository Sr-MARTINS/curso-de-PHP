<?php

class Pessoa
{
    public $nome;
    public $idade;
    public $corOlhos;
    public $corPele;

    public function pele() 
    {
        if ($this->corPele){
            echo "Voce é uma pessoa cor negra";
        } else {
            echo "Voce é uma pessoa de cor clara";
        }
    }
}