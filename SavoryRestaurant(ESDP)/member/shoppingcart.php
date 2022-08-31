<?php
session_start();
ob_start();
error_reporting(0);
include 'header.php';
$id=$_SESSION['signup_id'];

// $submenuid=$_GET['submenuid'];
$submenuprice=$_GET['submenuprice'];
// $submenuqty=$_GET['submenuqty'];
$subtotal=$_GET['submenutotal'];
// $submenuname=$_GET['submenuname'];s

?>
<?php

if(isset($_POST['update']))
{
    $submenu_id=$_POST['submenuid'];
    $qty=$_POST['quantity'];
    $cartid=$_POST['cartno'];
    $submenuprice=$_POST['submenuprice'];
    $subtotal=$qty*$submenuprice;
    $_SESSION['cart'][$cartid][2]=$qty;
    $_SESSION['cart'][$cartid][3]=$subtotal;
}
?>
<div class="w3ls-services section-w3ls">
<div class="container-fluid">
  <div class="row">
  <div class="col-md-1">

  </div>
  <div class="col-md-10">
  <form method="post">
    <table class="table">
    <tr>
    <td></td>  
    <th></th>
    <td></td>
    <td></td>
	 <th>Date</th>
    <td><?php   echo $date=date("d/m/Y",time());?>
   
    </tr>
      <tr>
        <th>Product Image</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
        <th>Action</th>
      </tr>
       <?php

						    $finaltotal=0;
						    for ($i = 0; $i < count($_SESSION['cart']); $i++) {

						    $submenu_id=$_SESSION['cart'][$i][0];
						    $submenu_price=$_SESSION['cart'][$i][1];
						    $submenu_qty=$_SESSION['cart'][$i][2];
						    $submenu_subtotal=$_SESSION['cart'][$i][3];
						    if($submenu_id!="")
						    {
						    $v="select * from tbl_submenu where submenu_id='$submenu_id'";
						    foreach ($db->query($v) as $row)
						    {
						        $submenu_name=$row['submenu_name'];
						        $submenu_image=$row['submenu_image'];
						        $price=$row['submenu_price'];
						    }


						    ?>
      <tr>
        <td> <img src="admin/submenu/<?php echo $submenu_image;?>" width="80px" height="80px" class="img-responsive img-circle"> </td>
        <td><?php echo $submenu_name;?></td>
        <td><?php echo $price?></td>

        <td> 
        <form method="post" class="form-group">
		<div class="col-xs-5">
        <input type="number" name="quantity" value="<?php echo $submenu_qty;?>" step="1" min="1" max="50" class="form-control">
        </div>
         <input type="hidden" name="submenuid" value="<?php echo $submenu_id;?>">
		<input type="hidden" name="cartno" value="<?php echo $i?>">
		<input type="hidden" name="submenuprice" value="<?php echo $submenu_price;?>">
		<input type="submit" name="update" value="UPDATE" class="btn btn-danger btn-sm" style="height: 33px">
        </form>

        </td>

        <td><?php echo $submenu_subtotal;?></td>
        <td class=""><a href="remove.php?cartid=<?php echo $i;?>"><i class="fa fa-times-circle" style="color: red"></i></a></td>
      </tr>
    <?php
    $finaltotal+=$submenu_subtotal;
}}?>
      <tr>
        <th></th>
        <th></th>
        <th></th>
        <th>Sub-total</th>
        <th><?php  echo $finaltotal;?>&nbsp; Kyats</th>
      </tr>

      <tr>
        <th></th>
        <th></th>
        <th></th>
        <th>Total</th>
        <th><?php echo $finaltotal?>&nbsp; Kyats</th>
      </tr>
      <tr>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th><a href="final.php"><input type="submit" value="CheckOut" name="checkout" class="btn btn-danger form-control" style="width: 100px;"></a></th>
      </tr>
      
    </table>
    </form>
<?php

if (isset($_POST['checkout'])) {
    
    header("location:final.php?userid='$id'"); 
}
  

?>

  </div>
  <div class="col-md-1">

  </div>
  </div>
</div>
</div>



<?php include 'footer.php';?>
