<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'ecommerce');

// label cart
// echo "<pre>";
// print_r($_SESSION['cart']);
$upcount = 0;
if (!empty($_SESSION['cart'])) {
	foreach ($_SESSION['cart'] as $key => $value) {
		$arraycount = $value['num-product'];
		$upcount += $arraycount;
	}

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

<!-- login -->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="register/css/signUp-style.css" rel="stylesheet" type="text/css" media="all" />

<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">

<!-- //web font -->


</head>

<body class="animsition">

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">

					<!-- Logo desktop -->
					<a href="index.php" class="logo">
						<img src="img/logo.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop ">
						<ul class="main-menu">
							<li class="">

								<a class="text-decoration-none" href="index.php">
									<h6 class=" font-weight-bold">Home</h6>
								</a>
							</li>

							<li>
								<a class="text-decoration-none" href="test.php?category=all">
									<h6 class="font-weight-bold">Shop</h6>
								</a>
							</li>


							<?php if (isset($_SESSION['user'])) { ?>
								<li>
									<a class="text-decoration-none" href="profile.php">
										<h6 class="font-weight-bold">Profile</h6>
									</a>
								</li>
							<?php } ?>

							<?php if (isset($_SESSION['user'])) { ?>
								<li>
									<a class="text-decoration-none" href="register/logout.php">
										<h6 class="font-weight-bold">Logout</h6>
									</a>
								</li>
							<?php } ?>


							<?php if (!isset($_SESSION['user'])) { ?>
								<li>
									<a class="text-decoration-none" href="login2.php">
										<h6 class="font-weight-bold">Login</h6>
									</a>
								</li>
							<?php } ?>
							<?php if (!isset($_SESSION['user'])) { ?>
								<li>
									<a class="text-decoration-none"  href="signup2.php">
										<h6 class="font-weight-bold">SignUp</h6>
									</a>
								</li>
							<?php } ?>

							<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="<?php echo $upcount ?>">
								<a href="shoping-cart.php"><i class="zmdi zmdi-shopping-cart text-dark"></i></a>
							</div>
						</ul>
					</div>

					<!-- Icon header -->

				</nav>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->
			<div class="logo-mobile">
				<a href="index.php"><img src="img/logo.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="main-menu-m">
				<li>
					<a href="index.php">Home</a>
				</li>

				<li>
					<a href="test.php?category=all">Shop</a>
				</li>

				<li>
					<a href="shoping-cart.php">Cart</a>
				</li>

				<li>
					<a href="profile.php">Profile</a>
				</li>
				<li>
					<a href="login2.php">Login</a>
				</li>
				<li>
					<a href="signUp2.php">SignUp</a>
				</li>
			</ul>
		</div>
	</header>