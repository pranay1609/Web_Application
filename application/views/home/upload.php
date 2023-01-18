
<!DOCTYPE html>
<html lang="zxx">
   <!-- Mirrored from htmldemo.net/pustok/pustok/<?=base_url()?> by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jun 2022 05:28:40 GMT -->
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Pustok - Book Store HTML Template</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Use Minified Plugins Version For Fast Page Load -->
      <link rel="stylesheet" type="text/css" media="screen" href="<?=base_url('webassets/')?>css/plugins.css" />
      <link rel="stylesheet" type="text/css" media="screen" href="<?=base_url('webassets/')?>css/main.css" />
      <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
   </head>
   <body>
      <div class="site-wrapper" id="top">
         <?php $this->load->view('home/layout/header')?>
                  </div>
               </div>
            </div>
         </div>
        
         

      <!--=================================
         Brands Slider
         ===================================== -->
         <section class="breadcrumb-section">
    <h2 class="sr-only">Site Breadcrumb</h2>
    <div class="container">
        <div class="breadcrumb-contents">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=base_url('')?>">Home</a></li>
                    <li class="breadcrumb-item active">Upload</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<!--=============================================
=            Login Register page content         =
=============================================-->
<main class="page-section inner-page-sec-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-12 mb--30 mb-lg--0">
                <!-- Login Form s-->
               <form action="<?=base_url('homecontroller/upload');echo isset($book_details->id) ? '/'.$book_details->id:'';?>" method="POST" enctype="multipart/form-data">
										<?=$this->session->flashdata('message')?>
										<input type="hidden" value="<?=$this->session->userdata('user_id')?>" name="created_by">
										
									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label"> 
										<h5>Department*</h5>
										</label>
										<div class="col-sm-9">
									
										

											<select class="form-control" name="topic_id">
												<option> Select Department</option>

												<?php foreach ($topic_list as $key => $value) {?>
													
														<option value="<?=$value->id?>" <?php if(isset($book_details->topic_id)){ echo $book_details->topic_id==$value->id ? 'selected':"";}?>> <?=$value->title?></option>

												<?php }
												?>
												
											</select>
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">
										    <h5>University*</h5>
										    </label>
										<div class="col-sm-9">
									
											<input type="text" class="form-control" required  value="<?php echo isset($book_details->university)? $book_details->university:'' ?>" name="university" id="inputEnterYourName" placeholder=" University">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">
										    <h5>Title*</h5>
										    </label>
										<div class="col-sm-9">
										
											<input type="text" class="form-control" required  value="<?php echo isset($book_details->title)? $book_details->title:'' ?>" name="title" id="inputEnterYourName" placeholder="Enter Title">
										</div>
									</div>
									

									<div class="row mb-3">
										<label for="inputPhoneNo2" class="col-sm-3 col-form-label">
										    <h5>Graduation*</h5>
										    </label>
										<div class="col-sm-9">
										
											<input type="text" name="graduation" value="<?php echo isset($book_details->graduation)? $book_details->graduation:'' ?>" required class="form-control" id="inputPhoneNo2" placeholder="Graduation">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputPhoneNo2" class="col-sm-3 col-form-label">
										    <h5>Professor*</h5>
										    </label>
										<div class="col-sm-9">
										
                                <span class="text-danger"></span>
                            
											<input type="text"required name="professor"value="<?php echo isset($book_details->professor)? $book_details->professor:'' ?>" class="form-control" id="inputPhoneNo2" placeholder="Professor">
										</div>
									</div>
										<div class="row mb-3">
										<label for="inputPhoneNo2" class="col-sm-3 col-form-label">
										    <h5>Professor Email*</h5>
										    </label>
										<div class="col-sm-9">
										
                                <span class="text-danger"></span>
                            
											<input type="email"required name="professor_email" value="<?php echo isset($book_details->professor_email)? $book_details->professor_email:'' ?>" class="form-control" id="inputPhoneNo2" placeholder="Professor Email">
										</div>
									</div>
									
									
									
									<!--<div class="row mb-3">-->
									<!--	<label for="inputPhoneNo2" class="col-sm-3 col-form-label">Professor Number</label>-->
									<!--	<div class="col-sm-9">-->
										
         <!--                       <span class="text-danger"></span>-->
                            
									<!--		<input type="text" value="<?php echo isset($book_details)? $book_details->professorphone_number:'' ?>" required name="professorphone_number" class="form-control" id="inputPhoneNo2" placeholder="Professor Number" >-->
									<!--	</div>-->
									</div>

									<div class="row mb-3">
										<label for="inputPhoneNo2" class="col-sm-3 col-form-label">
										    <h5>Professor Url</h5>
										    </label>
										<div class="col-sm-9">
										
                                <span class="text-danger"></span>
                            
											<input type="text" value="<?php echo isset($book_details->professor_url)? $book_details->professor_url:'' ?>" required  name="professor_url" class="form-control" id="inputPhoneNo2" placeholder="Professor Url" >
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputPhoneNo2" class="col-sm-3 col-form-label">
										    <h5>PDF Upload*</h5>
										    </label>
										<div class="col-sm-9">
										
                                <span class="text-danger"></span>
                            
											<input type="file" name="upload_pdf"  class="form-control" id="inputPhoneNo2" placeholder="DF Upload" >
											<span class="text-danger"> <?=$this->session->flashdata('errorp')?></span>
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputPhoneNo2" class="col-sm-3 col-form-label">
										    <h5>Thumb Image*</h5> 
										    <!--<span class="text-danger"> * required size 900px X 1200px</span>-->
										    </label>
										<div class="col-sm-9">
										
                                <span class="text-danger"> <?=$this->session->flashdata('errort')?></span>
                            
											<input type="file" name="front_image" class="form-control" id="inputPhoneNo2" placeholder="Thumb Image" >
										</div>
									</div>






									<div class="row mb-3">
										<label for="inputPhoneNo2" class="col-sm-3 col-form-label">
										    <h5>Number  of Page*</h5>
										    </label>
										<div class="col-sm-9">
									
                                <!--<span class="text-danger">df</span>-->
                            
											<input type="number"   onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" value="<?php echo isset($book_details->page_number)? $book_details->page_number:'' ?>" required name="page_number" class="form-control" id="inputPhoneNo2" placeholder="Number  of Page">
										</div>
									</div>
									
									
									<div class="row mb-3">
										<label for="inputAddress4" class="col-sm-3 col-form-label">  
										<h5>Description*</h5> 
										<span class="text-danger">Minimum 100 charcter</span>
										</label>
										<div class="col-sm-9">
										
											<textarea required  maxlength="1000" minlength="100" class="form-control" name="Description" id="Description" rows="8" placeholder="Description"> <?php echo isset($book_details->Description)? $book_details->Description:'' ?></textarea>
										</div>
									</div>
									
									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<button type="submit" class="btn btn-info px-5">Upload</button>
										</div>
									</div>
									</form>
            </div>
         
        </div>
    </div>
</main>
</div>
<!--=================================
Brands Slider
===================================== -->
<!--<section class="section-margin">-->
<!--<h2 class="sr-only">Brand Slider</h2>-->
<!--<div class="container">-->
<!--    <div class="brand-slider sb-slick-slider border-top border-bottom"-->
<!--        data-slick-setting='{-->
<!--                                    "autoplay": true,-->
<!--                                    "autoplaySpeed": 8000,-->
<!--                                    "slidesToShow": 6-->
<!--                                    }'-->
<!--        data-slick-responsive='[-->
<!--        {"breakpoint":992, "settings": {"slidesToShow": 4} },-->
<!--        {"breakpoint":768, "settings": {"slidesToShow": 3} },-->
<!--        {"breakpoint":575, "settings": {"slidesToShow": 3} },-->
<!--        {"breakpoint":480, "settings": {"slidesToShow": 2} },-->
<!--        {"breakpoint":320, "settings": {"slidesToShow": 1} }-->
<!--    ]'>-->
<!--        <div class="single-slide">-->
<!--            <img src="image/others/brand-1.jpg" alt="">-->
<!--        </div>-->
<!--        <div class="single-slide">-->
<!--            <img src="image/others/brand-2.jpg" alt="">-->
<!--        </div>-->
<!--        <div class="single-slide">-->
<!--            <img src="image/others/brand-3.jpg" alt="">-->
<!--        </div>-->
<!--        <div class="single-slide">-->
<!--            <img src="image/others/brand-4.jpg" alt="">-->
<!--        </div>-->
<!--        <div class="single-slide">-->
<!--            <img src="image/others/brand-5.jpg" alt="">-->
<!--        </div>-->
<!--        <div class="single-slide">-->
<!--            <img src="image/others/brand-6.jpg" alt="">-->
<!--        </div>-->
<!--        <div class="single-slide">-->
<!--            <img src="image/others/brand-1.jpg" alt="">-->
<!--        </div>-->
<!--        <div class="single-slide">-->
<!--            <img src="image/others/brand-2.jpg" alt="">-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--</section>-->
               <!--=================================
         Footer Area
         ===================================== -->
      <footer class="site-footer">
         <div class="container">
            <div class="row justify-content-between  section-padding">
               <div class=" col-xl-3 col-lg-4 col-sm-6">
                  <div class="single-footer pb--40">
                     <div class="brand-footer footer-title">
                        <!-- <img src="image/logo--footer.png" alt=""> -->
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
               <!--<div class=" col-xl-3 col-lg-2 col-sm-6">-->
               <!--   <div class="single-footer pb--40">-->
               <!--      <div class="footer-title">-->
               <!--         <h3>Information</h3>-->
               <!--      </div>-->
               <!--      <ul class="footer-list normal-list">-->
               <!--         <li><a href="#">Prices drop</a></li>-->
               <!--         <li><a href="#">New products</a></li>-->
               <!--         <li><a href="#">Best sales</a></li>-->
               <!--         <li><a href="#">Contact us</a></li>-->
               <!--         <li><a href="#">Sitemap</a></li>-->
               <!--      </ul>-->
               <!--   </div>-->
               <!--</div>-->
               <!--<div class=" col-xl-3 col-lg-2 col-sm-6">-->
               <!--   <div class="single-footer pb--40">-->
               <!--      <div class="footer-title">-->
               <!--         <h3>Extras</h3>-->
               <!--      </div>-->
               <!--      <ul class="footer-list normal-list">-->
               <!--         <li><a href="#">Delivery</a></li>-->
               <!--         <li><a href="#">About Us</a></li>-->
               <!--         <li><a href="#">Stores</a></li>-->
               <!--         <li><a href="#">Contact us</a></li>-->
               <!--         <li><a href="#">Sitemap</a></li>-->
               <!--      </ul>-->
               <!--   </div>-->
               <!--</div>-->
               <div class=" col-xl-3 col-lg-4 col-sm-6">
                  <div class="footer-title">
                     <h3> Subscribe</h3>
                  </div>
                  <div class="newsletter-form mb--30">
                     <form action="https://htmldemo.net/pustok/pustok/php/mail.php">
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
               <img src="image/icon/payment.png" alt="">
               </a>
               <p class="copyright-text">Copyright © 2021 <a href="#" class="author">Pustok</a>. All Right Reserved.
                  <br>
                  Design By Pustok
               </p>
            </div>
         </div>
      </footer>
      <!-- Use Minified Plugins Version For Fast Page Load -->
      <script src="<?=base_url('webassets/')?>js/plugins.js"></script>
      <script src="<?=base_url('webassets/')?>js/ajax-mail.js"></script>
      <script src="<?=base_url('webassets/')?>js/custom.js"></script>
      <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
 <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></scrip
   </body>
   
   <script type="text/javascript">
   alert(" hi sanjay");
   
    CKEDITOR.replace('Description');
</script>
<script>
     $(function () {
      $('input[type=text]').keydown(function (e) {
          if (e.shiftKey || e.ctrlKey || e.altKey) {
              e.preventDefault();
          } else {
              var key = e.keyCode;
              if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                  e.preventDefault();
              }
          }
      });
  });
</script>
   
</html>
