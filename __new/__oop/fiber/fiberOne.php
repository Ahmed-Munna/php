<?php

$fiber = new Fiber(function (): void {
    $value = Fiber::suspend("This is Fiber, ");
    echo "Value Use resumed user, ". $value . PHP_EOL;
});

echo $fiber->start();
$fiber->resume('Test');

