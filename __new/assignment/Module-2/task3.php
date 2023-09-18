<?php

//Break on Condition

function fibonacci($n, $first = 0, $second = 1, $count = 0) {

    for ($i = 0; $i < $n; $i++) {

        if ($first > 100) break;

        echo "$first, ";

        $first = $first + $second;
        $second = $count;
        $count = $first;
    }
    
}

fibonacci(10);
