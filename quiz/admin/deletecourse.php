<?PHP
$id=$_REQUEST['id'];  //<!--Question-->

include("../connection.php");
$query2="delete from ourcources where id='$id'";
if(mysqli_query($conn,$query2))
{
	header("Location:coursemgmt.php");
}

?>