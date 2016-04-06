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
    a: 
}
</style>
<meta char-set="utf-8">
<title> NeverEndingEssays</title>

<form action="neverendingEssays.html" method="post" >
<input type="submit" name="request" value="Home"/>
</form>

<h2 style="font-size:110%; font-align:center;"> Welcome to the Browsing Section! Here You Can Browse and Check Out Some of the Essays. <h2>
<h2> Aight Peace. <h2>
</head>
<body style="background-color:black;">

<hr />
<div id="content">
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
</div>
<hr /> 

<h2 style="color:green; font-size:80%;"> If U Tir3d of dis plaze den u can loggout down hur.. >.> <h2>
<form action="logoutneEssays.php" method="post" >
<input type="submit" name="request" value="Log Out"/>
</form>

<h3 style="color:green;"> Jaywan - Out. <h3>
</body>
</html>
