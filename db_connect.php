<?php

//four variables to connect to the database

$host="localhost";
$username="root";
$user_pass="usbw";
$database_in_use="bank_db";

//connection to the database

$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

//echo $mysqli->host_info . "\n";

?>