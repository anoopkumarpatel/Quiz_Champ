<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Quiz_Champ</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--For font-->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
 <body style="background: #E2D1F9;">
 <div class="container-fluid">
 <div class="row" style="min-height:50px;background-color:#358597;"><p style="margin-top:10px;font-weight:bold;color:white;margin-left:20px;"><a href="index.php" style="text-decoration:none;color:white;"><< Back to Home</a></p></div>
  <div class="col-sm-3" style="min-height:200px;background-color:#E4A896;margin:100px auto;border-radius:40px;">
 <p style="text-align:center;font-weight:bold;color:#358597;">Forget Password!!</p>
    <form action="" method="post">
	  <input type="email" name="txtmail" required="true" placeholder="Enter Your Email Id...." class="form-control" style="margin-top:40px;"><br>
	  <input type="submit" Value="Submit" name="forget" class="form-control bg-success" style="color:white;">
	</form>
  </div>
 </div>
 </body>
 </html>
 <?PHP
if(isset($_POST["forget"]))
{
	include("connection.php");	

$mail=$_POST['txtmail'];
$date=date('d/m/y H:i:s',time());
$query="insert into forgetpassw(email,date)values('$mail','$date')";
$query2="select * from register where email='$mail'";
$res=mysqli_query($conn,$query2);
if(mysqli_num_rows($res)>0)
{
mysqli_query($conn,$query);
echo"<script>alert('Send Successfully I will inform within 6 hours.');window.location.href='default.php'</script>";
}
else
{
echo"<script>alert('This Email Is Not Registered.');window.location.href='forget.php'</script>";
}

}
?>