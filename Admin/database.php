<?php

$host = "localhost";
$dbname = "training_deepanshu_assessment_1";
$username = "training_deepanshu";
$password = "y_r}}8{@oL{q";

$mysqli = new mysqli(
    hostname: $host,
    username: $username,
    password: $password,
    database: $dbname
);

if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;