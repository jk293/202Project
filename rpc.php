<?php
require_once("clientDB.php.inc");
$request = $_POST['request'];
$response = "OMG..........T^T<p>";

switch($request)
{
    case "Register":
        $username = $_POST['username'];
        $password = $_POST['password'];
        $login = new clientDB("connect.ini");
        $response = $login->addNewClient($username,$password);
        if ($response['success']===true)
        {
		$response = "Registration Successful!!!<p>";
		HEADER("LOCATION: index.html");
        }
        else
        {
		$response = "Registration Failed:".$response['message']."<p>";
		HEADER("LOCATION: register.html");
        }
        break;
    case "Login":
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$login = new clientDB("connect.ini");
	
	$response = $login->validateClient($username,$password);
	
	if ($response['success']===true)
	{
		$response = "Login Successful!<p>";
		HEADER("LOCATION: neverendingEssays.html");
		
	}
	else
	{
		$response = "Login Failed:".$response['message']."<p>";
		HEADER ("LOCATION: index.html");
	}
	break;
}
echo $response;
?>