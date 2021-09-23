<html>
<head>
<title>Welcome to Admin Dashboard</title>
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
  border-radius:0px 40px 40px 0px;
  opacity:80%;
}
.top
{
background-image:linear-gradient(#f39,#0cf);
min-height:60px;
}
</style>
</head>
<body  onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">
<div class="container-fluid">
<div class="row top">

</div>
<div class="row">
<div class="col-sm-6">
<h3 style="color:red;" class="mt-2" style="margin-left:200px;">My Account

</h3>
</div>
<div class="col-sm-6">
<h3 style="color:;" class="mx-auto mt-2">Welcome
<?php include'showname.php' ?>
</h3>
</div>
</div>
<div class="row">
   <div class="col-sm-2 menu">
<a href="default.php" style="text-decoration:none;color:#FFFFFF;">
<button class="btn btn-danger form-control" style="width:100%;">
<b>My Account >></b>
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
   <a href="usermgmt.php" style="text-decoration:none;color:#CC0033;">
<button class="btn btn-default form-control" style="min-height:70px;text-align:left;background:none;outline:none;margin-top:10px;border:1px solid #999999;">
<span class="fas fa-user" aria-hidden="true" style="font-size:35px;color:#CC0033;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>User Management</b>
</span>
</button>
</a>
<a href="addadmin.php" style="text-decoration:none;color:#CC0033;">
<button class="btn btn-default form-control" style="min-height:70px;text-align:left;background:none;border:1px solid #999999;">
<span class="fas fa-plus" aria-hidden="true" style="font-size:35px;color:#CC0033;"><span class="fas fa-user" aria-hidden="true" style="font-size:35px;color:#CC0033;">&nbsp;&nbsp;
<b>Add/Remove Admin</b></span><br/>
</button>
</a>
<a href="qmanagement.php" style="text-decoration:none;color:#CC0033;">
<button class="btn btn-default form-control" style="min-height:70px;text-align:left;background:none;border:1px solid #999999;">
<span class="fas fa-question" aria-hidden="true" style="font-size:35px;color:#CC0033;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>Question Management</b></span><br/>
</button>
</a>
<a href="msgmgmt.php" style="text-decoration:none;color:#CC0033;">
<button class="btn btn-default form-control" style="min-height:70px;text-align:left;background:none;border:1px solid #999999;">
<span class="fas fa-envelope" aria-hidden="true" style="font-size:35px;color:#CC0033;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>User's Message mgmt</b></span><br/>
</button>
</a>
<a href="addq.php" style="text-decoration:none;color:#CC0033;">
<button class="btn btn-default form-control" style="min-height:70px;text-align:left;background:none;border:1px solid #999999;">
<span class="fas fa-plus" aria-hidden="true" style="font-size:35px;color:#CC0033;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>Add Questions</b></span><br/>
</button>
</a>
<a href="addcourse.php" style="text-decoration:none;color:#CC0033;">
<button class="btn btn-default form-control" style="min-height:70px;text-align:left;background:none;border:1px solid #999999;">
<span class="fas fa-plus" aria-hidden="true" style="font-size:35px;color:#CC0033;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>Add Course</b></span><br/>
</button>
</a>
<a href="changepass.php" style="text-decoration:none;color:#CC0033;">
<button class="btn btn-default form-control" style="min-height:70px;text-align:left;background:none;border:1px solid #999999;">
<span class="fas fa-lock" aria-hidden="true" style="font-size:35px;color:#CC0033;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>Change Password</b></span><br/>
</button>
</a>
<a href="logout.php" style="text-decoration:none;color:#CC0033;">
<button class="btn btn-default form-control" style="min-height:70px;text-align:left;background:none;border:1px solid #999999;">
<span class="fas fa-arrow-left" aria-hidden="true" style="font-size:35px;color:#CC0033;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>Logout</b>
</span>
</button>
</a>
   </div>
</div>
</div>
</body>
</html>

