<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
</head>

<style type="text/css">
		/* ----------------------------------------------------
			FONTS AWESOME
		-------------------------------------------------------*/

		@font-face {
		  font-family: 'FontAwesome';
		  src: url('fonts/fontawesome-webfont.eot?v=4.2.0');
		  src: url('fonts/fontawesome-webfont.eot?#iefix&v=4.2.0') format('embedded-opentype'), url('fonts/fontawesome-webfont.woff?v=4.2.0') format('woff'), url('fonts/fontawesome-webfont.ttf?v=4.2.0') format('truetype'), url('fonts/fontawesome-webfont.svg?v=4.2.0#fontawesomeregular') format('svg');
		  font-weight: normal;
		  font-style: normal;
		}

		*,
		*:after,
		*::before {
		    -webkit-box-sizing: border-box;
		    -moz-box-sizing: border-box;
		    box-sizing: border-box;
		}

		body {
			font-family: "Yu Gothic ui light", Yu Gothic ui light;
			margin:0;
			padding:0;
		}

		/* icons style */
		#MiniLeftNav .fa, #MiniRightNav .fa, #MiniHorzNav .fa{
			color:#fff;	
		}
		#MiniLeftNav .fa-2x, #MiniRightNav .fa-2x, #MiniHorzNav .fa-2x {
		    font-size: 1.5em;
		}

		/* Minimal Vertical Left Navigation */
		#MiniLeftNav li{
			list-style: outside none none;
		    margin: 20px 0;
		    padding: 0;
		    width: 48px;
		}
		#MiniLeftNav li a{
			display: block;
		    padding: 0px;
		    position: relative;
		}
		#MiniLeftNav span {
			font-family: "Yu Gothic ui light", Yu Gothic ui light;
			font-size:14px;
		    font-weight: 400;
		    letter-spacing: 1px;
			text-transform: uppercase;
			
		    bottom: 5px;
		    left: 47px;
		    line-height: 38px;
		    overflow: hidden;
		    padding: 0;
		    position: absolute;
		    white-space: nowrap;
		    width: 0;
			
			/* CSS3 Transition: */
			-webkit-transition: 0.50s;

			/* Future proofing (these do not work yet): */
			-moz-transition: 0.50s;
			transition: 0.50s;
		}
		#MiniLeftNav a:hover span{ width:auto; padding:0 30px;overflow:visible; }
		#MiniLeftNav a:hover{text-decoration:none;}
		#MiniLeftNav a span{
			background-color:#e9e6eb;
			color:#3d4f0c;
		}
		#MiniLeftNav1 a span{
			background-color:#fff1dd;
			color:#3d4f0c;
		}
		#MiniLeftNav2 a span{
			background-color:#fff1dd;
			color:#3d4f0c;
		}
		#MiniLeftNav3 a span{
			background-color:#fff1dd;
			color:#3d4f0c;
		}

		/* Minimal Vertical Right Navigation */
		#MiniRightNav {
		    float: right;
		    margin: 0;
		    margin-top: 0px;
		    padding: 0;
		    margin-top: 12px;
		}
		#MiniRightNav li{
			list-style: outside none none;
		    margin: 0 0 20px;
		    padding: 0;
		    width: 48px;
		}
		#MiniRightNav li a{
			display: block;
		    padding: 0px;
		    position: relative;
		}
		#MiniRightNav span {
			font-family: "Yu Gothic ui light", Yu Gothic ui light;
			font-size:14px;
		    font-weight: 400;
		    letter-spacing: 0px;
			text-transform: uppercase;
			
		    bottom: 5px;
		    right: 47px;
		    line-height: 38px;
		    overflow: hidden;
		    padding: 0;
		    position: absolute;
		    transition: all 0.50s ease 0s;
		    white-space: nowrap;
		    width: 0;
		}
		#MiniRightNav a:hover span{ width:auto; padding:0 30px;overflow:visible; }
		#MiniRightNav a:hover{text-decoration:none;}

		#MiniRightNav3 a span{
			background-color:#fcf7f7;
			color:#3d4f0c;
		}
		#MiniRightNav a span{
			background-color:#dccca7;
			color:#3d4f0c;
		}
		#MiniRightNav1 a span{
			background-color:#9372ae;
			color:#3d4f0c;
		}
		#MiniRightNav2 a span{
			background-color:#f3b8b7;
			color:#3d4f0c;
		}

		/* Minimal Horizontal  Navigation */
		#MiniHorzNav li {
		    display: inline-block;
		    list-style: outside none none;
		    margin: 20px 0;
		    padding: 0;
		    width: 48px;
		}
		#MiniHorzNav li a{
		    border:solid 1px #fff;
			display: block;
		    padding: 7px;
		    position: relative;
		}
		#MiniHorzNav span {
			font-family: "Yu Gothic ui light", Yu Gothic ui light;
			font-size:14px;
		    font-weight: 400;
		    letter-spacing: 1px;
			text-transform: uppercase;
			
		    bottom: 0;
		    left: 47px;
		    line-height: 38px;
		    overflow: hidden;
		    padding: 0;
		    position: absolute;
		    transition: all 0.50s ease 0s;
		    white-space: nowrap;
		    width: 0;
		}
		#MiniHorzNav a:hover span{ width:auto; padding:0 30px;overflow:visible; }
		#MiniHorzNav a:hover{text-decoration:none;}
		#MiniHorzNav a span {
		    background-color: #fff;
		    color: #3d4f0c;
		    z-index: 999;
		}
		.ikon {
			height: 5px;
			width: 100%;
			position: fixed;
			margin-top: 10%;
			z-index: 1;
		}
		.ikon-tetap {
			height: 5px;
			width: 100%;
			position: fixed;
			top: 1;
			margin-top: 10%;
		}
		.ikon1 {
			margin-top: 20px;
			margin-left: 20px;
			float: left;
		}
		.ikon2 {
			margin-left: auto;
			margin-top: 20px;
			margin-right: 20px;
			float: right;
		}

		.ikon2 a span.img1{
			opacity: 0;
		}

		.ikon2 a span.img2{
			opacity: 0;
		}

		.ikon2 a span.img3{
			opacity: 0;
		}

		.ikon2 a span.img4{
			opacity: 0;
		}

		.ikon2 a:hover img{
			display: inline-block;
		}

		.ikon2 a:hover span.img1{
			opacity: 100;
		}

		.ikon2 a:hover span.img2{
			opacity: 100;
		}

		.ikon2 a:hover span.img3{
			opacity: 100;
		}

		.ikon2 a:hover span.img4{
			opacity: 100;
		}
		html {scroll-behavior:smooth;}
		.konten1 {
			background-color: #D2B48C; position: absolute; width: 400px; height: 700px; margin-bottom: 50px; margin-top: 75px;
		}
		.konten2 {
			background-color: #BA55D3; position: absolute; width: 300px; height: 300px; margin-left: 770px; margin-bottom: 50px; margin-top: 50px;
		}
		.konten3 {
			background-color: #FFB6C1; position: absolute; width: 500px; height: 400px; margin-left: 65px; margin-bottom: 50px; margin-top: 150px;
		}
		@media only screen and (min-width: 350px) and (max-width: 767px) {
		  	.konten1 {
				background-color: #D2B48C; position: absolute; width: 300px; height: 700px; margin-bottom: 50px; margin-top: 75px;margin-left: -25px;
			}
			.konten2 {
				background-color: #BA55D3; position: absolute; width: 250px; height: 300px; margin-left: -15px; margin-bottom: 50px; margin-top: 750px;
			}
			.konten3 {
				background-color: #FFB6C1; position: absolute; max-width: 200px; height: 400px; margin-left: -15px; margin-bottom: 50px; margin-top: -720px;
			}
			.desc {
				width: 200px;
			}
			.ikon {
			  	left: 0px;
			  	bottom: 65px;
			  	z-index: 999;
				width: 100%;
				position: fixed;
				z-index: 999;
			}
			.ikon-tetap {
			  	left: 0px;
			  	bottom: 65px;
			  	z-index: 999;
				width: 100%;
				position: fixed;
				z-index: 999;
			}
			.ikon1 {
				margin-top: 0;
				margin-bottom: 10px: 
				margin-left: 20px;
				float: left;
			}
			.navtext{
				margin-right: 20px;
			}
		}
		@media only screen and (min-width: 768px) and (max-width: 1023px) {
		  	.konten1 {
				background-color: #D2B48C; position: absolute; width: 300px; height: 400px; margin-bottom: 50px; margin-top: 75px;
			}
			.konten2 {
				background-color: #BA55D3; position: absolute; width: 250px; height: 250px; margin-left: 475px; margin-bottom: 50px; margin-top: 50px;
			}
			.konten3 {
				background-color: #FFB6C1; position: absolute; max-width: 300px; height: 200px; margin-left: 0px; margin-bottom: 50px; margin-top: 50px;
			}
		}
		
		.loader3:before,
		.loader3:after,
		.loader3 {
		  border-radius: 50%;
		  width: 2.5em;
		  height: 2.5em;
		  -webkit-animation-fill-mode: both;
		  animation-fill-mode: both;
		  -webkit-animation: load7 1.8s infinite ease-in-out;
		  animation: load7 1.8s infinite ease-in-out;
		}
		.loader3 {
		  font-size: 10px;
		  margin: 80px auto;
		  position: relative;
		  text-indent: -9999em;
		  -webkit-transform: translateZ(0);
		  -ms-transform: translateZ(0);
		  transform: translateZ(0);
		  -webkit-animation-delay: -0.16s;
		  animation-delay: -0.16s;
		}
		.loader3:before {
		  left: -3.5em;
		  -webkit-animation-delay: -0.32s;
		  animation-delay: -0.32s;
		}
		.loader3:after {
		  left: 3.5em;
		}
		.loader3:before,
		.loader3:after {
		  content: '';
		  position: absolute;
		  top: 0;
		}
		@-webkit-keyframes load7 {
		  0%,
		  80%,
		  100% {
		    box-shadow: 0 2.5em 0 -1.3em #ffffff;
		  }
		  40% {
		    box-shadow: 0 2.5em 0 0 #ffffff;
		  }
		}
		@keyframes load7 {
		  0%,
		  80%,
		  100% {
		    box-shadow: 0 2.5em 0 -1.3em #ffffff;
		  }
		  40% {
		    box-shadow: 0 2.5em 0 0 #ffffff;
		  }
		}
		.overlay1 {
		  position: absolute;
		  top: 0;
		  bottom: 0;
		  left: 0;
		  right: 0;
		  height: 100%;
		  width: 100%;
		  opacity: 0;
		  transition: .5s ease;
		  background-color: #008CBA;
		}
		.overlay_1:hover .overlay1 {
		  opacity: 1;
		}
		.loader3:before,
		.loader3:after,
		.loader3 {
		  border-radius: 50%;
		  width: 2.5em;
		  height: 2.5em;
		  -webkit-animation-fill-mode: both;
		  animation-fill-mode: both;
		  -webkit-animation: load7 1.8s infinite ease-in-out;
		  animation: load7 1.8s infinite ease-in-out;
		}
		.loader3 {
		  font-size: 10px;
		  text-indent: -9999em;
		  -webkit-transform: translateZ(0);
		  -ms-transform: translateZ(0);
		  transform: translateZ(0);
		  -webkit-animation-delay: -0.16s;
		  animation-delay: -0.16s;
		}
		.loader3:before {
		  left: -3.5em;
		  -webkit-animation-delay: -0.32s;
		  animation-delay: -0.32s;
		}
		.loader3:after {
		  left: 3.5em;
		}
		.loader3:before,
		.loader3:after {
		  content: '';
		}
		@-webkit-keyframes load7 {
		  0%,
		  80%,
		  100% {
		    box-shadow: 0 2.5em 0 -1.3em black;
		  }
		  40% {
		    box-shadow: 0 2.5em 0 0 black;
		  }
		}
		@keyframes load7 {
		  0%,
		  80%,
		  100% {
		    box-shadow: 0 2.5em 0 -1.3em black;
		  }
		  40% {
		    box-shadow: 0 2.5em 0 0 black;
		  }
		}


	</style>
	<style type="text/css">
	   .normal { font-weight: normal; }
	   .bold { font-weight: bold; }
	   .bolder { font-weight: bolder; }
	   .lighter { font-weight: lighter; }
	   .number100 { font-weight: 100; }
	   .number200 { font-weight: 200; }
	   .number300 { font-weight: 300; }
	   .number400 { font-weight: 400; }
	   .number500 { font-weight: 500; }
	   .number600 { font-weight: 600; }
	   .number700 { font-weight: 700; }
	   .number800 { font-weight: 800; }
	   .number900 { font-weight: 900; }
	</style>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="icon" href="<?php base_url();?>assets/images/mf/loader.ico">

	<!-- CSS
	============================================ -->
	<!-- Bootstrap CSS -->
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- FontAwesome CSS -->
	<link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">

	<!-- Ionicons CSS -->
	<link href="<?php echo base_url();?>assets/css/ionicons.min.css" rel="stylesheet">

	<!-- Themify CSS -->
	<link href="<?php base_url();?>assets/css/themify-icons.css" rel="stylesheet">

	<!-- Plugins CSS -->
	<link href="<?php echo base_url();?>assets/css/plugins.css" rel="stylesheet">

	<!-- Helper CSS -->
	<link href="<?php echo base_url();?>assets/css/helper.css" rel="stylesheet">

	<!-- Main CSS -->
	<link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet">

	<!-- Modernizer JS -->
	<script src="<?php echo base_url();?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
	<script src="<?php base_url();?>assets/js/vendor/jquery.min.js"></script>
</head>
<body>
	
	<!--=============================================
	=            Header offcanvas about         =
	=============================================-->
	<?php
	$ikon_mobile = '<a class="navtext" href="https://www.maztafarma.com/"><img src="'.base_url().'assets/images/mf/icon/aset-home.png" width="50px"></a><a class="navtext" href="https://www.tokopedia.com/"><img src="'.base_url().'assets/images/mf/icon/aset-15.png" width="50px"></a><a class="navtext" href="https://shopee.co.id/?gclid=Cj0KCQjw5eX7BRDQARIsAMhYLP_QFNz-IgwiFLnS5DkA_mM-kvIZ7h3BRx7cKg7VIqw0azx1mMhnKboaAhEwEALw_wcB"><img src="'.base_url().'assets/images/mf/icon/aset-21.png" width="50px"></a><a class="navtext" href="#"><img src="'.base_url().'assets/images/mf/icon/aset-19.png" width="50px"></a>';

	$ikon_mobile1= '<ul id="MiniLeftNav"><li><a class="navtext" href="https://www.maztafarma.com/"><img src="'.base_url().'assets/images/mf/icon/aset-home.png" width="50px"><span>Home</span></a></li><ul id="MiniLeftNav1"><li><a class="navtext" href="https://www.tokopedia.com/"><img src="'.base_url().'assets/images/mf/icon/aset-15.png" width="50px"><span>Mazta Farma</span></a></li></ul><ul id="MiniLeftNav2"><li><a class="navtext" href="https://shopee.co.id/?gclid=Cj0KCQjw5eX7BRDQARIsAMhYLP_QFNz-IgwiFLnS5DkA_mM-kvIZ7h3BRx7cKg7VIqw0azx1mMhnKboaAhEwEALw_wcB"><img src="'.base_url().'assets/images/mf/icon/aset-21.png" width="50px"><span>Tokopedia</span></a></li></ul><ul id="MiniLeftNav3"><li><a class="navtext" href="#"><img src="'.base_url().'assets/images/mf/icon/aset-19.png" width="50px"><span>Shopee</span></a></li></ul></ul>';

	?>
	<div class="ikon sticky" id="dinamic-ikon" style="display: inline-block;">
		<div class="ikon1 float-left" id="ikon-mobile">
			
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function() {
		   	if (screen.width>=350 && screen.width<=767) {
		      	document.getElementById("ikon-mobile").innerHTML = '<?php echo $ikon_mobile;?>';
		   	} else {
		      	document.getElementById("ikon-mobile").innerHTML = '<?php echo $ikon_mobile1;?>';
		   	}
		});	
	</script>
	<header class="header header-offcanvas-about header-sticky">

		<!--=======  header bottom  =======-->

		<div class="header-bottom pt-md-40 pb-md-40 pt-sm-40 pb-sm-40">
			<div class="container wide">

				<!--=======  header bottom container  =======-->

				<div class="header-bottom-container">

					<!--=======  logo with off canvas  =======-->

					<div class="logo-with-offcanvas d-flex">

						<!--=======  offcanvas about icon  =======-->

						<div class="offcanvas-about-icon mr-20 d-none d-lg-block">
							<a href="javascript:void(0)" id="offcanvas-about-icon">
								<i class="ion-navicon"></i>
							</a>
						</div>

						<!--=======  End of offcanvas about icon  =======-->

						<!--=======  logo   =======-->

						<div class="logo">
							<a href="<?php echo site_url('christian')?>">
								<img src="<?php echo base_url();?>assets/images/mf/logo_mobile.png" class="img-fluid" alt="">
							</a>
						</div>

						<!--=======  End of logo   =======-->
					</div>

					<!--=======  End of logo with off canvas  =======-->

					<!--=======  header bottom navigation  =======-->

					<div class="header-bottom-navigation">
						<div class="site-main-nav d-none d-lg-block">
							<nav class="site-nav center-menu">
								<ul>
									<li>
										<a href="<?php echo site_url('christian')?>">Home</a>
									</li><!--
									<li class="menu-item-has-children"><a href="shop-left-sidebar.html">Shop</a>
										<ul class="sub-menu mega-menu mega-menu-column-4">
											<li><a href="javascript:void(0)" class="mega-column-title">Shop Pages</a>
												<ul class="mega-sub-menu">
													<li><a href="shop-no-sidebar.html">Shop No Sidebar</a></li>
													<li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
													<li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
													<li><a href="shop-fullwidth-no-space.html">Shop Fullwidth No Space</a></li>
													<li><a href="shop-fullwidth-no-sidebar.html">Shop Fullwidth No Sidebar</a></li>
													<li><a href="shop-fullwidth-left-sidebar.html">Shop Fullwidth Left Sidebar</a></li>
													<li><a href="shop-fullwidth-right-sidebar.html">Shop Fullwidth Right Sidebar</a></li>
												</ul>
											</li>
											<li><a href="javascript:void(0)" class="mega-column-title">Shop Pages</a>
												<ul class="mega-sub-menu">
													<li><a href="shop-product-basic.html">Basic </a></li>
													<li><a href="shop-product-fullwidth.html">Fullwidth</a></li>
													<li><a href="shop-product-sticky-details.html">Sticky details</a></li>
													<li><a href="shop-product-with-sidebar.html">With Sidebar</a></li>
													<li><a href="shop-product-extra-content.html">Extra Content</a></li>
													<li><a href="shop-product-variation-image.html">Variation Image</a></li>
													<li><a href="shop-product-bought-together.html">Bought Together</a></li>
												</ul>
											</li>
											<li><a href="javascript:void(0)" class="mega-column-title">Shop Pages</a>
												<ul class="mega-sub-menu">
													<li><a href="shop-product-with-background.html">Product with background</a></li>
													<li><a href="shop-cart.html">Shopping Cart</a></li>
													<li><a href="shop-checkout.html">Checkout</a></li>
													<li><a href="shop-order-tracking.html">Order Tracking</a></li>
													<li><a href="shop-wishlist.html">Wishlist</a></li>
													<li><a href="shop-customer-login.html">Customer Login</a></li>
													<li><a href="shop-by-brand.html">Shop by Brand</a></li>
												</ul>
											</li>
											<li>
												<div class="menu-image">
													<img src="assets/images/menu-image/megamenu-shop.png" class="img-fluid" alt="">
												</div>
											</li>
										</ul>
									</li>-->
									<li class="menu-item-has-children"><a href="<?php echo site_url('christianbretonproduct')?>">Our Product</a>
										<ul class="sub-menu single-column-menu">
											<li><a href="<?php echo site_url('gold-series')?>">Gold Series</a></li>
											<li><a href="<?php echo site_url('eye-priority')?>">Eye Priority</a></li>
											<li><a href="<?php echo site_url('lips-xl')?>">Lips XL</a></li>
										</ul>
									</li>

									<li class="menu-item-has-children"><a href="javascript:void(0)">Digital Shop</a>
										<ul class="sub-menu single-column-menu">
											<li><a href="https://www.maztafarma.com/">Mazta Farma</a></li>
											<li><a href="#">Tokopedia</a></li>
											<li><a href="#">Shopee</a></li>
										</ul>
									</li>

									<li>
										<a href="<?php echo site_url('contactus')?>">Contact Us</a>
										<!--<a href="<?php echo site_url('christian/contactus')?>">Contact Us</a>-->
									</li>
										</ul>
									</li>
								</ul>
							</nav>
						</div>
					</div>

					<!--=======  End of header bottom navigation  =======-->

					<!--=======  headeer right container  =======-->

					<div class="header-right-container">

						<!--=======  header right icons  =======-->

						<div class="header-right-icons d-flex justify-content-end align-items-center h-100">
							<!--=======  single-icon  =======-->

							<div class="single-icon search">
								<a href="javascript:void(0)" id="search-icon">
									<i class="ion-ios-search-strong"></i>
								</a>
							</div>

							<!--=======  End of single-icon  =======-->
							<!--=======  single-icon  =======-->

							<div class="single-icon user-login">
								<a href="#">
									<i class="ion-android-person"></i>
								</a>
							</div>

							<!--=======  End of single-icon  =======-->
							<!--=======  single-icon  =======-->
<!--
							<div class="single-icon wishlist">
								<a href="javascript:void(0)" id="offcanvas-wishlist-icon">
									<i class="ion-android-favorite-outline"></i>
									<span class="count">2</span>
								</a>
							</div>
-->
							<!--=======  End of single-icon  =======-->
							<!--=======  single-icon  =======-->
<!--
							<div class="single-icon cart">
								<a href="javascript:void(0)" id="offcanvas-cart-icon">
									<i class="ion-ios-cart"></i>
									<span class="count">3</span>
								</a>
							</div>
-->
							<!--=======  End of single-icon  =======-->
						</div>
						<!--=======  End of header right icons  =======-->

					</div>

					<!--=======  End of headeer right container  =======-->


				</div>

				<!--=======  End of header bottom container  =======-->

				<!-- Mobile Navigation Start Here -->

				<div class="site-mobile-navigation d-block d-lg-none">
					<div id="dl-menu" class="dl-menuwrapper site-mobile-nav">
						<!--Site Mobile Menu Toggle Start-->
						<button class="dl-trigger hamburger hamburger--spin">
							<span class="hamburger-box">
								<span class="hamburger-inner"></span>
							</span>
						</button>
						<!--Site Mobile Menu Toggle End-->
						<ul class="dl-menu dl-menu-toggle">
							<li><a href="<?php echo site_url('christian')?>">Home</a>
							</li>

							<li><a href="#">Our Product</a>
								<ul class="dl-submenu">
									<li class=""> <a href="<?php echo site_url('gold-series')?>">Gold Series</a>
									</li>
									<li><a href="<?php echo site_url('eye-priority')?>">Eyes Priority</a></li>
										<ul class="dl-submenu">
										</ul>
										<li>
											<li>
												<a href="<?php echo site_url('lips-xl')?>">Lips XL</a>
											</li></li></li>
									</li>


								</ul>
							</li>
							<li><a href="#">Digital shop</a>
								<ul class="dl-submenu">
									<li><a href="https://www.maztafarma.com/">Mazta Farma</a></li>
									<li> <a href="https://www.tokopedia.com/">Tokopedia</a>
									<li> <a href="https://www.shopee.com/">Shopee</a></li>


								</ul>
							</li>
							<li><a href="<?php echo site_url('contactus')?>">Contact Us</a>
							</li>
							
						</ul>
					</div>
				</div>

				<!-- Mobile Navigation End Here -->


			</div>
		</div>

		<!--=======  End of header bottom  =======-->
	</header>
