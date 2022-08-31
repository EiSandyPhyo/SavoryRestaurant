<?php
session_start();
error_reporting(0);
include 'header.php';
include 'admin/header.php';
if(strlen($_SESSION['login'])==0)
	{	
header('location:index.php');
}
else{
if(isset($_POST['change']))
	{
	    $password=md5($_POST['password']);
	    $newpassword=md5($_POST['newpassword']);
$email=$_SESSION['login'];

	$sql ="SELECT u_Pw FROM tbl_register WHERE u_Email=:email and u_Pw=:password";
$query= $db -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
    
    $con="update tbl_register set u_Pw=:newpassword where u_Email=:email";
$chngpwd1 = $db->prepare($con);
$chngpwd1-> bindParam(':email', $email, PDO::PARAM_STR);
$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
$chngpwd1->execute();
$msg="Your Password succesfully changed";
}
else {
$error="Your current password is wrong";	
}
}

?>


<!-- Start slider -->
    <section class="home-slider owl-carousel">
    	<div class="slider-item" style="background-image: url('images/slider-18.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center text-center">
            <div class="col-md-10 col-sm-12 ftco-animate texteffect share">
              <h1 class="mb-3">
              	<span>W</span><span>e</span><span>l</span><span>c</span><span>o</span><span>m</span><span>e</span>
            	<span>T</span><span>o</span> 
            	<span>O</span><span>u</span><span>r</span><br>
            	<span>S</span><span>a</span><span>v</span><span>o</span><span>r</span><span>y</span>
            	<span>R</span><span>e</span><span>s</span><span>t</span><span>a</span><span>u</span><span>r</span><span>a</span><span>n</span><span>t</span>
            </h1>            
          	</div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('images/slider-3.png');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center text-center">
            <div class="col-md-10 col-sm-12 ftco-animate">
              <h1 class="mb-3">Tasty &amp; Delicious Food
              </h1>
              <p><a href="reservation.html" class="btn btn-primary btn-outline-white px-5 py-3">View Menu</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('images/slider-17.jpeg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center text-center">
            <div class="col-md-10 col-sm-12 ftco-animate">
              <h1 class="mb-3">Book a table for yourself at a time convenient for you</h1>
              <p><a href="reservation.html" class="btn btn-primary btn-outline-white px-5 py-3">Book A Table</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->
<br><br><br>
<!--- /banner-1 ---->
<!--- privacy ---->
<div class="privacy">
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Change Password</h3>
		<form name="chngpwd" method="post" onSubmit="return valid();">
		 <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
	<p style="width: 350px;">
		
			<b>Current Password</b>  <input type="password" name="password" class="form-control" id="exampleInputPassword1" required="">
	</p> 

<p style="width: 350px;">
<b>New  Password</b>
<input type="password" class="form-control" name="newpassword" id="newpassword" required="">
</p>

<p style="width: 350px;">
<b>Confirm Password</b>
	<input type="password" class="form-control" name="confirmpassword" id="confirmpassword" required="">
			</p>

			<p style="width: 350px;">
<button type="submit" name="change" class="btn-primary btn">Change</button>
			</p>
			</form>
			</div>
			<div class="col-md-4"></div>
		</div>
		
	</div>
</div>
<?php include('footer.php');?>

<?php } ?>