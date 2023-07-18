<?php

class Country {
    public function country(CountryInterface $name) {
        $name->display();
    }
}

interface CountryInterface {
    public function display();
}

class CountryName implements CountryInterface {
    public function display() {
        echo "Hello Bangladesh";
    }
}

$cn = new CountryName;

$cn->display();