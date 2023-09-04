<?php

class Student {

    public static function student($name, $age) {
        
        if ($age<5) {
            throw new Exception("You are too Young", 1005);
        } elseif($age>20) {
            throw new Exception("You are too Old", 303);
        }

        echo $name;
        echo $age;
    }

}

 try {

    Student::student('Munna',245);

 } catch (Exception $e) {
    echo $e->getMessage();
    echo $e->getCode();
 }