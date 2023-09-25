<?php

// Task 1:

$student = ['name' => 'Alice', 'age' => 22, 'grade' => 'A'];

print($student['age']) . PHP_EOL;


// Task 2:

$student = ['name' => 'Alice', 'age' => 22, 'grade' => 'A'];

if (array_key_exists('grade', $student))
    print($student['grade']) . PHP_EOL;

// Task 3:

$numbers = array(100, 200, 50, 40, 50);

foreach ($numbers as $value) {
    echo $value . "\n";
}

// Task 4:

$names = ['Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', 'Moni'];

$filteredNames = array_filter($names, function ($names) {
    return substr($names, 0, 1) === 'M';
});

foreach ($filteredNames as $name) {
    echo $name . "\n";
}

// Task 5:

$originalString = 'Hello, World!';

echo strrev($originalString);