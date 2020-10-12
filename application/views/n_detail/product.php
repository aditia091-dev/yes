<?php $this->load->view('n_detail/nav') ?>

	<!--=======  breadcrumb area =======-->
	<?php
	$bg = $category['gambar'];
	?>
	<div class="breadcrumb-area pt-50 pb-70" style="background-image: url('../assets/images/kategori/<?= $bg ?>');">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="breadcrumb-title"><?= $category['kategori'];?></h1>

					<!--=======  breadcrumb list  =======-->

					<ul class="breadcrumb-list">
						<li class="breadcrumb-list__item"><a href="<?php echo site_url('christian')?>">HOME</a></li>
						<!--<li class="breadcrumb-list__item"><a href="shop-left-sidebar.html">SHOP</a></li>-->
						<li class="breadcrumb-list__item breadcrumb-list__item--active"><?= $category['kategori'];?></li>
					</ul>

					<!--=======  End of breadcrumb list  =======-->

				</div>
			</div>
		</div>
	</div>

	<!--=======  End of breadcrumb area =======-->

	<!--=============================================
    =            shop page content         =
    =============================================-->
    <?php foreach ($product as $p) :?>
	<div class="shop-page-wrapper mt-100 mb-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  shop product content  =======-->

					<div class="shop-product">
						<div class="row pb-100">
							<div class="col-lg-6 mb-md-70 mb-sm-70">
								<!--=======  shop product big image gallery  =======-->

								<div class="shop-product__big-image-gallery-wrapper mb-30">

									<!--=======  shop product gallery icons  =======-->

									<div class="single-product__floating-badges single-product__floating-badges--shop-product">
										<span class="hot">hot</span>
									</div>


									<div class="shop-product-rightside-icons">
										<span class="wishlist-icon">
											<a href="https://www.tokopedia.com/christianbretoni/christian-breton-paris-de-luxe-gold-serum-botol-30-ml" data-tippy="Add to wishlist" data-tippy-placement="left" data-tippy-inertia="true"
												data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
												data-tippy-theme="sharpborder"><i class="ion-android-favorite-outline"></i></a>
										</span>
										<span class="enlarge-icon">
											<a class="btn-zoom-popup" href="#" data-tippy="Click to enlarge" data-tippy-placement="left"
												data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50"
												data-tippy-arrow="true" data-tippy-theme="sharpborder"><i class="ion-android-expand"></i></a>
										</span>
									</div>

									<!--=======  End of shop product gallery icons  =======-->

									<div class="shop-product__big-image-gallery-slider">

										<!--=======  single image  =======-->

										<div class="single-image">
											<img src="<?php echo base_url('assets/images/konten/'.$p['gambar']);?>" class="img-fluid" alt="">
										</div>

										<!--=======  End of single image  =======-->


										<!--=======  End of single image  =======-->
									</div>

								</div>

								<!--=======  End of shop product big image gallery  =======-->
							</div>

							<div class="col-lg-6">
								<!--=======  shop product description  =======-->

								<div class="shop-product__description">
									<!--=======  shop product navigation  =======-->

									<div class="shop-product__navigation">
										<a href="shop-product-basic.html"><i class="ion-ios-arrow-thin-left"></i></a>
										<a href="shop-product-basic.html"><i class="ion-ios-arrow-thin-right"></i></a>
									</div>

									<!--=======  End of shop product navigation  =======-->

									<!--=======  shop product rating  =======-->

									<div class="shop-product__rating mb-15">
										<span class="product-rating">
											<i class="active ion-android-star"></i>
											<i class="active ion-android-star"></i>
											<i class="active ion-android-star"></i>
											<i class="active ion-android-star"></i>
											<i class="active ion-android-star"></i>
											
										</span>

										<span class="review-link ml-20">
											<!--<a href="#">(3 customer reviews)</a>-->
										</span>
									</div>

									<!--=======  End of shop product rating  =======-->

									<!--=======  shop product title  =======-->

									<div class="shop-product__title mb-15">
										<h2><?= strtoupper($p['judul_konten']); ?></h2>
									</div>

									<!--=======  End of shop product title  =======-->

									<!--=======  shop product price  =======

									<div class="shop-product__price mb-30">
										<span class="main-price discounted">$160.00</span>
										<span class="discounted-price">$180.00</span>
									</div>-->

									<!--=======  End of shop product price  =======-->

									<!--=======  shop product short description  =======-->

									<div class="shop-product__short-desc mb-50" class="text-justify" style="text-align: justify;">
										<p><strong><?= $p['judul_konten']?></strong><?= $p['deskripsi'] ?></p>
									</div>

									<!--=======  End of shop product buttons  =======-->

									<!--=======  other info table  =======-->

									<div class="quick-view-other-info pb-0">
										<!--=======  shop product short description  =======-->

									<div class="shop-product__short-desc mb-50" class="justify" style="text-align: justify;">
										<p><strong><?= $p['judul_konten']?></strong><?= $p['cara_penggunaan'] ?></p>
									

									<!--=======  End of shop product buttons  =======-->
										<table>
											<tr class="single-info">
												<td class="quickview-title">Share on: </td>
												<td class="quickview-value">
													<ul class="quickview-social-icons">
														<li><a href="#"><i class="fa fa-facebook"></i></a></li>
														<li><a href="https://www.instagram.com/chbreton_indonesia/"><i class="fa fa-instagram"></i></a></li>
														<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
														<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
													</ul>
												</td>
											</tr>
										</table>
									</div>

									<!--=======  End of other info table  =======-->
									</div>

									<!--=======  End of shop product description  =======-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endforeach;?>
<?php $this->load->view('n_detail/footer') ?>