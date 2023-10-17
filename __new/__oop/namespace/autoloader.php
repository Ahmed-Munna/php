<?php

class Autoloader {
    public static function autoload($currentNamespace) {

        return spl_autoload_register(function($className) use($currentNamespace) {

            $trimCurrentNamespace = str_replace($currentNamespace, '', $className);
            $trimFirstSlash = substr($trimCurrentNamespace, 1);
            $actualUrl = str_replace('\\','/',$trimFirstSlash);
        
            include($actualUrl . '.php');
        });
    }
}

// This autoloader loads all files or folder automatically

// spl_autoload_register(function ($className) {
    
//     $separetor = explode('\\', $className);
//     $separetorLength = count($separetor);
//     $concatinator = '';
//     for ($i = 1; $i < $separetorLength; $i++) {
        
//         $concatinator .= $separetor[$i];
//         $concatinator .= '/';
//     }
//     $actualUrl = substr($concatinator, 0, -1);
//     include($actualUrl . '.php');
// });

