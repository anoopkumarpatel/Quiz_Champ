<html>
<head>
<title>Attempt Quiz</title>
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
<?PHP
include("connection.php");
$id=$_REQUEST['id'];
$query="select * from ourcources where cources='$id'";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($res))
{
?>
<div class="container">
<div class="row" style="width:100%;min-height:70px;background-color:grey;font-size:25px;font-weight:bold;border-radius:20%;font-family:curior;color:white;letter-spacing:10px;">
  <p style="margin:0px auto;margin-top:10px;">Welcome to Your <u style="color:yellow;"><?PHP echo $row['cources'];?></u> Quiz Best of luck!!</p>
</div>
<?PHP
}
?>
<br>
<?php 
$query2="select * from question where type='$id' order by rand()" ;
$res2=mysqli_query($conn,$query2);
if($row2=mysqli_fetch_array($res2))
{
?>
<form method="post" action="attemptcode.php?id=<?php echo $id?>">
<div class="row" style="width:100%;min-height:50px;background-color:grey;opacity:50%;font-size:20px;font-weight:bold;color:yellow;letter-spacing:7px;">
 <input type="text" name="ques" class="form-control" value="<?PHP echo "Q:-".$row2['question'];?>" readonly="true" style="background-color:#f4a896;color:red;font-weight:bold;letter-spacing:5px;font-size:20px;">
</div>
    <p style="margin-top:10px;font-weight:bold;"><input type="radio" name="ans" value="A" required="true">&nbsp;&nbsp;
	<input type="text" name="opta" value="<?PHP echo $row2['option_a'];?>" readonly="true" style="background:none;border:0px;outline:none;color:black;font-weight:bold;letter-spacing:2px;font-size:16px;">
	</p>
  <p style="margin-top:10px;font-weight:bold;"><input type="radio" name="ans" value="B" required="true">&nbsp;&nbsp;
  <input type="text" name="optb" value="<?PHP echo $row2['option_b'];?>" readonly="true" style="background:none;border:0px;outline:none;color:black;font-weight:bold;letter-spacing:2px;font-size:16px;">
  </p>
  <p style="margin-top:10px;font-weight:bold;"><input type="radio" name="ans" value="C" required="true">&nbsp;&nbsp;
 <input type="text" name="optc" value="<?PHP echo $row2['option_c'];?>" readonly="true" style="background:none;border:0px;outline:none;color:black;font-weight:bold;letter-spacing:2px;font-size:16px;">
  </p>
  <p style="margin-top:10px;font-weight:bold;"><input type="radio" name="ans" value="D" required="true">&nbsp;&nbsp;
  <input type="text" name="optd" value="<?PHP echo $row2['option_d'];?>" readonly="true" style="background:none;border:0px;outline:none;color:black;font-weight:bold;letter-spacing:2px;font-size:16px;">
</p>
<input type="hidden" readonly="true" value="<?PHP echo $row2['qid'];?>" name="qid">
<input type="submit" name="sumbitq" value="Next >>" name="nextq" style="float:left;background-color:green;color:white;font-weight:bold;width:130px;min-height:40px;border-radius:5px;">

</form>
<a href="result.php?id=<?php echo $row2['type'];?>"><button class="btn btn-danger" style="float:right;">Submit Quiz >></button></a>
<?PHP
}
?>
</div>
</body>
</html>
