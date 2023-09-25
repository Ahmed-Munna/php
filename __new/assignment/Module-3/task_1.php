<?php

// String Manipulation

$text = "The quick brown fox jumps over the lazy dog.";

function strManipulation($txt) {

    $newText = strtolower($txt);
    $newText = str_replace("brown", "red", $newText); 

    print($newText);
}

strManipulation($text);