<?php 
include 'header.php';
$cartid=$_GET['cartid'];
$_SESSION['cart'][$cartid][0]="";
$_SESSION['cart'][$cartid][1]="";
$_SESSION['cart'][$cartid][2]="";
$_SESSION['cart'][$cartid][3]="";
echo ("<script>location.href='viewcart.php';</script>");
?>