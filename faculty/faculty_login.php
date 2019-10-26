<?php
session_start();
include "connection.php";



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
    

        <link rel="stylesheet" type="text/css" href="../css/login1.css">






</head>

<body>
 <header><nav class="navbar navbar-inverse navbar-custom navbar-fixed-top">
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
        <li class="active"><a href="../index.php" class="page-scroll">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="../about.php" class="page-scroll" >About</a></li>
        <li><a href="../features.php" class="page-scroll" >Features</a></li>
        <li><a href="../team.php" class="page-scroll">Team</a></li> 
        <li><a href="../contact.php" class="page-scroll">Contact</a></li>
        
        
      </ul>
      <?php
     //if(isset($_SESSION['userid'])){?>
      <!--<ul class="nav navbar-nav navbar-right">
      <form action="logout.php" method="post">
       <li class="dropdown">
           <a href="../index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Log Out</a>
           </li>
        </form>
           
       
       </ul>-->
      
     <?php
        //   }
     //else{
     ?>
       <ul class="nav navbar-nav navbar-right">
         <li class="dropdown">
     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Log In<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="faculty_login.php" id="button1" class="button1">Instructor</a></li>
            <li><a href="" id="button2" class="button2">Student</a></li>
            
            </ul>
           </li>
           
            
           
           
           <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sign Up<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="faculty_signup.php" id="button1" class="button1">Instructor</a></li>
            <li><a href="" id="button2" class="button2">Student</a></li>
            
            </ul>
           </li>
               </ul>
      
     <?php
     //}
     
     ?>
   
      
            
       </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  
</div>
 </nav>   </header>
	
	        <div class="loginbox" style="height: 500px;">
    <img src="../images/avatar.png" class="avatar">
        <h1>Login Here!</h1>
       
        <form action="faculty_login.php" method="POST" style="text-align: center;">
                
          <h4>Username</h4>
            <input type="text" name="username" placeholder="" required="">
            <h4>Password</h4>
            <input type="password" name="password" placeholder="" required="">
            <br>
            <input type="submit" name="submit" value="Login">
            <br>
            <p style="color: white;">
            <a style="color: gray;" href="password.php">Forgot password</a> &nbsp
            New User?&nbsp <a style="color: gray;" href="faculty_signup.php">Sign Up</a><br><br>
             <!--<a style="color: gray;" href="index.php">BACK</a>--> 
            </p>
            
        </form>
        
    </div>
       

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
        $username=$_POST['username'];
		$password=$_POST['password'];
 
		$query="SELECT * FROM `admin` WHERE username='$username' && password='$password';";
      
        $res=mysqli_query($db,$query);
        $row= mysqli_fetch_assoc($res);
        
        $count=mysqli_num_rows($res);
 
 
        
 
        if($count==0)
        {
         ?><!--
         <script type="text/javascript">
          alert("The username and password does not match");
</script>
      -->
      <div class="alert alert-danger" style="width: 700px; bacground-color: #de1313;">
       <strong>The username and password doesn't match</strong>
      </div>
       <?php
        }
 else
 {
  
  /*------------------If username and password matches------------------*/
  //$_SESSION['pic'] = $row['pic'];
  $_SESSION['login_user'] = $_POST['username'];
  $_SESSION['pic'] = $row['pic'];
  
  ?>
  <script type="text/javascript">
window.location="facultydashboard.php"
</script>
<?php
 }
}
        
 
?>