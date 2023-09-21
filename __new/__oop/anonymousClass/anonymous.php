<?php

// var_dump(new class {

//     public $var = "whatever";
//     public function myFunc() {

//         echo "Hello World";
//     }
// });


class ParentClass {

    protected $firstPerson;

    public function __construct($person) {

        $this->firstPerson = $person;
    }

    public function personName() {

        return new class($this->firstPerson) {

            private $myPerson;
            
            public function __construct($firstPerson) {

                $this->myPerson = $firstPerson;
            }  
            public function showPerson() {

                echo $this->myPerson;
            }
        };
    }
}

$myclass = new ParentClass("AhmedMunna");

$myclass->personName()->showPerson();