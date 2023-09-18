<?php

// Looping with Increment using a Function
function EvenNumbers($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo "$i, ";
        }
    }
}

echo "Using for loop: ";
EvenNumbers(1, 20, 1);