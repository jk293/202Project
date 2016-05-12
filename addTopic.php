<?php session_start(); ?>
// <?php 
// if ((!isset($_SESSION['clientId'])) || ($_GET['cid'] == ""))
// {
//     header("Location: neverendingEssays.html");
//     exit();
// }
// $cid = $_GET['cid'];
// ?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
h2 {
    display: block;
    font-size: 100%;
    margin-top: 3em;
    margin-bottom: 3em;
    margin-left: 5;
    margin-right: 5;
    font-weight: bold;
    color:green;
    font-family:Courier;
    
}
</style>
<meta char-set="utf-8">
<title> NeverEndingESSAYS!</title>
<form action="neverendingEssays.html" method="post" >
<input type="submit" name="request" value="Home"/>
</form>
<h2> Welcome to the Adding Section! Here You Can Add a Sentence into a Chosen Topic and Help Create <h2>
<h2> a NEVER-ENDING ESSAY! YAY. <h2>
<h2> Aight Do U. <h2>
</head>
<body style="background-color:black;">


// <?php
// if (!isset($_SESSION['clientId']))
// {
//     echo "<form action="rpc.php" method="post" >
// <p style="font-size:80%; color:green;">username: <input type="text" name="username" /></p>
// <p style="font-size:80%; color:green;">password: <input type ="password" name="password" /></p>
// <input type="submit" name="request" value="Login"/>
// </form>";
// } else {
//     echo "<p> You are logged in as ".$_SESSION['username']." $bull; <a href='logoutneEssays.php'>Logout</a>";
// }
// ?>

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
	$top .= "<a href='create_Topic.php' class='cat_links'>" .$topic. "</a>";
		
    }
    echo $top;
} else {
    "<p>There are no Topics yet.</p>";
}


?>

<hr />
<form method="post" action="addTopic.php">
    Topic: <input type="text" name="topic" />
    Sentence: <textarea name="sentence" /></textarea>
    <input type="submit" value="Add" />
</form>




<h2> You Can Be OUttiee by pressing this button. <h2>

<form action="logoutneEssays.php" method="post" >
<input type="submit" name="request" value="Log Out"/>
</form>
<h2> Jaywan - Out. <h2>
</body>
</html>