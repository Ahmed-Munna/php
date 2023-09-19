<?php

class ParentClass {

    public static $name = "JODU, MODU, KODU";

    public static function getMyname() {

        echo self::$name;
    }
}

$parrentClass = new ParentClass;
echo $parrentClass->getMyname();
echo ParentClass::getMyname();

