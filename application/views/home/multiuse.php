
<!DOCTYPE html>
<html lang="zxx">
  
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>GraduateResearchProject</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Use Minified Plugins Version For Fast Page Load -->
      <link rel="stylesheet" type="text/css" media="screen" href="<?=base_url('webassets/')?>css/plugins.css" />
      <link rel="stylesheet" type="text/css" media="screen" href="<?=base_url('webassets/')?>css/main.css" />
      <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
      <link rel="stylesheet" href="<?=base_url('webassets/')?>css/jquery.toast.css">
   </head>
   <body>
      <div class="site-wrapper" id="top">
         <?php $this->load->view('home/layout/header')?>
         
         
         
    

      <!--=================================
         Brands Slider
         ===================================== -->
          <!--=================================
            Hero Area
            ===================================== -->
            <!--<section class="hero-area hero-slider-1">-->
            <!--    <div class="sb-slick-slider" data-slick-setting='{-->
            <!--       "autoplay": true,-->
            <!--       "fade": true,-->
            <!--       "autoplaySpeed": 3000,-->
            <!--       "speed": 3000,-->
            <!--       "slidesToShow": 1,-->
            <!--       "dots":true-->
            <!--       }'>-->
            <!--       <div class="single-slide bg-shade-whisper  ">-->
            <!--          <div class="container">-->
            <!--             <div class="home-content text-center text-sm-left position-relative">-->
            <!--                <div class="hero-partial-image image-right">-->
            <!--                   <img src=" <?=base_url('webassets/image/')?>bg-images/home-slider-2-ai.png" alt="">-->
            <!--                </div>-->
            <!--                <div class="row g-0">-->
            <!--                   <div class="col-xl-6 col-md-6 col-sm-7">-->
            <!--                      <div class="home-content-inner content-left-side text-start">-->
            <!--                         <h1>H.G. Wells<br>-->
            <!--                            De Vengeance-->
            <!--                         </h1>-->
            <!--                         <h2>Cover Up Front Of Books and Leave Summary</h2>-->
            <!--                         <a href="shop-grid.html" class="btn btn-outlined--primary">-->
            <!--                         Learn More!-->
            <!--                         </a>-->
            <!--                      </div>-->
            <!--                   </div>-->
            <!--                </div>-->
            <!--             </div>-->
            <!--          </div>-->
            <!--       </div>-->
            <!--       <div class="single-slide bg-ghost-white">-->
            <!--          <div class="container">-->
            <!--             <div class="home-content text-center text-sm-left position-relative">-->
            <!--                <div class="hero-partial-image image-left">-->
            <!--                   <img src=" <?=base_url('webassets/image/')?>bg-images/home-slider-1-ai.png" alt="">-->
            <!--                </div>-->
            <!--                <div class="row align-items-center justify-content-start justify-content-md-end">-->
            <!--                   <div class="col-lg-6 col-xl-7 col-md-6 col-sm-7">-->
            <!--                      <div class="home-content-inner content-right-side text-start">-->
            <!--                         <h1>J.D. Kurtness <br>-->
            <!--                            De Vengeance-->
            <!--                         </h1>-->
            <!--                         <h2>Cover Up Front Of Books and Leave Summary</h2>-->
            <!--                         <a href="shop-grid.html" class="btn btn-outlined--primary">-->
            <!--                         Learn More-->
            <!--                         </a>-->
            <!--                      </div>-->
            <!--                   </div>-->
            <!--                </div>-->
            <!--             </div>-->
            <!--          </div>-->
            <!--       </div>-->
            <!--    </div>-->
            <!-- </section>-->
             <!--=================================
                Home Features Section
                ===================================== -->
           

             <!--=================================
                Home Slider Tab
                ===================================== -->

             <!--=================================
                Deal of the day
                ===================================== -->
                
                
         
             <main class="inner-page-sec-padding-bottom" style="margin-top:20px">
			<div class="container">
				<div class="shop-toolbar mb--30 shadow " style="background:#94002d">
					<div class="row align-items-center">
						<div class="col-lg-2 col-md-2 col-sm-4">
							<!-- Product View Mode -->
							<div class="product-view-mode">
								<a href="#" class="sorting-btn " data-target="grid"><i class="fas fa-th"></i></a>
								<!--<a href="#" class="sorting-btn" data-target="grid-four">-->
								<!--	<span class="grid-four-icon">-->
								<!--		<i class="fas fa-grip-vertical"></i><i class="fas fa-grip-vertical"></i>-->
								<!--	</span>-->
								<!--</a>-->
								<a href="#" class="sorting-btn active" data-target="list "><i
										class="fas fa-list"></i></a>
							</div>
						</div>
						</div>
						<div class="row align-items-center"> 
						<div class="col-xl-10 col-md-10 col-sm-10  mt--10 mt-sm--0 ">
						    <nav sttle="color:white" class="nav">
						        <li><a class="active "> Result for </a>  </li>
						        <li> <strong class="text-white"> |</strong></li>
						        
						        <li><a class=" text-center"> <?=$result?> </a>  </li>
						        
						        
						    </nav>
							
						</div>
						</div>
				</div>
				<div class="shop-toolbar d-none">
					<div class="row align-items-center">
						<div class="col-lg-2 col-md-2 col-sm-6">
							<!-- Product View Mode -->
							<div class="product-view-mode">
								<a href="#" class="sorting-btn active" data-target="grid"><i class="fas fa-th"></i></a>
								<!--<a href="#" class="sorting-btn" data-target="grid-four">-->
								<!--	<span class="grid-four-icon">-->
								<!--		<i class="fas fa-grip-vertical"></i><i class="fas fa-grip-vertical"></i>-->
								<!--	</span>-->
								<!--</a>-->
								<a href="#" class="sorting-btn" data-target="list "><i class="fas fa-list"></i></a>
							</div>
						</div>
						
						
					
					</div>
				</div>
				<div class="shop-product-wrap list with-pagination row space-db--30 shop-border">
				    <?php if(empty($grid_product)) {?>
				    	<div class="col-lg-4 col-sm-6"> No Result found ..</div>
				    <?php  } ?>
				    <?php  foreach($grid_product as $grid_list){ ?>
					<div class="col-lg-4 col-sm-6">
						<div class="product-card card-style-list">
							<div class="product-grid-content shadow">
								<!--<div class="product-header">-->
								<!--	<img src="<?=base_url('upload/'.$grid_list->front_image)?>" alt="">-->
								<!--	<h3><a href=""><?=$grid_list->title?> </a></h3>-->
								<!--</div>-->
								<!--<div class="product-card--body">-->
								<!--    <div><article> <?=substr($grid_list->Description,0,90).'...'?></article></div>	-->
								<!--    <div style="list-style:none" class="cuslink">-->
								        
								<!--	        <li class="mb--30"> <a> <li> <i class="fas fa-share"></i></li></a></li>-->
								<!--	         <li> <a href="<?=base_url('homecontroller/addbookmarkandlikes/'.$grid_list->id.'/2')?>" class="<?=test_method($grid_list->id,2) ? 'text-danger':''?>"> <li> <i class="fas fa-bookmark"></i></li></a></li>-->
								<!--	          <li> <a href="<?=base_url('homecontroller/addbookmarkandlikes/'.$grid_list->id.'/1')?>" class="<?=test_method($grid_list->id,1) ? 'text-danger':''?>"> <li> <i class="fas fa-heart"></i></li></a></li>-->
									          
								<!--	    </div>-->
								<!--		</div>-->
								<!--		<div class="border mb--30">Prranay Reddy</div>-->
								<!--		<div class="mb--30"></div>-->
								<div class="col">
						<div class="card">
						<a href="<?=base_url('book-details/'.$grid_list->id)?>" tabindex="0"> 	<img  src="<?=base_url('upload/'.$grid_list->front_image)?>" class="card-img-top" alt="..."></a>
							<div class="card-body">
								<h3 class="card-title font-weight-boldstyle="color:#94002d;  font-weight:bold"><?=$grid_list->title?></h3>
								<p class="card-text"><?= strlen($grid_list->Description) > 100 ? substr($grid_list->Description,0,100).'...' :$grid_list->Description?></p>
							</div>
							<ul class="list-group list-group-flush">
							<!--<li class="list-group-item"> Authors:josh </li>-->
								<li class="list-group-item">Publisher: <?=$grid_list->user_name?></li>
								<li class="list-group-item"> 
								<div class="shareicon"> 
							<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A//graduateresearchproject.com/book-details/<?=$grid_list->id?>" target="_blank"><i class="fas fa-share"></i></a>
							
							<a href="<?=base_url('homecontroller/addbookmarkandlikes/'.$grid_list->id.'/1')?>" class="<?=test_method($grid_list->id,1) ? 'text-danger':''?> "> 
								<i class="fas fa-heart"></i> </a>
								<a href="<?=base_url('homecontroller/addbookmarkandlikes/'.$grid_list->id.'/2')?>" class="<?=test_method($grid_list->id,2) ? 'text-danger':''?>">  <i class="fas fa-bookmark"></i> </a>
								
								</div>
								
							
								
								</li>
							</ul>
						
						</div>
					</div>
							</div>
							<div class="product-list-content">
								<div class="card-image">
								<a href="<?=base_url('book-details/'.$grid_list->id)?>" tabindex="0"> 	<img src="<?=base_url('upload/'.$grid_list->front_image)?>" alt=""> </a>
								</div>
								<div class="product-card--body">
									<div class="product-header">
										
										<h3><a href="<?=base_url('book-details/'.$grid_list->id)?>" tabindex="0">  <?=$grid_list->title?></a></h3>
									</div>
									<article>
										<h2 class="sr-only">Card List Article</h2>
									<?= strlen($grid_list->Description) > 100 ? substr($grid_list->Description,0,100).'...' :$grid_list->Description?>
									</article>
									<!--<div class="price-block">-->
									<!--	<span class="price">£51.20</span>-->
									<!--	<del class="price-old">£51.20</del>-->
									<!--	<span class="price-discount">20%</span>-->
									<!--</div>-->
									<div class="rating-block">
										<!--<span class="fas fa-star star_on"></span>-->
										<!--<span class="fas fa-star star_on"></span>-->
										<!--<span class="fas fa-star star_on"></span>-->
										<!--<span class="fas fa-star star_on"></span>-->
										<!--<span class="fas fa-star "></span>-->
										<span>Publisher :<?=$grid_list->user_name?> </span>
									</div>
									<div class="btn-block">
										<a href="<?=base_url('upload/'.$grid_list->upload_pdf)?>" target="_blank" class="btn btn-outlined">Read More</a>
										<a href="<?=base_url('upload/'.$grid_list->upload_pdf)?>" download  class="btn btn-outlined">Download</a>
										<a href="<?=base_url('homecontroller/addbookmarkandlikes/'.$grid_list->id.'/1')?>" class="card-link <?=test_method($grid_list->id,1) ? 'text-danger':''?>"><i class="fas fa-heart"></i> Like</a>
										<a href="<?=base_url('homecontroller/addbookmarkandlikes/'.$grid_list->id.'/2')?>" class="card-link <?=test_method($grid_list->id,2) ? 'text-danger':''?>"><i class="fas fa-bookmark"></i> Save</a>
										<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A//graduateresearchproject.com/book-details/<?=$grid_list->id?>"target="_blank" class="card-link"><i class="fas fa-share"></i> Share</a>
									</div>
								</div>
							</div>
						</div>
					</div><?php  } ?>
					
				</div>
				<!-- Pagination Block -->
			
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
				  "slidesToShow": 4,
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
		</main>

              <!--=================================
                Promotion Section One
                ===================================== -->
                <!--<section class="section-margin">-->
                <!--    <h2 class="sr-only">Promotion Section</h2>-->
                <!--    <div class="container">-->
                <!--       <div class="row space-db--30">-->
                <!--          <div class="col-lg-6 col-md-6 mb--30">-->
                <!--             <a href="#" class="promo-image promo-overlay">-->
                <!--             <img src=" <?=base_url('webassets/image/')?>bg-images/promo-banner-with-text.jpg" alt="">-->
                <!--             </a>-->
                <!--          </div>-->
                <!--          <div class="col-lg-6 col-md-6 mb--30">-->
                <!--             <a href="#" class="promo-image promo-overlay">-->
                <!--             <img src=" <?=base_url('webassets/image/')?>bg-images/promo-banner-with-text-2.jpg" alt="">-->
                <!--             </a>-->
                <!--          </div>-->
                <!--       </div>-->
                <!--    </div>-->
                <!-- </section>-->
             <!--=================================
                Best Seller Product
                ===================================== -->

             <!--=================================
                CHILDREN’S BOOKS
                ===================================== -->
          
            
             <!--=================================
                Home Blog
                ===================================== -->

             <!--=================================
                Footer
                ===================================== -->
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
                                     <img src=" <?=base_url('webassets/image/')?>products/product-details-1.jpg" alt="">
                                  </div>
                                  <div class="single-slide">
                                     <img src=" <?=base_url('webassets/image/')?>products/product-details-2.jpg" alt="">
                                  </div>
                                  <div class="single-slide">
                                     <img src=" <?=base_url('webassets/image/')?>products/product-details-3.jpg" alt="">
                                  </div>
                                  <div class="single-slide">
                                     <img src=" <?=base_url('webassets/image/')?>products/product-details-4.jpg" alt="">
                                  </div>
                                  <div class="single-slide">
                                     <img src=" <?=base_url('webassets/image/')?>products/product-details-5.jpg" alt="">
                                  </div>
                               </div>
                               <!-- Product Details Slider Nav -->
                               <div class="mt--30 product-slider-nav sb-slick-slider arrow-type-two"
                                  data-slick-setting='{
                                  "infinite":true,
                                  "autoplay": true,
                                  "autoplaySpeed": 8000,
                                  "slidesToShow": 4,
                                  "arrows": true,
                                  "prevArrow":{"buttonClass": "slick-prev","iconClass":"fa fa-chevron-left"},
                                  "nextArrow":{"buttonClass": "slick-next","iconClass":"fa fa-chevron-right"},
                                  "asNavFor": ".product-details-slider",
                                  "focusOnSelect": true
                                  }'>
                                  <div class="single-slide">
                                     <img src=" <?=base_url('webassets/image/')?>products/product-details-1.jpg" alt="">
                                  </div>
                                  <div class="single-slide">
                                     <img src=" <?=base_url('webassets/image/')?>products/product-details-2.jpg" alt="">
                                  </div>
                                  <div class="single-slide">
                                     <img src=" <?=base_url('webassets/image/')?>products/product-details-3.jpg" alt="">
                                  </div>
                                  <div class="single-slide">
                                     <img src=" <?=base_url('webassets/image/')?>products/product-details-4.jpg" alt="">
                                  </div>
                                  <div class="single-slide">
                                     <img src=" <?=base_url('webassets/image/')?>products/product-details-5.jpg" alt="">
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
                                        dress.
                                     </p>
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
               <!--=================================
         Footer Area
         ===================================== -->
      <footer class="site-footer">
         <div class="container">
            <div class="row justify-content-between  section-padding">
               <div class=" col-xl-3 col-lg-4 col-sm-6">
                  <div class="single-footer pb--40">
                     <div class="brand-footer footer-title">
                        <!-- <img src=" <?=base_url('webassets/image/')?>logo--footer.png" alt=""> -->
                        <strong style="color: #94002d;font-size: 30px;">BOOK </strong><strong style="color: #f4c480;font-size: 30px;">LAB</strong>
                     </div>
                     <div class="footer-contact">
                        <p><span class="label">Address:</span><span class="text">Example Street 98, HH2 BacHa, New
                           York,
                           USA</span>
                        </p>
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
                     <form action="https://htmldemo.net/Booklibrary/Booklibrary/php/mail.php">
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
                  vel
                  magna volutpat, posuere eros
               </p>
               <a href="#" class="payment-block">
               <img src=" <?=base_url('webassets/image/')?>icon/payment.png" alt="">
               </a>
               <p class="copyright-text">Copyright © 2021 <a href="#" class="author">Booklibrary</a>. All Right Reserved.
                  <br>
                  Design By Booklibrary
               </p>
            </div>
         </div>
      </footer>
      <!-- Use Minified Plugins Version For Fast Page Load -->
      <script src="<?=base_url('webassets/')?>js/plugins.js"></script>
      <script src="<?=base_url('webassets/')?>js/ajax-mail.js"></script>
      <script src="<?=base_url('webassets/')?>js/custom.js"></script>
      <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
      <script src="<?=base_url('webassets/')?>assetsss/js/pdfviewer.js"> </script>
      <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v15.0" nonce="f9IcpPNx"></script>
      <script type="text/javascript" src="<?=base_url('webassets/')?>js/jquery.toast.js"></script>
   </body>
   <!-- Mirrored from htmldemo.net/Booklibrary/Booklibrary/<?=base_url('')?> by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jun 2022 05:29:17 GMT -->
</html>
<style>
    .cuslink li{
        float: right;
        
    }
    .nav li{
        float: right;
        margin-left:5px;
        padding-left:10px;
        
        
        
    }
    @media screen and (max-width: 600px) {
  .nav li{
   margin-left:auto;
    
  }
}
    .nav li a{
        color:white!importantimportant;
        padding-left:15;
        font-weight:bold;
        color:white;
    }
    .nav li .active{
        color:#ee707c;
    }
    .cuslink li a {
         margin-right: 5px;
         font-size:14px;
    
        padding-bottom:15px;
        
        padding-left:3px;
        font-weight:bold;
        color:grey;
        
    }
    .shareicon a {
        margin-left:3px!important;
        padding:3px!important;
        text-align:end!important;
        font-size:18px!important;
    }
</style>
<?php if($this->session->flashdata('toastnotification')!='') {?>
<script>
$.toast({
text: '<?=$this->session->flashdata('toastnotification')?>',
position: 'top-right',
stack: false
}) 
                </script>
<?php } ?>

