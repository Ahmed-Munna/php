<?php

class ObjRef {
    public $name = "Munna";
}

$myObj = new ObjRef;
$my2ndObj =& $myObj;

$my2ndObj->name = 39;

echo $myObj->name;
// $myObj = null;

echo $my2ndObj->name;