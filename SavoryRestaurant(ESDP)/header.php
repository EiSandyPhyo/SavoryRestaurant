<?php 
session_start();
error_reporting(0);
include 'admin/connect.php';

    if(isset($_POST['regsubmit']))
    {
       
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=md5($_POST['password']);

        $insertquery="insert into tbl_register (u_Name,u_Email,u_Pw) values ('$name','$email','$password')";
        $db -> exec($insertquery);
        
    }
    
    if(isset($_POST['loginsubmit']))
    {   
   
        $email=$_POST['email'];
        $password=md5($_POST['password']);
        $sql ="select * from tbl_register where u_Email='$email' and u_Pw='$password'";
        
        
        foreach ($db->query($sql) as $row)
        {
            
            $_SESSION['login']=$_POST['email'];
            $i=$row['u_ID'];
        }
        
        if($i==0)
        {
            alert('Invalid User Email or User Password');
        }
        else {
            $_SESSION['user_id']=$i;
            echo ("<script>location.href='member/index.php';</script>");
            
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home Page of Savory Restaurant</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/texteffect.css">
    
    <link rel="stylesheet" href="css/faq.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- From Another Page CSS -->
    <link href="vendors/bootatrap-date-time/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="vendors/owl-carousel/assets/owl.carousel.css" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="css/imagehover.css">

<style type="text/css">
.bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.bgimg-3{
	background-image: url(images/slider1-bg2.jpg);
	height: 700px;
	width: 100%;
	/*filter: blur(2px);
	-webkit-filter: blur (2px);*/
}
.bgimg-5{
	height: 300px;
	
}
/*#bg5{

	margin-top: 100px;
}*/

</style>

  </head>

  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar navbar">
      <div class="container">
        <a class="" href="index.html">
        	<img src="images/SavoryRestaurantlogoo.png" alt="logo" width="150px" height="80px" class="img-responsive" style="display: block;">
        </a>
        <button class="navbar-toggler navbar" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
        
          <ul class="navbar-nav ml-auto">

            <li <?php if($Page=="home" ? "active" : "")?> class="nav-item "><a href="index.php" class="nav-link">Home</a></li>

            <li <?php if($Page=="about" ? "active" : "")?> class="nav-item "><a href="about.php" class="nav-link">About</a></li>

            <li <?php if($Page=="contact" ? "active" : "")?> class="nav-item "><a href="contact.php" class="nav-link" >Contact</a></li>

            <li class="nav-item dropdown">
            	<a href="submenu.php" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu
            	</a>
            	<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            	<?php 
					
						  $viewquery="select * from tbl_menu";
						  foreach ($db->query($viewquery) as $row)
						  {
						     
						      $menu_id=$row['menu_id'];
						      $menu_name=$row['menu_name'];
						      echo "<a href='submenu.php?submenu_id=$menu_id' class='dropdown-item'>$menu_name</a>";
						      echo "<div class='dropdown-divider'>";
						      echo "</div>";
						  }
						?>
            	</div>
            	
            </li>

            <li class="nav-item"><a href="reservation.php" class="nav-link">Reservation</a></li>

             <li class="nav-item dropdown">
            	<a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages
            	</a>
            	<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            		<a href="faq.php" class="dropdown-item">Faq</a>
            		<div class="dropdown-divider"></div>
            		<a href="service.php" class="dropdown-item">Service</a>
            		<div class="dropdown-divider"></div>
            		<a href="promotion.php" class="dropdown-item">Promotion</a>
            		<div class="dropdown-divider"></div>
            		<a href="chef.php" class="dropdown-item">Chef</a>
            		<div class="dropdown-divider"></div>
            		<a href="gallery.php" class="dropdown-item">Gallery</a>
            	</div>
            </li>

            <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>

            <li class="nav-item">
				
					<a href="#" class="nav-link">
	            		<i class="icon-search" aria-hidden="true" style="font-size: 25px;"></i>
	            	</a>
				
            </li>

             <li class="nav-item">
            	<a href="#" data-toggle="modal" data-target="#exampleModalCenter1" class="nav-link" aria-haspopup="true" aria-expanded="false">
            		<span class="icon-user" aria-hidden="true" style="font-size: 25px;"></span>
            	</a>
            </li>

            <li class="nav-item cart">
            	<a href="#" data-toggle="modal" data-target="#exampleModalCenter1" class="nav-link" aria-haspopup="true" aria-expanded="false">
            		<span class="icon-shopping-cart" id="iconn" aria-hidden="true"></span>
            	</a>
            </li>           

          </ul>
        </div>
      </div>
    </nav>

    <script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

    <!-- END nav -->

    <!-- login -->
	<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login px-sm-4 mx-auto mw-100">
						<h5 class="text-center mb-4">Login Now</h5>
						<form name="login" action="#" method="post">
							
							<div class="form-group">
								<label class="email">Your Email</label>
								<input type="text" class="form-control" name="email" placeholder="" required="">
							</div>
							<div class="form-group">
								<label class="mb-2 password-agileits">Password</label>
								<input type="password" class="form-control" name="password" placeholder="" required="">
							</div>
							<button type="submit" name="loginsubmit" class="btn btn-primary submit mb-4" id="loginsubmit">Login</button>
							
							<p class="text-center pb-4">
								<a href="#">Forgot your password?</a>
							</p>
							<p class="text-center pb-4 create-w3ls">
								Don't have an account?
								<a href="#" data-toggle="modal" data-target="#exampleModalCenter2">Create one now</a>
							</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //login -->
        
    <!-- register -->
	<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login px-sm-4 mx-auto mw-100">
						<h5 class="text-center mb-4">Register Now</h5>
						<form name="register" method="post">
							
							
							
							<div class="form-group">
								<label>Your Name</label>
								<input type="text" class="form-control" name="name" placeholder="" required="">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" name="email" placeholder="" required="">
							</div>
							<div class="form-group">
								<label class="mb-2">Password</label>
								<input type="password" class="form-control" name="password" id="password1" placeholder="" required="">
							</div>
							<div class="form-group">
								<button type="submit" name="regsubmit" class="btn btn-primary submit mb-4" id="regsubmit">Register</button>
							<p class="text-center pb-4">
								<a href="#">By clicking Register, I agree to your terms</a>
							</p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //register -->

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

 		<!-- From Another Vendors links -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <!-- Extra plugin js -->
        <script src="vendors/bootstrap-selector/bootstrap-select.js"></script>
        <script src="vendors/bootatrap-date-time/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/countdown/jquery.countdown.js"></script>
        <script src="vendors/js-calender/zabuto_calendar.min.js"></script>
        <!--gmaps Js-->
    
  </body>
</html>