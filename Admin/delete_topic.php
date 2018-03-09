<?php
#include connection
include('db.php');
//include('includes/session.php');
$id=$_GET['topic_no'];


$sql3="DELETE FROM topics WHERE topic_no=$id";
$results3= mysqli_query($con, $sql3) or die ("Error $sql3.".mysql_error());
$sql4="SELECT * FROM chapters WHERE topic_no=$id";
$results4= mysqli_query($con, $sql3) or die ("Error $sql4.".mysql_error());
while($rows=mysqli_fetch_array($results4)){
	$chap_id=$rows['chapter_no'];
	$sql5="DELETE FROM paragraphs WHERE chapter_no=$chap_id";
	$results5=mysqli_query($con, $sql5) or die ("Error $sql3.".mysql_error()); 
}
$sql6="DELETE FROM chapters WHERE topic_no=$id";
$results6= mysqli_query($con, $sql6) or die ("Error $sql3.".mysql_error());
$message=urlencode("Topic deleted successfully");
header('Location:index.php?id=view_topic&topic_no='.$id.'&message='.$message);




mysql_close($cnn);


?>


