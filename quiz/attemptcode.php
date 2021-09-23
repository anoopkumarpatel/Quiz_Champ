<?php
session_start();
$txt=$_SESSION['userid'];

include("connection.php");
$query="select * from register where email='$txt'";
$res=mysqli_query($conn,$query);
if($row=mysqli_fetch_array($res))
{
$text=$row['email'];
}

$id=$_REQUEST['id'];
 $qid=$_POST['qid'];
$query2="select ans from question where qid='$qid'" ;
$res2=mysqli_query($conn,$query2);
if($row2=mysqli_fetch_array($res2))
{
$rightans=$row2['ans'];
}
$submitans=$_POST['ans'];
$ques=$_POST['ques'];
$opta=$_POST['opta'];
$optb=$_POST['optb'];
$optc=$_POST['optc'];
$optd=$_POST['optd'];
$date=date('d/m/y H:i:s',time());
if($rightans==$submitans)
{
	$ans="TRUE";
}
else 
{
	$ans="FALSE";
}
$query3="insert into answer(attemptby,course,question,option_a,option_b,option_c,option_d,rightans,submitans,ans,date)values('$text','$id','$ques','$opta','$optb','$optc','$optd','$rightans','$submitans','$ans','$date')";
if(mysqli_query($conn,$query3))
{
  header("Location:attempt.php?id=$id");
}
?>