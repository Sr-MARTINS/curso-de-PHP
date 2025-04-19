<?php

    require_once 'Conta.php';

    class ContaCorrente extends Conta
    {
        // protected $saldoInicial;
        protected $limite;

        public function __construct($numero, $agencia, $titular, $saldo = 0, $limite = 0)
        {
            $this->numero   = $numero;
            $this->agencia  = $agencia;
            $this->titular  = $titular;
            $this->saldo    = $saldo;
            $this->limite   = $limite;

        }

        public function sacar($valor)
        {
            if($valor > $this->saldo) {
                $this->saldo = -$valor;

                $this->limete = $this->
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

    }