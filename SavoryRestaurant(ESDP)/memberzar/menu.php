<?php
include 'header.php'; 
include '../admin/connect.php';
?>

    
    <style>
   .a{
   color:white;
   }
   
   
   
   </style>
    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Our Menu</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Menu</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <section class="ftco-intro a">
      <div class="container-wrap">
        <div class="wrap d-md-flex align-items-xl-end">
          <div class="info">
            <div class="row no-gutters">
              <div class="col-md-4 d-flex ftco-animate">
                <div class="icon"><span class="icon-phone"></span></div>
                <div class="text">
                  <h3>Phone Number</h3>
                  <p>09 42100 5594</p>
                </div>
              </div>
              <div class="col-md-4 d-flex ftco-animate">
                <div class="icon"><span class="icon-my_location"></span></div>
                <div class="text">
                  <h3>48th St, Yangon</h3>
                  <p>2ND WARD, Yangon (Myanmar Burma)</p>
                </div>
              </div>
              <div class="col-md-4 d-flex ftco-animate">
                <div class="icon"><span class="icon-clock-o"></span></div>
                <div class="text">
                  <h3>Open Monday-Sunday</h3>
                  <p>11:00am - 9:00pm</p>
                </div>
              </div>
            </div>
          </div>
          <div class="book p-4">
            <h3>Book a Table</h3>
            <form action="#" class="appointment-form">
              <div class="d-md-flex">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="First Name">
                </div>
                <div class="form-group ml-md-4">
                  <input type="text" class="form-control" placeholder="Last Name">
                </div>
              </div>
              <div class="d-md-flex">
                <div class="form-group">
                  <div class="input-wrap">
                    <div class="icon"><span class="ion-md-calendar"></span></div>
                    <input type="text" class="form-control appointment_date" placeholder="Date">
                  </div>
                </div>
                <div class="form-group ml-md-4">
                  <div class="input-wrap">
                    <div class="icon"><span class="ion-ios-clock"></span></div>
                    <input type="text" class="form-control appointment_time" placeholder="Time">
                  </div>
                </div>
                <div class="form-group ml-md-4">
                  <input type="text" class="form-control" placeholder="Phone">
                </div>
              </div>
              <div class="d-md-flex">
                <div class="form-group">
                  <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group ml-md-4">
                  <input type="submit" value="Appointment" class="btn btn-white py-3 px-4">
                </div>
              </div>
              <div class="d-md-flex">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Enter Your Email" pattern=".+@gmail.com" required>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>
    <section class="ftco-menu mb-5 pb-5x">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Menu Special</span>
            <h2 class="mb-4 a">Welcome from our savory menu page</h2>
            <p class="a">These menu list can change depend on our condition. We may add menu or remove our menu before it doesn't, we will let you know.</p>
          </div>
        </div>
    		<div class="row d-md-flex">
	    		<div class="col-lg-12 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		          
		           <?php 
		            $v="select * from tbl_menu";
		            
		            foreach ($db->query($v)as $row1)
		            {
		                $m_id=$row1['menu_id'];
		                $m_name=$row1['menu_name'];
		                $id="menu".$m_id;
		                
		            
		            ?>
		              <a class="nav-link" data-toggle="pill" href="#<?php echo $id;?>" role="tab" aria-controls="v-pills-2"><?php echo $m_name;?></a>
					<?php 
		            
		            }?>	
						</div>
		          </div>
		          <?php 
		          $g="select * from tbl_menu";
		          $u=1;
		          foreach ($db->query($g) as $aa)
		          {
		              $y=$aa['menu_id'];
		              $iid="menu".$y;
		              echo $iid;
		              
		           
		          
		          ?>
		          <div class="col-md-12 d-flex align-items-center">

		            <div class="tab-content ftco-animate" id="v-pills-tabContent">
		            

		              <div class="tab-pane fade" id="<?php echo $iid?>" role="tabpanel" aria-labelledby="v-pills-1-tab">
		              	<div class="row">
		      
	              	<?php 
    $viewquery="select * from tbl_submenu where menu_id='$y'";
    foreach ($db->query($viewquery)as $row){
    $submenu_id=$row['submenu_id'];
    $submenu_name=$row['submenu_name'];
    $submenu_image=$row['submenu_image'];
    $submenu_price=$row['submenu_price'];
    ?>
		                 <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <div class="box6">
                              <img src="../admin/submenu/<?php echo$submenu_image;?>" width="100%" height="100%" alt="seafood pizza">
                              <div class="box-content">
                                  <div class="inner-content">
                                      <h3 class="title"><?php echo$submenu_name;?></h3>
                                      <span class="post"><?php echo$submenu_price?> <br>
                                        <a href="order.php?submenu_id=<?php echo $submenu_id?>&submenu_price=<?php echo $submenu_price?>" onclick="addClick(5)"class="btn btn-primary">Order Now</a></span>
                    </div>
                    </div>

                  </div>
                        </div>
                      </div>
                      <?php
                                      }
                                ?>
  									
		              		</div>
		              		</div>
		              		
		              		</div>
		          </div>
		        <?php 
		        
		           
		          }?>
		          
		          </div>
		          </div>
		          </div>
		          </div>
		          </section>
		     
		        <?php 
		        include 'footer.php';
		        ?>
		        

		          