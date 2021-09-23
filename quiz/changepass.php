<html>
<head>
<title>Change your password</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--For font-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
 	<script type="text/javascript"> 
        window.history.forward(); 
        function noBack() { 
            window.history.forward(); 
        } 
    </script> 
 
</head>
<body style="background: #E2D1F9;">
<?PHP include 'header.php';?>
<?PHP include 'showname.php';?>
 <div class="row">
 <div class="col-sm-6 mx-auto">
 <div class="alert alert-danger" role="alert">
  <h3 style="text-align:center;">Change your password.</h3>
</div>
<?PHP
$txt=$_SESSION['userid'];

	include("connection.php");
$query="select * from register where email='$txt'";
$res=mysqli_query($conn,$query);
if($row=mysqli_fetch_array($res))
{

	?>
<form action="" method="post">
<b>OLD PASSWORD</b>
  <input type="password" required="true" name="op" class="form-control" >
  <b>NEW PASSWORD</b>
  <input type="password" required="true" name="np" class="form-control" >
  <b>CONFIRM NEW PASSWORD</b>
  <input type="password" name="cnp" class="form-control" required="true" >
  <br>
  <br>
 <input type="submit" class="form-control" value="Change Password >>" name="changepass" style="background-color:#358597;color:white;font-weight:bold;letter-spacing:8px;">
</form>
<br>
<?php
}
?>
 </div>
 </div>
</body>
</html>
<?php
if(isset($_POST["changepass"]))
{
$oldpass=$_POST['op'];
$newpass=$_POST['np'];
$connewpass=$_POST['cnp'];	

	include("connection.php");
$query5="select * from register where email='$txt'";
$res5=mysqli_query($conn,$query5);
if($row5=mysqli_fetch_array($res5))
{
	$op=$row5['passw'];
}
if($oldpass==$op)
{
	if($oldpass==$newpass)
	{
		header("Location:changepass.php");
	}
		elseif($newpass==$connewpass)
		{
			$query7="update register set passw='$newpass' where email='$txt'";
			mysqli_query($conn,$query7);
			echo"<script>alert('Password change successfully .');window.location.href='login.php'</script>";
		}
		else
		{
			echo"<script>alert('Please correctly enter new password and confirm new password');window.location.href='changepass.php';</script>";
		}
}
else
{
   echo"<script>alert('Please Enter Correct old Password .');window.location.href='changepass.php'</script>";
}
}
?>

