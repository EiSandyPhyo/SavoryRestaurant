<?php
session_start();
error_reporting(0);

include 'connect.php';

if(isset($_POST['loginsubmit']))
{
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $sql ="SELECT a_Email,a_Pw FROM tbl_admin WHERE a_Email=:email and a_Pw=:password";
    $query= $db -> prepare($sql);
    $query-> bindParam(':email', $email, PDO::PARAM_STR);
    $query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0)
    {
        $_SESSION['login']=$_POST['email'];
        echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
    } else{
        
        echo "<script>alert('Invalid Details');</script>";
        
    }
    
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
			
		<h2>Sign In</h2>
		<form name="login" action="" method="post" aria-hidden="true">
							
							<div class="form-group">
								<label class="email">Your Email</label>
								<input type="text" class="form-control" name="email" placeholder="" required="">
							</div>
							<div class="form-group">
								<label class="mb-2 password-agileits">Password</label>
								<input type="password" class="form-control" name="password" placeholder="" required="">
							</div>
							<button type="submit" name="loginsubmit" class="btn btn-primary submit mb-4" id="loginsubmit">Login</button>
							<p class="text-center pb-4 create-w3ls">
								Don't have an account?
								<a href="adminindex2.php">Create one now</a>
							</p>
		</form>
				
				
	
		</div>
		<div class="col-md-4"></div>
	</div>
	
	</div>
	</div>
</body>
</html>