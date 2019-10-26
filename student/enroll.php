<?php include("header.php");  ?>
<?php include("connection.php");  ?>

<link rel="stylesheet" href="enroll.css">
<link rel="stylesheet" href="button.css">
	
           
 <?php


if(isset($_POST['done'])){

 $studentRegno = $_POST['studentRegno'];
 $first = $_POST['first'];
 $last = $_POST['last'];
 $email = $_POST['email'];
 $session = $_POST['session'];
 $course = $_POST['course'];
 
 $q = " INSERT INTO `courseenrolls`(`studentRegno`, `first`,`last`,`email`,`session`,`course`) VALUES ( '$studentRegno', '$first','$last','$email','$session','$course')";

 $query = mysqli_query($db,$q);?>
 <script>
  alert("Successfully enrolled course")</script>
  <?php
}
?>

<!DOCTYPE html>
<html>
<head>
 <title></title>
 <link rel="stylesheet" type="text/css" href="enroll.css">
  <link rel="stylesheet" href="../css/dashboard.css">
    
</head>
<body>

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

    
   <br><br><br><br>
<!-- Use any element to open the sidenav -->
     <span onclick="openNav()"><button>MENU</button></span>
   

<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div id="main">
 


 <div>
 <div class="loginbox">
 <form method="post" style="text-align:center;">
 
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><div class="card">
 
 <div class="bg-dark">
 <h1 class="text-white" style="text-align:center;"> Course Enrollment</h1>
 </div><br>

 <label> Registration number: </label><br>
 <input type="text" name="studentRegno"> <br>

 <label> Firstname: </label><br>
 <input type="text" name="first"> <br>
 <label> Lastname: </label><br>
 <input type="text" name="last"> <br>
 <label> Email: </label><br>
 <input type="text" name="email"> <br>
 <label> Session: </label><br>
 <input type="text" name="session"> <br>

 <label> Course: </label><br>
 <input type="text" name="course"> <br>
 <br><br>
 

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>
 

 </div>
 </form>
 </div>
 </div>
 </div>
     
    </div>
	    
	</section>
</body>
</html>
  
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

