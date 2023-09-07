<?php

$a =40;
define('PARSON', array(
    'name' => "Munna",
    'age' => "20"
));

function myFunc() {
    echo __LINE__.PHP_EOL;
    return PARSON['name'];
}

$b = array(2,4,5);
$c = array(3,1,2,4,5);
$d = $b + $c;
echo myFunc();
var_dump($d);