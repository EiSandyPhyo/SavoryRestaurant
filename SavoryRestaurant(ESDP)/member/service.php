
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
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home&nbsp;/ Pages&nbsp;/ </a></span><span style="color: #ffb400;">Service</span></p>
              <h1 class="mb-3">Service</h1>
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
					<img src="images/service.png" width="50px" height="50px" class="img-responsive ftco-animate" id="imghover">
				</a>
				</div>
				<div class="col-md-5"></div>
			</div>

    	<div class="row">
    		<div class="col-md-12">
				<p align="center" style="font-size: 4vmin;font-family: Comic Sans MS;"><span style="color: black;">The Best Restaurant together with the Best Service </span><br>
			</p>
    		</div>
    	</div>
    </div>

<div class="container">
      <div class="row">
    <div class="col-lg-3 col-md-3"></div>
      <div class="col-lg-8 col-md-8">
      <ul id="navs" class="nav nav-pills" role="tablist">
      <?php 
      $v="select * from tbl_service";
      $i=1;
      foreach ($db->query($v) as $row1)
      {
          $service_id=$row1['service_id'];
          $service_name=$row1['service_name'];
          $service_image=$row1['service_image'];
          $service_desc=$row1['service_desc'];
           $id="service".$i;
      
      ?>
          <li class="nav-item">
             <a class="nav-link <?php if($i==1) echo "active";?>" data-toggle="pill" href="#<?php echo $id;?>"><?php echo $service_name;?></a>
          </li>
 <?php 
 $i++;
      }
 ?>
          </ul>
    </div>
    <div class="col-lg-1 col-md-1"></div>
    </div>
    </div>
    

  <!----- End Nav Pills ----->


    <!----- Start Tab Content ----->
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12">
      <div class="tab-content">
        
    <!----- Start Home Service ----->
    <?php 
      $v="select * from tbl_service";
      $i=1;
      foreach ($db->query($v) as $row1)
      {
          $service_id=$row1['service_id'];
          $service_name=$row1['service_name'];
          $service_image=$row1['service_image'];
          $service_desc=$row1['service_desc'];
           $id="service".$i;
      
      ?>
    <div id="<?php echo $id;?>" class="container tab-pane <?php if($i==1) echo "active";?>"><br>
              <div class="row">
          <div class="col-lg-1 col-md-1"></div>
          <div class="col-lg-4 col-md-4">
          <img src="<?php echo 'admin/service/'.$service_image;?>" class="img-responsive" width="100%" height="400px">
          </div>
          <div class="col-lg-7 col-md-7">
                <p> <span style="color: black;"><b>The following facilities are available:</b></span>
                <span style="color: black">
                <ul id="ffparagraph" style="color: black;line-height: 40px;">
                <?php 
                $aa=array();
                $aa=explode("-", $service_desc);
                for($j=1;$j<sizeof($aa);$j++)
                {
                ?>
                
                  <li id="list">
                  <?php echo $aa[$j];?></li>
                  
                 <?php }?>
                  
                  </ul>
              </span> </p>
          </div>
          </div>
        </div>
<?php 
$i++;
      }
?>
    <!----- End Home Service ----->

  

      </div>
    </div>
  </div>
</div>
  <!----- End Tab Content ----->
<br><br>

<?php 
 include 'footer.php';
 ?>
 