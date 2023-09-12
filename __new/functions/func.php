<?php

// function myFunc() {

//     return function() {
//         echo "hello";
//     };
// }

// myFunc()();

$a = "hello";
function myFunc() {
    global $a;
    echo $a;
}

myFunc();
