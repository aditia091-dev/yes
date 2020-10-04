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
	<link rel="icon" href="<?php base_url();?>assets/images/mf/loader.ico">
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
<body>
<div id="hide">
	<!--=============================================
    =            slider area         =
    =============================================-->
	<div class="slider-area header-bottom-slider-area">
		<div id="rev_slider_16_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="homepage-14"
			data-source="gallery"
			style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
			<!-- START REVOLUTION SLIDER 5.4.7 auto mode -->
			<div id="rev_slider_16_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.7">
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
						<img src="<?php base_url();?>assets/images/mf/slide/banner.png" data-bgcolor='#f8f8f8' style='background:#f8f8f8' alt=""
							data-lazyload="<?php base_url();?>assets/images/mf/slide/banner.png" data-bgposition="center center" data-bgfit="cover"
							data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
						<div class="ikon">
							<div class="ikon1 float-left">
								<a href="https://www.maztafarma.com/" class="mb-30"><img src="<?= base_url();?>assets/images/mf/icon/aset-15.png" width="50px"></a><br/>
								<a href="https://www.tokopedia.com/" class="mb-30"><img src="<?= base_url();?>assets/images/mf/icon/aset-21.png" width="50px"></a><br/>
								<a href="https://shopee.co.id/?gclid=Cj0KCQjw5eX7BRDQARIsAMhYLP_QFNz-IgwiFLnS5DkA_mM-kvIZ7h3BRx7cKg7VIqw0azx1mMhnKboaAhEwEALw_wcB" class=""><img src="<?= base_url();?>assets/images/mf/icon/aset-19.png" width="50px">
								</a>
							</div>
							<div class="ikon2 float-right">
								<a href="<?= base_url('eye');?>" class="mb-5">
									<span class="img1"><img src="<?= base_url();?>assets/images/mf/icon/aset-15.png" width="50px"></span>
									<img src="<?= base_url();?>assets/images/mf/icon/aset-11.png" width="50px">
								</a>
								<br/>
								<a href="#" class="mb-5">
									<span class="img2"><img src="<?= base_url();?>assets/images/mf/icon/aset-15.png" width="50px"></span>
									<img src="<?= base_url();?>assets/images/mf/icon/aset-12.png" width="50px">
									
								</a>
								<br/>
								<a href="#" class="mb-5">
									<span class="img3"><img src="<?= base_url();?>assets/images/mf/icon/aset-15.png" width="50px"></span>
									<img src="<?= base_url();?>assets/images/mf/icon/aset-13.png" width="50px">
									
								</a>
								<br/>
								<a href="#">
									<span class="img4"><img src="<?= base_url();?>assets/images/mf/icon/aset-15.png" width="50px"></span>
									<img src="<?= base_url();?>assets/images/mf/icon/aset-17.png" width="50px">
									
								</a>
							</div>
						</div>

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
							style="z-index: 9;"><img src="assets/images/revimages/dummy.png" alt=""
								data-ww="['511auto','454px','390px','297px']" data-hh="['215px','191px','164px','125px']"
								data-lazyload="assets/images/revimages/cosmetics/slider-homepage14-img8.png" data-no-retina> </div>
					</li>
				</ul>
				<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
			</div>
		</div><!-- END REVOLUTION SLIDER -->
	</div>

	<!--=====  End of slider area  ======-->

<br>
		<br>
		<br>
		<body>
<div id="hide">
	<!--=============================================
    =            slider area         =
    =============================================-->
	<div class="slider-area header-bottom-slider-area">
		<div id="rev_slider_16_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="homepage-14"
			data-source="gallery"
			style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
			<!-- START REVOLUTION SLIDER 5.4.7 auto mode -->
			<div id="rev_slider_16_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.7">
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
						<img src="<?php base_url();?>assets/images/mf/slide/banner.png" data-bgcolor='#f8f8f8' style='background:#f8f8f8' alt=""
							data-lazyload="<?php base_url();?>assets/images/mf/slide/banner.png" data-bgposition="center center" data-bgfit="cover"
							data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
						<div class="ikon">
							<div class="ikon1 float-left">
								<a href="#" class="mb-30"><img src="<?= base_url();?>assets/images/mf/icon/aset-15.png" width="50px"></a><br/>
								<a href="#" class="mb-30"><img src="<?= base_url();?>assets/images/mf/icon/aset-21.png" width="50px"></a><br/>
								<a href="#" class=""><img src="<?= base_url();?>assets/images/mf/icon/aset-19.png" width="50px">
								</a>
							</div>
							<div class="ikon2 float-right">
								<a href="<?= base_url('eye');?>" class="mb-5">
									<span class="img1"><img src="<?= base_url();?>assets/images/mf/icon/aset-15.png" width="50px"></span>
									<img src="<?= base_url();?>assets/images/mf/icon/aset-11.png" width="50px">
								</a>
								<br/>
								<a href="#" class="mb-5">
									<span class="img2"><img src="<?= base_url();?>assets/images/mf/icon/aset-15.png" width="50px"></span>
									<img src="<?= base_url();?>assets/images/mf/icon/aset-12.png" width="50px">
									
								</a>
								<br/>
								<a href="#" class="mb-5">
									<span class="img3"><img src="<?= base_url();?>assets/images/mf/icon/aset-15.png" width="50px"></span>
									<img src="<?= base_url();?>assets/images/mf/icon/aset-13.png" width="50px">
									
								</a>
								<br/>
								<a href="#">
									<span class="img4"><img src="<?= base_url();?>assets/images/mf/icon/aset-15.png" width="50px"></span>
									<img src="<?= base_url();?>assets/images/mf/icon/aset-17.png" width="50px">
									
								</a>
							</div>
						</div>

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
							style="z-index: 9;"><img src="assets/images/revimages/dummy.png" alt=""
								data-ww="['511auto','454px','390px','297px']" data-hh="['215px','191px','164px','125px']"
								data-lazyload="assets/images/revimages/cosmetics/slider-homepage14-img8.png" data-no-retina> </div>
					</li>
				</ul>
				<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
			</div>
		</div><!-- END REVOLUTION SLIDER -->
	</div>

	<!--=====  End of slider area  ======-->
<?php $this->load->view('th_p/content') ?>
<?php $this->load->view('th_p/footer') ?>