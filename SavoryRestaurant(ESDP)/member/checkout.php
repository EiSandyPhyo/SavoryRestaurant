<?php 
include 'header.php';
include 'admin/header.php';
$user_id=$_SESSION['user_id'];
//echo $user_id;
?>
<?php 
if(isset($_POST['checkout']))
{
    $username=$_POST['username'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $address=$_POST['address'];
    $cost=$_POST['deliverycost'];
    $orderdate=date('Y/m/d');
//     echo $username;
//     echo $date;
//     echo $time;
//     echo $address;
    $total=0;
    for($i=0;$i<count($_SESSION['cart']);$i++)
    {
        $total+=$_SESSION['cart'][$i][3];
        
    }
     //echo $total;
    $insertquery="insert into tbl_order(order_date,user_id,user_name,order_deliverydate,order_deliverytime,order_deliveryaddress,delivery_cost,order_totalamountt,order_status) values('$orderdate','$user_id','$username','$date','$time','$address','$cost','$total','0')";
    $db->exec($insertquery);
    $lastid=$db->lastInsertId();
    $db->beginTransaction();
    for($i=0;$i<count($_SESSION['cart']);$i++) 
    {
        $submenuid=$_SESSION['cart'][$i][0];
        $submenuqty=$_SESSION['cart'][$i][2];
        if($submenuid!="")
        {
        $v="insert into order_detail (order_id,submenu_id,order_qty) values('$lastid','$submenuid','$submenuqty')";
        $db->exec($v);
        }
    }
    $db->commit();
    echo ("<script>location.href='print.php';</script>");
    $_SESSION['order_date']=$orderdate;
}

?>

 <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Checkout</h1>
            </div>

          </div>
        </div>
      </div>
    </section>

<div class="container">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<form action="" method="post">
<div class="form-group">
  <label for="usr">Name:</label>
  <input type="text" class="form-control" id="usr" name="username">
</div>


<div class="form-group">
  <label for="date">Delivery Date:</label>
  <input type="text" class="form-control" id="" name="date">
</div>

<div class="form-group">
  <label for="time">Delivery Time:</label>
  <input type="text" class="form-control" id="" name="time">
</div>

<div class="form-group">
  <label for="comment">Address:</label>
  <textarea class="form-control" rows="5" id="comment" name="address"></textarea>
</div>

<div class="form-group">
    <select name="delivery_id" class="form-control">
    	<option>***** Please Select *****</option>
    		<?php 
    		$viewquery="select * from tbl_delivery";
    	       foreach($db->query($viewquery)as $row)
    		  {
    		  $delivery_id=$row['delivery_id'];
    		  $delivery_name=$row['delivery_name'];
    		  $delivery_cost=$row['delivery_cost'];
    		  echo "<option value='$delivery_id' name='deliverycost'>$delivery_name</option>";
    		  }

    		?>
    </select>
</div>

<div class="form-group">

<div class="form-group">
  <label for="cost">Total Amount:</label>
  <input type="text" class="form-control" id="usr" name="totalamount" value="<?php echo $_SESSION['finaltotal'];?>" readonly>
</div>

  
  <input type="submit" class="form-control" value="Checkout" name="checkout">
</div>

</form>
</div>
<div class="col-md-4"></div>
</div>
</div>

<?php 
include 'footer.php';
?>