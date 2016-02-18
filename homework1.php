#!/usr/bin/php

<?php

$db = new mysqli("localhost","root","daebak123","HW1DB");

// echo "begin script ".$argv[0].PHP_EOL;

//Creating the Connection
if ($db->connect_errno > 0)
// Checking the Conenction
{
    echo __FILE__.__LINE__." ERROR: ".$db->connect_error.PHP_EOL;
    exit(-1);
}

//$sql = "CREATE DATABASE HW1DB"

//Creating Database

/*$sql = "CREATE DATABASE HW!DB";
if ($conn->query($sql) === TRUE)
{
    echo "Database has been created correctly";
}else{
    echo "Error in creating database: " . $conn->error;
}

$conn->close;
*/

$query = "select * from USstates;";

$results = $db->query($query);

print_r($results);

echo "You are now connected to the DATABASE named 'HW1DB'.".PHP_EOL;


$db->close();








?>