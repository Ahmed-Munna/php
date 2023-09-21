<?php

trait PersonOne {

    public function sayHi() {

        echo "Hi Person One";
    }

    public function activity() {

        echo "Nothing..";
    }
}

trait PersonTwo {

    public function sayHi() {

        echo "Hi Person Two";
    }

    public function eat() {
        
        echo "I am eationg";
    }
}

class Person {

    use PersonOne,PersonTwo {
        
        PersonTwo::sayHi insteadof PersonOne;
    }

}

$person = new Person;

$person->sayHi();