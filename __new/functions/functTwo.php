<?php
/*
function info($name, $activity): string 
{

    return "Name: $name \n" . $activity();
}


echo info("Munna", function() {
    return "Learning PHP";
});


// expriment
function info($name): string
{
    return $name;
}

function myName(): string 
{
    return "My Name is Alien";
}

echo info(myName);

*/

$message = "Hello Developers🖐";

$msg = function () use (&$message): string 
{
    return $message;
};

$myMsg = fn() => $message;

echo $myMsg();

