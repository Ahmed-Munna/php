<?php

// This autoloader loads all files or folder automatically

spl_autoload_register(function ($className) {
    
    $separetor = explode('\\', $className);
    $separetorLength = count($separetor);
    $concatinator = '';
    for ($i = 1; $i < $separetorLength; $i++) {
        
        $concatinator .= $separetor[$i];
        $concatinator .= '/';
    }
    $actualUrl = substr($concatinator, 0, -1);
    include($actualUrl . '.php');
});