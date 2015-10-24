<?php
include "src/database/Statement.php";
include "src/database/DB.php";

\Database\DB::setConfig(array(
        "dsn" => "mysql:host=localhost;dbname=mobjizz",
        "username" => "root",
        "password" => "root"
    ));

$db = \Database\DB::getInstance("set");