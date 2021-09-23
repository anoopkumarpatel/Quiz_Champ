<html>
<head>
<title>Add Question</title>
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
<h3 style="color:;" class="mt-2" style="margin-left:200px;"><b>Update</b> Question

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
   <?php
$id=$_REQUEST['id'];
$query2="select * from question where qid='$id'";
$res=mysqli_query($conn,$query2);
if($row=mysqli_fetch_array($res))
{
	?>
     <form method="post" action="#">
	 <b style="font-weight:bold;color:white;margin-top:0px;letter-spacing:4px;font-size:20px;">Question:</b>
	    <input type="text" class="form-control" name="ques" required="true" value="<?PHP echo $row['question'];?>"/><br/>
		<div class="row">
		    <div class="col-sm-6">
			  <b style="font-weight:bold;color:white;margin-top:0px;letter-spacing:4px;font-size:17px;">Option A:</b>
	    <input type="text" class="form-control" name="opta" required="true" value="<?PHP echo $row['option_a'];?>"/>
			</div>
			<div class="col-sm-6">
			  <b style="font-weight:bold;color:white;margin-top:0px;letter-spacing:4px;font-size:17px;">Option B:</b>
	    <input type="text" class="form-control" name="optb" required="true" value="<?PHP echo $row['option_b'];?>"/>
			</div>
		</div>
		<div class="row">
		    <div class="col-sm-6">
			  <b style="font-weight:bold;color:white;margin-top:0px;letter-spacing:4px;font-size:17px;">Option C:</b>
	    <input type="text" class="form-control" name="optc" required="true" value="<?PHP echo $row['option_c'];?>"/>
			</div>
			<div class="col-sm-6">
			  <b style="font-weight:bold;color:white;margin-top:0px;letter-spacing:4px;font-size:17px;">Option D:</b>
	    <input type="text" class="form-control" name="optd" required="true" value="<?PHP echo $row['option_d'];?>"/>
			</div>
		</div>
		<br/>
		<b style="font-weight:bold;color:white;margin-top:0px;letter-spacing:4px;font-size:20px;">Answer:
	    <input type="radio" name="ans" value="A" required="true"/>A &nbsp;&nbsp;&nbsp;<input type="radio" name="ans" value="B" />B&nbsp;&nbsp;&nbsp;<input type="radio" name="ans" value="C" />C&nbsp;&nbsp;&nbsp;<input type="radio" name="ans" value="D" />D&nbsp;&nbsp;&nbsp;
		</b>
		<br/>
		<br/>
		
		<div class="row">
		    <div class="col-sm-6">
			  <b style="font-weight:bold;color:white;margin-top:0px;letter-spacing:4px;font-size:20px;">Type:</b>
	   <select class="form-control" name="type" required="true"  required="true" >
		  <option value="<?PHP echo $row['type'];?>"><?PHP echo $row['type'];?></option>
		  
	      <?PHP
		  $query3="select * from ourcources";
		  $res2=mysqli_query($conn,$query3);
		  while($row2=mysqli_fetch_array($res2))
		  {
		  ?>
	      <option><?PHP echo $row2['cources'];?></option>
		  <?PHP
		  }
		  ?>
		</select>
			</div>
			<div class="col-sm-6">
			  <b style="font-weight:bold;color:white;margin-top:0px;letter-spacing:4px;font-size:20px;">Level:</b>
	    <select class="form-control" name="level" required="true" required="true" >
		  <option value="<?PHP echo $row['level'];?>"> <?PHP echo $row['level'];?></option>
	      <option>Easy</option>
		  <option>Hard</option>
		</select>
			</div>
		</div>
		<br/>
		<br/>
		<br/>
		<input type="submit" value="Update >>" name="update" class="btn btn-success" style="width:300px;height:40px;float:right;font-weight:bold;font-size:20px;">
	 </form>
	  <?php
}
?>	
   </div>
</div>
</div>
</body>
</html>
<?php
if(isset($_POST["update"]))
{
$ques=$_POST['ques'];
$opta=$_POST['opta'];
$optb=$_POST['optb'];	
$optc=$_POST['optc'];
$optd=$_POST['optd'];
$ans=$_POST['ans'];
$type=$_POST['type'];
$level=$_POST['level'];
$date=date('d/m/y H:i:s',time());
include("../connection.php");
$query="update question set question='$ques',option_a='$opta',option_b='$optb',option_c='$optc',option_d='$optd',ans='$ans',type='$type',level='$level',date='$date' where qid='$id'";
if(mysqli_query($conn,$query))
{
echo"<script>alert('update Successfully');window.location.href='qmanagement.php'</script>";
}
else
{
echo"<script>alert('Something went wrong.');window.location.href='addq.php'</script>";
}
}
?>
