<?php

trait Person{

    public function perAge() {
        echo "Name: " . $this->perName() . "Age: " . 20;
    }

    private function perName() {
        echo 'MunnaVau';
    }

}

class SinglePerson {
    use Person;
}

(new SinglePerson) -> perAge();