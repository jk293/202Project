<?php
session_start();
// if ($_SESSION['uid'] == "")
// {
//     header("Location: neverendingEssays.html");
//     exit();
// }
if (isset($_POST['topic_submit']))
{
    if (($_POST['topic_title'] == "") && ($_POST['topic_content'] == ""))
    {
	echo "You did not fill in what was required. Go Back";
	exit();
    } else {
	include_once("connect.php");
	$cid = $_POST['cid'];
	$title = $_POST['topic_title'];
	$content = $_POST['topic_content'];
	$creator = $_POST['clientId'];
	$sql = "INSERT INTO topic (topicId, topic, last_used_date, last_user) VALUES ('".$cid."', '".$title."', now(), '".$creator."')";
	$res = mysql_query($sql) or die(mysql_error());
	$new_topic_id = mysql_insert_id();
	$sql2 = "INSERT INTO essay (essayId, essay, last_used_date, last_user) VALUES ('".$cid."', '".$new_topic_id."', now(), '".$creator."')";
	$res2 = mysql_query($sql2)or die(mysql_error());
	$sql3 = "UPDATE topic SET last_used_date = now(), last_user ='".$creator."' WHERE topicId='".$cid."' LIMIT 1";
	$res3 = mysql_query($sql3) or die(mysql_error());
// 	$sql4 = "INSERT INTO sentence (sentenceId, essayId, sentence, last_used_date, last_user) VALUES ('".$cid."', '".$cid."', '".$new_sentence_id."', now(), '".$creator."')";
// 	$res4 = mysql_query($sql4) or die(mysql_error());
	if (($res) && ($res2) && ($res3)) /*&& (($res4))*/
	{
	    header("Location: view_Topics.php?cid=".$cid."&tid=".$new_topic_id);
	    echo "Topic Has Been Created. Go back to start writing a sentence.";
	} else {
	    echo "There was an Error. Go back and try again."; 
	}
	
    }
}


?>