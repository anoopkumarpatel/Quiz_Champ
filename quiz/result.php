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
  <script type="text/javascript"> 
        window.history.forward(); 
        function noBack() { 
            window.history.forward(); 
        } 
    </script> 
</head>
<body style="background: #E2D1F9;">
<?php include'header.php';?>
<?php include'showname.php';?>
<br>
<div class="container">
<div class="row" style="width:100%;min-height:70px;background-color:grey;font-size:25px;font-weight:bold;border-radius:20%;font-family:curior;color:white;letter-spacing:10px;">
  <p style="margin:0px auto;margin-top:10px;">Your <u style="color:yellow;"></u>result are here..</p>
</div>
<br>
<br>
<?php
$id=$_REQUEST['id'];
$txt=$_SESSION['userid'];

include("connection.php");

$query="select * from answer where attemptby='$txt' and course='$id'";
$res=mysqli_query($conn,$query);
$a=0;
$b=0;
$c=0;
while($row=mysqli_fetch_array($res))
{
$a++;
$rig=$row['ans'];
if($rig=="TRUE")
{
	$b++;
}
else
{
	$c++;
}
}
if($a!=0)
{
$average=($b*100)/$a;
$ave = round($average, 1); 
}
else
{
	echo "You did not attempt any question";
	$ave=0;
}
$date=date('d/m/y H:i:s',time());
$query3="insert into history(addby,cource,avr,totalattempt,rightans,date)values('$txt','$id','$ave','$a','$b','$date')";
mysqli_query($conn,$query3)
?>
<div class="row">
<div class="col-sm-6 mx-auto" style="font-weight:bold;">
<div class="alert alert-primary form-control" role="alert">
  Total Attempted Question:----><p style="float:right;"><?php echo $a;?></p>
</div>
<div class="alert alert-secondary" role="alert">
  Total Right Answer:------------><p style="float:right;"><?php echo $b;?></p>
</div>
<div class="alert alert-success" role="alert">
  Total Wrong Answer:----------><p style="float:right;"><?php echo $c;?></p>
</div>
<div class="alert alert-danger" role="alert">
  Average:------------------------->
  <p style="float:right;"><?php echo $ave; ?></p>
</div>
<br>
<br>
<a href="viewall.php?id=<?php echo $id;?>"><button class="form-control btn btn-success" style="background-color:#358597;"><b>View all attempted question.>></b></button></a>
</div>
</div>
</div>
<br>
</body>
