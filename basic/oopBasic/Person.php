<?php

class Person {

    public $name;
    public $subject;
    public $id;

    public function __construct(string $stdName , string $stdSubject, int $stdId) {
        $this->name = $stdName;
        $this->subject = $stdSubject;
        $this->id = $stdId;
    }

    public function info() {
        echo 'Name: ' . $this->name . "\n";
        echo 'Subject: ' . $this->subject . "\n";
        echo 'Student ID: ' . $this->id. "\n";
    }


}

$std_01 = new Person('Munna', "BSc in CSE", 101030);

$std_01->info();