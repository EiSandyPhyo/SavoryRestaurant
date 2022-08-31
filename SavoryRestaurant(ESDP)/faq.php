
<?php 
include 'header.php';

include 'admin/header.php';
?>

   <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-10 col-sm-12 ftco-animate text-center">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home&nbsp;/ Pages&nbsp;/ </a></span><span style="color: #ffb400;">Faq</span></p>
              <h1 class="mb-3">FAQ</h1>
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
					<img src="images/faq.png" width="50px" height="50px" class="img-responsive ftco-animate">
				</a>
				</div>
				<div class="col-md-5"></div>
			</div>

    	<div class="row">
    		<div class="col-md-12">
				<p align="center" style="font-size: 3vmin;font-family: Comic Sans MS;"><span style="color: black;">We know you have questions about our food. <br>
        That's why we've answered thousands of them Search the answers below or ask your own.</span><br>
			</p>
    		</div>
    	</div>
    </div>


    <!-- start about image 2 -->
    <div class="container d-flex">
        <div class="section-2-blocks-wrapper row">

          <div class="text col-md-12 ftco-animate" style="margin-top: 80px;">
            <div class="text-inner align-self-start">
              	<h3 style="font-family: Ayuthaya;margin-left: 20px;"><span style="color: #ffb400;"> Top</span><span style="color: black"> Question</span> </h3>
              	
              <div class="container">
          <?php 
 	

         	$viewquery="select * from tbl_faq";
         	foreach ($db->query($viewquery) as $row)
         	{
         	    $faq_question=$row['faq_question'];
         	    $faq_answer=$row['faq_answer'];
 	    
	      ?>
       <!----- Start Flip 1 ----->
        <div class="row">
        <div class="col-md-12">
          <div id="f1" style="color: red;"> 
             <!-- <a href="#">
            <i class="fa fa-angle-right icon" style="background-color: white; color: black;font-size: 36px;" ></i></a> -->
          <span id="ffparagraph" style="font-size:25px; color: black;background-color: white;">
          <?php echo $faq_question?>
          </span></div>
          <div id="p1">
            <i class="fa fa-slideshare icon" style="background-color: white; color: red;"></i>
            <?php echo $faq_answer?>
          </div>
        </div>
      </div>
    <!----- End Flip 1 ----->
    
<?php 
}
?>

            </div>
          </div>
        </div>
      </div>
      </div>
   
 <?php 
 include 'footer.php';
 ?>
