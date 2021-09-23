<?PHP
$id2=$_REQUEST['id2'];  //<!--Question-->

include("../connection.php");
$query2="delete from question where qid='$id2'";
if(mysqli_query($conn,$query2))
{
	header("Location:qmanagement.php");
}

?>