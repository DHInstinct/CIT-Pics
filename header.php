<?
  session_start();
  require_once('config.php')



?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">
  <head>
    <!-- Mobile Specific Meta -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png" />
    <!-- Author Meta -->
    <meta name="author" content="colorlib" />
    <!-- Meta Description -->
    <meta name="description" content="" />
    <!-- Meta Keyword -->
    <meta name="keywords" content="" />
    <!-- meta character set -->
    <meta charset="UTF-8" />
    <!-- Site Title -->
    <title>CITPics</title>

    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700"
      rel="stylesheet"
    />
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="css/linearicons.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>
    <!-- Start Header Area -->
    <header class="default-header">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand" href='index.php'>
            <img src="img/CITPICS_Logo75px.png" alt="" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div
            class="collapse navbar-collapse justify-content-end align-items-center"
            id="navbarSupportedContent"
          >
            <ul class="navbar-nav">
             
              <? 
                //checking if the a user is signed in
              echo(isset($_SESSION['userloggedin']) 
                  ? "Welcome, " . $_SESSION['userloggedin'] . "
                  <li><a href='feed.php'>Feed</a></li>
                  <li><a href='photo_upload.php'>Post</a></li>
                  <li><a href='gallery_profile.php'>Profile</a></li>
                  <li><a href='logout.php'>Logout</a></li>
                  "
                  : 
                  "<li><a href='login.php'>Sign In</a></li> 
                  <li><a href='signup.php'>Sign Up</a></li> 
                  "
                );        
              ?>
              </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- End Header Area -->


    
