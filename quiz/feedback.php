<html>
<head>
	<title>Feedback</title>
	<link rel="stylesheet" type="text/css" href="stylefeed.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body>
<?php include'header.php'?>
<?php include'showname.php';?>
	<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Feedback</h2>
				 <?PHP
    $txt=$_SESSION['userid'];
		include("connection.php");
	
	$query="select * from register where email='$txt'";
	$res=mysqli_query($conn,$query);
	if($row=mysqli_fetch_array($res))
	{
		?>
				<form action="" method="post">
				<input type="text" class="field" placeholder="Your Name" value="<?php echo $row['name'];?>" readonly="true" name="txtname">
				<input type="text" class="field" placeholder="Your Email" value="<?php echo $row['email'];?>" readonly="true" name="txtmail">
				<input type="text" class="field" placeholder="Phone" value="<?php echo $row['mobile'];?>" readonly="true" name="txtmob">
				<textarea placeholder="Message" class="field" name="msg"></textarea>
				<input type="submit" value="Send >>" name="feed" class="form-control bg-success text-white">
				</form>
	<?php }?>
			</div>
			<?php 
			if(isset($_POST['feed']))
			{
				$name=$_POST['txtname'];
				$mail=$_POST['txtmail'];
				$mob=$_POST['txtmob'];
				$msg=$_POST['msg'];
				$date=date('d/m/y H:i:s',time());
				$query="insert into feedback(name,email,mobile,msg,date)values('$name','$mail','$mob','$msg','$date')";
				if(mysqli_query($conn,$query))
				{
					echo"<script>alert('Feedback send successfully....');window.location.href='feedback.php'</script>";
				}
			}
			?>
		</div>
	</div>
</body>
</html>