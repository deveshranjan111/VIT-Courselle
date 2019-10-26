<?php
include "header.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>uploads</title>
 <link rel="stylesheet" href="../css/dashboard.css">
 <link rel="stylesheet" href="button.css">
</head>
<body>
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
<h1 class="text-center text-white bg-dark">UPLOADED ASSIGNMENT</h1>
<br><br><br>
<div class="table-responsive">
 

<table class="table table-bordered table-striped table-hover">
 <thead>
  <th>Id</th>
   <th>Username</th>
    <th>Assignment</th>
    <th>Marks</th>
    
 </thead>
 <tbody>
  <?php

$db=mysqli_connect('localhost','root');
mysqli_select_db($db,'vitcourselle');
  
    $displayquery =" select * from uploads";
    $querydisplay =mysqli_query($db,$displayquery );
    //header("");
    ?>
  
   <?php
    
   
    //$row = mysqli_num_rows("$querydisplay");
    while($result =mysqli_fetch_array($querydisplay)){
     
     ?>
     <tr>
      <td> <?php echo $result['id'];   ?>  </td>
      <td> <?php echo $result['username'];   ?>  </td>
      <td><a href="<?php echo $result['upload']?>"><?php echo $result['upload'];   ?> </a></td>
      <td><form name="form1" action="" method="post" enctype="multipart/form-data"><input type="text" name="mark" id="mark"><input type="submit" name= "submit" value="send marks"></form></td>
     
     </tr>
     
     <?php
     
    }
  
  
  


?>


<?php

?>
 
  
 </tbody>
</table>
</div>
 
</div>
</div>
     
    </div>
	    
	</section>
	
 
</body>
</html>

 <?php
if(isset($_POST['submit']))
{
 mysqli_query($db,"INSERT INTO `messages`(`mark`) VALUES ('$_POST[mark]')") or die(mysqli_error($db));
 ?>
 <script type="text/javascript">
alert("mark saved and send successfully");
</script>
<?php
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
