<?php

final class FinalClass {

    public function myFunction() {

        echo "This is myFunction\n";
    }

    final public function myFinalFunction() {

        $this->myFunction();

        echo "This is the Final Function";
    }

    public function anotherFunction() {

        echo "This is Another Function";
    }
}

$finalClass = new FinalClass;

$finalClass->myFinalFunction();