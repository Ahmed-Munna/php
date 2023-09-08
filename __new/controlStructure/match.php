<?php
goto b;
$a = 'ddd';

$returnValue = match($a) {
    'name' => 'My Name is Munna',
    default => 'blablabal'
};

$b = 40;

$reVal = match(true) {
    $b > 20 => "bla",
};

$ar = 'name';
$arr = [
    'name' => 'Munna',
    'age' => 20
];
$reValu = match($ar) {
    'name' => $arr['name'],
};
echo $reValu;

b:
echo "blalbalsdk";