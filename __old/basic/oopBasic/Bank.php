<?php

class Bank{
    private $fund;

    function __construct($money) {
        $this->fund = 0;
    }

    public function addFund($money) {
        $this->fund += $money;
    }

    public function deductFund($money) {
        $this->fund -= $money;
    }

    public function totalFund() {
        echo "Total Fund: " . $this->fund; 
    }

}

$bank = new Bank(0);
$bank->addFund(500);
$bank->deductFund(50);
// $bank->fund = 0;
$bank->totalFund();