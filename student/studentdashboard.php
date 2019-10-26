<?php
session_start();
include "connection.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
    <meta name="author" content="">
	
	<title>VIT Courselle</title>

	<!--Bootstrap Core CSS  -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	<!--Custom Fonts -->
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Catamaran&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    
    
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	
	<!--Theme CSS-->
   <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="./css/technicallanding.css">

  <link rel="stylesheet" href="../css/dashboard.css">
   <link rel="stylesheet" href="button.css">
   <style>
 .wrapper{
  width: 300px;
  margin: 0 auto;
  color: black;
    }
    table{
     background-color: darkgrey;
     opacity: :0.99;
    }
 </style>
    
    

</head>

<body>
 <?php
  if(isset($_SESSION['login_user']))
  {
  ?>
  
  <nav class="navbar navbar-inverse navbar-custom navbar-fixed-top">
   <div class="container">
   
  
  <div class="container-fluid">
     

    <!--Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header page-scroll">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
      <a class="navbar-brand" href="index.php">VIT Courselle</a>
    </div>
     <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
     
      <ul class="nav navbar-nav navbar-right">
        
           <li class="dropdown">
           <a href="logout.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Log Out</a>
           </li>
           
           
           </ul>
             </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </div>
	</nav>
   
    
 <?php
  } 
  else{
  ?>
  <nav class="navbar navbar-inverse navbar-custom navbar-fixed-top">
   <div class="container">
   
  
  <div class="container-fluid">
     

    <!--Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header page-scroll">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
      <a class="navbar-brand" href="index.php">VIT Courselle</a>
    </div>
     <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
     
      <ul class="nav navbar-nav navbar-right">
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Log In<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="faculty_login.php" id="button1" class="button1">Instructor</a></li>
            <li><a href="student_login.php" id="button2" class="button2">Student</a></li>
            
            </ul>
           
           <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sign Up<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="faculty_signup.php" id="button1" class="button1">Instructor</a></li>
            <li><a href="student_signup.php" id="button2" class="button2">Student</a></li>
            
            </ul>
           </li>
           
           

           
            
            </ul>
             </div><!-- /.navbar-collapse --></div><!-- /.container-fluid -->
  </div>
	</nav>
   
   
   <?php
      }
  ?>
  
   <br><br><br><br>
	
     <!--echo "<img class='img-circle profile-img' src='images/".$_SESSION['pic']." '>";?></h2>-->
	
	
	<section id="main">
    <div class="container1">
    <div id="mySidenav" class="sidenav">
    <br><br>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="studentdashboard.php">Profile</a>
  <a href="enroll.php">Enroll Course</a>
  <a href="enrollhistory.php">Enrolled history</a>
  <a href="calender.php">Calender</a>
  <a href="assignmentupload.php">Assigment</a>
  <a href="quiz.php">Quiz</a>
  <a href="password.php">Change Password</a>
</div>

    
   
<!-- Use any element to open the sidenav -->
     <span onclick="openNav()"><button>MENU</button></span>
   

<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div id="main">
 <div class="container">
  <form action="" method="post">
   <button class="btn btn-default" style="float:right;">Edit</button>
  </form>
  <div class="wrapper">
  <?php
   $q=mysqli_query($db,"SELECT * FROM signup where username='$_SESSION[login_user]';");
   ?>
   <h2 style="text-align: center;">My Profile</h2>
   <?php
   $row=mysqli_fetch_assoc($q);
   
   echo "<div style='text-align:center'>
   <img class='img-circle profile-img' height=110 width=120 src='images/".$_SESSION['pic']."'
   </div>";
   ?>
   <div style="text-align:center;"><b>Welcome</b><h4><?php echo $_SESSION['login_user'];?></h4></div>
   <?php
   echo "<b>";
   echo "<table class='table table-bordered'>";
   echo "<tr>";
        echo "<td>";
            echo"<b>First Name:</b>";
        echo "</td>";
            
        echo "<td>";
             echo $row['first'];
        echo "</td>";
   echo "</tr>";
   
   echo "<tr>";
        echo "<td>";
   echo"<b>Last Name:</b>";
        echo "</td>";
        echo "<td>";
    echo $row['last'];
        echo "</td>";
   echo "</tr>";
   
   echo "<tr>";
        echo "<td>";
   echo"<b>Username:</b>";
        echo "</td>";
        echo "<td>";
    echo $row['username'];
        echo "</td>";
   echo "</tr>";
   
   echo "<tr>";
        echo "<td>";
   echo"<b>Password:</b>";
        echo "</td>";
        echo "<td>";
    echo $row['password'];
        echo "</td>";
   echo "</tr>";
   
   echo "<tr>";
        echo "<td>";
   echo"<b>Email:</b>";
        echo "</td>";
        echo "<td>";
    echo $row['email'];
        echo "</td>";
   echo "</tr>";
   
   echo"</table>";
   echo "</b>";
   ?>
   
  
   
  </div>
 </div>

 

</div>
     
    </div>
	    
	</section>
	
	<script>
/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}</script>


<script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    
<!--    Parallex scripts-->
    <script src="js/parallax.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>
    
    <script src="js/abc.js"></script>
    <script class="cssdeck" src="js/abcd.js"></script>

 </body>
</html>