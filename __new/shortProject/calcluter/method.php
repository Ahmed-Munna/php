<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
   echo json_encode(JSON.parse($_GET["body"]));
}