<?php

// First Question answer
class Person {
    private $name;
    private $age;

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce() {
        echo "My name is {$this->name} and I am {$this->age} years old.\n";
    }
}

$person1 = new Person("John ", 30);
$person1->introduce();

// Second Question answer
class Persons {
    protected $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce() {
        echo "My name is {$this->name}, I am {$this->age} years old.\n";
    }
}

class Student extends Persons {
    private $mark;

    public function __construct($name, $age, $mark) {
        parent::__construct($name, $age);
        $this->mark = $mark;
    }

    public function calculate_grade_percentage() {
        $percentage = ($this->mark / 100) * 100;
        return "{$percentage}%";
    }
}

$student = new Student("Robert", 18, '85');
$student->introduce();
$gradePercentage = $student->calculate_grade_percentage();
echo "My grade percentage is {$gradePercentage}\n";