
<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from htmldemo.net/pustok/pustok/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jun 2022 05:29:43 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
          <?=$bookdetails->title?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="<?=base_url('upload/'.$bookdetails->front_image)?>">
    <meta property="og:title" content="<?=$bookdetails->title?>">
    <meta name="description" content="<?=$bookdetails->Description?>">
    <!-- Use Minified Plugins Version For Fast Page Load -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?=base_url('webassets/css/')?>plugins.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?=base_url('webassets/css/')?>main.css" />
    <link rel="shortcut icon" type="<?=base_url('webassets/image/')?>x-icon" href="<?=base_url('webassets/image/')?>favicon.ico">
     <link href="<?=base_url('pdfassets/')?>jquery.touchPDF.css" rel="stylesheet" media="screen" />
</head>

<body>
    <div class="site-wrapper" id="top">
        <?php $this->load->view('home/layout/header') ?>
        
        
      
        <section class="breadcrumb-section">
            <h2 class="sr-only">Site Breadcrumb</h2>
            <div class="container">
                <div class="breadcrumb-contents">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?=base_url('')?>">Home</a></li>
                            <li class="breadcrumb-item active">Project Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <main class="inner-page-sec-padding-bottom">
            <div class="container">
                <div class="row ">
                    <?=$this->session->flashdata('success')?>
                    <div class="col-lg-5 ">
                        <!--<div id="myPDF" style="height: 100%; width: 100%; margin: auto;"></div>-->
                        <!--<div id="pdfRenderer"></div>-->
                        
                    <div id="pdfRenderer" style="height:300px; width:100%"></div>
                     <!--<iframe src="" id="iframesrc" width="100%" height="1200px">-->
                     <!--                                           </iframe>-->
                        
                    </div>
                    <div class="col-lg-7">
                        <div class="product-details-info pl-lg--30 ">
                        
                            <h3 class="product-title"> <?=$bookdetails->title?></h3>
                            <ul class="list-unstyled">
                                    <li>Graduation: <span class="list-value">  <?=$bookdetails->graduation?></span></li>
                                    <li>University: <a href="#" class="list-value font-weight-bold">  <?=$bookdetails->university?></a></li>
                                    <li>Department: <span class="list-value">  <?=$topic_name?></span></li>
                                    <li>Email: <span class="list-value">  <?=$bookdetails->user_email?></span></li>
                                    <li>Professor : <span class="list-value">  <?=$bookdetails->professor?> </span></li>
                            </ul>
                            <div class="price-block">
                                <a href="<?=base_url('homecontroller/studentprofile/'.$bookdetails->user_email)?>"> 
                                <span class="price-new"> <?=$bookdetails->user_name?></span>
                                </a>
                                <!--<del class="price-old">£91.86</del>-->
                            </div>
                            <div class="rating-widget">
                                <div class="rating-block">
                                    
                                       <?php 
                                        $srtar='';
                                            for($j=0;$j < 5; $j++){
                                            
                                            
                                            ?>
                                            <?php for($i=0;$i <  (int) $rating->rating_point; $i++){ ;
                                             $j <=$i  ? $srtar='star_on' : $srtar='';
                                            } 
                                    
                                            ?>
                                            <span class="ion-android-star-outline <?=$srtar?>"></span>
                                            <?php  } ?> 
                                            
                                            
                                    <!--<span class="fas fa-star star_on"></span>-->
                                    <!--<span class="fas fa-star star_on"></span>-->
                                    <!--<span class="fas fa-star star_on"></span>-->
                                    <!--<span class="fas fa-star star_on"></span>-->
                                    <!--<span class="fas fa-star "></span>-->
                                    
                                    
                                </div>
                                <div class="review-widget">
                                   <!-- <a href="#">  (<?= count($post_coments)?> Reviews)</a> <span>|</span>--?>
                                    <!--<a href="#review">Write a review</a>-->
                                </div>
                            </div>
                            <article class="product-details-article">
                                <h4 class="sr-only">Product Summery</h4>
                                
                                
                               <?=substr($bookdetails->Description,0,150)  ?>
                        
                                    
                                    
                            </article>
                            <div class="add-to-cart-row">
                              
                                <div class="add-cart-btn">
                                    <a  target="_blank" href="<?=$this->session->userdata('user_id')!='' ? 'https://graduateresearchproject.com/upload/'. $bookdetails->upload_pdf :base_url('signin')?>" class="btn btn-outlined--primary"><span class="plus-eye"></span> Read More</a>
                                </div>
                                &nbsp;  &#160;
                                 <div class="add-cart-btn ml-1">
                                    <a  <?=$this->session->userdata('user_id')!='' ? ' download':''?>  target="_blank" href="<?=$this->session->userdata('user_id')!='' ? 'https://graduateresearchproject.com/upload/'. $bookdetails->upload_pdf :base_url('signin')?>  " class="btn btn-outlined--primary"><span class="plus-eye"></span> Download</a>
                                </div>
                            </div>
                            
                            <div class="compare-wishlist-row">
                                <a href="<?=base_url('homecontroller/addbookmarkandlikes/'.$bookdetails->id.'/2'.$_SERVER['REQUEST_URI'])?>" class="add-link"><i class="fas fa-heart"></i>Add to Bookmark</a>
                                
                                <a target="_blank"  href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fgraduateresearchproject.com%2Fbook-details%2F<?=$bookdetails->id?>"
                                
                                &amp;src=sdkpreparse" " class="add-link"> <i class="fas fa-random"> </i>Share </a>
                                
                           
                            </div>
                            
                            
                             <div class="add-cart-btn ml-1">
                             
                                
                                    <div class="alert  <?php  echo $bookdetails->is_verify==0 ?   'alert-danger': 'alert-success' ?> text-center">  <?php  echo $bookdetails->is_verify==0 ?   'Unverified &nbsp;  &#160; <i class="fa fa-times" aria-hidden="true"></i>': 'verified &nbsp;  &#160; <i class="fa fa-check" aria-hidden="true"></i>' ?> </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="sb-custom-tab review-tab section-padding" id="review">
                    <ul class="nav nav-tabs nav-style-2" id="myTab2" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="tab1" data-bs-toggle="tab" href="#tab-1" role="tab"
                                aria-controls="tab-1" aria-selected="true">
                                DESCRIPTION
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab2" data-bs-toggle="tab" href="#tab-2" role="tab"
                                aria-controls="tab-2" aria-selected="true">
                                REVIEWS (<?= count($post_coments)?>)
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content space-db--20" id="myTabContent">
                        <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab1">
                            <article class="review-article">
                               <?=$bookdetails->Description?>
                            </article>
                        </div>
                        <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab2">
                            <div class="review-wrapper">
                                <h2 class="title-lg "><?= count($post_coments)?> REVIEW FOR PUBLISHER</h2>
                                <?php foreach($post_coments as $clist){?>
                                <div class="review-comment mb--20">
                                    <div class="avatar">
                                        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="">
                                    </div>
                                    <div class="text">
                                        <div class="rating-block mb--15">
                                            <?php 
                                        
                                            for($j=0;$j < 5; $j++){
                                            
                                            
                                            ?>
                                            <?php for($i=0;$i < $clist->rating_point; $i++){ ;
                                             $j <=$i  ? $srtar='star_on' : $srtar='';
                                            } 
                                    
                                            ?>
                                            <span class="ion-android-star-outline <?=$srtar?>"></span>
                                            <?php 
                                            
                                            
                                            }  ?>
                                            
                                            <!--<span class="ion-android-star-outline star_on"></span>-->
                                            <!--<span class="ion-android-star-outline star_on"></span>-->
                                            <!--<span class="ion-android-star-outline"></span>-->
                                            <!--<span class="ion-android-star-outline"></span>-->
                                        </div>
                                        <h6 class="author">ADMIN – <span class="font-weight-400"><?=$clist->created_at?></span>
                                        </h6>
                                        <p><?=$clist->comments?></p>
                                    </div>
                                </div>
                                <?php } ?>
                                <h2 class="title-lg mb--20 pt--15">ADD A REVIEW</h2>
                                <div class="rating-row pt-2">
                                    <p class="d-block">Your Rating</p>
                                     <form action="<?=base_url('homecontroller/docoment')?>" method="post" class="mt--15 site-form ">
                                    <span class="rating-widget-block d-flex float-left">
                                        <input type="radio"  value="5" name="rating_point" id="star1">
                                        <label for="star1"></label>
                                        <input type="radio"value="4"  name="rating_point" id="star2">
                                        <label for="star2"></label>
                                        <input type="radio" value="3"  name="rating_point" id="star3">
                                        <label for="star3"></label>
                                        <input type="radio" value="2"  name="rating_point" id="star4">
                                        <label for="star4" ></label>
                                        <input type="radio"value="1"  name="rating_point" id="star5">
                                        <label for="star5"></label>
                                    </span>
                                   <input type="hidden" name="ebook_id" value="<?=$bookdetails->id?>">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="message">Comment</label>
                                                    <textarea name="comments" id="message" cols="30" rows="10"
                                                        class="form-control"></textarea>
                                                </div>
                                            </div>
                               
                                            <div class="col-lg-4">
                                                <div class="submit-btn">
                                                    <button type="submit" class="btn btn-black">Post Comment</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
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
                            <div id="myPDF" style="height: 200px; width: 200px" ></div>
                         
                        </div>
                        <div class="col-lg-7 mt--30 mt-lg--30">
                            <div class="product-details-info pl-lg--30 ">
                                <p class="tag-block">Tags: <a href="#">Movado</a>, <a href="#">Omega</a></p>
                                <h3 class="product-title">Users can upload their projects ans showcase to others</h3>
                                <ul class="list-unstyled">
                                    <li>Tittle: <span class="list-value"> <?=$bookdetails->title?></span></li>
                                    <li>University: <a href="#" class="list-value font-weight-bold"> <?=$bookdetails->University?></a></li>
                                    <li>Department: <span class="list-value"> IT</span></li>
                                    <li>Email: <span class="list-value"> Pavan001@gannon</span></li>
                                    <li>Professor : <span class="list-value"> <?=$bookdetails->professor?></span></li>
                                </ul>
                                <div class="price-block">
                                    <span class="price-new">Pavan Kalayan</span>
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
                                        <a href="#">(1\ Reviews)</a> <span>|</span>
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
        </main>
    </div>
    <!--=================================
  Brands Slider
===================================== -->
    <!--<section class="section-margin">-->
    <!--    <h2 class="sr-only">Brand Slider</h2>-->
    <!--    <div class="container">-->
    <!--        <div class="brand-slider sb-slick-slider border-top border-bottom" data-slick-setting='{-->
    <!--                                        "autoplay": true,-->
    <!--                                        "autoplaySpeed": 8000,-->
    <!--                                        "slidesToShow": 6-->
    <!--                                        }' data-slick-responsive='[-->
    <!--            {"breakpoint":992, "settings": {"slidesToShow": 4} },-->
    <!--            {"breakpoint":768, "settings": {"slidesToShow": 3} },-->
    <!--            {"breakpoint":575, "settings": {"slidesToShow": 3} },-->
    <!--            {"breakpoint":480, "settings": {"slidesToShow": 2} },-->
    <!--            {"breakpoint":320, "settings": {"slidesToShow": 1} }-->
    <!--        ]'>-->
    <!--            <div class="single-slide">-->
    <!--                <img src="<?=base_url('webassets/image/')?>others/brand-1.jpg" alt="">-->
    <!--            </div>-->
    <!--            <div class="single-slide">-->
    <!--                <img src="<?=base_url('webassets/image/')?>others/brand-2.jpg" alt="">-->
    <!--            </div>-->
    <!--            <div class="single-slide">-->
    <!--                <img src="<?=base_url('webassets/image/')?>others/brand-3.jpg" alt="">-->
    <!--            </div>-->
    <!--            <div class="single-slide">-->
    <!--                <img src="<?=base_url('webassets/image/')?>others/brand-4.jpg" alt="">-->
    <!--            </div>-->
    <!--            <div class="single-slide">-->
    <!--                <img src="<?=base_url('webassets/image/')?>others/brand-5.jpg" alt="">-->
    <!--            </div>-->
    <!--            <div class="single-slide">-->
    <!--                <img src="<?=base_url('webassets/image/')?>others/brand-6.jpg" alt="">-->
    <!--            </div>-->
    <!--            <div class="single-slide">-->
    <!--                <img src="<?=base_url('webassets/image/')?>others/brand-1.jpg" alt="">-->
    <!--            </div>-->
    <!--            <div class="single-slide">-->
    <!--                <img src="<?=base_url('webassets/image/')?>others/brand-2.jpg" alt="">-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
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
                            <strong style="color: #94002d;font-size: 30px;">BOOK </strong><strong style="color: #f4c480;font-size: 30px;">LAB</strong>
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
                    vel magna volutpat, posuere eros</p>
                <a href="#" class="payment-block">
                    <img src="<?=base_url('webassets/image/')?>icon/payment.png" alt="">
                </a>
                <p class="copyright-text">Copyright © 2021 <a href="#" class="author">Pustok</a>. All Right Reserved.
                    <br>
                    Design By Pustok</p>
            </div>
        </div>
    </footer>
    <!-- Use Minified Plugins Version For Fast Page Load -->
    <script type="text/javascript" src="<?=base_url('pdfassets/')?>pdf.compatibility.js"></script>
    <script type="text/javascript" src="<?=base_url('pdfassets/')?>pdf.js"></script>

    <script src="<?=base_url('webassets/js/plugins.js')?>"></script>
    <script src="<?=base_url('webassets/js/')?>ajax-mail.js"></script>
    <script src="<?=base_url('webassets/js/')?>custom.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="<?=base_url('pdfassets/')?>jquery.touchSwipe.js"></script>
    <script type="text/javascript" src="<?=base_url('pdfassets/')?>jquery.touchPDF.js"></script>
    <script type="text/javascript" src="<?=base_url('pdfassets/')?>jquery.panzoom.js"></script>
    <script type="text/javascript" src="<?=base_url('pdfassets/')?>jquery.mousewheel.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.2.7/pdfobject.min.js" integrity="sha512-g16L6hyoieygYYZrtuzScNFXrrbJo/lj9+1AYsw+0CYYYZ6lx5J3x9Yyzsm+D37/7jMIGh0fDqdvyYkNWbuYuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>PDFObject.embed("https://graduateresearchproject.com/upload/<?php echo $bookdetails->upload_pdf?>", "#pdfRenderer");</script>
</body>


<!-- Mirrored from htmldemo.net/pustok/pustok/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jun 2022 05:29:44 GMT -->
</html>

<script type="text/javascript">
// $(function() {
            
//             $('#iframesrc').attr('src', 'https://graduateresearchproject.com/upload/<?php echo $bookdetails->upload_pdf?>');
            
//         })
var pdf = new PDFObject({
  url: "https://graduateresearchproject.com/upload/<?php echo $bookdetails->upload_pdf?>",
  id: "pdfRenderer",
  pdfOpenParams: {
    view: "FitH"
  }
}).embed("pdfRenderer");

//   PDFObject.embed("https://graduateresearchproject.com/upload/<?php echo $bookdetails->upload_pdf?>f", "#pdfRenderer");
    
    // $(function() {
    //     $("#myPDF").pdf( {
    //         source: "https://graduateresearchproject.com/upload/<?php echo $bookdetails->upload_pdf?>",
            
    //     } );
       
    
        
    //     $('.pdf-page-count ').addClass("bg-danger mx-1");
    //     $('.pdf-next').html("Next");
    //     $('.pdf-prev').html("Previous");
    //      $('.pdf-prev').addClass("text-primary px-1");
    //       $('.pdf-next').addClass("text-primary px-1");
    //       $('.pdf-zoomout').html("Zoom");
    //       $('.pdf-zoomout').addClass("d-none");
    //         $('.pdf-zoomin').html("");
           
          
        
    // });

</script>