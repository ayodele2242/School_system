<?php

//Connect and select the database
$db = new mysqli('localhost', 'root', '', 'edomon5_studentinfo');
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>