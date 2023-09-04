<?php 

interface BaseName {
    public function displayName();
}

class Name implements BaseName{

    public $name;

    public function __construct($name) {
        $this->name = $name;
    } 

    public function displayName() {
        echo $this->name;
    }

}

class Title implements BaseName{

    public $title;

    public function __construct($title) {
        $this->title = $title;
    } 

    public function displayName() {
        echo $this->title;
    }

}

// class StudentManage {
//     public function introduceStd($name) {
//         $std = new Name($name);
//         $std->displayName();
//     }
// }

class StudentManage {
    public function introduceStd(BaseName $name) {
        $name->displayName();
    }
}

$std = new Name("OMG");
$stt = new Title("Mr.");

$mngStd = new StudentManage;

$mngStd->introduceStd($stt);

