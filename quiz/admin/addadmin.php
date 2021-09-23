<html>
<head>
<title>Add Admin</title>
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

<div class="col-sm-4">
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
<h3 class="mt-2" style="margin-left:200px;"><b>Add/Remove</b> Admin
</h3>
</div>
<div class="col-sm-2">
<a href="adminmgmt.php"><button class="btn btn-primary" style="width:300px;height:40px;float:right;font-weight:bold;font-size:20px;margin-top:5px;">Admin Management</button></a>

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
<button class="btn btn-danger form-control" style="width:100%;">
<b>Add/RemoveAdmin>></b>
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
<button class="btn btn-primary form-control">
<b>Change Password</b>
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
     <form method="post" action="#">
	 <b style="font-weight:bold;color:white;margin-top:0px;letter-spacing:4px;font-size:20px;">Admin name:</b>
	    <input type="text" class="form-control" name="txtname" required="true"/><br/>
		<div class="row">
		    <div class="col-sm-6">
			  <b style="font-weight:bold;color:white;margin-top:0px;letter-spacing:4px;font-size:17px;">ID:</b>
	    <input type="text" class="form-control" name="txtid" required="true"/>
			</div>
			<div class="col-sm-6">
			  <b style="font-weight:bold;color:white;margin-top:0px;letter-spacing:4px;font-size:17px;">Password:</b>
	    <input type="text" class="form-control" name="txtpass" required="true"/>
			</div>
		</div>
		<br/>
		<br/>
		
		<br/>
		<br/>
		<br/>
		<input type="submit" value="ADD+ >>" name="addadmin" class="btn btn-success" style="width:300px;height:40px;float:right;font-weight:bold;font-size:20px;">
		 
	 </form>
	
   </div>
   
</div>
</div>
</body>
</html>
<?php
if(isset($_POST["addadmin"]))
{
$aname=$_POST['txtname'];
$id=$_POST['txtid'];
$pass=$_POST['txtpass'];	
$date=date('d/m/y H:i:s',time());
include("../connection.php");
$query="insert into admin(userid,name,password,addby,date)values('$id','$aname','$pass','$txt','$date')";
$query2="select * from admin where userid='$id'";
$res=mysqli_query($conn,$query2);
if(mysqli_num_rows($res)>0)
{
echo"<script>alert('There is already a user with that email please enter the another email...');window.location.href='addadmin.php'</script>";
}
else if(mysqli_query($conn,$query))
{
echo"<script>alert('add Successfully');window.location.href='addadmin.php'</script>";
}

}
?>
