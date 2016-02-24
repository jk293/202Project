#!/usr/bin/php

<?php>



$servername = "localhost"
$username = "root"
$password = "daebak123"
$dbname = "HW1DB"


$conn = mysql_connect("localhost", "jk293", "password", "HW1DB");


if(! $conn)
{
    die ('Could not connect: ' . mysql_error());
}

echo 'Connected Successfully';


mysql_select_db("HW1DB", $conn);

$sql = "CREATE TABLE US_States (
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
state Char(25),
year INT(4)
)";

mysql_query();

#$query = "select * from US_states;";

/*

$retval = mysql_query( $sql, $conn );

if (! $retval)
{
    die ('Table could not be created: ' . mysql_error());
}

echo "Table was created successfully";

*/

mysql_close($conn);



?>

