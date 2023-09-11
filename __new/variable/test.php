<?php

// Task 1: Variable
$age = 20;

// Task 2: Constant
define("PI", 3.14159);

// Task 3: Printing Output
echo "Hello, welcome to the world of PHP programming!".PHP_EOL;

//Task 4: Arithmetic Operations
$result = ((20 + 5) * 3) / 4;

print($result.PHP_EOL);

//Task 5: Conditional Operators

$marks = 70;

if ($marks >= 60 && $marks < 80) {
    echo "Passed";
} else {
    echo "Failed";
}

// using tarnary oparator

echo ($marks >= 60 && $marks < 80) ? "Passed" : "Failed";
