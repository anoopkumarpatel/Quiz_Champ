<html>
<head>
<title>Change password</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--For font-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
<style>
body {
  background-image: url("../Image/back.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size:cover;
}
.menu
{
  min-height:200px;
  
}
.cont
{
  min-height:500px;
  background-color:grey;
  opacity:80%;
  border-radius:0px 40px 40px 0px;
}
.top
{
background-image:linear-gradient(#f39,#0cf);
min-height:60px;
}
</style>
</head>
<body>
<div class="container-fluid">
<div class="row top">

</div>
<div class="row">

<div class="col-sm-6">
<h3 style="color:red;" class="mx-auto mt-2">
<?PHP
session_start();
$txt=$_SESSION['userid'];

include("../connection.php");
$query="select name from admin where userid='$txt'";
$res=mysqli_query($conn,$query);
if($row=mysqli_fetch_array($res))
{
$name=$row['name'];
echo $name;
}
?>
</h3>
</div>
<div class="col-sm-6">
<h3 style="color:;" class="mt-2" style="margin-left:200px;"><b>Change</b>Password

</h3>
</div>
</div>
<div class="row">
   <div class="col-sm-2 menu">
<a href="default.php" style="text-decoration:none;color:#FFFFFF;">
<button class="btn btn-primary form-control" style="width:100%;">
<b>My Account</b>
</button>
</a>
</br>
</br>
<a href="usermgmt.php" style="text-decoration:none;color:#FFFFFF;">
<button class="btn btn-primary form-control" style="width:100%;">
<b>User Management</b>
</button>
</a>
<br/>
</br>
<a href="addadmin.php" style="text-decoration:none;color:#FFFFFF;">
<button class="btn btn-primary form-control" style="width:100%;">
<b>Add/Remove Admin</b>
</button>
</a>
<br/>
</br>
<a href="qmanagement.php" style="text-decoration:none;color:#FFFFFF;">
<button class="btn btn-primary form-control" style="width:100%;">
<b>Q. Management</b>
</button>
</a>
<br/>
</br>
<a href="msgmgmt.php" style="text-decoration:none;color:#FFFFFF;">
<button class="btn btn-primary form-control">
<b>User's Message mgmt</b>
</button>
</a>
<br/>
</br>
<a href="addq.php" style="text-decoration:none;color:#FFFFFF;">
<button class="btn btn-primary form-control">
<b>Add Question</b>
</button>
</a>
<br>
<br>
<a href="addcourse.php" style="text-decoration:none;color:#FFFFFF;">
<button class="btn btn-primary form-control">
<b>Add Course</b>
</button>
</a>
<br/>
</br>
<a href="changepass.php" style="text-decoration:none;color:#FFFFFF;">
<button class="btn btn-danger form-control">
<b>Change Password >></b>
</button>
</a>
<br/>
</br>
<a href="logout.php" style="text-decoration:none;color:#FFFFFF;">
<button class="btn btn-primary form-control">
<b>Logout</b>
</button>
</a>
   </div>
   <div class="col-sm-10 cont">
    <form action="#" method="post">

 <input type="password" placeholder="Old Password" style="min-height:50px;border-radius:20px 20px 0px 0px;border:1px solid #0033CC;margin-top:50px;" class="form-control" name="op"/><br/>
 <input type="password" placeholder="New Password" name="np" style="min-height:50px;border-radius:0px;border:1px solid #FF0099;" class="form-control"/><br/>
 <input type="password" placeholder="Confirm new Password" name="cnp" style="min-height:50px;border-radius:0px 0px 20px 20px;border:1px solid #FF0099;" class="form-control"/><br/>
 <b><input type="submit" name="changepass" value="Change Password >>"  style="min-height:40px;min-width:200px;border-radius:20px;background:linear-gradient(to right,#6633FF,#FF3399);border:0px;color:#FFFFFF;border:1px solid blue;float:right"/></b>
 </form>
   </div>
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

include("../connection.php");
$query2="select * from admin where userid='$txt'";
$res=mysqli_query($conn,$query2);
if($row=mysqli_fetch_array($res))
{
	$op=$row['password'];
}
if($oldpass==$op)
{
	if($oldpass==$newpass)
	{
		header("Location:changepass.php");
	}
		elseif($newpass==$connewpass)
		{
			$query="update admin set password='$newpass' where userid='$txt'";
			mysqli_query($conn,$query);
			echo"<script>alert('Password change successfully .');window.location.href='../default.php'</script>";
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
