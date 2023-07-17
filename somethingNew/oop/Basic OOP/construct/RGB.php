<?php

class RGB {

    private $color;

    public function __construct($color = '') {
        $this->color = ltrim($color, "#");
    }

    public function setRGB() {

        $rgb = sscanf($this->color, '%02x%02x%02x');

        print_r($rgb);
    }

}

$colour = new RGB("ff00aa");
$colour->setRGB();