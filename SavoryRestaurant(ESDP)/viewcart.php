<?php
include 'header.php';
?>

<section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-10 col-sm-12 ftco-animate text-center">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home&nbsp;/</a></span><span style="color: #ffb400;">Cart</span></p>
              <h1 class="mb-3">Cart</h1>
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
					<img src="images/cart1.png" width="50px" height="50px" class="img-responsive ftco-animate" id="imghover">
				</a>
				</div>
				<div class="col-md-5"></div>
			</div>

    	<div class="row">
    		<div class="col-md-12">
				<p align="center" style="font-size: 5vmin;font-family: Comic Sans MS;"><span style="color: black;">Eating is suitable for everyone</span><br></p>
    		</div>
    	</div>
    </div>
    
    
    <div class="container">
    	<div class="row">
    		<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Product</th>
						        <th>Price</th>
						        <th>Quantity</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
						    
						    <?php 
						    $finaltotal=0;
						    for ($i = 0; $i < count($_SESSION['cart']); $i++) {
						        
						    $submenu_id=$_SESSION['cart'][$i][0];
						    $submenu_price=$_SESSION['cart'][$i][1];
						    $submenu_qty=$_SESSION['cart'][$i][2];
						    $submenu_subtotal=$_SESSION['cart'][$i][3];
						    
						    $v="select * from tbl_submenu where submenu_id='$submenu_id'";
						    foreach ($db->query($v) as $row)
						    {
						        $submenu_name=$row['submenu_name'];
						        $submenu_image="../admin/submenu/".$row['submenu_image'];
						    }
						    
						    
						    ?>
						    
						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="icon-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(<?php echo $submenu_image;?>);"></div></td>
						        
						        <td class="product-name">
						        	<h3><?php echo $submenu_name;?></h3>
						        
						        </td>
						        
						        <td class="price"><?php echo $submenu_price;?></td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
						        	<form id="confirmInfo" action="">
					             	<input type="text" name="quantity" id="aa" class="quantity form-control input-number tickets_number" value="1" min="1" max="100">
					          		</form>
					          	</div>
					          </td>
						        
						        <td class="total" id="s"><?php echo $submenu_subtotal;?> Kyats</td>
						      </tr><!-- END TR-->
							<?php 
							$finaltotal+=$submenu_subtotal;
}
							?>
						   
						    </tbody>
						  </table>
					  </div>
    			</div>
    	</div>
    	<p>Subtotal : <b>$<span id="total">0</span></b></p>
    	
    	<div class="row justify-content-end">
    			<div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
    					<p class="d-flex">
    						<span>Subtotal</span>
    						<span><?php echo $finaltotal;?></span>
    					</p>
    					<p class="d-flex">
    						<span>Delivery</span>
    						<span>0.00 Kyat</span>
    					</p>
    					<p class="d-flex">
    						<span>Discount</span>
    						<span>0.00  Kyats</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span><?php echo $finaltotal;?> Kyats</span>
    					</p>
    				</div>
    				<p class="text-center"><a href="checkout.html" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
    			</div>
    		</div>
    	
    </div>
    

<?php
include 'footer.php';
?>