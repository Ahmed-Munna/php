<?php

// Array Sorting  

$grades = [85, 92, 78, 88, 95];

function arrSort(&$grades) {

    rsort($grades);
}

arrSort($grades);
print_r($grades);
