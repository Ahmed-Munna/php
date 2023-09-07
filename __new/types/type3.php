<?php


$localVar = 30;

myFunc();
function myFunc() {

    $localVar = 499;
    global $localVar;
    echo $localVar;
}