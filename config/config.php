<?php
//DB details
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'forum';
//Create connection and select DB
$con = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if ($con->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
}
?>
