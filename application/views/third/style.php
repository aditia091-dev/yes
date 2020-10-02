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
	<link rel="icon" href="assets/images/favicon.ico">
	<!-- CSS
	============================================ -->
	<!-- Bootstrap CSS -->
	<link href="<?php base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- FontAwesome CSS -->
	<link href="<?php base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
	<!-- Ionicons CSS -->
	<link href="<?php base_url();?>assets/css/ionicons.min.css" rel="stylesheet">
	<!-- Themify CSS -->
	<link href="<?php base_url();?>assets/css/themify-icons.css" rel="stylesheet">
	<!-- Plugins CSS -->
	<link href="<?php base_url();?>assets/css/plugins.css" rel="stylesheet">
	<!-- Helper CSS -->
	<link href="<?php base_url();?>assets/css/helper.css" rel="stylesheet">
	<!-- Main CSS -->
	<link href="<?php base_url();?>assets/css/main.css" rel="stylesheet">
	<!-- Revolution Slider CSS -->
	<link href="<?php base_url();?>assets/revolution/css/settings.css" rel="stylesheet">
	<link href="<?php base_url();?>assets/revolution/css/navigation.css" rel="stylesheet">
	<link href="<?php base_url();?>assets/revolution/custom-setting.css" rel="stylesheet">
	<!-- Modernizer JS -->
	<script src="<?php base_url();?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<center>
<div id="loading" style="width: 100%; padding-top: 100px;">
	<img width="25%" src="<?= base_url();?>assets/images/mf/LOGO CHRISTIAN BRETON PARIS.png">
	<div class="loader3">

	</div>
</div>
</center>