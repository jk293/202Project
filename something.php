<?php
require_once("clientDB.php.inc");
$request = json_decode(file_get_contents("php://input"),true);
$response = "error unrecognized request<p>";
switch($request["request"])
{
    case "login":
	$username = $request['username'];
	$password = $request['password'];
	$login = new clientDB("connect.ini");
	$response = $login->validateClient($username,$password);
	if ($response['success']===true)
	{
		$response = "Login Successful!<p>";
	}
	else
	{
		$response = "Login Failed:".$response['message']."<p>";
	}
	break;
}
echo json_encode($response);
?>