<?PHP
$id=$_REQUEST['id'];

include("../connection.php");
$query="delete from contact where sr='$id'";

if(mysqli_query($conn,$query))
{
header("Location:msg.php");
}
?>