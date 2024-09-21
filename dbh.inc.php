<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "project details";

$conn = new mysqli ($hostName, $userName, $password, $databaseName);

// Check connection
if (!$conn) {
    die("Connection failed");
}

?>
