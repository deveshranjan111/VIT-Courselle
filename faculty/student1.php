<?php include("header.php");  ?>
<?php include("connection.php");  ?>
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
 


<div class="container">

 
 <h2 class="text-danger">Enrolled Students</h2>
 <div class="srch">
  <form class="navbar-form" method="post" name="form1">
  
   <input class="form-control" type="text" name="search" placeholder="Search Students" required>
   <button style="bacground-color: black;" type="submit" name="submit" class="btn btn-default">
    <span class="glyphicon glyphicon-search"></span>
   </button>
 
  </form>
 </div>
 <?php
if(isset($_POST['submit']))
 {
  $q=mysqli_query($db,"SELECT studentRegno,first,last,email,session FROM `courseenrolls` where studentRegno like '%$_POST[search]%'");
  if(mysqli_num_rows($q)==0)
  {
    echo "Sorry! No student found.Try searching again.";
  }
  else{
   $data ='<table class="table table-bordered table-striped">
        <tr>
           <th>Registration number</th>
           <th>First Name</th>
           <th>Last Name</th>
           <th>Email</th>
           <th>Session</th>
           
          </tr>';
 
   if(mysqli_num_rows($q) > 0){
    while ($row = mysqli_fetch_array($q)){
    $data .= '<tr>
    <td>'.$row['studentRegno'].'</td>
    <td>'.$row['first'].'</td>
    <td>'.$row['last'].'</td>
    <td>'.$row['email'].'</td>
    <td>'.$row['session'].'</td>
    </tr>';
    
  }
 }
 $data .='</table>';
 echo $data;
  
}
}
 /*if button is not pressed.*/

 else{
  $data ='<table class="table table-bordered table-striped">
        <tr><th>Registration number</th>
           <th>First Name</th>
           <th>Last Name</th>
           <th>Email</th>
           <th>Session</th>
           
          </tr>';
 $displayquery = "SELECT studentRegno,first,last,email,session FROM `courseenrolls`";
 $result = mysqli_query($db,$displayquery);
 
 if(mysqli_num_rows($result) > 0)
 {
  while ($row = mysqli_fetch_array($result)){
   $data .= '<tr>
   <td>'.$row['studentRegno'].'</td>
    <td>'.$row['first'].'</td>
    <td>'.$row['last'].'</td>
    <td>'.$row['email'].'</td>
    <td>'.$row['session'].'</td>
    </tr>';
  }
 }
 $data .='</table>';
 echo $data;
      
  
 }
 ?>
    
   
 
  
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
