<?php

$severName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "artist";

$conn = mysqli_connect($severName, $dbUserName, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}