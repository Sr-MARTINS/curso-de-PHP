<?php

class Caneta
{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampa;

    public function rabiscar() 
    {
        if($this->tampa == true){
            echo "<p>O obj esta tampado</p>";
        }else {
            echo "<p>Rabiscando...</p>";
        }
    }

    public function tampar() 
    {
        $this->tampa = false;
    }
    
    public function destampar()
    {
        $this->tampa = true;
        
    }
}

