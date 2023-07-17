<?php

class Col {

    public $color;

    public function __construct($color) {
        $this->color = $color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function __toString() {
        return "{$this->color}";
    }
}

$col = new Col("GREEN");

echo $col;
