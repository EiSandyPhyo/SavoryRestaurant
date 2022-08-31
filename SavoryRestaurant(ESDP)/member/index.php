<?php 
include 'header.php';
include 'admin/header.php';
?>
<style type="text/css">


ul.tp-hd-lft{
    float: left;
}
ul.tp-hd-lft li {
    display: inline-block;
}

li.hm,li.prnt {
    margin-left: 50px;
    color: #ffb400;
    font-size: 20px;
    
}

li.hm,li.prntt {
    margin-left: 10px;
    color: #ffb400;
    font-size: 30px;
}

ul.tp-hd-lft a {
    font-family:Ayuthaya;
    font-size: 20px;
    font-weight: 500;
/* 	color: #fff0cc; */
    color: black;
	line-height: 50px;
}

ul.tp-hd-lft a:hover {
color: #ffb400;
}

</style>
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

<div class="container">
    	<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-5" style="padding-top: 20px;text-align: left;">
				<a href="#">
					<img src="images/girl.png" width="100%" height="100%" class="img-responsive ftco-animate">
				</a>
				</div>
				<div class="col-md-5" style="padding-top: 90px;text-align: left;">
					<ul class="tp-hd-lft" data-wow-delay=".5s"> 
            			<li class="prntt"><i class="fa fa-slideshare"></i>&nbsp;&nbsp;&nbsp;Welcome :</li>				
            			<li class="prntt"><?php echo htmlentities($_SESSION['login']);?></li> <br><br>
                        <!--  <li class="hm"><a href="index.html"><i class="fa fa-home"></i></a></li> -->
            			<li class="prnt"><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;<a href="view_profile.php">My Profile</a></li><br>
            			<li class="prnt"><i class="fa fa-key"></i>&nbsp;&nbsp;&nbsp;<a href="change_password.php">Change Password</a></li><br>
            			<li class="prnt"><i class="fa fa-share-square-o"></i>&nbsp;&nbsp;&nbsp;<a href="log_out.php" >Logout</a></li><br>
            			<li class="prnt"><i class="fa fa-history"></i>&nbsp;&nbsp;&nbsp;<a href="tour-history.php">My Ordered History</a></li><br>
            			<li class="prnt"><i class="fa fa-history"></i>&nbsp;&nbsp;&nbsp;<a href="issuetickets.php">My Bought History</a></li><br>
					</ul>
		
				<div class="clearfix"></div>
				</div>
				<div class="col-md-1"></div>
			</div>

    	
    </div>


<?php 
include 'footer.php';
?>