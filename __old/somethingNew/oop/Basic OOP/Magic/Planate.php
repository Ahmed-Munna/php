<?php

class Planate {
    public static function echoName() {
        echo static::getName();
    }

    public static function getName() {
        return "Earth\n";
    }
}

class March extends Planate {
    public static function getName() {
        return "March";
    }
}

 Planate::echoName();
 March::echoName();