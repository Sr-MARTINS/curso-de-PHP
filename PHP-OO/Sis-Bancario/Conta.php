<?php

    class Conta
    {
        protected $numero;
        protected $agencia;
        protected $titular;
        protected $saldo;

        public function __construct($numero, $agencia, $titular, $saldo = 0)
        {
            $this->numero   = $numero;
            $this->agencia  = $agencia;
            $this->titular  = $titular;
            $this->saldo    = $saldo;
        }
        public function getNumero()
        {
            return $this->numero;
        }

        public function getAgencia()
        {
            return $this->agencia;
        }

        public function getTitular()
        {
            return $this->titular;
        }

        public function getSaldo()
        {
            return $this->saldo;
        }
  

        public function depositar($valor)
        {
            // if($this->saldo < 0) {
                $this->saldo = $this->saldo + $valor;
            // } else {
            //     $this->saldo = $this->saldo + $valor;
            // }
            
            // echo "Valor depositado " .$valor ."<br>";

        }

        public function sacar($valor)
        {
            if ($valor > $this->saldo) {
                echo "Valor invalido";

            } else if ($this->saldo > 0 || $this->saldo >= $valor) {
                $this->saldo = $this->saldo - $valor;
                // echo "Valor retirado " .$valor ."<br>";
                // echo "Valor do saldo " .$this->saldo;
            
            } else {
                echo "Saldo Invalido";
            } 
        }

        public function transferir($valor, $destino)
        {
            if($valor <=  $this->saldo) {

            }
        }
    }