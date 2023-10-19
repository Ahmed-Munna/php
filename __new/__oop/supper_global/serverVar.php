<?php

class ServerVar {

    public static function getServerInformation() {

        $_SERVER['SERVER_PORT'] = '8080';
        return $_SERVER;
    }
}

print_r(ServerVar::getServerInformation());