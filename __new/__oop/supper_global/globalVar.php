<?php

$GLOBALS['input-1'] = 'Value-One';
$GLOBALS['input-2'] = 'Value-Two';

$_GET['a'] = 'a';
class GlobalVar {

    public static function showTheGlobs() {

        foreach ( $GLOBALS as $k => $v ) {

            echo $k .' => '. print_r($v) .PHP_EOL;
        }
    }
}

echo GlobalVar::showTheGlobs();


