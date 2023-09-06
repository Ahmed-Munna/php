<?php
// array copy by valu;
$arr1 = [1,2,3,4];
$arr2 = [5,6,7,8];

$arr3 = [...$arr1, ...$arr2, 9,0];
$arr1[4] = 44;

// print_r($arr1);
// print_r($arr3);

// copy by reffrence
$myarr1 = [1,2];
$myarr2 = [3,4];

$myarr3 = [&$myarr1, &$myarr2];

$myarr1[2] = 22;

print_r($myarr3);