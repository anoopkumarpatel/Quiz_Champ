<html>
<head>
<title>Your Score</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--For font-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
</head>
<body style="background: #E2D1F9;">
<?php include'header.php';?>
<?php include'showname.php';?>
<br>
<div class="container">
<div class="row" style="width:100%;min-height:70px;background-color:grey;font-size:25px;font-weight:bold;border-radius:20%;font-family:curior;color:white;letter-spacing:10px;">
  <p style="margin:0px auto;margin-top:10px;">Your <u style="color:yellow;">Overall</u> Results are here..</p>
</div>
<br>
<br>
<div class="row">
<div class="col-sm-8 mx-auto" style="font-weight:bold;">
  <div class="row">
    <table class="table table-hover" style="color:black;" border="3px">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Course</th>
      <th scope="col">Total Question</th>
      <th scope="col">Total Score</th>
	  <th scope="col">Average</th>
	  <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
 <?PHP
    $txt=$_SESSION['userid'];
	
	include("connection.php");
	$query="select * from history where addby='$txt'";
	$res=mysqli_query($conn,$query);
	$a=1;
	while($row=mysqli_fetch_array($res))
	{
		?>
    <tr>
      <th scope="row"><?php echo $a;?></th>
      <td><?php echo $row['cource'];?></td>
      <td><?php echo $row['totalattempt'];?></td>
      <td><?php echo $row['rightans'];?></td>
	  <td><?php echo $row['avr'];?></td>
	  <td><?php echo $row['date'];?></td>
    </tr>
	 <?php
$a++;
}
?>
  </tbody>
</table>
  </div>
</div>
</div>
</div>
</body>