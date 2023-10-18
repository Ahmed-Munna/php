<?php

// Constructor Property Promotion

class Promotion {

    public function __construct(
        private int $id,
        private string $name,
    ) { 

         $this->id = $id;
         $this->name = $name;
    }

    public function getInfo(): mixed { 

        return $this->id . $this->name;
    }
}

echo (new Promotion(002, 'MunnaVau'))->getInfo();



// Constructor Property Promotion

// NOW
class Money {

    public function __construct(
        public int $amount,
        public string $currency
    ) {

        $this->amount = $amount;
        $this->currency = $currency;
    }
}