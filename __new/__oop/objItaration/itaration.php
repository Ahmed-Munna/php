<?php

class myItaration {
    protected $myvar1 = "alsdkf";
    protected $myvar2 = "bd";

    public function myFunc() {

        echo "blksdfjalsf";
    }
}
class Itaration {

    private $var1 = "Variable One";
    private $var2 = "Variable Two";
    private $var3 = "Variable Three";
    
    private $var4 = [3,3,5];

    public function objIrarator() {

        foreach($this as $key => $value) {

            echo $key. " => " .$value.PHP_EOL;
        }
    }
}

$cls = new Itaration();

$cls->objIrarator();
