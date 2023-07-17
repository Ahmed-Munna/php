<?php
class Color {
    public $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function setColor2($data) {
        $this->data = $data;
    }
}
class FavColor {

    public $color;
    public $data;
    public function __construct($color, $data) {
        $this->color = $color;
        $this->data = new Color($data);
    }

    public function setColor($color) {
        $this->data->setColor2($color);
    }

    public function __clone() {
        $this->data = clone $this->data;
    }
}

$FC1 = new FavColor("Blue", "Black");
print_r($FC1);

$FC2 = clone $FC1;
$FC2->setColor("Red");

print_r($FC2);
print_r($FC1);