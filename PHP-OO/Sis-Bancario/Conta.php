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
        public function setSaldo($saldo)
        {
            $this->saldo = $saldo;
        }
  

        public function depositar($valor)
        {
           if($valor <= 0) {
                echo "Deposito Invalido <br>";
           }

           $this->saldo = $this->saldo + $valor;
           echo "Deposito Valido <br>";
        }

        public function sacar($valor)
        {
            if ($this->saldo > 0 || $this->saldo >= $valor) {
                $this->saldo = $this->saldo - $valor;

                echo "Valor retirado " .$valor ."<br>";
                echo "Valor do saldo " .$this->saldo;
            
            } else {
                echo "Saldo invalido";
            } 
        }

        public function transferir($valor, $destino)
        {
            if($valor > 0 || $valor <= $this->saldo) {
                $this->saldo = $this->saldo - $valor;

                $destino->depositar($valor);
                echo "Transferencia ok";
            
                // var_dump($destino);
            } else {
                echo "Erro transferencia ";
            }

        }

    }