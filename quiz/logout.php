<?php

include("connection.php");

$query="TRUNCATE TABLE answer";
mysqli_query($conn,$query);
session_start();
session_destroy();
header("location:login.php");
?> 