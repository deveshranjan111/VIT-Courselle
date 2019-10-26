<?php
include "connection.php";
include "header.php";

?>
<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="../css/dashboard.css">
   <link rel="stylesheet" href="button.css">
    <!--<link rel="stylesheet" href="../css/dashboard.css">-->
    <style>
form{
 text-align: center;
}

.loginbox{     
    width: 400px;
    height: 540px;
    background: black;
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
    opacity:0.8;
     }

h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 32px;
}

.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}

.loginbox input{
    width: 60%;
    margin-bottom: 20px;
}
     button{
      background:white;
      color: black;
     }


.loginbox input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    color: gray;
    font-size: 18px;
    border-radius: 20px;
}
.loginbox input[type="submit"]:hover
{
    cursor: pointer;
    background: #ffc107;
    color: #000;
}
.loginbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: darkgrey;
}

.loginbox a:hover
{
    color: #ffc107;
}
     #user{
      text-align: center;
     }

 
 </style>

  
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
 


	
    <div class="loginbox">
        <h1>Assignment Upload</h1>
        <h3>Course: Internet and Web programming</h3>
        <h3>Code:CSE3002</h3>
        <h3>Slot: E1+TE1</h3>
        
        <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label for="user">Username: </label><br>
        <input type="text" name="username" id="user"><br>
    
 
        <label for="file">Assignment: </label><br>
        <input type="file" name="file" id="user">
      
     <br>
     <button type="submit" name="submit">UPLOAD</button>
    
    </form>
    
    
        
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