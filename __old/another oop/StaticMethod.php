<?php

class StaticMethod {

    static $name;
    static $department;

    function __construct($sname, $departments) {
        self::$name = $sname;
        self::$department = $departments;
    }


    static function info($name, $dep) {
        echo 'Name: ' . self::$name = $name . ' Department: ' . self::$department = $dep . "\n";
    }

}

StaticMethod::info('Munna', 'BSc in CSE');


class A {
    static function sayHi() {
        echo 'Hi From A';
    }
}

class B extends A{
    static function sayHi() {
        echo "Hi From B \n";

        parent::sayHi();
    }
}

B::sayHi();