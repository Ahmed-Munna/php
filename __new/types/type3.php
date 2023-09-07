<?php


$localVar = 30;

function myFunc() {
    
    $localVar = 499;
    global $localVar;
    
    echo $localVar;
}
myFunc();