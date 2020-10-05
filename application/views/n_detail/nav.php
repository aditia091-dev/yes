<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
<style type="text/css">
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
				background-color: #D2B48C; position: absolute; width: 300px; height: 700px; margin-bottom: 50px; margin-top: 75px;
			}
			.konten2 {
				background-color: #BA55D3; position: absolute; width: 300px; height: 300px; margin-left: 50px; margin-bottom: 50px; margin-top: 50px;
			}
			.konten3 {
				background-color: #FFB6C1; position: absolute; max-width: 300px; height: 400px; margin-left: 65px; margin-bottom: 50px; margin-top: 150px;
			}
		}
		@media only screen and (min-width: 768px) and (max-width: 1023px) {
		  	.konten1 {
				background-color: #D2B48C; position: absolute; width: 300px; height: 700px; margin-bottom: 50px; margin-top: 75px;
			}
			.konten2 {
				background-color: #BA55D3; position: absolute; width: 300px; height: 250px; margin-left: 400px; margin-bottom: 50px; margin-top: 50px;
			}
			.konten3 {
				background-color: #FFB6C1; position: absolute; max-width: 300px; height: 400px; margin-left: 65px; margin-bottom: 50px; margin-top: 150px;
			}
		}
		.ikon {
			width: 100%;
			position: absolute;
			margin-top: 20px;
			margin-left: 20px;
		}
		.ikon1 {
			margin-top: 20px;
			margin-left: 20px;
			float: left;
		}
		.ikon2 {
			margin-left: auto;
			margin-top: 20px;
			margin-right: 40px;
			float: right;
			position: static;
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
	<link rel="icon" href="<?php base_url();?>assets/images/favicon.ico">

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
</head>
<body>
	<!--=============================================
	=            Header offcanvas about         =
	=============================================-->

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
									<li class="menu-item-has-children"><a href="<?php echo site_url('christian/our_p')?>">Our Product</a>
										<ul class="sub-menu single-column-menu">
											<li><a href="<?php echo site_url('christian/d_gold')?>">Gold Series</a></li>
											<li><a href="<?php echo site_url('christian/d_eye')?>">Eye Priority</a></li>
											<li><a href="<?php echo site_url('christian/d_lips')?>">Lips XL</a></li>
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
										<a href="<?php echo site_url('christian/contactus')?>">Contact Us</a>
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
							<li class=""><a href="#">Home</a>
								<ul class="dl-submenu">
									<li class=""> <a href="#">Home Group One</a>
										<ul class="dl-submenu">
											<li><a href="index-trending.html">Trending</a></li>
											<li><a href="index-collection.html">My collection</a></li>
											<li><a href="index-special.html">Special</a></li>
											<li><a href="index-concept.html">concept</a></li>
											<li><a href="index-smart.html">smart design</a></li>
										</ul>
									</li>
									<li> <a href="#">Home Group Two</a>
										<ul class="dl-submenu">
											<li><a href="index-furniture.html">Furniture </a></li>
											<li><a href="index-essentials.html">Essentials</a></li>
											<li><a href="index-lookbook.html">Lookbook</a></li>
											<li><a href="index-wearables.html">Wearables</a></li>
											<li><a href="index-accessories.html">Accessories</a></li>
										</ul>
									</li>
									<li> <a href="#">Home Group three</a>
										<ul class="dl-submenu">
											<li><a href="index-shoppable.html">Shoppable</a></li>

											<li><a href="index-fashion.html">Fashion</a></li>
											<li><a href="index-perfumes.html">Perfumes</a></li>
											<li><a href="index-cosmetics.html">Cosmetics</a></li>
										</ul>
									</li>
									<li> <a href="#">Home Group four</a>
										<ul class="dl-submenu">
											<li><a href="index-decor.html">Home Decor</a></li>
											<li><a href="index-creative.html">Creative</a></li>
										</ul>
									</li>
								</ul>
							</li>

							<li><a href="#">Shop</a>
								<ul class="dl-submenu">
									<li class=""> <a href="#">Shop Pages</a>
										<ul class="dl-submenu">
											<li><a href="shop-no-sidebar.html">Shop No Sidebar</a></li>
											<li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
											<li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
											<li><a href="shop-fullwidth-no-space.html">Shop Fullwidth No Space</a></li>
											<li><a href="shop-fullwidth-no-sidebar.html">Shop Fullwidth No Sidebar</a></li>
											<li><a href="shop-fullwidth-left-sidebar.html">Shop Fullwidth Left Sidebar</a></li>
											<li><a href="shop-fullwidth-right-sidebar.html">Shop Fullwidth Right Sidebar</a></li>
										</ul>
									</li>
									<li class=""> <a href="#">Product Details Pages</a>
										<ul class="dl-submenu">
											<li><a href="shop-product-basic.html">Basic </a></li>
											<li><a href="shop-product-fullwidth.html">Fullwidth</a></li>
											<li><a href="shop-product-sticky-details.html">Sticky details</a></li>
											<li><a href="shop-product-with-sidebar.html">With Sidebar</a></li>
											<li><a href="shop-product-extra-content.html">Extra Content</a></li>
											<li><a href="shop-product-variation-image.html">Variation Image</a></li>
											<li><a href="shop-product-bought-together.html">Bought Together</a></li>


										</ul>
									</li>
									<li class=""> <a href="#">Other Shop Pages</a>
										<ul class="dl-submenu">
											<li><a href="shop-product-with-background.html">Product with background</a></li>
											<li><a href="shop-cart.html">Shopping Cart</a></li>
											<li><a href="shop-checkout.html">Checkout</a></li>
											<li><a href="shop-order-tracking.html">Order Tracking</a></li>
											<li><a href="shop-wishlist.html">Wishlist</a></li>
											<li><a href="shop-customer-login.html">Customer Login</a></li>
											<li><a href="shop-by-brand.html">Shop by Brand</a></li>

										</ul>
									</li>


								</ul>
							</li>
							<li><a href="#">Elements</a>
								<ul class="dl-submenu">
									<li class=""> <a href="#">Shop / Products</a>
										<ul class="dl-submenu">
											<li><a href="element-product-categories.html">Product Categories</a></li>
											<li><a href="element-product-sliders.html">Product Sliders</a></li>
											<li><a href="element-product-tabs.html">Product Tabs</a></li>
											<li><a href="element-product-widget.html">Product Widget</a></li>
											<li><a href="element-recent-products.html">Recent Products</a></li>
										</ul>
									</li>
									<li class=""> <a href="#">Shop / Products</a>
										<ul class="dl-submenu">
											<li><a href="element-sale-products.html">Sale Products </a></li>
											<li><a href="element-featured-products.html">Featured products</a></li>
											<li><a href="element-top-rated-products.html">Top Rated products</a></li>
											<li><a href="element-bestselling-products.html">Best Selling products</a></li>
											<li><a href="element-product-attributes.html">Product Attributes</a></li>
										</ul>
									</li>
									<li class=""> <a href="#">Theming</a>
										<ul class="dl-submenu">
											<li><a href="element-blog-posts.html">Blog Posts</a></li>
											<li><a href="element-mailchimp-form.html">Mailchimp Form</a></li>
											<li><a href="element-icon-box.html">Icon Box</a></li>
											<li><a href="element-team-member.html">Team Member</a></li>
											<li><a href="element-instagram.html">Instagram</a></li>

										</ul>
									</li>


								</ul>
							</li>
							<li><a href="#">Pages</a>
								<ul class="dl-submenu">
									<li><a href="about-us.html">About Us</a></li>
									<li><a href="about-us-2.html">About Us 2</a></li>
									<li><a href="contact-us.html">Contact Us</a></li>
									<li><a href="faq.html">F.A.Q</a></li>
									<li><a href="coming-soon.html">Coming Soon</a></li>
									<li><a href="404.html">404</a></li>
									<li><a href="my-account.html">My account</a></li>
									<li><a href="compare.html">Compare</a></li>
								</ul>
							</li>
							<li><a href="#">Blog</a>
								<ul class="dl-submenu">
									<li><a href="#">Standard Layout</a>
										<ul class="dl-submenu">
											<li><a href="blog-standard-right-sidebar.html">Right Sidebar</a></li>
											<li><a href="blog-standard-left-sidebar.html">Left Sidebar</a></li>
											<li><a href="blog-standard-full-width.html">Full Width</a></li>
										</ul>
									</li>
									<li><a href="#">Grid Layout</a>
										<ul class="dl-submenu">
											<li><a href="blog-grid-right-sidebar.html">Right Sidebar</a></li>
											<li><a href="blog-grid-left-sidebar.html">Left Sidebar</a></li>
											<li><a href="blog-grid-full-width.html">Full Width</a></li>
										</ul>
									</li>
									<li><a href="#">List Layout</a>
										<ul class="dl-submenu">
											<li><a href="blog-list-right-sidebar.html">Right Sidebar</a></li>
											<li><a href="blog-list-left-sidebar.html">Left Sidebar</a></li>
											<li><a href="blog-list-full-width.html">Full Width</a></li>
										</ul>
									</li>
									<li><a href="#">Masonry Layout</a>
										<ul class="dl-submenu">
											<li><a href="blog-masonry-right-sidebar.html">Right Sidebar</a></li>
											<li><a href="blog-masonry-left-sidebar.html">Left Sidebar</a></li>
											<li><a href="blog-masonry-full-width.html">Full Width</a></li>
										</ul>
									</li>
									<li><a href="#">1st Full Then Grid</a>
										<ul class="dl-submenu">
											<li><a href="blog-full-then-grid-right-sidebar.html">Right Sidebar</a></li>
											<li><a href="blog-full-then-grid-left-sidebar.html">Left Sidebar</a></li>
											<li><a href="blog-full-then-grid-full-width.html">Full Width</a></li>
										</ul>
									</li>
									<li><a href="#">Single Post Layout</a>
										<ul class="dl-submenu">
											<li><a href="blog-single-post-right-sidebar.html">Right Sidebar</a></li>
											<li><a href="blog-single-post-left-sidebar.html">Left Sidebar</a></li>
											<li><a href="blog-single-post-full-width.html">Full Width</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>

				<!-- Mobile Navigation End Here -->


			</div>
		</div>

		<!--=======  End of header bottom  =======-->
	</header>
