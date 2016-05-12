<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/
css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="mystyle.css">

<style>

form {
    color: white;
    text-align:center;
    display: inline-block;
}

a:link, a:visited {
    display: block;
    color: black;
    background-color: green;
    padding: 14px 25px;
    text-align: center;   
}

p {
  font-size:100%;
}

</style>
</head>

<ul>
  <li><a href="neverendingEssays.html">Home</a></li>
  <li><a href="browseneE.php">Browse</a></li>
  <li><a href="create_Topic.php">Add</a></li>
  <li><a href="editEssays.php">Edit</a></li>
  <li><a href="...">Contact</a></li>
  <li><a href="...">FAQs</a></li>
  <li><a href="...">Donations</a></li>
  <li><a href="...">News</a></li>
  <li><a href="logoutneEssays.php">Log Out</a></li>
</ul>

<title>NEVER-ENDING ESSAYS! c:</title>
<div style="margin-left:15% ;padding: 1px 16px; height:1000px;">

<h3> Welcome to the Adding Section! <h3>
<h3> Here You Can Add a Sentence into a Chosen Topic and Help Create <h3>
<h3> a NEVER-ENDING ESSAY! YAY. <h3>
<h2> Aight Do U. <h2>

<body style="background-color:black;">

<hr />
<?php
include_once ("connect.php");
$sql =  "SELECT * FROM topic ORDER BY topic ASC";
$res = mysql_query($sql) or die(mysql_error());
$top = "";

if (mysql_num_rows($res) > 0)
{
    while ($row = mysql_fetch_assoc($res))
    {
	$id = $row['topicId'];
	$topic = $row['topic'];
	$top .= "<a href='view_Essays.php?cid=".$id."' class='a links'>" .$topic. "</a>";
		
    }
    echo $top;
} else {
    "<p>There are no Topics yet.</p>";
}
?>

<hr />




<h2> Jaywan - Out. <h2>
</body>
</html>