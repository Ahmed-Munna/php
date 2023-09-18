<?php


class ParentClass {

    public static function personOne() {

        return "Person One";
    }
}

$parrentClass = ParentClass::personOne();

echo $parrentClass;