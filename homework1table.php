#!/usr/bin/php

<?php>

$servername = "localhost"
$username = "jk293"
$password = "password"
$dbname = "HW1DB"


$conn = new mysqli($servername, $username, $password, $dbname);

if $conn->connect_error)
{
    echo "Connection Failed:" . $conn->connect_error;
}

//_--------------------------------------------------------

$sql = "CREATE TABLE USstates (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, state Char(25), year INT(4))";


if ($conn->$query($sql) === TRUE)
{
    echo "The table 'USstates' has been created";
}else{
    echo "There was an error creating the table" . $conn->error;
}


$conn->close();







?>

