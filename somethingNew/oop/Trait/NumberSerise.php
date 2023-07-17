<?php

trait NumberSeriseOne {
    public function numberOne () {
        echo "Number serese One\n";
    }
    public function numberTwo () {
        echo "Number serese Two\n";
    }
}

trait NumberSeriseTwo {
    use NumberSeriseOne;

    public function numberThree () {
        echo "Number serese Three\n";
    }

    public function numberFour () {
        echo "Number serese Four";
        parent::numberFour();
    }
}

class NewNumberSerease {
    public function numberFour () {
        echo "New Number serese Four";
    }
}

class Main extends NewNumberSerease{
    use NumberSeriseTwo;
}

$main = new Main;

//$main->numberOne();
$main->numberFour();