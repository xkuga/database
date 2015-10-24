<?php
include "../vendor/autoload.php";

use \Database\DB;

DB::setConfig(array(
    "dsn" => "mysql:host=localhost;dbname=sakila",
    "username" => "root",
    "password" => "root"
));

DB::registerExceptionCallback(function(Exception $e) {
    echo "Error callback: ". $e->getMessage();
});

DB::getInstance();