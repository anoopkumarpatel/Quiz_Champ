<?PHP
$id=$_REQUEST['id']; //<!--Admin-->

include("../connection.php");
$query="delete from admin where userid='$id'";

if(mysqli_query($conn,$query))
{
header("Location:adminmgmt.php");
}
?>