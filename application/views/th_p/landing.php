<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
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
		    border-radius: 10px;
		    left: 60px;
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
		    border-radius: 10px;
		    right: 60px;
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
		.ikon {
			height: 10px;
			width: 100%;
			position: fixed;
			margin-top: 20px;
			display: inline-block;
			z-index: 999;
		}
		.ikon-tetap {
			height: 5px;
			height: 10px;
			height: 10px;
			width: 100%;
			position: fixed;
			margin-top: 20px;
			z-index: 999;
		}
		.ikon1 {
			margin-top: 10px;
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
		@media only screen and (min-width: 350px) and (max-width: 767px) {
		  	.konten1 {
				background-color: #D2B48C; position: absolute; width: 300px; height: 180px; margin-bottom: 50px; margin-top: 500px;margin-left: -25px;
			}
			.konten2 {
				background-color: #BA55D3; position: absolute; width: 250px; height: 300px; margin-left: -15px; margin-bottom: 50px; margin-top: 400px;
			}
			.konten3 {
				background-color: #FFB6C1; position: absolute; max-width: 200px; height: 270px; margin-left: -15px; margin-bottom: 50px; margin-top: 580px;
			}
			.desc {
				width: 200px;
			}
			.ikon {
				display: none;
			}
			/*.ikon {
			  	left: 0px;
			  	bottom: 20px;
			  	z-index: 999;
				width: 100%;
				position: fixed;
				z-index: 999;
			}
			.ikon-tetap {
			  	left: 0px;
			  	bottom: 20px;
			  	z-index: 999;
				width: 100%;
				position: fixed;
				z-index: 999;
			}
			.ikon1 {
				margin-top: auto;
				margin-bottom: 10px: 
				margin-left: 20px;
				float: left;
			}
			.navtext{
				margin-right: 20px;
			}*/
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
	<link href="<?php base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php base_url();?>assets/css/ihover.css" rel="stylesheet">
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
	<script src="<?php base_url();?>assets/js/vendor/jquery.min.js"></script>
</head>
<body>
<center>
<div id="loading" style="width: 100%; padding-top: 100px;">
	<img width="25%" src="<?= base_url();?>assets/images/mf/LOGO CHRISTIAN BRETON PARIS.png">
	<div class="loader3">

	</div>
</div>
</center>
<audio src="<?php echo base_url();?>assets/images/Jason Mraz - I'm Yours (Live in London).mp3" autoplay="autoplay" hidden="hidden"></audio>
<div id="hide">
	<!--=============================================
    =            slider area         =
    =============================================-->
	<div class="ikon sticky" id="dinamic-ikon" style="">
		<div class="ikon1 float-left" id="ikon-mobile" style="z-index: 999;">
			<ul id="MiniLeftNav">
                <li>
                    <a class="navtext" href="<?php echo base_url();?>"><img src="<?= base_url();?>assets/images/mf/icon/aset-home.png" width="50px"><span>Home</span>
                    </a>
                </li>
                <ul id="MiniLeftNav1">
	                <li>
	                    <a class="navtext" href="https://www.maztafarma.com/"><img src="<?= base_url();?>assets/images/mf/icon/aset-15.png" width="50px"> 
	                        <span>Mazta Farma</span>
	                    </a>
	                </li>
	            </ul>
                <ul id="MiniLeftNav2">
	                <li>
	                     <a class="navtext" href="https://www.tokopedia.com/christianbretoni?source=universe&st=product"><img src="<?= base_url();?>assets/images/mf/icon/aset-21.png" width="50px">
	                        <span>Tokopedia</span>
	                     </a>
	                </li>
	            </ul>
                <ul id="MiniLeftNav3">
	                <li>
	                     <a class="navtext" href="https://shopee.co.id/christianbreton.id"><img src="<?= base_url();?>assets/images/mf/icon/aset-19.png" width="50px">
	                        <span>Shopee</span>
	                     </a>
	                </li>
	            </ul>
            </ul>
		</div>
		<div class="ikon2 float-right">
			<ul id="MiniRightNav">
				<li>
	                <a class="navtext" href="<?php echo site_url('gold-series')?>"><img src="<?= base_url();?>assets/images/mf/icon/aset-11.png" width="50px"><span style="color:white;"><strong>Gold Series</span></a></strong>
	            </li>
	            <ul id="MiniRightNav1">
					<li>
		                <a class="navtext" href="<?php echo site_url('eye-priority')?>"><img src="<?= base_url();?>assets/images/mf/icon/aset-12.png" width="50px"><span style="color:white;"><strong>Eye Priority</span></a></strong>
		            </li>
		        </ul>
	            <ul id="MiniRightNav2">
		            <li>
		                <a class="navtext" href="<?php echo site_url('lips-xl')?>"><img src="<?= base_url();?>assets/images/mf/icon/aset-13.png" width="50px"> <span style="color:white;"><strong>Lips XL</span></a></strong>
		            </li>
		        </ul>
	            <ul id="MiniRightNav3">
		            <li>
		                <a class="navtext" href="<?php echo site_url('contactus')?>"><img src="<?= base_url();?>assets/images/mf/icon/aset-17.png" width="50px"><span style="color:white;"><strong>Contact Us</span></a></strong>
		            </li>
		        </ul>
	        </ul>
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
	<div class="slider-area header-bottom-slider-area">
		<div id="rev_slider_16_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="homepage-14"
			data-source="gallery"
			style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
			<!-- START REVOLUTION SLIDER 5.4.7 auto mode -->
			<div id="rev_slider_16_1" class="rev_slider fullwidthabanner" style="display:none; position: absolute;" data-version="5.4.7">
				<ul>
					<!-- SLIDE  -->
					<li data-index="rs-42"
						data-transition="parallaxtoright,parallaxtoleft,parallaxtotop,parallaxtobottom,parallaxhorizontal,parallaxvertical,fadefromright,fadefromleft,fadefromtop,fadefrombottom"
						data-slotamount="default,default,default,default,default,default,default,default,default,default"
						data-hideafterloop="0" data-hideslideonmobile="off"
						data-easein="default,default,default,default,default,default,default,default,default,default"
						data-easeout="default,default,default,default,default,default,default,default,default,default"
						data-masterspeed="700,default,default,default,default,default,default,default,default,default" data-thumb=""
						data-rotate="0,0,0,0,0,0,0,0,0,0" data-saveperformance="off" data-title="Slide" data-param1=""
						data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
						data-param9="" data-param10="" data-description="">
						<!-- MAIN IMAGE -->
						<img src="<?php base_url();?>assets/images/mf/slide/banner.png" data-bgcolor='#f8f8f8' style='background:#f8f8f8; position: relative;max-width: 200px;z-index: 9;' alt=""
							data-lazyload="<?php base_url();?>assets/images/mf/slide/banner.png" data-bgposition="center center" data-bgfit="cover"
							data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
						
						
						


						<!-- LAYERS -->

						<!-- LAYER NR. 1 -->
						<div class="tp-caption   tp-resizeme rs-parallaxlevel-1" id="slide-42-layer-23"
							data-x="['left','left','left','left']" data-hoffset="['532','180','66','28']"
							data-y="['middle','top','middle','middle']" data-voffset="['0','166','0','-3']" data-width="none"
							data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on"
							data-frames='[{"delay":710,"speed":2760,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
							data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
							style="z-index: 5;">
							
						</div>

						
						<div class="tp-caption   tp-resizeme" id="slide-44-layer-22" data-x="['left','left','center','center']"
							data-hoffset="['1095','533','0','17']" data-y="['top','top','top','top']"
							data-voffset="['451','274','165','174']" data-width="none" data-height="none" data-whitespace="nowrap"
							data-type="image" data-responsive_offset="on"
							data-frames='[{"delay":700,"speed":1330,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
							data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
							style="z-index: 9;"> </div>
					</li>
				</ul>

			</div>

		</div><!-- END REVOLUTION SLIDER -->
		<div class="text-center mt-0">
			<a href="#s2" style="transition: opacity .3s;scroll-behavior: smooth;"><img src="https://cdn.iconscout.com/icon/free/png-256/down-chevron-458459.png" width="50px"></a>
		</div>
	</div>
	

	<!--=====  End of slider area  ======-->

<?php $this->load->view('th_p/content') ?>
<?php $this->load->view('th_p/instagram_int') ?>
<?php $this->load->view('th_p/footer') ?>