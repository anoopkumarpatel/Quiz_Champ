<?PHP
$id=$_REQUEST['id'];

include("../connection.php");
$query="delete from forgetpassw where sr='$id'";

if(mysqli_query($conn,$query))
{
header("Location:forget.php");
}
?>