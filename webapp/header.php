<?php

	session_start();

?>
<!doctype html>
<html lang="en">
<head>
  <title>WebApp &mdash; Website Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">
  <style>
.table1{
  border-collapse:collapse;
}
 .table1 td,th {
border:1px solid black;

font:bold;

 }
 table.form {

border-spacing: 0px;

 }

 table{
   width:60%;
   margin-left:10%;
   margin-right:10%;
 }

 form{
  margin-left:10%;
 }
 input{
  
  align:left;
 }
 
        
        
        </style>

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">




  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <div class="mb-0 site-logo"><a href="index.html" class="mb-0">WebApp<span class="text-primary">.</span> </a></div>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.php" class="nav-link">home</a></li>
                <!-- <li class="has-children">
                  <a href="#features-section" class="nav-link">Features</a>
                  <ul class="dropdown">
                    <li><a href="#" class="nav-link">Money Saving</a></li>
                    <li><a href="#" class="nav-link">Powerful Apps</a></li>
                    <li><a href="#" class="nav-link">Efficient Support</a></li>
                    <li><a href="#" class="nav-link">Innovative Technologies</a></li>
                    <li><a href="#" class="nav-link">Corporate Solutions</a></li>
                    <li class="has-children">
                      <a href="#">More Links</a>
                      <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li> -->
                <li><a href="form.php?usertype=<?php echo NULL;?>" class="nav-link">form</a></li>


                <li><a href="#blog-section" class="nav-link"> <?php
        if(!isset($_SESSION['loginname'])){
          
          ?>
          <a href="loginform.php">login</a>
          <a href="registration.php">register</a>
          <?php

        }
        else{
          ?>
          <a href="php/logout.php">logout</a>
          <?php
        }
        ?>
              </a>
</li>
                <li><a href="table.php?usertype=student" class="nav-link">students</a></li>
                <li><a href="table.php?usertype=teacher" class="nav-link">teachers</a></li>

                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-facebook"></span></a></li>
                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-twitter"></span></a></li>
                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-linkedin"></span></a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-black"></span></a></div>

        </div>
      </div>

    </header>



   
<?php

     

if (isset($_SESSION['loginname'])){
	echo "<h1>Hello ".$_SESSION['loginname']. "Welcome to our student management system. </h1>";
}


        
        ?>
        <br>
        <br>
        <br>
        