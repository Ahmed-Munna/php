<?php

class DistrictCollection implements IteratorAggregate{
    
    private $districts;

    public function __construct() {
        $this->districts = array();
    }

    public function add($districts) {
        array_push($this->districts, $districts);
    } 

    // public function getDistrict() {
    //     return $this->districts;
    // }

    public function getIterator() {
        return new ArrayIterator($this->districts);
    }
}

$dis = new DistrictCollection;
$dis->add("Dhaka");
$dis->add("Rajshahi");
foreach ($dis as $district) {
    echo $district;
}