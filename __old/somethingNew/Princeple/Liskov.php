<?php

interface Bird {
    public function eat();
    public function sleep();
}

interface WalkingBird extends Bird {
    public function walk();
}

interface FlyingBird extends Bird {
    public function fly();
}

class BirdManager {
    public function maintainBird(Bird $bird) {
        $bird->eat();
        $bird->sleep();
    }
    public function moveWalkingBird(WalkingBird $bird) {
        $bird->walk();
    }
    public function moveFlyingBird(FlyingBird $bird) {
        $bird->fly();
    }
}

class Sparrow implements FlyingBird {
    public function eat() {
        echo "Yes I can Eat";
    }
    public function sleep() {
        echo "Yes I can Sleep";
    }
    public function fly() {
        echo "Yes I can Fly";
    }
}

class Panguin implements WalkingBird {
    public function eat() {
        echo "Yes I can Eat";
    }
    public function sleep() {
        echo "Yes I can Sleep";
    }
    public function walk() {
        echo "Yes I can Walk";
    }
}