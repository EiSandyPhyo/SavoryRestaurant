<?php
session_start();
error_reporting(0);

include 'connect.php';

if(isset($_POST['regsubmit']))
{
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    
    $insertquery="insert into tbl_admin (a_Name,a_Email,a_Pw) values ('$name','$email','$password')";
    $db -> exec($insertquery);
    
}

?>

<!DOCTYPE HTML>
<html>
<head>
<title>TMS | Admin Sign in</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
	<div class="main-wthree">
	<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			
                		<h2>Register</h2>
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
							</div>
							<p class="text-center pb-4 create-w3ls">
								Already have an account?
								<a href="adminindex.php">Sign Up</a>
							</p>
						</form>
		</div>
		<div class="col-md-4"></div>
	</div>
	
	</div>
	</div>
</body>
</html>