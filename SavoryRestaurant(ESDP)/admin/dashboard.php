<?php 
session_start();
include 'connect.php';
if(strlen($_SESSION['login'])==0)
{
    header('location:adminindex.php');
}
else{
    
    $u="select * from tbl_register";
    $utotal=0;
    foreach($db->query($u) as $row)
    {
        $utotal++;
    }
    
    $s="select * from tbl_service";
    $stotal=0;
    foreach($db->query($s) as $row)
    {
        $stotal++;
    }
    
    $m="select * from tbl_menu";
    $mtotal=0;
    foreach($db->query($m) as $row)
    {
        $mtotal++;
    }
    
    $sub="select * from tbl_submenu";
    $subtotal=0;
    foreach($db->query($sub) as $row)
    {
        $subtotal++;
    }
    
    $o="select * from tbl_order";
    $ototal=0;
    foreach($db->query($o) as $row)
    {
        $ototal++;
    }
    
    $c="select * from tbl_chef";
    $ctotal=0;
    foreach($db->query($c) as $row)
    {
        $ctotal++;
    }
    
    $f="select * from tbl_faq";
    $ftotal=0;
    foreach($db->query($f) as $row)
    {
        $ftotal++;
    }
    
    $p="select * from tbl_promotion";
    $ptotal=0;
    foreach($db->query($p) as $row)
    {
        $ptotal++;
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

<style>

.modal-body h5 {
    color: #b10400;
    font-size: 25px;
    font-weight: 500;
     margin: 0;
    padding: 0;
    font-family: "Cantata One", serif;
    
}

.form-group label {
	font-family: 'Open Sans', sans-serif;
    font-size: 15px;
    letter-spacing: 1px;
    color: #000;
    margin-bottom: 8px;
}

.modal-body p a{
    margin: 0;
    padding: 0;
    font-family: 'Open Sans', sans-serif;
    font-size: 15px;
    letter-spacing: 1px;
    line-height: 1.9;
    color: #b10400;
}

.input[type="button"],
.input[type="submit"] {
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}

.input[type="button"]:hover,
.input[type="submit"]:hover {
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}

.modal-body button {
    background: #b10400;
    border: none;
    width: 100%;
    padding: 9px;
    letter-spacing: 1px;
    margin-top: 1em;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
}

.modal-body button:hover {
    background: blue;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
}
</style>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                     <img src="images/SavoryRestaurantlogoo.png" alt="CoolAdmin" class="img-responsive">

                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                           
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                     <img src="images/SavoryRestaurantlogoo.png" alt="CoolAdmin" class="img-responsive">
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                       
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <i class="fa fa-user-circle" style="font-size: 30px;"></i>
                                        </div>
                                        <div class="content">
                                            <a class="email" href="#"><?php echo $_SESSION['login'];?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            
                                            <div class="account-dropdown__body">
                                                
                                                <div class="account-dropdown__item">
                                                    <a href="view_profile.php">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="log_out.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
            
            
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                     <div class="container-fluid" style="background-color: white; padding-top: 30px;">
						<div class="row">
							<div class="col-md-4">
								<div class="card" style="width: 100%;">
								<img alt="Card image" src="images/faq1.png" class="card-img-top img-responsive" style="width: 100%;height: 300px;">
								<div class="card-body">
								<h4 class="card-title"><?php echo $ftotal;?></h4>
								<p class="card-text" style="font-size: 16px; color: #021a78;">FAQ</p>
								<a href="insert_faq.php" class="btn btn-danger">Create</a>
								<a href="view_faq.php" class="btn btn-danger">Manage</a>
								</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card" style="width: 100%;">
								<img alt="Card image" src="images/service1.png" class="card-img-top img-responsive" style="width: 100%;height: 300px;">
								<div class="card-body">
								<h4 class="card-title"><?php echo $stotal;?></h4>
								<p class="card-text" style="font-size: 16px; color: #021a78;">Service</p>
								<a href="insert_service.php" class="btn btn-danger">Create</a>
								<a href="view_service.php" class="btn btn-danger">Manage</a>
								</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card" style="width: 100%;">
								<img alt="Card image" src="images/promotion1.png" class="card-img-top img-responsive" style="width: 100%;height: 300px;">
								<div class="card-body">
								<h4 class="card-title"><?php echo $ptotal;?></h4>
								<p class="card-text" style="font-size: 16px; color: #021a78;">Promotion</p>
								<a href="insert_promotion.php" class="btn btn-danger">Create</a>
								<a href="view_promotion.php" class="btn btn-danger">Manage</a>
								</div>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-4">
								<div class="card" style="width: 100%;">
								<img alt="Card image" src="images/chef1.png" class="card-img-top img-responsive" style="width: 100%;height: 300px;">
								<div class="card-body">
								<h4 class="card-title"><?php echo $ctotal;?></h4>
								<p class="card-text" style="font-size: 16px; color: #021a78;">Chef</p>
								<a href="insert_chef.php" class="btn btn-danger">Create</a>
								<a href="view_chef.php" class="btn btn-danger">Manage</a>
								</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card" style="width: 100%;">
								<img alt="Card image" src="images/menu3.png" class="card-img-top img-responsive" style="width: 100%;height: 300px;">
								<div class="card-body">
								<h4 class="card-title"><?php echo $mtotal;?></h4>
								<p class="card-text" style="font-size: 16px; color: #021a78;">Menu</p>
								<a href="insert_menu.php" class="btn btn-danger">Create</a>
								<a href="view_menu.php" class="btn btn-danger">Manage</a>
								</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card" style="width: 100%;">
								<img alt="Card image" src="images/submenu2.png" class="card-img-top img-responsive" style="width: 100%;height: 300px;">
								<div class="card-body">
								<h4 class="card-title"><?php echo $subtotal;?></h4>
								<p class="card-text" style="font-size: 16px; color: #021a78;">SubMenu</p>
								<a href="insert_submenu.php" class="btn btn-danger">Create</a>
								<a href="view_submenu.php" class="btn btn-danger">Manage</a>
								</div>
								</div>
							</div>
						</div>
						
						
						<div class="row">
							<div class="col-md-4">
								<div class="card" style="width: 100%;">
								<img alt="Card image" src="images/girl.png" class="card-img-top img-responsive" style="width: 100%;height: 300px;">
								<div class="card-body">
								<h4 class="card-title"><?php echo $utotal;?></h4>
								<p class="card-text" style="font-size: 16px; color: #021a78;">Register Users</p>
								<a href="register_user.php" class="btn btn-danger">Manage</a>
								</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card" style="width: 100%;">
								<img alt="Card image" src="images/orderlist.png" class="card-img-top img-responsive" style="width: 100%;height: 300px;">
								<div class="card-body">
								<h4 class="card-title"><?php echo $ototal;?></h4>
								<p class="card-text" style="font-size: 16px; color: #021a78;">Order Lists</p>
								<a href="order_list.php" class="btn btn-danger">Manage</a>
								</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card" style="width: 100%;">
								<img alt="Card image" src="images/chart.png" class="card-img-top img-responsive" style="width: 100%;height: 300px;">
								<div class="card-body">
								<h4 class="card-title"><?php echo $subtotal;?></h4>
								<p class="card-text" style="font-size: 16px; color: #021a78;">Chart</p>
								<a href="chart.php" class="btn btn-danger">Manage</a>
								</div>
								</div>
							</div>
						</div>
						
					</div>
                        
                           
                        
                            
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="#" target="_blank"><span style="color: #ffb400;">Ei Sandy Phyoe</span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->


<?php 
if(isset($_POST['chotel1']))
{
    echo ("<script>location.href='insert_chotel.php';</script>");
    
}
?>

<?php 
if(isset($_POST['chotel2']))
{
    echo ("<script>location.href='view_chotel.php';</script>");
    
}
?>

<?php } ?>
