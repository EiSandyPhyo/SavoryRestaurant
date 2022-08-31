<?php
session_start();
error_reporting(0);
include 'header.php';
include 'admin/header.php';
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
		<h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">My Profile</h3>
		<form name="chngpwd" action="" method="post">
		 <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

<?php 
$useremail=$_SESSION['login'];
$viewquery="select * from tbl_register where u_Email='$useremail'";
    foreach ($db->query($viewquery) as $row)
    {
        $name=$row['u_Name'];
        $email=$row['u_Email'];
    
    ?>

	<p style="width: 350px;">
		<b>Name</b>  
		<input type="text" name="name" value="<?php echo $name;?>" class="form-control" id="name" required="">
	</p> 

<p style="width: 350px;">
<b>Email</b>
	<input type="email" class="form-control" name="email" value="<?php echo $email;?>" id="email" readonly>
			</p>

<?php } ?>

			<p style="width: 350px;">
<input type="submit" name="updateprofile" class="btn-primary btn" value="Update">
			</p>
			</form>

		
	</div>
</div>


<?php 

    if(isset($_POST['updateprofile']))
    {
        $Name=$_POST['name'];
        
        $updatequery="update tbl_register set u_Name='$Name' where u_Email='$email'";
        $db->exec($updatequery);
    }
//     else {
//         echo "<script>alert('!!!Something Wrong!!!');</script>";
//     }

?>


<?php include('footer.php');?>

