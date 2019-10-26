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
 
 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line" style="text-align:center;"> Add Semester </h1>
                    </div>
                </div>
                <div class="row" >
                  <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           Semester
                        </div>


                        <div class="panel-body">
                       <form action="semester.php" method="post">
   <div class="form-group">
    <label for="session">Create Semester </label>
    <input type="text" class="form-control" id="semester" name="semester" placeholder="Semester" />
  </div>
 <button type="submit" name="done" class="btn btn-success" onclick=" mess();">Submit</button>
 <script type="text/javascript">
                        function mess()
  {
                        alert("Semester is successfully added!");
   return true;
                       
  }
 </script>
</form>
                            </div>
                            </div>
                    </div>
                  
                </div>
                

<?php

if(isset($_POST['done'])){

 $semester= $_POST['semester'];
 $q="insert into semester (semester) values ( '$semester')  " ;

  $query=mysqli_query($db,$q);
?>
  
  <script type="text/javascript">
   window.open("semester.php","_self");
</script>
  <?php
}

if(isset($_GET['del']))
{
 $query =" delete from semester where id='".$_GET['id']."'";
 $result=mysqli_query($db,$query);
 
 if($result)
 {?>
  <script type="text/javascript">
   window.open("semester.php","_self");
</script>
  
  <?php
  
  
 }
 else
 {
  echo 'Please Check your query';
 }
}
?>


 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class=" text-center" > Manage semester </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th class="text-center"> Id </th>
 <th class="text-center"> Semester</th>
 <th class="text-center"> Delete </th>


 </tr >

 <?php
 
 $q = "select * from semester ";

 $query = mysqli_query($db,$q);
 

 while($row = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $row['id'];  ?> </td>
 <td> <?php echo $row['semester'];  ?> </td>
 <td><a href="semester.php?id=<?php echo $row['id'] ?>&del=delete" onClick()="return confirm('Are you sure you want to delete?')">
                                            <button class="btn btn-danger">Delete</button>
</a></td>




 </tr>

 <?php 
 }
  ?>
 
 </table>  

 </div>
 </div>
 </div>
     
    </div>
	    
	</section>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>
 




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
