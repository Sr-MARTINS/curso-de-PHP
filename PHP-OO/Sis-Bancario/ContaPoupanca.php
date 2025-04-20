     <?php

    require_once 'Conta.php';

    class ContaPoupanca extends Conta{

        protected $taxaJuro;
        // protected $saldoInicial;

        public function __construct($numero, $agencia, $titular, $saldo = 0, $taxaJuro = 0)
        {
            $this->numero   = $numero;
            $this->agencia  = $agencia;
            $this->titular  = $titular;
            $this->saldo    =  $saldo;
            $this->taxaJuro = $taxaJuro;

        }

        public function rendaJuro($meses = 1) 
        {
            $mensal = $this->saldo * ($this->taxaJuro / 100) * $meses;

            $this->saldo = $this->saldo + $mensal;

        }
        
        public function getTaxaJuro()
        {
            return $this->taxaJuro;
        }
        public function setTaxaJuro($taxaJuro)
        {
            $this->taxaJuro = $taxaJuro;
        }
    }