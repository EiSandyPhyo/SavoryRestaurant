<?php
include 'header.php';

include 'admin/header.php';
?>
<style type="text/css">
#ffheader{
font-family: Bradley Hand;
}
#ffparagraph{
font-family: Comic Sans MS;
}
</style>
<section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-10 col-sm-12 ftco-animate text-center">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home&nbsp;/ Pages&nbsp;/ </a></span><span style="color: #ffb400;">Promotion</span></p>
              <h1 class="mb-3">Promotion</h1>
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
					<img src="images/promotion.png" width="50px" height="50px" class="img-responsive ftco-animate" id="imghover">
				</a>
				</div>
				<div class="col-md-5"></div>
			</div>

    	<div class="row">
    		<div class="col-md-12">
				<p align="center" style="font-size: 3vmin;font-family: Comic Sans MS;"><span style="color: black;">The Best Restaurant together with the Best Promotion </span><br>
			</p>
    		</div>
    	</div>
    </div>
      <br><br>
   
  <!----- Start First Package ----->
    <div class="container">
	<div class="row">
	
		<?php 
      $v="select * from tbl_promotion";
      $i=1;
      foreach ($db->query($v) as $row1)
      {
          $promotion_id=$row1['promotion_id'];
          $promotion_name=$row1['promotion_name'];
          $promotion_percent=$row1['promotion_percent'];
          $promotion_desc=$row1['promotion_desc'];
          $promotion_image=$row1['promotion_image'];
          $promotion_desc=$row1['promotion_desc'];
      
      ?>
      
		<div class="col-lg-6 col-md-6">
			<div class="w3-content w3-section">
			      <img src="<?php echo 'admin/promotion/'.$promotion_image;?>" class="img-responsive" width="100%" height="400px">
			</div>

				<div class="row">
					<div class="col-lg-12 col-md-12">
						<p style="text-align: center;">___</p>
				<h2 id="ffheader" style="text-align: center;"><?php echo $promotion_name;?></h2>
				<p style="text-align: center;">___</p>

				<p id="ffparagraph" style="line-height: 30px;"><br>
					<span style="font-size: 25px;">&emsp;&emsp;&emsp;&emsp;<?php echo $promotion_percent;?></span><br>
					<i class="fa fa-edit" style="font-size: 25px;"></i>
					<span style="font-size: 20px;"><?php echo $promotion_desc;?></span><br><br>
				 </p>
					</div>
				</div>
		</div><!--- End col-md-5 --->
<?php 
$i++;
 }
?>
	</div>
	</div>
<!----- End First Package ----->
<br><br>
    
    

<?php 
include 'footer.php';
?>