<?php

class MyFirstClass {

    public $myName = "Ahmed Munna";

    public function myInfo() {
        return $this->myName;
    }
}

class EchoFunc {

    public function myEchoFunc() {
        return "Hello";
    }
}


$EchoFunc = new (EchoFunc::class);

echo $EchoFunc->myEchoFunc();
