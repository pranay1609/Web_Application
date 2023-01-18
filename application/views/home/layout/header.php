<div class="site-header d-none d-lg-block">
            <div class="header-middle pt--10 pb--10">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-lg-2 ">
                        <a href="<?=base_url('')?>" class="site-brand">
                           <strong style="color: #94002d;font-size: 30px;">BOOK </strong><strong style="color: #f4c480;font-size: 30px;">LAB</strong>
                           <!-- <img src=" <?=base_url('webassets/image/')?>logo.png" alt=""> -->
                        </a>
                     </div>
                    
                     <div class="col-lg-7">
                        <div class="main-navigation flex-lg-right">
                           <ul class="main-menu menu-right ">

                              <li class="menu-item">
                                 <a href="<?=base_url('#')?>">Home</a>
                              </li>
                              <li class="menu-item">
                                 <a href="<?=base_url('#')?>">About Us</a>
                              </li>
                              
                              <li class="menu-item">
                                 <a href="<?=base_url('contact-us')?>">Contact Us</a>
                              </li>
                              <li class="menu-item">
                                 <a href="<?=base_url('book-upload')?>">upload</a>
                              </li>
                              <li class="menu-item">
                                   <?php if($this->session->userdata('user_name')==''){  ?>    
                                <a class="" href="<?=base_url('signin')?>"> Login</a>  
                                <?php  } else { ?>
                                <a class="" href="<?=base_url('my-profile')?>"> My Account</a> 
                                
                                <?php } ?>
                                </li>


                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="header-bottom pb--10">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-lg-3">
                        <nav class="category-nav   ">
                           <div>
                              <a href="javascript:void(0)" class="category-trigger"><i
                                 class="fa fa-bars"></i>Browse
                              categories</a>
                              <ul class="category-menu">
                                    <?php foreach($category_list as $clist){ 
                                    
                                    
                                    $topics=$this->db->where('category_id',$clist->id)->get('topics')->result();?>
                                 <li class="cat-item  <?php if(!empty($topics)) { echo 'has-children';}?>">
                                    <a href="#"><?=$clist->title?></a>
                                    <?php if(!empty($topics)) { ?>
                                    <ul class="sub-menu">
                                    <?php 
                                    foreach($topics as $tlist){
                                    ?>
                                       <li><a href="<?=base_url('homecontroller/getdatabyparameter/department/'.$tlist->id)?>"><?=$tlist->title?></a></li>
                                    <?php } ?>
                                       
                                    </ul>
                                    <?php  } ?>
                                 </li>
                                 <?php } ?>
                               
                                 </li>
                               
                              </ul>
                           </div>
                        </nav>
                     </div>
                     <div class="col-lg-5">
                        <div class="header-search-block">
                            <form method="post" action="<?=base_url('homecontroller/getdatabyparameter/search')?>">
                           <input type="text"  required name="search" placeholder="Search for a project">
                           <button type="submit">Search</button>
                           </form>
                          
                        </div>
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
                                        
                                       <li><a href="<?=base_url('homecontroller/getdatabyparameter/department/'.$tlist->id)?>"><?=$tlist->title?></a></li><?php  } ?>
                                       
                                       
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
                     <form method="post" action="<?=base_url('homecontroller/getdatabyparameter/search')?>">
                        <input type="text" required name="search" placeholder="Search Here">
                        <button type="submit" class="search-btn"><i class="ion-ios-search-strong"></i></button>
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
                           
                           <li><a href="<?=base_url('book-upload')?>">Upload </a> </li>
                           
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
                        <!-- <img src=" <?=base_url('webassets/image/')?>logo.png" alt=""> -->
                        <strong style="color: #94002d;font-size: 30px;">BOOK </strong><strong style="color: #f4c480;font-size: 30px;">LAB</strong>
                     </a>
                  </div>
                  <div class="col-lg-8">
                     <div class="main-navigation flex-lg-right">
                        <ul class="main-menu menu-right ">

                          <li class="menu-item">
                                 <a href="<?=base_url('#')?>">Home</a>
                              </li>
                              <li class="menu-item">
                                 <a href="<?=base_url('#')?>">About Us</a>
                              </li>
                              <li class="menu-item">
                                 <a href="<?=base_url('book-upload')?>">upload</a>
                              </li>
                              <li class="menu-item">
                                 <a href="<?=base_url('contact-us')?>">Contact Us</a>
                              </li>
                              
                              <li class="menu-item">
                                   <?php if($this->session->userdata('user_name')==''){  ?>    
                                <a class="" href="<?=base_url('signin')?>"> Login</a>  
                                <?php  } else { ?>
                                <a class="" href="<?=base_url('my-profile')?>"> My Account</a> 
                                
                                <?php } ?>
                                </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>