<?php

    /*
        function is_evenorodd($i) {

            if ($i % 2 == 0) {
                return "Even";
            }

            return "Odd";


        }

        echo is_evenorodd(505);

    

        function factorial ($n) {

            $result = 1;

            for ($i = $n; $i > 1; $i--) {

                $result *= $i;

            }

            return $result;

        }

        echo factorial(5);
        

        function sum(int ...$n):int {

            $result = 0;
            $cou = count($n);

            for ($i = 1; $i < $cou; $i++) {

                $result += $n[$i];
                
            }

            return $result;
            
        }

        echo sum(5, 5, 80, 41, 32);
    */

    function reca($start, $end) {

        if ($start > $end) {

            return;

        }

        echo $start."\n";

        $start++;

        reca($start, $end);

    }

    reca(0,20);















?>