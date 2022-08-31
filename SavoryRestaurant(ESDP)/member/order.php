<?php
include 'header.php';
?>

<?php 
$menu_id=$_GET['menu_id'];
$submenu_id=$_GET['submenu_id'];
$submenu_price=$_GET['submenu_price'];
$submenu_qty=1;
$subtotal=$submenu_qty*$submenu_price;
if(!isset($_SESSION['cart']))
{
    $_SESSION['cart'][0][0]=$submenu_id;
    $_SESSION['cart'][0][1]=$submenu_price;
    $_SESSION['cart'][0][2]=$submenu_qty;
    $_SESSION['cart'][0][3]=$subtotal;
    
}

else{
    $i=count($_SESSION['cart']);
    $_SESSION['cart'][$i][0]=$submenu_id;
    $_SESSION['cart'][$i][1]=$submenu_price;
    $_SESSION['cart'][$i][2]=$submenu_qty;
    $_SESSION['cart'][$i][3]=$subtotal;
}

echo ("<script>location.href='submenu.php?submenu_id=$menu_id';</script>");
?>

<?php include 'footer.php';?>