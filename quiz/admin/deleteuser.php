<?PHP
$id=$_REQUEST['id'];

include("../connection.php");
$query="delete from register where email='$id'";

if(mysqli_query($conn,$query))
{
header("Location:usermgmt.php");
}
?>