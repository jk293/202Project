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
<title> NeverEndingEssays</title>

<form action="neverendingEssays.html" method="post" >
<input type="submit" name="request" value="Home"/>
</form>

<h2 style="font-size:110%; font-align:center;"> Welcome to the Browsing Section! Here You Can Browse and Check Out Some of the Essays. <h2>
<h2> Aight Peace. <h2>
</head>
<body style="background-color:black;">

<div id="content">

<?php
include_once("connect.php");
$cid = $_GET['cid'];

// if (isset($_SESSION['uid']))
// {
//    $logged = " | <a href='addTopic.php?cid=".$cid."'>Create One</a>";
//    echo "hi";
// } else {
//    $logged = " | Log in to create a topic.";
// }
$sql = "SELECT essayId FROM essay WHERE essayId='".$cid."'LIMIT 1";
$res = mysql_query($sql) or die(mysql_error());

if (mysql_num_rows($res) == 1) 
{
    $sql2 = "SELECT * FROM topic WHERE topicId='".$cid."'ORDER BY topic DESC";
    $res2 = mysql_query($sql2) or die(mysql_error());
    
    if (mysql_num_rows($res2) > 0)
    {
	
	$topics .= "<table width='100%'  style='border-collapse: collapse;'>";
	$topics .= "<tr><td colspan='3'><a href='browseneE.php'>Go Back</a>".$logged."<hr /></td></tr>";
	$topics .= "<tr style='background-color: #dddddd;'><td>Topic Title</td><td width='65' align ='center'>Views</td></tr>";
	$topics .= "<tr><td colspan= '3'></hr /></td><tr>";
	
	while ($row = mysql_fetch_assoc($res2)) 
	{
	    $tid = $row['topicId'];
	    $title = $row['topic'];
	    $views = $row['topic_views'];
	    $date = $row['last_used_date'];	    
	    $lastuser = $row['last_user'];
	    $topics .= "<tr><td><a href='view_topic.php?cid=".$cid."$tid=".$tid."'>".$title."</a><br />
	    <span class='post_info'>Posted By: ".$lastuser." on ".$date."</span></td><td align='center'>0
	    </td><td align='center'>".$views."</td></tr>";
	    $topics .= "<tr><tdcolspan='3'><hr /></td></tr>";
	        
	}
	$topic .= "</table>";
	echo $topics;
	
    } else {
	echo "<a href='browseneE.php'>Home</a><hr />";
	echo "<p>There are no sentences in this topic yet.".$logged."<p>";
    }
} else {
    echo "<a href='browseneE.php'>Home</a><hr />";
    echo "<p>Essay Does Not Exist<p>";
}


?>


<hr /> 
</div>


<!--<h2 style="color:green; font-size:80%;"> If U Tir3d of dis plaze den u can loggout down hur.. >.> <h2>
<form action="logoutneEssays.php" method="post" >
<input type="submit" name="request" value="Log Out"/>
</form>

<h3 style="color:green;"> Jaywan - Out. <h3>
</body>
</html>-->
