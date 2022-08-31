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
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home&nbsp;/</a></span><span style="color: #ffb400;">Reservation</span></p>
              <h1 class="mb-3">Make a Reservation</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
        	
				<div class="col-md-5"></div>
				<div class="col-md-2" style="text-align: center;">
				<a href="#">
					<img src="images/reservation1.png" width="50px" height="50px" class="img-responsive ftco-animate">
				</a>
				</div>
				<div class="col-md-5"></div>
			
		</div>

    	<div class="row no-gutters justify-content-center mb-5 pb-5">
    		<div class="col-md-12">
				<p align="center" style="font-size: 4vmin;font-family: Comic Sans MS;"><span style="color: black;">Make a Reservation</span><br>
					<span style="color: black; font-size: 2vmin;">We provide free, secure and instantly confirmed online reservation.</span>
				</p>
    		</div>
    	</div>
          <!-- <div class="col-md-7 text-center heading-section ftco-animate">
            <h2>Make a Reservation</h2>
          </div> -->
        
        <div class="row d-flex">
          <div class="col-md-4 ftco-animate img" style="background-image: url(images/bg_1.jpg);"></div>
          <div class="col-md-8 ftco-animate makereservation p-5 bg-light">
             <form action="#" method="post" class="form-horizontal">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                  	<label for="">Name</label>
                  	<div class="input-container">
                  <i class="icon-user icoon"></i>
                  <input class="input-field form-control" type="text" name="name" placeholder="Full Name" required="">
                </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Email</label>
                    <div class="input-container">
                  <i class="icon-envelope-o icoon"></i>
                  <input class="input-field form-control" type="text" name="email" placeholder="Email" required=""> 
                </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Phone</label>
                    <div class="input-container">
                  <i class="icon-phone icoon"></i>
                  <input class="input-field form-control" type="text" name="phnoeno" placeholder="Phone" required="">
                </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Date</label>
                    <div class="input-container" >
                  <i class="icon-calendar add-on icoon"></i>
                  <input class="input-field form-control" id="book_date" data-format="yyyy-mm-dd" type="text" name="calender" value="" required="" placeholder="Select Date" required="">
                </div>
                    <!-- <input type="text" class="form-control" id="book_date" placeholder="Date"> -->
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Time</label>
                    <div class="input-container">
                  <i class="icon-clock-o icon-time add-on icoon"></i>
                  <input class="input-field form-control" id="book_time" data-format="hh:mm:ss PP" type="text" name="time" value="" required="" placeholder="Select Time" required="">
              	</div>
                    <!-- <input type="text" class="form-control" id="book_time" placeholder="Time"> -->
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Person</label>
                    <div class="input-container">
                    	<i class="icon-user-o icoon"></i>
                		<select class="input-field form-control">
		                  <option>Please Choose...</option>
		                  <option>1</option>
		                  <option>2</option>
		                  <option>3</option>
		                  <option>4</option>
		                  <option>5</option>
		                  <option>6</option>
		                  <option>7</option>
		                  <option>8</option>
		                  <option>9</option>
		                  <option>More than 9</option>
                		</select>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 mt-3" align="center">
                  <div class="form-group">
                     <a href="#" data-toggle="modal" data-target="#exampleModalCenter1" class="nav-link" aria-haspopup="true" aria-expanded="false">
                    <input type="submit" value="Make a Reservation" class="btn btn-primary py-3 px-5"></a>
                    
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

<?php 
include 'footer.php';
?>
