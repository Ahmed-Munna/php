<?php

// function myFunc() {

//     return function() {
//         echo "hello";
//     };
// }

// myFunc()();

// $a = "hello";
// function myFunc()
// {
//     global $a;
//     echo $a;
// }

// myFunc();

function makeCoffee($data = "undefined")
{
    echo $data;
}

makeCoffee(null);

// default argument

function makeTea($brand = "Local", $element = "Milk") {
    echo "$brand tea with $element is awesome ☕";
}

makeTea(element: "Othentic Milk");

function quote() {
    
    return func_get_args();
}

var_dump(quote("Nothing to says"));


