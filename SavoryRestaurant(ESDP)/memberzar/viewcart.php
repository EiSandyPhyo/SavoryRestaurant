<?php include 'header.php';
include '../admin/connect.php';

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	  $(".tickets_number").keydown(function (e) {
	        // Allow: backspace, delete, tab, escape, enter and .
	        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
	             // Allow: Ctrl+A, Command+A
	            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
	             // Allow: home, end, left, right, down, up
	            (e.keyCode >= 35 && e.keyCode <= 40)) {
	                 // let it happen, don't do anything
	                 return;
	        }
	        // Ensure that it is a number and stop the keypress
	        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
	            e.preventDefault();
	        }
	        
	    });
	    
	    $(".tickets_number").keyup(function (e) {
	    	 var x = parseInt($('#s').html());
	    	 var y=parseInt($(this).val());
	    	 var ff=x*y;
	    	 alert(ff);
	    	 
	       $('#s').html(($(this).val())* x);
	    });
	    
	});


</script>
  <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Cart</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Cart</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-cart">
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
		</section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading">Discover</span>
            <h2 class="mb-4">Related products</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(images/menu-1.jpg);"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="#">Coffee Capuccino</a></h3>
    						<p>A small river named Duden flows by their place and supplies</p>
    						<p class="price"><span>$5.90</span></p>
    						<p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
    					</div>
    				</div>
        	</div>
        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(images/menu-2.jpg);"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="#">Coffee Capuccino</a></h3>
    						<p>A small river named Duden flows by their place and supplies</p>
    						<p class="price"><span>$5.90</span></p>
    						<p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
    					</div>
    				</div>
        	</div>
        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(images/menu-3.jpg);"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="#">Coffee Capuccino</a></h3>
    						<p>A small river named Duden flows by their place and supplies</p>
    						<p class="price"><span>$5.90</span></p>
    						<p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
    					</div>
    				</div>
        	</div>
        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(images/menu-4.jpg);"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="#">Coffee Capuccino</a></h3>
    						<p>A small river named Duden flows by their place and supplies</p>
    						<p class="price"><span>$5.90</span></p>
    						<p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
    					</div>
    				</div>
        	</div>
        </div>
    	</div>
    </section>

<?php include 'footer.php';?>