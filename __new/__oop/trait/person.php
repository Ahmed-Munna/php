<?php
namespace user;
include('check.php');

use user\Check;

class Person {

    public function myFunction() {

        Check::sayHello();
    }
}

(new Person) ->myFunction();