<?php

//Array Manipulation

$numbers = [1,2,3,4,5,6,7,8,9,10];

function arrMaipulation($numbers) {

    $arr = array_filter($numbers, function($num) {
        
        return $num % 2 != 0;
    });

    print_r($arr);
}

arrMaipulation($numbers);