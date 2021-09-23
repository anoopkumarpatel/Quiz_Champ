<b style="color:red;font-family:curior;letter-spacing:5px;font-size:25px;">
<?PHP
session_start();
$txt=$_SESSION['userid'];

include("connection.php");
$query="select name from register where email='$txt'";
$res=mysqli_query($conn,$query);
if($row=mysqli_fetch_array($res))
{
echo $row["name"];
}
?>
</b>