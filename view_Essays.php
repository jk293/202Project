<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<link rel="stylesheet" type="text/css" href="mystylesheet.css">

<style>
/*.cat_links {
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
}*/
/*a {
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
}*/

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
<body style="background-color:black;">

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

<!--<meta char-set="utf-8">-->
<div style="margin-left:15% ;padding: 1px 16px; height:1000px;">
<title> NeverEndingEssays</title>



<h3> Welcome to the Browsing Section!<h3>
<h3> Here You Can Browse and Check Out Some of the Essays. <h3>
<h2> Aight Peace. <h2>
</head>


<div id="content">

<?php
include_once("connect.php");
// include_once("connect.ini");
$cid = $_GET['cid'];

// if (isset($_SESSION['clientId']))
// {
//    $logged = " | <a href='addTopic.php?cid=".$cid."'>Create One</a>";
//    echo "hi";
// } else {
//    $logged = " | Log in to create a topic.";
//    echo "<a href='index.html'>Login</a><hr />";
//    
// }

$sql = "SELECT topicId FROM topic WHERE topicId='".$cid."'LIMIT 1";
$res = mysql_query($sql) or die(mysql_error());

if (mysql_num_rows($res) == 1) 
{
    $sql2 = "SELECT * FROM essay WHERE essayId='".$cid."'ORDER BY essay DESC";
    $res2 = mysql_query($sql2) or die(mysql_error());
    
    if (mysql_num_rows($res2) > 0)
    {
	
	$topics .= "<table width='100%'  style='border-collapse: collapse;'>";
	$topics .= "<tr><td colspan='3'><a href='browseneE.php'>Go Back</a>".$logged."<hr /></td></tr>";
	$topics .= "<tr style='background-color: #dddddd;'><td>Topic Title</td>
	<td width='65' align ='center'>Views</td></tr>";
	$topics .= "<tr><td colspan= '3'><hr /></td></tr>";
	
	while ($row = mysql_fetch_assoc($res2)) 
	{
	    $eid = $row['essayId'];
	    $title = $row['essay'];
	    $views = $row['essay_views'];
	    $date = $row['last_used_date'];	    
	    $lastuser = $row['last_user'];
	    $topics .= "<tr><td><a href='view_Topics.php?cid=".$cid."$eid=".$eid."'>".$title."</a><br />
	    <span class='post_info'>Posted By: ".$lastuser." on ".$date."</span></td><td align='center'>".$views."</td></tr>";
	    $topics .= "<tr><tdcolspan='3'><hr /></td></tr>";
	        
	}
	$topic .= "</table>";
	echo $topics;	
	
    } else {
// 	echo "<a href='browseneE.php'>Back</a><hr />";
	echo "<p>There are no Essays in this topic yet.".$logged."</p>";
	echo "<p><a href='create_Sentence.php?cid=".$cid."'>Create One</a></p>";
    }
} else {
    echo "<a href='browseneE.php'>Back to Browse</a><hr />";
    echo "<p>Essay Does Not Exist</p>";
}


?>


<hr /> 
</div>


<h2> Jaywan - Out. <h2>
</body>
</html>
