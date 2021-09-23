<b><i>
<?PHP
session_start();
$txt=$_SESSION['userid'];
include("../connection.php");
$query="select name from admin where userid='$txt'";
$res=mysqli_query($conn,$query);
if($row=mysqli_fetch_array($res))
{
echo $row["name"];
}
?></i></b>