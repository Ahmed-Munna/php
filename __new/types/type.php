<?php


// $i = 214748364748222222222222222;
// $s = "asdfas";

// $x = 8 - 6.4;  // which is equal to 1.6
// $y = 1.6;

// echo var_dump($x == $y);


// $srt = array("laskd", "sdkf");

// // array destructure

// [$a, $b] = $srt;

// $srt = array(
//     'a' => "A",
//     'b' => "B",
// );
// ['a' => $a] = $srt;
// var_dump($a);


class myClass {
    public $a = 0;
    function myFunc() {
        print_r($this);
    }
}

$mc = new myClass();
$mc->myFunc();





