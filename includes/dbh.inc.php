<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "weeb_sauce";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("connection failed: ".mysqli_connect_error());
}