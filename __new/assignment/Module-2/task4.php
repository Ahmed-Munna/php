<?php

//  Fibonacci Series printing using a Function

function fibonacci($n, $first = 0, $second = 1, $count = 0) {
    if ($count < $n) {
        echo "$first, ";

     fibonacci($n, $second, $first + $second, $count + 1);
    }
}

fibonacci(15);