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

echo PHP_EOL;

// while loop

function EvenNumbersWhileLoop($start, $end, $step) {
    $current = $start;
    while ($current <= $end) {
        if ($current % 2 == 0) {
            echo $current;
            if ($current < $end - $step + 2) {
                echo ", ";
            }
        }
        $current += $step;
    }
}

echo "Using while loop: ";
EvenNumbersWhileLoop(1, 20, 1);

echo PHP_EOL;

function EvenNumbersDoWhileLoop($start, $end, $step) {
    $current = $start;
    do {
        if ($current % 2 == 0) {
            echo $current;
            if ($current < $end - $step + 2) {
                echo ", ";
            }
        }
        $current += $step;
    } while ($current <= $end);
}

echo "Using do-while loop: ";
EvenNumbersDoWhileLoop(1, 20, 1);