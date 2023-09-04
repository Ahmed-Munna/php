<?php

abstract class car{
   abstract function body();
    function wheel() {
        echo "This is cars wheel</br>";
    }
 }
 class bmw extends car{
    function body() {
        echo "This is cars Body</br>";
    }
    function seat() {
        echo "This is seat</br>";
    }
    function engine() {
        echo "This is car engin</br>";
    }
 }
 $cars = new bmw;

 $cars -> body();