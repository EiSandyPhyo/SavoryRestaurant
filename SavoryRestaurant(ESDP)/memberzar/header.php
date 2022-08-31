<?php
session_start();
error_reporting(0);
if(!isset($_SESSION['cart']))
{
    $count=0;
}
else{
    $count=count($_SESSION['cart']);
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Savory Restaurant</title>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
<!---time -->
    <link href="css/common-css/ionicons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/common-css/jquery.classycountdown.css" />

    <link href="css/responsive.css" rel="stylesheet">  
    <link rel="stylesheet" href="css/effect.css">
      <style media="screen">
    .modal-title {
        font-size: 1.2em;
    }

    .modal-footer1 a {
        color: #d3b800;
    }


    .col-form-label {
        text-transform: uppercase;
        font-weight: 600;
        color:black;
        font-size: 13px;
        letter-spacing: 1px;
    }

    .modal-header {
        color: #eee;
        border: none;
        text-transform: capitalize;
        margin: 0 auto;
        width: 100%;
        background: #d3b800;
    }

    .modal-body {
        position: relative;
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1rem;
    }
    </style>
    </head>
  <body>
 	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Savory<small>Restaurant</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Reservation</a></li>
	          <li class="nav-item"><a href="services.php" class="nav-link">Chef</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About us</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">Contact us</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">FAQ</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="room.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-user"> </span></a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="viewprofile.php">View Profile</a>
                <a class="dropdown-item" href="changepassword.php">Change Password</a>
                <a class="dropdown-item" href="vieworderhistory.php">View Order History</a>
              </div>
            </li>
	          <li class="nav-item cart"><a href="viewcart.php" class="nav-link"><span class="icon icon-shopping_cart"></span><span class="bag d-flex justify-content-center align-items-center"><small><?php echo $count;?></small></span></a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>


	  </body>
</html>
