<?php

class stringUtility{

    private $str;
    private $search;

    function __construct($str) {
        $this->str = $str;
    }

    function search($string) {
        $this->search = $string;
        return $this;
    } 

    function replace($replace) {
        $this->str = str_replace($this->search, $replace, $this->str);
        return $this;
    }

    function upperCase() {
        $this->str = strtoupper($this->str);
        return $this;
    }

    function display() {
        echo $this->str;
    }
}

$str = new stringUtility("Hello World");

$str->search('Hello')
    ->replace('Hi')
    ->upperCase()
    ->display();

