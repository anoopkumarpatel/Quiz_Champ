<?PHP
$id=$_REQUEST['id'];

include("../connection.php");
$query="delete from feedback where sr='$id'";

if(mysqli_query($conn,$query))
{
header("Location:feed.php");
}
?>