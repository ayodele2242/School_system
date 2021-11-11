<?php
$dbHost = "localhost";
$dbUsername = "edomon5_totallight";
$dbPassword = "father2242";
$dbName = "edomon5_totallight";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}








?>