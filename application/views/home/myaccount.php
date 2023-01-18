<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from htmldemo.net/pustok/pustok/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jun 2022 05:29:45 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MY Account</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Use Minified Plugins Version For Fast Page Load -->
	<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url('webassets/css/')?>plugins.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url('webassets/css/')?>main.css" />
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
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active">My Account</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<div class="page-section inner-page-sec-padding">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="row">
							<!-- My Account Tab Menu Start -->
							<div class="col-lg-3 col-12">
								<div class="myaccount-tab-menu nav" role="tablist">
									<a href="#dashboad" class="<?=$this->session->flashdata('is_active')==''? 'active' :''?>" data-bs-toggle="tab"><i
											class="fas fa-tachometer-alt"></i>
										Dashboard</a>
									<a href="#orders" data-bs-toggle="tab" class="<?=$this->session->flashdata('is_active')=='bookmark'? 'active' :''?> "><i class="fa fa-bookmark"></i> My Bookmark </a>
									<a href="#download" data-bs-toggle="tab" class="<?=$this->session->flashdata('is_active')=='upload'? 'active' :''?>"><i class="fas fa-upload"></i> My Uploads</a>
									<!--<a href="#payment-method" data-bs-toggle="tab"><i class="fa fa-credit-card"></i>-->
									<!--	Payment-->
									<!--	Method</a>-->
									<!--<a href="#address-edit" data-bs-toggle="tab"><i class="fa fa-map-marker"></i>-->
									<!--	address</a>-->
									<a href="#account-info" data-bs-toggle="tab"  class="<?=$this->session->flashdata('is_active')=='accountdetails'? 'active' :''?>"><i class="fa fa-user"></i> Edit
										Details</a>
									<a href="<?=base_url('homecontroller/logout')?>"><i class="fas fa-sign-out-alt"></i> Logout</a>
								</div>
							</div>
							<!-- My Account Tab Menu End -->
							<!-- My Account Tab Content Start -->
							<div class="col-lg-9 col-12 mt--30 mt-lg--0">
								<div class="tab-content shadow" id="myaccountContent">
									<!-- Single Tab Content Start -->
									<div class="tab-pane fade  <?=$this->session->flashdata('is_active')==''? 'show active' :''?>" id="dashboad" role="tabpanel">
										<div class="myaccount-content">
										
											<div class="row">
											    <div class="col-lg-6 col-12"><div class="dot"> <center>  <img src="<?=$userdata->profile_imge!=''? base_url('profile_image/'.$userdata->profile_imge):'https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg'?>" height="100" width="100"> </center> </div>  </div>
											    <div class="col-lg-6 col-12">	<h3><?=$userdata->name?>  </p></h3>
											    </div>
											    
											</div>
											<div class="welcome mb-20">
												<p>Hello, <strong><?=$this->session->userdata('user_name')?></strong> (If Not <strong><?=$this->session->userdata('user_name')?>
														!</strong><a href="<?=base_url('homecontroller/logout')?>" class="logout">
														Logout</a>)</p>
											</div>
										<article><?=$userdata->aboutme?></article>
												
												<div class="row">
												    <ul class="sidebar-menu--shop">
									<li><a href="#"><strong>Hometown</strong> : <span><?=$userdata->home_town?></span></a></li>
									<li><a href="#"><strong>Occupation</strong> : <span><?=$userdata->occupation?></span></a></li>
									<li><a href="#"><strong>University</strong> : <span><?=$userdata->university?></span></a></li>
									<li><a href="#"><strong>Interests</strong> : <span><?=$userdata->interest?></span></a></li>
									<li><a href="#"><strong>Email</strong> : <span><?=$userdata->email?></span></a></li>
									<li>Social : <a href="<?=$userdata->linkedin?>"><i class="fa fa-linkedin text-info"></i></a></li>
									</ul>
												</div>
										</div>
									</div>
									<!-- Single Tab Content End -->
									<!-- Single Tab Content Start -->
									<div class="tab-pane fade  <?=$this->session->flashdata('is_active')=='bookmark'? 'show active' :''?>" id="orders" role="tabpanel">
										<div class="myaccount-content">
											<h3>My Bookmarks </h3>
											<div class="myaccount-table table-responsive text-center">
													<table class="table table-bordered">
													<thead class="thead-light">
														<tr>
															<th>Title</th>
															<th>Date</th>
															<th>View Details</th>
															<th>Download  </th>
															<th>Remove  </th>
														</tr>
													</thead>
													<tbody>
													    <?php foreach($my_bookmarkss as $key=>$list ){ ?>
														<tr>
															<td><?=$list->title?></td>
															<td><?=$list->created_at?></td>
															<td>  <a href="<?=base_url('book-details/'.$list->id)?>" class="  btn-outlined--dark"> <i class="fa fa-eye  p-1" aria-hidden="true"></i> </a>   </td>
															<td><a href="<?=base_url('upload/'.$list->upload_pdf)?>" download class="btn"><i class="fa fa-download p-1" aria-hidden="true"></i></a></td>
															<td>
															    <div class="hover-btns bg-light shadow"> 
															    
															     <a   class="p-2 removelikenadbookmarks "data-url="<?=base_url('homecontroller/removelikenadbookmarks/'.$list->id.'/2')?>"><i class="fa fa-trash  p-1" aria-hidden="true"></i>
															     </div>
															     </td>
														</tr>
														<?php }  ?>
														
													
														
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<!-- Single Tab Content End -->
									<!-- Single Tab Content Start -->
									<div class="tab-pane fade  <?=$this->session->flashdata('is_active')=='upload'? 'show active' :''?>" id="download" role="tabpanel">
										<div class="myaccount-content">
											<h3>Uploads</h3>
											<div class="myaccount-table table-responsive text-center">
												<table class="table table-bordered">
													<thead class="thead-light">
														<tr>
															<th>Title</th>
															<th>Date</th>
															<th>View Details</th>
															<th>Download  </th>
															<th>Delete / Edit </th>
															
														</tr>
													</thead>
													<tbody>
													    <?php foreach($my_books as $key=>$list ){ ?>
														<tr>
															<td><?=$list->title?></td>
															<td><?=$list->created_at?></td>
															<td>  <a href="<?=base_url('book-details/'.$list->id)?>"> <i class="fa fa-eye fa-2x p-1" aria-hidden="true"></i> </a>   </td>
															<td><a  href="<?=base_url('upload/'.$list->upload_pdf)?>" data-url= download class="btn removelikenadbookmarks"><i class="fa fa-download fa-2x p-1" aria-hidden="true"></i></a></td>
															
															<td> <div class="hover-btns bg-light shadow"> 
															<a class="p-2 removelikenadbookmarks " data-url="<?=base_url('homecontroller/removebook/'.$list->id)?>" ><i class="fa fa-trash  p-1" aria-hidden="true"></i> </a>
															
															  &nbsp;
															<a class="py-2" href="<?=base_url('book-upload/'.$list->id)?>"> <i class="fa fa-edit  p-1" aria-hidden="true"></i></a> 
															
															</div>
														
															
															</td>
														</tr>
														<?php }  ?>
														
													
														
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<!-- Single Tab Content End -->
									<!-- Single Tab Content Start -->
									<div class="tab-pane fade" id="payment-method" role="tabpanel">
										<div class="myaccount-content">
											<h3>Payment Method</h3>
											<p class="saved-message">You Can't Saved Your Payment Method yet.</p>
										</div>
									</div>
									<!-- Single Tab Content End -->
									<!-- Single Tab Content Start -->
									<div class="tab-pane fade" id="address-edit" role="tabpanel">
										<div class="myaccount-content">
											<h3>Billing Address</h3>
											<address>
												<p><strong><?=$this->session->userdata('user_name')?></strong></p>
												<p>1355 Market St, Suite 900 <br>
													San Francisco, CA 94103</p>
												<p>Mobile: (123) 456-7890</p>
											</address>
											<a href="#" class="btn btn--primary"><i class="fa fa-edit"></i>Edit
												Address</a>
										</div>
									</div>
									<!-- Single Tab Content End -->
									<!-- Single Tab Content Start -->
									<?php if($this->session->has_userdata('profile_error')) {
									$show= 'show active';
									}
									?>
									<div class="tab-pane fade <?=$this->session->flashdata('is_active')=='accountdetails'? 'show active' :''?> " id="account-info" role="tabpanel">
										<div class="myaccount-content">
											<h3>Edit Details</h3>
											<div class="account-details-form">
												<form action="<?=base_url('update-profile')?>" method="post" enctype="multipart/form-data">
													<div class="row">
														<div class="col-lg-6 col-12  mb--30">
															<input id="first-name" name="name" placeholder="User Name" type="text" value="<?=$userdata->name?>">
															<?=form_error('name')?>
														</div>
														<div class="col-lg-6 col-12  mb--30">
															<input id="last-name" name="mobile_number" placeholder="Mobile Number" value="<?=$userdata->mobile_number?>" type="text">
															<?=form_error('mobile_number')?>
														</div>
														
														
														<div class="col-lg-6 col-12  mb--30">
															<input id="email"name="email" required placeholder="Email Address" type="email"value="<?=$userdata->email?>">
															<?=form_error('cupassword')?>
														</div>
														<div class=" col-lg-6 col-12  mb--30">
															<input id="display-name"name="home_town" value="<?=$userdata->home_town?>" placeholder="Home Town">
														</div>
														<div class=" col-lg-6 col-12  mb--30">
															<input id="display-name" name="occupation" value="<?=$userdata->occupation?>"placeholder="occupation">
														</div>
														<div class=" col-lg-6 col-12  mb--30">
															<input id="display-name"name="university"value="<?=$userdata->university?>" placeholder="university">
														</div>
														<div class=" col-lg-6 col-12  mb--30">
															<input id="display-name" name="interest"value="<?=$userdata->interest?>" placeholder="interest in">
														</div>
															<div class=" col-lg-6 col-12  mb--30">
															<input type="file" id="display-name" name="profile_imge" placeholder="Profile photo">
															<?=$this->session->flashdata('errort')?>
														</div>
														<div class=" col-lg-12 col-12  mb--30">
															<input type="text" id="display-name" name="linkedin" placeholder="LINKEDIN">
															<?=$this->session->flashdata('linkedin')?>
														</div>
														
														
														
														<div class=" col-lg-12 col-12  mb--30">
															<textarea class="form-control" name="aboutme" placeholder="About me..." rows="3"></textarea>
															<?=$this->session->flashdata('errort')?>
														</div>
														<div class="col-12  mb--30">
															<h4>Password change</h4>
														</div>
														<div class="col-lg-4  col-12  mb--30">
															<input id="current-pwd" name="cupassword" placeholder="Current Password"
																type="password">
																<?=form_error('cupassword')?>
														</div>
														<div class="col-lg-4 col-12  mb--30">
															<input id="new-pwd" name="password" placeholder="New Password"
																type="password">
														</div>
														<div class="col-lg-4 col-12  mb--30">
															<input id="confirm-pwd" name="cpassword" placeholder="Confirm Password"
																type="password">
																<?=form_error('cpassword')?>
														</div>
														<div class="col-12">
															<button class="btn btn--primary">Save Changes</button>
														</div>
													</div>
												</form>
											
										</div>
									</div>
									<!-- Single Tab Content End -->
								</div>
							</div>
							<!-- My Account Tab Content End -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=================================
  Brands Slider
===================================== -->
	<section class="section-margin">
		<h2 class="sr-only">Brand Slider</h2>
		<div class="container">
			<div class="brand-slider sb-slick-slider border-top border-bottom" data-slick-setting='{
                                            "autoplay": true,
                                            "autoplaySpeed": 8000,
                                            "slidesToShow": 6
                                            }' data-slick-responsive='[
                {"breakpoint":992, "settings": {"slidesToShow": 4} },
                {"breakpoint":768, "settings": {"slidesToShow": 3} },
                {"breakpoint":575, "settings": {"slidesToShow": 3} },
                {"breakpoint":480, "settings": {"slidesToShow": 2} },
                {"breakpoint":320, "settings": {"slidesToShow": 1} }
            ]'>
				<div class="single-slide">
					<img src="image/others/brand-1.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-2.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-3.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-4.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-5.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-6.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-1.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-2.jpg" alt="">
				</div>
			</div>
		</div>
	</section>
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
						<form action="#">
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
	<script src="<?=base_url('webassets/js/')?>plugins.js"></script>
	<script src="<?=base_url('webassets/js/')?>ajax-mail.js"></script>
	<script src="<?=base_url('webassets/js/')?>custom.js"></script>
</body>


<!-- Mirrored from htmldemo.net/pustok/pustok/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jun 2022 05:29:45 GMT -->
</html>
<style>
    .dot {
        padding:5px!important;
  height: 100px;
  width: 100px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
}
.dot img{
  border-radius: 50%;
  display: inline-block;
text-align: center;
}
</style>
<script>
    $(document).ready(function() {
  $('.removelikenadbookmarks').click(function() {
    if (confirm('Are you sure want remove?')) {
      var url = $(this).data('url');
      window.location.href = url;
    }
  });
})
</script>