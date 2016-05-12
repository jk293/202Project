<?php session_start(); ?>
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
<title> NeverEndingEssays</title>

<form action="neverendingEssays.html" method="post" >
<input type="submit" name="request" value="Home"/>
</form>

<h2 style="font-size:110%; font-align:center;"> Welcome to the Browsing Section! Here You Can Browse and Check Out Some of the Essays. <h2>
<h2> Aight Peace. <h2>
</head>
<body style="background-color:black;">

<table border="4" style="width:50%;">
<th>Topics:</th>
<th># of Participants:</th>
<th># of Sentences:</th>
<th>Last Used By:</th>
<tr style="font-size:70;">
<td><a style="color:green" href="neverendingEssays.html;">Down In Da DM</a></td>
<td>1</td>
<td>1</td>
<td>User1</td>
</tr>

<tr style="font-size:70;">
<td><a style="color:green" href="neverendingEssays.html">Merry Xmas</a></td>
<td>1</td>
<td>1</td>
<td>User2</td>

</table> 

<hr />
<?php
//include_once = ("connect.ini");
$sql =  "SELECT * FROM topic";
$res = mysql_query($sql) or die(mysql_error());

if (mysql_num_rows($res) > 0)
{
} else {
    "<p>There are no Topics yet.</p>";
}


?>

<hr />

<form action="..." method="post" >
<input type="submit" name="request" value="DON'T CLICK THIS BUTTON!"/>
</form>

<h2 style="color:green; font-size:80%;"> If U Tir3d of dis plaze den u can loggout down hur.. >.> <h2>
<form action="logoutneEssays.php" method="post" >
<input type="submit" name="request" value="Log Out"/>
</form>

<h3 style="color:green;"> Jaywan - Out. <h3>
</body>
</html>
