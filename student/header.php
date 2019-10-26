<?php
session_start();
?> 
<!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>
   
  </title>
 
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

 </head>
 <body>
  
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
        <li class="active"><a href="../index.php" class="page-scroll">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="../about.php" class="page-scroll" >About</a></li>
        <li><a href="../features.php" class="page-scroll" >Features</a></li>
        <li><a href="../team.php" class="page-scroll">Team</a></li> 
        <li><a href="../contact.php" class="page-scroll">Contact</a></li>
        
        
      </ul>
      <?php
     if(isset($_SESSION['login_user'])){?>
      <ul class="nav navbar-nav navbar-right">
      
       <li class="dropdown">
           <a href="logout.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Log Out</a>
           </li>
        
           
       
       </ul>
      
     <?php
           }
     else{
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
           <a href="logout.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Log Out</a>
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
     }
     
     ?>
   
      
            
       </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  
</div>
 </nav> 
  
 </body>
 </html>