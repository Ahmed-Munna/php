<?php

class ItaratorsOne {

    public $var1 = 'Hello one';
    public $var2 = 'Hello Two';
    public $var3 = 'Hello Three';

    protected $var4 = 'I am protected';
    private $var5 = 'I am privet';

    public function userCreatedItarator() {

        echo 'I am from Itarator one';

        foreach ($this as $key => $value) {
            
            echo $key . ' => ' . $value . PHP_EOL;
        }
    }
}

foreach ((new ItaratorsOne) as $key => $value) {

    echo $key . ' => '. $value . PHP_EOL;
};




