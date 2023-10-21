<?php

class Main {

    // Checking The request methods

    public static function check($req) {

        if ($_SERVER["REQUEST_METHOD"] === $req) {
            return true;
        } else {
            return static::json(0, 405, "Invalid Request Method, HTTP method should be {$req}");
        }
    }

    public static function json(int $ok, int $status, string $msg, $key = false, $value = false) {

        $res = ['ok' => $ok];

        if ($status !== null) {

            http_response_code($status);
            $res['status'] = $status;
        }
        if ($msg !== null) {
            $res['msg'] = $msg;
        }
        if ($value) {

            if ($key) {
                $res[$key] = $value;
            } else {
                $res['data'] = $value;
            }
        }
        return json_encode($res);
    }

    public static function _404() {
        return static::json(0, 404,'Not Found!');
    }
}