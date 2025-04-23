<?php

    require_once 'Conta.php';

    class ContaCorrente extends Conta
    {

        protected $limite;

        public function __construct($numero, $agencia, $titular, $saldo = 0, $limite = 0)
        {
            $this->numero   = $numero;
            $this->agencia  = $agencia;
            $this->titular  = $titular;
            $this->saldo    = $saldo;
            $this->limite   = $limite;

        }
        public function depositar($valor)
        {
            if($this->saldo < 0) {
                $this->limite = $this->limite + $valor; 
                $this->saldo = $this->saldo + $valor;
                
                if($this->saldo > 0) {
                    $this->limite = $this->limite - $valor;
                }

            } else {
                $this->saldo = $this->saldo + $valor;
            }

        }

        public function sacar($valor)
        {
            if($valor <= ($this->saldo + $this->limite)) {
               if ($valor <= $this->saldo) {
                    $this->saldo =  $this->saldo - $valor;
               
                } else {
                    $sub = $valor - $this->saldo; 
                    $this->saldo = -$sub;         
                    $this->limite = $this->limite - $sub; 
                }
            
            } else {
                echo "sem saldo";
            }

        }


        public function getLimite()
        {
            return $this->limite;
        }
        public function setLimite($limite)
        {
            $this->limite = $limite;
        }

        static public function exemplo(){
            echo "conta corrente";
        }
    }