<?php

require_once("browseneEssays.php.inc");
$request = $_POST['request'];
$response = "OMG..........T^T<p>";

switch($request)
{
    case "Sentence":
        $topic = $_POST['sentence'];
        
        //$login = new clientDB("connect.ini");
        $response = $login->addNewTopic($topic);
        if ($response['success']===true)
        {
		$response = "Sentence Added<p>";
		//HEADER("LOCATION: index.html");
        }
        else
        {
		$response = "Sentence Failed to Add".$response['message']."<p>";
		//HEADER("LOCATION: register.html");
        }
        break;
}
echo $response;


#$file = 'essay1.txt';
#$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
#$current = file_get_contents($file);
#$current = "The dragon aggressive and flew with no wings";
#file_put_contents($file, $current, FILE_APPEND | LOCK_EX);
?>