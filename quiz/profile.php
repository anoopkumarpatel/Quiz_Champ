<html>
<head>
<title>welcome to your profile</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--For font-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
</head>
<body style="background: #E2D1F9;">
<?PHP include 'header.php';?>
<?PHP include 'showname.php';?>
 <div class="row">
 <div class="col-sm-6 mx-auto">
 <div class="alert alert-danger" role="alert">
  <h3 style="text-align:center;">Welcome to your profile.</h3>
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
<b>NAME :</b>
  <input type="text" readonly="true" name="txtname" class="form-control" value="<?php echo $row['name']?>">
  <b>MOBILE :</b>
  <input type="number" readonly="true" name="mob" class="form-control" value="<?php echo $row['mobile']?>">
  <b>EMAIL :</b>
  <input type="text" name="email" class="form-control" readonly="true" value="<?php echo $row['email']?>">
  <br>
  <br>
  </form>
  <a href="updateprofile.php" style="color:white;text-decoration:none;"><button class="form-control" style="background-color:#358597;color:white;font-weight:bold;letter-spacing:8px;">> UPDATE PROFILE < </button></a>
<br>
 <a href="changepass.php" style="color:white;text-decoration:none;"><button class="form-control" style="background-color:#358597;color:white;font-weight:bold;letter-spacing:8px;">> CHANGE PASSWORD <</button></a>
<?php
}
?>
 </div>
 </div>
</body>
</html>

