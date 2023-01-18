<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from htmldemo.net/Pustok/Pustok/shop-grid-left-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Oct 2022 05:39:14 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pustok - Book Store HTML Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Use Minified Plugins Version For Fast Page Load -->
	<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url('webassets/')?>css/plugins.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url('webassets/')?>css/main.css" />
	<link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div class="site-wrapper" id="top">
	 <?php $this->load->view('home/layout/header')?>
		
		<section class="breadcrumb-section">
			<h2 class="sr-only">Site Breadcrumb</h2>
			<div class="container">
				<div class="breadcrumb-contents">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?=base_url('')?>">Home</a></li>
							<li class="breadcrumb-item active">Profile</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<main class="inner-page-sec-padding-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 order-lg-2">
						<div class="shop-toolbar with-sidebar mb--30" style="background:#94002d">
							<div class="row align-items-center">
								<div class="col-lg-2 col-md-2 col-sm-6">
									<!-- Product View Mode -->
									<div class="product-view-mode">
										<a href="#" class="sorting-btn active" data-target="grid"><i
												class="fas fa-th"></i></a>
										
										<a href="#" class="sorting-btn" data-target="list "><i
												class="fas fa-list"></i></a>
									</div>
								</div>
								
							
						
							</div>
						</div>
						<div class="shop-toolbar d-none">
							<div class="row align-items-center">
								<div class="col-lg-2 col-md-2 col-sm-6">
									<!-- Product View Mode -->
									<div class="product-view-mode">
										<a href="#" class="sorting-btn active" data-target="grid"><i
												class="fas fa-th"></i></a>
										
										<a href="#" class="sorting-btn" data-target="list "><i
												class="fas fa-list"></i></a>
									</div>
								</div>
							
							
							
							</div>
						</div>
						<div class="shop-product-wrap grid with-pagination row space-db--30 shop-border">
						
						</div>
						
					
						<!-- Modal -->
						<div class="modal fade modal-quick-view" id="quickModal" tabindex="-1" role="dialog"
						aria-labelledby="quickModal" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								<div class="product-details-modal">
									<div class="row">
										<div class="col-lg-5">
											<!-- Product Details Slider Big Image-->
											<div class="product-details-slider sb-slick-slider arrow-type-two" data-slick-setting='{
												"slidesToShow": 1,
												"arrows": false,
												"fade": true,
												"draggable": false,
												"swipe": false,
												"asNavFor": ".product-slider-nav"
												}'>
												<div class="single-slide">
													<img src="image/products/product-details-1.jpg" alt="">
												</div>
												<div class="single-slide">
													<img src="image/products/product-details-2.jpg" alt="">
												</div>
												<div class="single-slide">
													<img src="image/products/product-details-3.jpg" alt="">
												</div>
												<div class="single-slide">
													<img src="image/products/product-details-4.jpg" alt="">
												</div>
												<div class="single-slide">
													<img src="image/products/product-details-5.jpg" alt="">
												</div>
											</div>
											<!-- Product Details Slider Nav -->
											<div class="mt--30 product-slider-nav sb-slick-slider arrow-type-two"
												data-slick-setting='{
						"infinite":true,
						  "autoplay": true,
						  "autoplaySpeed": 8000,
						  "slidesToShow":2,
						  "arrows": true,
						  "prevArrow":{"buttonClass": "slick-prev","iconClass":"fa fa-chevron-left"},
						  "nextArrow":{"buttonClass": "slick-next","iconClass":"fa fa-chevron-right"},
						  "asNavFor": ".product-details-slider",
						  "focusOnSelect": true
						  }'>
												<div class="single-slide">
													<img src="image/products/product-details-1.jpg" alt="">
												</div>
												<div class="single-slide">
													<img src="image/products/product-details-2.jpg" alt="">
												</div>
												<div class="single-slide">
													<img src="image/products/product-details-3.jpg" alt="">
												</div>
												<div class="single-slide">
													<img src="image/products/product-details-4.jpg" alt="">
												</div>
												<div class="single-slide">
													<img src="image/products/product-details-5.jpg" alt="">
												</div>
											</div>
										</div>
										<div class="col-lg-7 mt--30 mt-lg--30">
											<div class="product-details-info pl-lg--30 ">
												<p class="tag-block">Tags: <a href="#">Movado</a>, <a href="#">Omega</a></p>
												<h3 class="product-title">Beats EP Wired On-Ear Headphone-Black</h3>
												<ul class="list-unstyled">
													<li>Ex Tax: <span class="list-value"> £60.24</span></li>
													<li>Brands: <a href="#" class="list-value font-weight-bold"> Canon</a></li>
													<li>Product Code: <span class="list-value"> model1</span></li>
													<li>Reward Points: <span class="list-value"> 200</span></li>
													<li>Availability: <span class="list-value"> In Stock</span></li>
												</ul>
												<div class="price-block">
													<span class="price-new">£73.79</span>
													<del class="price-old">£91.86</del>
												</div>
												<div class="rating-widget">
													<div class="rating-block">
														<span class="fas fa-star star_on"></span>
														<span class="fas fa-star star_on"></span>
														<span class="fas fa-star star_on"></span>
														<span class="fas fa-star star_on"></span>
														<span class="fas fa-star "></span>
													</div>
													<div class="review-widget">
														<a href="#">(1 Reviews)</a> <span>|</span>
														<a href="#">Write a review</a>
													</div>
												</div>
												<article class="product-details-article">
													<h4 class="sr-only">Product Summery</h4>
													<p>Long printed dress with thin adjustable straps. V-neckline and wiring under
														the Dust with ruffles
														at the bottom
														of the
														dress.</p>
												</article>
												<div class="add-to-cart-row">
													<div class="count-input-block">
														<span class="widget-label">Qty</span>
														<input type="number" class="form-control text-center" value="1">
													</div>
													<div class="add-cart-btn">
														<a href="#" class="btn btn-outlined--primary"><span
																class="plus-icon">+</span>Add to Cart</a>
													</div>
												</div>
												<div class="compare-wishlist-row">
													<a href="#" class="add-link"><i class="fas fa-heart"></i>Add to Wish List</a>
													<a href="#" class="add-link"><i class="fas fa-random"></i>Add to Compare</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<div class="widget-social-share">
										<span class="widget-label">Share:</span>
										<div class="modal-social-share">
											<a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
											<a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
											<a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
											<a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					</div>
					<div class="col-lg-3  mt--40 mt-lg--0">
						<div class="inner-page-sidebar">
							<!-- Accordion -->
						
							<!-- Price -->
							
							<!-- Size -->
						
							<!-- Promotion Block -->
							<div class="single-block">
								<a href="#" class="promo-image sidebar">
									<img src="<?= $userdata->profile_imge=='' ? 'https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg' : base_url('profile_image/'.$userdata->profile_imge)?>" alt="">
								</a>
								<div> <h3> <?=$userdata->name ?></h3>
								
								<ul class="sidebar-menu--shop">
									<li><a href="#"><strong>Hometown</strong> : <span><?=$userdata->home_town?></span></a></li>
									<li><a href="#"><strong>Occupation</strong> : <span><?=$userdata->occupation?></span></a></li>
									<li><a href="#"><strong>University</strong> : <span><?=$userdata->university?></span></a></li>
									<li><a href="#"><strong>Interests</strong> : <span><?=$userdata->interest?></span></a></li>
									<li><a href="<?=$userdata->linkedin !='' ?$userdata->linkedin:'#' ?> "><strong>Social</strong> : <i class="fa fa-linkedin text-info"></i></a></li>
									</ul>
									
									</div>
							</div>
								<div class="single-block">
								<h3 class="text-success">About Me</h3>
								
								<article>
								    <?= $userdata->aboutme?> </article>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
	<!--=================================
  Brands Slider
===================================== -->

	<!--=================================
    Footer Area
===================================== -->
	<footer class="site-footer">
		<div class="container">
			<div class="row justify-content-between  section-padding">
				<div class=" col-xl-3 col-lg-4 col-sm-6">
					<div class="single-footer pb--40">
						<div class="brand-footer footer-title">
							<img src="image/logo--footer.png" alt="">
						</div>
						<div class="footer-contact">
							<p><span class="label">Address:</span><span class="text">Example Street 98, HH2 BacHa, New
									York, USA</span></p>
							<p><span class="label">Phone:</span><span class="text">+18088 234 5678</span></p>
							<p><span class="label">Email:</span><span class="text">suport@hastech.com</span></p>
						</div>
					</div>
				</div>
				<div class=" col-xl-3 col-lg-2 col-sm-6">
					<div class="single-footer pb--40">
						<div class="footer-title">
							<h3>Information</h3>
						</div>
						<ul class="footer-list normal-list">
							<li><a href="#">Prices drop</a></li>
							<li><a href="#">New products</a></li>
							<li><a href="#">Best sales</a></li>
							<li><a href="#">Contact us</a></li>
							<li><a href="#">Sitemap</a></li>
						</ul>
					</div>
				</div>
				<div class=" col-xl-3 col-lg-2 col-sm-6">
					<div class="single-footer pb--40">
						<div class="footer-title">
							<h3>Extras</h3>
						</div>
						<ul class="footer-list normal-list">
							<li><a href="#">Delivery</a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Stores</a></li>
							<li><a href="#">Contact us</a></li>
							<li><a href="#">Sitemap</a></li>
						</ul>
					</div>
				</div>
				<div class=" col-xl-3 col-lg-4 col-sm-6">
					<div class="footer-title">
						<h3>Newsletter Subscribe</h3>
					</div>
					<div class="newsletter-form mb--30">
						<form action="https://htmldemo.net/Pustok/Pustok/php/mail.php">
							<input type="email" class="form-control" placeholder="Enter Your Email Address Here...">
							<button class="btn btn--primary w-100">Subscribe</button>
						</form>
					</div>
					<div class="social-block">
						<h3 class="title">STAY CONNECTED</h3>
						<ul class="social-list list-inline">
							<li class="single-social facebook"><a href="#"><i class="ion ion-social-facebook"></i></a>
							</li>
							<li class="single-social twitter"><a href="#"><i class="ion ion-social-twitter"></i></a></li>
							<li class="single-social google"><a href="#"><i
										class="ion ion-social-googleplus-outline"></i></a></li>
							<li class="single-social youtube"><a href="#"><i class="ion ion-social-youtube"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<p class="copyright-heading">Suspendisse in auctor augue. Cras fermentum est ac fermentum tempor. Etiam
					vel magna volutpat, posuere eros</p>
				<a href="#" class="payment-block">
					<img src="image/icon/payment.png" alt="">
				</a>
				<p class="copyright-text">Copyright © 2021 <a href="#" class="author">Pustok</a>. All Right Reserved.
					<br>
					Design By Pustok</p>
			</div>
		</div>
	</footer>
	<!-- Use Minified Plugins Version For Fast Page Load -->
	<script src="<?=base_url('webassets/')?>js/plugins.js"></script>
	<script src="<?=base_url('webassets/')?>js/ajax-mail.js"></script>
	<script src="<?=base_url('webassets/')?>js/custom.js"></script>
</body>


<!-- Mirrored from htmldemo.net/Pustok/Pustok/shop-grid-left-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Oct 2022 05:39:14 GMT -->
</html>
<script>
$( document ).ready(function() {
    var data='<?=$userdata->email?>';
     $.ajax({
                            type:'POST',
                            url:"<?=base_url('homecontroller/loaddata'); ?>",
                            beforeSend: function(){
                            $('body').css("opacity",0.5);
                                     $('.shop-product-wrap').html('<center><span class="loading"></span> <center>');
                             },
                            data: {data:data},
                            success: function(response){
                            if(data==1){
                            $('.np').addClass('active');
                            $('.pp').removeClass('active');
                            
                            
                            }else if(data==2){
                            $('.pp').addClass('active');
                            $('.np').removeClass('active');
                            }
                             $('body').css("opacity",1);
                                  $('.shop-product-wrap').html(response);
                              },
                              error: function(){
                                alert(data);
                              }
                        });
});
</script>
<style>

.loading {
  height: 0;
  width: 0;
  padding: 15px;
  border: 6px solid #ccc;
  border-right-color: #888;
  border-radius: 22px;
  -webkit-animation: rotate 1s infinite linear;
  /* left, top and position just for the demo! */
  position: absolute;
  left: 50%;
  top: 50%;
}

@-webkit-keyframes rotate {
  /* 100% keyframe for  clockwise. 
     use 0% instead for anticlockwise */
  100% {
    -webkit-transform: rotate(360deg);
  }
}

</style>