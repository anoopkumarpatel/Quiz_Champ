<?PHP
if(isset($_POST["login"]))
{
session_start();
$userid=$_POST['uid'];
$password=$_POST['pass'];

include("connection.php");

$query="select * from admin where userid='$userid' and password='$password'";
$query2="select * from register where email='$userid' and passw='$password'";
$res=mysqli_query($conn,$query);
$res2=mysqli_query($conn,$query2);

$rows = mysqli_num_rows($res2);
        if($rows==1){
     $_SESSION['userid'] = $userid;
            // Redirect user to index.php
     header("Location: userdash.php");
         }else
		 {
		echo"<script>alert('Invalid User Name and Password .');window.location.href='login.php'</script>";
		 }
 

$rows2 = mysqli_num_rows($res);
        if($rows2==1){
$_SESSION['userid']=$mail;
header("location:admin/default.php");
}
else
{
echo"<script>alert('Invalid User Name and Password .');window.location.href='login.php'</script>";
}
}
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
	<script type="text/javascript"> 
        window.history.forward(); 
        function noBack() { 
            window.history.forward(); 
        } 
    </script> 
  </head>
  <body style="background: #E2D1F9;">
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form" method="post">
            <h2 class="title">Login</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" placeholder="Userid" name="uid" required="true"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="pass" required="true"/>
            </div>
            <input type="submit" value="Login" name="login"  class="btn solid" />
            <p class="social-text"><a href="forget.php">Forget Password ???</a></p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="#" class="sign-up-form" method="post">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="txtname" required="true" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="number" placeholder="Mobile" name="txtmob" required="true" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="email" placeholder="Email" name="txtmail" required="true" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="password" placeholder="password" name="txtpass" required="true" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="password" placeholder="confirm password" name="txtconpass" required="true"/>
            </div>

            <input type="submit" class="btn" value="Sign up" name="signup"/>
           
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Hi</h3>
            <p>
             If you have not any account then please Sign up.
            </p>

            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button><br><br>
			<a href="default.php"><button class="btn transparent"><< Home</button></a>
          </div>
         <img src="rok.svg" class="image" alt="">
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>helloo ?</h3>
            <p>
             Welcome please login...
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button><br><br>
			<a href="default.php"><button class="btn transparent"><< Home</button></a>
          </div>
          <img src="lap.svg" class="image" alt="">
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
<?PHP
if(isset($_POST["signup"]))
{
	
include("connection.php");

$name=$_POST['txtname'];
$mobile=$_POST['txtmob'];
$mail=$_POST['txtmail'];
$password=$_POST['txtpass'];
$conpass=$_POST['txtconpass'];
$date=date('d/m/y H:i:s',time());

$query="insert into register(name,mobile,email,passw,date)values('$name','$mobile','$mail','$password','$date')";
$query2="select * from register where email='$mail'";

$res=mysqli_query($conn,$query2);
if(mysqli_num_rows($res)>0)
{
echo"<script>alert('There is already a user with that email please enter the another email...');window.location.href='login.php'</script>";
}
elseif($password==$conpass)
{
mysqli_query($conn,$query);
echo"<script>alert('Registration Successfully');window.location.href='login.php'</script>";
}
else
{
echo"<script>alert('Please enter correct comfirm password .');window.location.href='login.php'</script>";
}
}
?>