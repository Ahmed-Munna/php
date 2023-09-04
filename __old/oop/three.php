<?php

 class car{
    function body() {
        echo "This is cars Body</br>";
    }
    function wheel() {
        echo "This is cars wheel</br>";
    }
 }
 class bmw extends car{
    function seat() {
        echo "This is seat</br>";
    }
    function engine() {
        echo "This is car engin</br>";
    }
 }
 $cars = new bmw;

 $cars -> body();