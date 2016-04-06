<?php session_start(); ?>
// <?php 
// if ((!isset($_SESSION'uid'])) || ($_GET['cid'] == ""))
// {
//     header("Location: neverendingEssays.html");
//     exit();
// } 
// $cid = $_GET['cid'];
// 
// ?>
<!DOCTYPE html>
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




<hr />
<div id="content">
<form action="create_topic_code.php" method="post">
<p>Topic:</p>
<input type="text" name="topic_title" size="25" maxlength="150" />
<p>Senetences</p>
<textarea name="topic_content" rows="5"cols="75"></textarea>
<br /><br />
<input type="hidden" name="cid" value="<?php echo $cid; ?>" />
<input type="submit" name="topic_submit" value="Create Topic"/>

</form> 



<hr />


<h2> You Can Be OUttiee by pressing this button. <h2>

<form action="logoutneEssays.php" method="post" >
<input type="submit" name="request" value="Log Out"/>
</form>
<h2> Jaywan - Out. <h2>
</body>
</html>