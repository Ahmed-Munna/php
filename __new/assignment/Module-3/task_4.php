<?php

// Multidimensional Array

$studentGrades = [
    "Student One" => [
        'Math' => 3.22,
        'English' => 2.45,
        'Science' => 3.50,
    ],
    "Student Two" => [
        'Math' => 3.00,
        'English' => 3.45,
        'Science' => 3.50,
    ],
    "Student Three" => [
        'Math' => 3.02,
        'English' => 2.59,
        'Science' => 3.50,
    ],
];

function avgGread($studentGrades) {

    foreach($studentGrades as $stdName => $subjects) {

    
        $res = 0;
        foreach($subjects as $result) $res += $result;
        $res = round($res/3, 2);
    
        echo "{$stdName}'s Avg => {$res} \n";
    }
}

avgGread($studentGrades);