<?php include("header.php");  ?>
      <link rel="stylesheet" href="../css/dashboard.css">
      <link rel="stylesheet" href="button.css">
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
<br><br><br><br>
<!-- Use any element to open the sidenav -->
     <span onclick="openNav()"><button>MENU</button></span>
   

<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div id="main">
 

	
      

      <div class='abc' style="text-align: center;
            width: 100%;">
      <iframe class='xyz' style="width: 1200px;
            height: 550px;"src="https://calendar.google.com/calendar/embed?src=a72tnrba4d73sn3d9r0kkkvaf8%40group.calendar.google.com&ctz=Asia%2FKolkata" style="border: 0" width="800" height="650" frameborder="0" scrolling="no"></iframe>
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
     
	   