<?php

class Caneta
{
    public $modelo;
    public $cor;
    public $ponta;
    public $carga;
    public $tampa;

    function rabiscar() 
    {
        if($this->tampa){
            echo "<p>Rabiscar</p>";
        }else {
            echo "<p>O obj esta tampado</p>";
        }
    }

    function tampar() 
    {
        $this->tampa = false;
    }
    
    function destampar()
    {
        $this->tampa = true;
        
    }
}

