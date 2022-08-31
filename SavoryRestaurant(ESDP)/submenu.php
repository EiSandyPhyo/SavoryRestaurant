<?php
include 'header.php';
include 'admin/header.php';
$menu_id=$_GET['submenu_id'];
?>
    
<section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-10 col-sm-12 ftco-animate text-center">
            <?php 
            $menunamequery="select * from tbl_menu where menu_id='$menu_id'";
            foreach ($db->query($menunamequery) as $row)
            {
                $menu_name=$row['menu_name'];
            }
            
            ?>
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home&nbsp;/ Menu&nbsp;/ </a></span><span style="color: #ffb400;"><?php echo $menu_name;?></span></p>
              <h1 class="mb-3">Menu</h1>
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
					<img src="images/menu.png" width="50px" height="50px" class="img-responsive ftco-animate" id="imghover">
				</a>
				</div>
				<div class="col-md-5"></div>
			</div>

    	<div class="row justify-content-center mb-5 pb-5">
    		<div class="col-md-12">
				<p align="center" style="font-size: 4vmin;font-family: Comic Sans MS;"><span style="color: black;">Discover Our Exclusive Menu</span><br>
				</p>
    		</div>
    	</div>
      </div>
      
    
<div class="container">
<div class="row" style="margin-bottom: 20px;">
<?php 
$v="select * from tbl_submenu where menu_id='$menu_id'";
// echo "<div class='row'>";
foreach ($db->query($v) as $row)
{
    $submenu_id=$row['submenu_id'];
    $submenu_name=$row['submenu_name'];
    $submenu_price=$row['submenu_price'];
    $submenu_image=$row['submenu_image'];
    $realfile="admin/submenu/$submenu_image";

?>
  <div class="col-md-4" style="margin-bottom: 20px;">
      <div class="hovereffect">
          
          <?php 
         echo  "<img class='img-responsive' src='$realfile' alt='' width='100%' height='100%'>"?>
              <div class="overlay">
                  <h2><?php echo "$submenu_name";?></h2>
                  <?php echo "$submenu_price";?>
  				<p>
  					<a href="#" data-toggle="modal" data-target="#exampleModalCenter1" class="nav-link" aria-haspopup="true" aria-expanded="false">Add to Cart</a>
  				</p>
              </div>
      </div>
     
  </div>
  
 <?php 

}
 ?>
 
 
</div>
</div>  

<?php 
 include 'footer.php';
 ?>