
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Graduate Research Project </title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Use Minified Plugins Version For Fast Page Load -->
      <link rel="stylesheet" type="text/css" media="screen" href="<?=base_url('webassets/')?>css/plugins.css" />
      <link rel="stylesheet" type="text/css" media="screen" href="<?=base_url('webassets/')?>css/main.css" />
      <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
   </head>
   <body>
      <div class="site-wrapper" id="top">
         
        <div class="site-header d-none d-lg-block">
            <div class="header-middle pt--10 pb--10">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-lg-3 ">
                        <a href="<?=base_url('')?>" class="site-brand">
                           <strong style="color: #94002d;font-size: 30px;">BOOK </strong><strong style="color: #f4c480;font-size: 30px;">LAB</strong>
                           <!-- <img src=" <?=base_url('webassets/image/')?>logo.png" alt=""> -->
                        </a>
                     </div>
                     <div class="col-lg-3">
                        <!--<div class="header-phone ">-->
                        <!--   <div class="icon">-->
                        <!--      <i class="fas fa-headphones-alt"></i>-->
                        <!--   </div>-->
                        <!--   <div class="text">-->
                        <!--      <p>Free Support 24/7</p>-->
                        <!--      <p class="font-weight-bold number">+01-202-555-0181</p>-->
                        <!--   </div>-->
                        <!--</div>-->
                     </div>
                     
                  </div>
               </div>
            </div>
            
         </div>
        <div class="site-mobile-menu">
            <header class="mobile-header d-block d-lg-none pt--10 pb-md--10">
               <div class="container">
                  <div class="row align-items-sm-end align-items-center">
                     <div class="col-md-4 col-7">
                        <a href="<?=base_url('')?>" class="site-brand">
                           <!-- <img src=" <?=base_url('webassets/image/')?>logo.png" alt=""> -->
                           <strong style="color: #94002d;font-size: 30px;">BOOK </strong><strong style="color: #f4c480;font-size: 30px;">LAB</strong>
                        </a>
                     </div>
                     <div class="col-md-5 order-3 order-md-2">
                        <nav class="category-nav   ">
                           <div>
                              <a href="javascript:void(0)" class="category-trigger"><i
                                 class="fa fa-bars"></i>Browse
                              categories</a>
                              <ul class="category-menu">
                                   <?php foreach($category_list as $clist){ 
                                       $topics=$this->db->where('category_id',$clist->id)->get('topics')->result();
                                   
                                   
                                   ?>
                                  
                                 <li class="cat-item  <?php if(!empty($topics)) { echo 'has-children';}?>  ">
                                    <a href="#"><?=$clist->title?></a>
                                    <?php 
                                    
                                    if(!empty($topics)){
                                    
                                    
                                    ?>
                                    
                                    <ul class="sub-menu">
                                        
                                     <?php    
                                        
                                    foreach($topics as $tlist){
                                    ?>
                                        
                                       <li><a href="#"><?=$tlist->title?></a></li><?php  } ?>
                                       
                                       
                                    </ul>
                                <?php }  ?>
                                 </li><?php } ?>
                                 
                                 
                                
                              </ul>
                           </div>
                        </nav>
                     </div>
                     <div class="col-md-3 col-5  order-md-3 text-right">
                        <div class="mobile-header-btns header-top-widget">
                           <ul class="header-links">
                              <li class="sin-link">
                                 <a href="#" class="cart-link link-icon"><i class="ion-bag"></i></a>
                              </li>
                              <li class="sin-link">
                                 <a href="javascript:" class="link-icon hamburgur-icon off-canvas-btn"><i
                                    class="ion-navicon"></i></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </header>
            <!--Off Canvas Navigation Start-->
            <aside class="off-canvas-wrapper">
               <div class="btn-close-off-canvas">
                  <i class="ion-android-close"></i>
               </div>
               <div class="off-canvas-inner">
                  <!-- search box start -->
                  <div class="search-box offcanvas">
                     <form>
                        <input type="text" placeholder="Search Here">
                        <button class="search-btn"><i class="ion-ios-search-strong"></i></button>
                     </form>
                  </div>
                  <!-- search box end -->
                  <!-- mobile menu start -->
                  <div class="mobile-navigation">
                     <!-- mobile menu navigation start -->
                     <nav class="off-canvas-nav">
                        <ul class="mobile-menu main-mobile-menu">

                           <li><a href="<?=base_url('')?>">Home </a></li>
                           <!--<li><a href="<?=base_url('#')?>">About Us</a></li>-->
                           
                           <li><a href="<?=base_url('index.php/upload')?>">Upload </a> </li>
                           
                           <li>
                           <?php if($this->session->userdata('user_id')==''){ ?>
                           <a href="<?=base_url('signin')?>">Login</a>
                           
                           <?php } else { ?>
                           <a href="<?=base_url('homecontroller/logout')?>">Logout </a>  
                           
                           <?php  } ?>
                           </li>
                           
                           
                        
                           
                           
                           
                           <li><a href="<?=base_url('contact-us')?>">Contact Us</a></li>
                           
                            <li> <a href="<?=base_url('my-profile')?>"> My Profile</a></li>
                           

                        </ul>
                     </nav>
                     <!-- mobile menu navigation end -->
                  </div>
                  <!-- mobile menu end -->
                  <nav class="off-canvas-nav">
                     <ul class="mobile-menu menu-block-2">
                        <li class="menu-item-has-children">
                           <a href="#">Currency - USD $ <i class="fas fa-angle-down"></i></a>
                           <ul class="sub-menu">
                              <li> <a href="cart.html">USD $</a></li>
                              <li> <a href="checkout.html">EUR €</a></li>
                           </ul>
                        </li>
                        <li class="menu-item-has-children">
                           <a href="#">Lang - Eng<i class="fas fa-angle-down"></i></a>
                           <ul class="sub-menu">
                              <li>Eng</li>
                              <li>Ban</li>
                           </ul>
                        </li>
                        <li class="menu-item-has-children">
                           <a href="#">My Account <i class="fas fa-angle-down"></i></a>
                           <ul class="sub-menu">
                              <li><a href="#">My Account</a></li>
                              <li><a href="#">Order History</a></li>
                              <li><a href="#">Transactions</a></li>
                              <li><a href="#">Downloads</a></li>
                           </ul>
                        </li>
                     </ul>
                  </nav>
                  <div class="off-canvas-bottom">
                     <div class="contact-list mb--10">
                        <a href="#" class="sin-contact"><i class="fas fa-mobile-alt"></i>(12345) 78790220</a>
                        <a href="#" class="sin-contact"><i class="fas fa-envelope"></i>examle@handart.com</a>
                     </div>
                     <div class="off-canvas-social">
                        <a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="single-icon"><i class="fas fa-rss"></i></a>
                        <a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="single-icon"><i class="fab fa-instagram"></i></a>
                     </div>
                  </div>
               </div>
            </aside>
            <!--Off Canvas Navigation End-->
         </div>
         
         <div class="sticky-init fixed-header common-sticky">
            <div class="container d-none d-lg-block">
               <div class="row align-items-center">
                  <div class="col-lg-4">
                     <a href="<?=base_url('')?>" class="site-brand">
                        <!-- <img src="image/logo.png" alt=""> -->
                        <strong style="color: #94002d;font-size: 30px;">BOOK </strong><strong style="color: #f4c480;font-size: 30px;">LAB</strong>
                     </a>
                  </div>
                  
               </div>
            </div>
         </div>

      <!--=================================
         Brands Slider
         ===================================== -->
         <section class="breadcrumb-section">
    <h2 class="sr-only">Site Breadcrumb</h2>
    

</section>
<!--=============================================
=            Login Register page content         =
=============================================-->
<main class="page-section inner-page-sec-padding-bottom">
    <div class="container">
        <div class="row text-center"> <?=$this->session->flashdata('success')?></div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 offset-lg-3  mb--30 mb-lg--0">
                
                <!-- Login Form s-->
                <form   action="" method="post">
                    
                        <div class="login-form shadow">
                          <h2 class="text-center"><span class="font-weight-bold"> Register Form</span></h2>
                        <div class="row">
                            <div class="col-md-12 col-12 mb--15">
                                                                <label for="email">Full Name</label>
                                <input class="mb-0 form-control" type="text" value="<?=isset($post['name']) ? $post['name']: ''?>"name="name" id="name"
                                    placeholder="Enter your full name">
                                    <?php echo form_error('name');?>
                            </div>
                            <div class="col-12 mb--20">
                             <label for="email">Email</label>
                                <input class="mb-0 form-control" type="email" name="email"  value="<?=isset($post['email']) ? $post['email']: ''?>" id="email"
                                    placeholder="Enter Your Email Address Here..">
                                       <?php echo form_error('email');?>
                            </div>
                            <div class="col-lg-6 mb--20">
                                                                <label for="password">Password</label>
                                <input class="mb-0 form-control" name="password" value="<?=isset($post['password']) ? $post['password']: ''?>" type="password" id="password"
                                    placeholder="Enter your password">
                                       <?php echo form_error('password');?>
                            </div>
                            <div class="col-lg-6 mb--20">
                              <label for="password">Re-enter Password</label>
                                <input class="mb-0 form-control"name="re_password" type="password" value="<?=isset($post['re_password']) ? $post['re_password']: ''?>"  id="repeat-password"
                                    placeholder="Re-enter your password">
                                       <?php echo form_error('re_password');?>
                            </div>
                            <div class="col-lg-12 mb--20">
                              <label for="password"> User Type</label>
                              <select class="form-control" name="user_type" placegolder="select User type" required>
                                  <option value=""> Select USer Type</option>
                                  <option value="1">Student </option>
                                   <option value="2">Professor</option>
                              </select>
                                
                                       <?php echo form_error('user_type');?>
                            </div>
                            
                            
                            <div class="col-md-10 offset-lg-1 mb--30">
                                <button type="submit" class="btn btn-outlined" style="width:100%!important;">Register</button>
                            </div>
                            <div class="col-md-12">
                              <span> Already have account? <a href="<?=base_url('signin')?>" class="text-info"> Signin</a></span>
                            </div>
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

               <!--=================================
         Footer Area
         ===================================== -->
      <footer class="site-footer">
         <div class="container">
            
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
      <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
      <script src="<?=base_url('webassets/')?>assetsss/js/pdfviewer.js"> </script>
   </body>
   <!-- Mirrored from htmldemo.net/pustok/pustok/<?=base_url('')?> by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jun 2022 05:29:17 GMT -->
</html>
<style>
@media (min-width: 702px) {
.login-form{
margin-top:50px;
margin-bottom:50px;

}

}
</style>
