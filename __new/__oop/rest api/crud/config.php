<?php

define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","api_crud");

$db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$db_conn) {

    throw new Exception('Database connction error');
}
