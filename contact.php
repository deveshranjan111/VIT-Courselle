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
    
    <link rel="stylesheet" href="./css/1.css">

    <style>
    </style>



</head>

<body>
 <header>
  <nav class="navbar navbar-inverse navbar-custom navbar-fixed-top">
   <div class="container">
   
  
  <div class="container-fluid">
     

    <!-- Brand and toggle get grouped for better mobile display -->
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
        <li ><a href="index.php" class="page-scroll">Home</a></li>
        <li ><a href="about.php" class="page-scroll" >About<span class="sr-only">(current)</span></a></li>
        <li><a href="features.php" class="page-scroll" >Features</a></li>
        <li><a href="team.php" class="page-scroll">Team</a></li> 
        <li class="active"><a href="contact.php" class="page-scroll">Contact</a></li>
        
        
      </ul>
  
     
      <ul class="nav navbar-nav navbar-right">
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Log In<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="faculty_login.php" id="button1" class="button1">Instructor</a></li>
            <li><a href="student_login.php" id="button2" class="button2">Student</a></li>
            
            </ul>
           </li>
           <!--<li class="dropdown">
           <a href="index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Log Out</a>
           </li>-->
           
           <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sign Up<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="faculty_signup.php" id="button1" class="button1">Instructor</a></li>
            <li><a href="student_signup.php" id="button2" class="button2">Student</a></li>
            
            </ul>
           </li>
           
           

           
            
            </ul>
            
            
            
       
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  


	
	

	</div>
	</nav>
	
 </header>
 <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Fill this form to contact us.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
	
	
           
           
           
           
  
 <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                     <p>&copy; 2019 VIT Courselle,Inc. <a href="#" style="color:black;">Terms</a>&middot; <a href="#" style="color:black;">Conditions</a></p>
                     
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://twitter.com/deveshranjan17"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/profile.php?id=100008943843566"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/in/devesh-ranjan-73b487146/"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#" style="color:black;">Move To Top</a>
                        </li>
                    </ul>
                </div>
         </div>
         </div>
</footer>
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