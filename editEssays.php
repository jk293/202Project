<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
.cat_links {
    display:block;
    padding: 5px;
    padding-top: 10px;
    padding-botom: 10px;
    border: 1px solid #000000;
    margin-bottom: 5px;
    background-color: #cccccc;
    color: #000000;
}
.cat_links:hover {
    background-color: #dddddd;
}
a {
    color: #0000ff;
}
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
	$top .= "<a href='view_Essays.php?cid=".$id."' class='cat_links'>" .$topic. "</a>";
		
    }
    echo $top;
} else {
    "<p>There are no Topics yet.</p>";
}
?>

<hr />





<h2> You Can Be OUttiee by pressing this button. <h2>

<form action="logoutneEssays.php" method="post" >
<input type="submit" name="request" value="Log Out"/>
</form>
<h2> Jaywan - Out. <h2>
</body>
</html>