<?php

class Department {
    private $params = array();

    public function __construct($name, $std, $district) {
        $this->params['name'] = $name;
        $this->params['std'] = $std;
        $this->params['district'] = $district; 
    }

    public function __isset($name) {
        if(!isset($this->params[$name])) {
            echo "fuck You {$name}";
            return true;
        }
    }

    public function __get($name) {
        $this->params[$name];
    } 

    public function __set($name, $value) {
        echo $this->params[$name] = $value;
    }
}

$dep = new Department("Munna", '01', 'Barishal');
$dep->name = "Vau";
$dep->name = "LAYLA";

if(isset($dep->name)) {
    echo "Yes";
} else {
    echo "Fuck You";
}