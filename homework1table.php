#!/usr/bin/php

<?php>

$servername = "localhost"
$username = "root"
$password = "daebak123"
$dbname = "HW1DB"


$conn = mysql_connect($servername, $username, $password, $dbname);


if(! $conn)
{
    die ('Could not connect: ' . mysql_error());
}

echo 'Connected Successfully<br />';


$sql = "CREATE TABLE US_States ("id INT NOT NULL PRIMARY KEY AUTO_INCREMENT," "state Char(25)," "year INT(4)")";

mysql_select_db( 'HW1DB' );

$query = "select * from USstates;";

$retval = mysql_query( $sql, $conn );

if (! $retval)
{
    die ('Table could not be created: ' . mysql_error());
}

echo "Table was created successfully";


mysql_close($conn);



?>

