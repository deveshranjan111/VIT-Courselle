<?php include "connection.php";
?>

<!--<link rel="stylesheet" href="../css/dashboard.css">-->

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
   
           <link rel="stylesheet" type="text/css" href="../css/signup1.css">

    
 </head>
    <body>
    
    <header>  
   
   
   <nav class="navbar navbar-inverse navbar-custom navbar-fixed-top">
   <div class="container">
   
  
  <div class="container-fluid">
     

    <!--Brand and toggle get grouped for better mobile display-->
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
      <ul class="nav navbar-nav">
        <li class="active"><a href="#" class="page-scroll">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="#" class="page-scroll" >About</a></li>
        <li><a href="#" class="page-scroll" >Features</a></li>
        <li><a href="#" class="page-scroll">Team</a></li> 
        <li><a href="#" class="page-scroll">Contact</a></li>
        
        
      </ul>
   
     
      
       <ul class="nav navbar-nav navbar-right">
         <li class="dropdown">
     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Log In<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="./admin/faculty_login.php" id="button1" class="button1">Instructor</a></li>
            <li><a href="./student/student_login.php" id="button2" class="button2">Student</a></li>
            
            </ul>
           </li>
           
           <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sign Up<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="./admin/faculty_signup.php" id="button1" class="button1">Instructor</a></li>
            <li><a href="./student/student_signup.php" id="button2" class="button2">Student</a></li>
            
            </ul>
           </li>
               </ul>
            
     
     
  
     
     
            
            
       
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  


	
	

	</div>
	</nav> 
	 <div class="loginbox">
    <img src="../images/avatar.png" class="avatar">
        <h1>SignUp Here!</h1>
       
        <form name="Registration" action="student_signup.php" method="POST">
         
        <p>Firstname</p>
            <input type="text" name="first" placeholder="" required="">
            <p>Lastname</p>
            <input type="text" name="last" placeholder="" required="">
          <p>Username</p>
            <input type="text" name="username" placeholder="" required="">
            <p>Password</p>
            <input type="password" name="password" placeholder="" required="">
            <p>Email</p>
            <input type="text" name="email" placeholder="" required="">
            
            <br>
            
            <input type="submit" name="submit" value="Sign Up">
            <br>
            <p>
            Already a user? &nbsp<a href="student_login.php">Log In</a>
            </p>
        </form>
        
    </div>
     </header>
<!-- jQuery -->
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

   
    
   

<?php
if(isset($_POST["submit"]))
	{
 $count=0;
 $sql="SELECT username from signup";
 $res=mysqli_query($db,$sql);
 
 while($row=mysqli_fetch_assoc($res))
 {
  if($row['username']==$_POST['username'])
  {
   $count=$count +1;
  }
 }
 if($count==0)
 {
 mysqli_query($db,"INSERT INTO `signup` VALUES('$_POST[first]','$_POST[last]','$_POST[username]','$_POST[password]','$_POST[email]','user.png');");
        
?>
<script type="text/javascript">
 alert("Signup successful");
</script>
<?php
}
 else
 {
  ?>
  <script type="text/javascript">
 alert("The username already exists.");
</script>
 <?php
  
 }
}

?>
          
  
          
          
    