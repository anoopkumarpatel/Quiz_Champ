
<html>
<head>
<title></title>
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
<div class="row top fixed-top">
<div class="col-sm-6">
<a href="default.php"><button class="btn btn-success" style="margin-top:10px;margin-left:20px;float:left;"><< Back to home</button></a>
</div>
 <div class="col-sm-6" style="margin-top:10px;">
 <form action="search.php" method="post">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search by Question ID..." name="txtid">
      <span class="input-group-btn">
        <input type="submit" style="height:38px;background-color:blue;">
      </span>
    </div>
	</form>
  </div>
</div>
<div class="row" style="margin-top:60px;">

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
<h3 style="color:;" class="mt-2" style="margin-left:200px;"><a href="qmanagement.php" style="text-decoration:none;color:red;"><b>Question</b> Management</a>
</h3>
</div>
</div>
<div class="row">
 <table border="2" style="border:4px solid white;width:95%;align:center;margin-top:10px;margin-left:2.5%;">
<tr style="border:4px solid #CC0099;color:blue;font-weight:bold;">
<td>Q.id</td>
<td>Question</td>
<td>Option A</td>
<td>Option B</td>
<td>Option C</td>
<td>Option D</td>
<td>Answer</td>
<td>Type</td>
<td>Level</td>
<td>Add By</td>
<td>Date</td>
<td>Delete</td>
<td>Update</td>
</tr>
    <?PHP
	include("../connection.php");
	$q = $_POST['txtid'];
	$query = mysqli_query($conn,"SELECT * FROM question WHERE qid LIKE '%$q%'"); 

	$count = mysqli_num_rows($query);
	if($count == "0")
	{		
echo"<script>alert('No result found...');window.location.href='qmanagement.php'</script>";
	}
		if($row = mysqli_fetch_array($query))
		{
		?>
	  <tr style="border:3px solid #CC0099;color:white;font-weight:bold;">
	
	<td><?php echo $row['qid'];?></td>
	<td><?php echo $row['question'];?></td>
	<td><?php echo $row['option_a'];?></td>
	<td><?php echo $row['option_b'];?></td>
	<td><?php echo $row['option_c'];?></td>
	<td><?php echo $row['option_d'];?></td>
	<td><?php echo $row['ans'];?></td>
	<td><?php echo $row['type'];?></td>
	<td><?php echo $row['level'];?></td>
	<td><?php echo $row['addby'];?></td>
	<td><?php echo $row['date'];?></td>

	<td><a href="delete.php?id2=<?php echo $row['qid'];?>" style="color:#FF0000;">Delete</a></td>
	<td><a href="updateques.php?id=<?php echo $row['qid'];?>" style="color:#FF0000;">Update</a></td>
</tr>
   <?php
}
?>
	</table>
</div>
</body>
</html>