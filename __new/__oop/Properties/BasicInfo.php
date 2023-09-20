<?php

class BasicInfo {

    public function myInfo() {

        return "Hello I am Munna";    
    }
}

$arr = [3,"str", new BasicInfo];

print_r($arr[2]->myInfo());