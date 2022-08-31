<?php
include 'header.php';
include 'admin/header.php';
?>

<style>

	.overlay1 {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #B0BFC3;
  overflow: hidden;
  width: 100%;
  height: 0;
  transition: .3s ease;
}

.c1:hover .overlay1 {
  height: 30%;
}

.testimonial-group > .row {
  overflow-x: auto;
  white-space: nowrap;
}
.testimonial-group > .row > .col-sm-4 {
  display: inline-block;
  float: none;
}
.text{
position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}
#ffheader{
font-family: Bradley Hand;
color: maroon;
font-size: 30px;
}
#ffparagraph{
font-family: Comic Sans MS;
color: navy;
font-size: 15px;
}
</style>

<section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-10 col-sm-12 ftco-animate text-center">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home&nbsp;/ Pages&nbsp;/ </a></span><span style="color: #ffb400;">Chef</span></p>
              <h1 class="mb-3">Chef</h1>
            </div>
          </div>
        </div>
      </div>
 </section>
 
 <div class="container">
    	<div class="row">
				<div class="col-md-5"></div>
				<div class="col-md-2" style="padding-top: 20px;text-align: center;">
				<a href="#">
					<img src="images/chef.png" width="50px" height="50px" class="img-responsive ftco-animate" id="imghover">
				</a>
				</div>
				<div class="col-md-5"></div>
			</div>

    	<div class="row">
    		<div class="col-md-12">
				<p align="center" style="font-size: 3vmin;font-family: Comic Sans MS;"><span style="color: black;">Delicious Food From the Best Chefs for you</span><br>
			</p>
    		</div>
    	</div>
    </div>
      <br><br>
      
<!----- Start Chef ----->
<div class="container">
		<div class="row">
			<div class="col-lg-1 col-md-1"></div>
			<div class="col-lg-10 col-md-10">
				<div class="container testimonial-group">
				<div class="row text-center flex-nowrap">
				
				<?php 
      $v="select * from tbl_chef";
      $i=1;
      foreach ($db->query($v) as $row1)
      {
          $chef_id=$row1['chef_id'];
          $chef_name=$row1['chef_name'];
          $chef_image=$row1['chef_image'];
          $chef_desc=$row1['chef_desc'];
      
      ?>
				
					<div class="col-lg-4 col-md-4 col-sm-4 c1">
						 <img src="<?php echo 'admin/chef/'.$chef_image;?>" class="img-responsive" width="100%" height="100%">
						<div class="overlay1">
							<div class="text">
							<h2 id="ffheader"><?php echo $chef_name;?></h2>
							<span id="ffparagraph"><?php echo $chef_desc;?></span>
							</div>
						</div>
					</div>
<?php 
$i++;
 }
?>

				</div>
			</div>
			</div>
			<div class="col-lg-1 col-md-1"></div>
		</div>
</div>
<!----- End Chef ----->   
<br><br>



<?php 
include 'footer.php';
?>