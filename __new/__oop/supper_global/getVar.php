<?php

class GetVar {

    public static function getVariableInformation() {
        $_GET["name"] = "My Name";
        return $_GET;
    }
}

print_r(GetVar::getVariableInformation());
print_r($_SERVER);