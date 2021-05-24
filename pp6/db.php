<?php

$server = "spring-2021.cs.utexas.edu";
$user = "cs329e_bulko_kurtcore";
$pwd = "fled!Oracle_sodium";
$dbName = "cs329e_bulko_kurtcore";

$mysqli = new mysqli($server, $user, $pwd, $dbName);

if ($mysqli->connect_errno) {
    die('Connect Error: ' . $mysqli->connect_errno . ": " . $mysqli->connect_error);
}
