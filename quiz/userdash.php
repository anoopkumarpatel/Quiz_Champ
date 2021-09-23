<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Quizchamp -</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha256-L/W5Wfqfa0sdBNIKN9cG6QA5F2qx4qICmU2VgLruv9Y="
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css"
      integrity="sha256-x8PYmLKD83R9T/sYmJn1j3is/chhJdySyhet/JuHnfY="
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styleudash.css" />
	 <script type="text/javascript"> 
        window.history.forward(); 
        function noBack() { 
            window.history.forward(); 
        } 
    </script> 
  </head>

  <body onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">
    <nav
      class="navbar navbar-expand-lg navbar-dark bg-mattBlackLight fixed-top"
    >
      <button class="navbar-toggler sideMenuToggler" type="button">
        <span class="navbar-toggler-icon"></span>
      </button>

      <a class="navbar-brand" href="#">QuizChamp</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle p-0"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <i class="material-icons icon">
                person
              </i>
           <span style="color:white;"><?php include'showname.php';?></span>
            </a>
            <div
              class="dropdown-menu dropdown-menu-right"
              aria-labelledby="navbarDropdown"
            >
              <a class="dropdown-item" href="logout.php"><b>LOGOUT</b></a>
         
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <div class="wrapper d-flex">
      <div class="sideMenu bg-mattBlackLight">
        <div class="sidebar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="index.php" class="nav-link px-2">
                <i class="material-icons icon">
                  dashboard
                </i>
                <span class="text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="profile.php" class="nav-link px-2">
                <i class="material-icons icon">
                  person
                </i>
                <span class="text">Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="course.php" class="nav-link px-2">
                <i class="material-icons icon"> Progress_chart </i
                ><span class="text">Cources</span></a
              >
            </li>
            <li class="nav-item">
              <a href="history.php" class="nav-link px-2">
                <i class="material-icons icon">
                  pages
                </i>
                <span class="text">History</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="feedback.php" class="nav-link px-2">
                <i class="material-icons icon">
                  computer
                </i>
                <span class="text">Feedback</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link px-2">
                <i class="material-icons icon">
                  out
                </i>
                <span class="text">Logout</span>
              </a>
            </li>            <li class="nav-item">
              <a href="#" class="nav-link px-2 sideMenuToggler">
                <i class="material-icons icon expandView ">
                  view_list
                </i>
                <span class="text">Resize</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
	   <?PHP
    $txt=$_SESSION['userid'];
	
	include("connection.php");
	$query="select * from history where addby='$txt'";
	$res=mysqli_query($conn,$query);
	if($row=mysqli_fetch_array($res))
	{
		?>
      <div class="content">
        <main>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4 my-3">
                <div class="bg-mattBlackLight px-3 py-3">
                  <h4 class="mb-2"> C</h4>
                  <div class="progress" style="height: 16px;">
                    <div
                      class="progress-bar bg-warning text-mattBlackDark"
                      role="progressbar"
                      style="width: 100%;"
                      aria-valuenow="25"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    >
                     <?php if($row['cource']=="C")
						  echo $row['avr']; ?>
                    </div>
                  </div>
                </div>
              </div>
			   <div class="col-md-4 my-3">
                <div class="bg-mattBlackLight px-3 py-3">
                  <h4 class="mb-2"> Python</h4>
                  <div class="progress" style="height: 16px;">
                    <div
                      class="progress-bar bg-primary text-mattBlackDark"
                      role="progressbar"
                      style="width: 100%;"
                      aria-valuenow="25"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    >
                     <?php if($row['cource']=="PYTHON")
						  echo $row['avr']; ?> 
                    </div>
                  </div>
                </div>
              </div>
			   <div class="col-md-4 my-3">
                <div class="bg-mattBlackLight px-3 py-3">
                  <h4 class="mb-2"> .NET</h4>
                  <div class="progress" style="height: 16px;">
                    <div
                      class="progress-bar bg-warning text-mattBlackDark"
                      role="progressbar"
                      style="width: 100%;"
                      aria-valuenow="25"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    >
                    <?php if($row['cource']=="NET")
						  echo $row['avr']; ?>
                    </div>
                  </div>
                </div>
              </div>
			   <div class="col-md-4 my-3">
                <div class="bg-mattBlackLight px-3 py-3">
                  <h4 class="mb-2"> Java</h4>
                  <div class="progress" style="height: 16px;">
                    <div
                      class="progress-bar bg-danger text-mattBlackDark"
                      role="progressbar"
					  
                      style="width:100%;"
                      aria-valuenow="25"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    >
                      <?php if($row['cource']=="JAVA")
						  echo $row['avr']; ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 my-3">
                <div class="bg-mattBlackLight px-3 py-3">
                  <h4 class="mb-2"> PHP</h4>
                  <div class="progress" style="height: 16px;">
                    <div
                      class="progress-bar bg-info text-mattBlackDark"
                      role="progressbar"
                      style="width: 100%;"
                      aria-valuenow="25"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    >
                      <?php if($row['cource']=="PHP")
						  echo $row['avr']; ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 my-3">
                <div class="bg-mattBlackLight p-3">
                  <h4 class="mb-2">HTML</h4>
                  <div class="progress" style="height: 16px;">
                    <div
                      class="progress-bar bg-success"
                      role="progressbar"
                      style="width: 100%;"
                      aria-valuenow="25"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    >
                     <?php if($row['cource']=="HTML")
						  echo $row['avr']; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
          </div>
        </main>
      </div>
	<?php }?>
    </div>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"
      integrity="sha256-OUFW7hFO0/r5aEGTQOz9F/aXQOt+TwqI1Z4fbVvww04="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"
      integrity="sha256-qE/6vdSYzQu9lgosKxhFplETvWvqAAlmAuR+yPh/0SI="
      crossorigin="anonymous"
    ></script>
    <script src="js/script.js"></script>
  </body>
</html>
