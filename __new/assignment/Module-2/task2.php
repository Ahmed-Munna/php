<?php

// Skip Multiples of 5
for ($i = 1; $i <= 50; $i++) {
    if ($i % 5 == 0) continue;

    echo $i . PHP_EOL;
}
