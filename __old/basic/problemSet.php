<?php

// write a program to find maximum and minimum among three numbers using conditional/ternary operator

    /*
        $var1 = 30; $var2 = 49; $var3 = 50;

        if($var1 > $var2 && $var1 > $var3) {

            echo "Maximum Value 1 Is: {$var1}";

        } elseif($var2 > $var1 && $var2 > $var3) {

            echo "Maximum value 2 Is: {$var2}";

        } else {

            echo "Maximum value 3 Is: {$var3}";

        }
        
        if($var1 < $var2 && $var1 < $var3) {

            echo "Minimum Value 1 Is: {$var1}";

        } elseif($var2 < $var1 && $var2 < $var3) {

            echo "Minimum value 2 Is: {$var2}";

        } else {

            echo "Minimum value 3 Is: {$var3}";

        }
    */

    /*

        $a = 3; $b = 5; $c = 7; $d; $e;

        $d = $a > $b ? ($a > $c ? $a : $c) : ($b > $c ? $b : $c);
        $e = $a < $b ? ($a < $c ? $a : $c) : ($b < $c ? $b : $c);

        echo "Max : {$d} Min : {$e}";

    */

    // write a program to check whether a number is even or odd

    /*
        $a = 20;

        $b = $a % 2 == 0 ? "Even" : "ODD";
        
        echo $b;
    

        $a = 38;

        if($a % 2 == 0) {
            each "Even Number";
        }else {
            echo "Odd Number";
        }
    */    

// write a program to check whether a year is leap year or not using conditional/ternary operator

    /*
        $year = 2013;

            if($year % 4 == 0 || $year % 400 == 0) {
                
                echo "{$year} is Leap Year";

            } else {
                
                echo "{$year} is Not Leap Year";

            }
    */

// write a program to check whether charecter is an alphabet or not

    /*
        $var = "Something";

        if(is_numeric($var)) {

            echo "Yes This is Numaric";

        } elseif(ctype_alpha($var)) {

            echo "Yes this is Alphabateic";

        } else {

            echo "This Spacial Charecter";

        }
    */


// write a c program to check whether a number is negative, positive or zero

    /*
        $number = 110;

        if($number % 2 == 0) {

            echo "This Even Number";

        }else {

            echo "This odd Number";

        }
    */

// write a program to check whether a number is divisible by 5 and 11 or not

    /*
        if($number % 5 == 0 && $number % 11 == 0) {

            echo "{$number} is currect Number";

        }else {

            echo "This is not currect Number";

        }
    */

// write a program to input any alphabet and check whether it is vowel or consonant

    /*
        $alpha = "A";
        $s = 0;
        if(ctype_alpha($alpha)) {

            $s = $alpha == "a" || $alpha == "e" || $alpha == "i" || $s == "o" || $alpha == "u" || $alpha == "A" || $alpha == "E" || $alpha == "I" || $alpha == "O" || $alpha == "U";

            if($s) {

                echo "This is Vowel";

            }else {
                echo "This is Alphabatic But consonent";
            }

        }else {

            echo "Not Alphabatic..!";

        }
    */




?>