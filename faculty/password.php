<?php include("header.php");  ?>
<?php include("connection.php");  ?>

    
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="button.css">
    <style>
     .wrapper{
      width: 400px;
      height: 340px;
      margin: 0 auto;
      background-color: darkgray;
      opacity: 0.8;
      color: black;
      padding: 27px 15px;
      text-decoration: underline;
     }
     .form-control{
      
     }
     button{
      text-align: center;
     }

 
 </style>

   <section id="main">
    <div class="container1">
    
    <div id="mySidenav" class="sidenav">
    <br><br>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="facultydashboard.php">Profile</a>
  <a href="session.php">Session</a>
  <a href="semester.php">Semester</a>
  <a href="course.php">Courses</a>
  <a href="department.php">Deparment</a>
  <a href="student1.php">Enrolled students</a>
  <a href="calender.php">Calender</a>
  <a href="messages.php">Class messages</a>
  <a href="display.php">Assigment</a>
  <a href="quiz.php">Quiz</a>
  <a href="password.php">Change Password</a>
</div>
      <br><br><br><br><br><br>
<!-- Use any element to open the sidenav -->
     <span onclick="openNav()"><button>MENU</button></span>
   

<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div id="main">

	
	
	<div class="wrapper">
	<div style="text-align: center;">
	 <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">CHANGE PASSWORD</h1>
	</div>
	<br>
	<div >
	 <form action="" method="post">
	 <input type="text" name="username" class="form-control" placeholder="Username" required=""><br>
	 <input type="text" name="email" class="form-control" placeholder="Email" required=""><br>
	 <input type="text" name="password" class="form-control" placeholder="New Password" required=""><br>
	 <div style="text-align:center;">
	 <button style="text-align:center;" class="btn btn-default" type="submit" name="submit">Update Password</button>
	 </div>
	 
	  
	 </form>
	 </div>
	</div>
	 

</div>
     
    </div>
	    
	</section>
	<?php
 if(isset($_POST['submit']))
 {
  if(mysqli_query($db,"UPDATE admin SET password='$_POST[password]' WHERE username='$_POST[username]' AND email='$_POST[email]';"))
  {
   ?>
   <script type="text/javascript">
 alert("Password changed succesfully");
 </script>
   <?php
  }
 }
 ?>
	



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
