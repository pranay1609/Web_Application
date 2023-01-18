	    <?php  foreach($grid_product as $grid_list){ ?>
					<div class="col-lg-4 col-sm-6">
						<div class="product-card card-style-list">
							<div class="product-grid-content shadow">
								<!--<div class="product-header">-->
								<!--	<img src="<?=base_url('upload/'.$grid_list->front_image)?>" alt="">-->
								<!--	<h3><a href=""><?=$grid_list->title?> </a></h3>-->
								<!--</div>-->
								<!--<div class="product-card--body">-->
								<!--    <div><article> <?=substr($grid_list->Description,0,80).'...'?></article></div>	-->
								<!--    <div style="list-style:none" class="cuslink">-->
								        
								<!--	        <li class="mb--30"> <a> <li> <i class="fas fa-share"></i></li></a></li>-->
								<!--	         <li> <a href="<?=base_url('homecontroller/addbookmarkandlikes/'.$grid_list->id.'/2')?>" class="<?=test_method($grid_list->id,2) ? 'text-danger':''?>"> <li> <i class="fas fa-bookmark"></i></li></a></li>-->
								<!--	          <li> <a href="<?=base_url('homecontroller/addbookmarkandlikes/'.$grid_list->id.'/1')?>" class="<?=test_method($grid_list->id,1) ? 'text-danger':''?>"> <li> <i class="fas fa-heart"></i></li></a></li>-->
									          
								<!--	    </div>-->
								<!--		</div>-->
								<!--		<div class="border mb--30">Prranay Reddy</div>-->
								<!--		<div class="mb--30"></div>-->
									<?php 
						
						$img=explode(".",$grid_list->front_image);
						$img=$img[0].'_thumb.'.$img[1];
						
						?>
						<div class="col">
						<div class="card">
						<a href="<?=base_url('book-details/'.$grid_list->id)?>" tabindex="0"> 
						<div class="imgbox"<?php if($active==1 || $active==2){?> style="height:250px;background-image:url(<?=base_url('upload/'.$img)?>);"<?php }else{?>style="height:200px;background-image:url(<?=base_url('upload/'.$img)?>);"  <?php } ?>> 
					
						<!--<img  src="<?=base_url('upload/')?>" style="height:100%" height="100%" width="100%" class="card-img-top" alt="...">-->
						
					
						</div>
							</a>
						
							<div class="card-body">
								<h3 class="card-title font-weight-boldstyle="color:#94002d;  font-weight:bold">
									<a href="<?=base_url('book-details/'.$grid_list->id)?>" tabindex="0"> 
								<?= strlen($grid_list->title) >14 ? strtoupper(substr($grid_list->title,0,14)).'...':strtoupper($grid_list->title)?>
								</a>
								</h3>
								<p class="card-text"><?= strlen($grid_list->Description) > 80 ? substr($grid_list->Description,0,80).'...' :$grid_list->Description?></p>
							</div>
							<ul class="list-group list-group-flush">
							<!--<li class="list-group-item"> Authors:josh </li>-->
								<li class="list-group-item">Publisher: <?=$grid_list->user_name?></li>
								<li class="list-group-item"> 
								<div class="shareicon ml--30"> 
							<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A//graduateresearchproject.com/book-details/<?=$grid_list->id?>" target="_blank"><i class="fas fa-share fa text-grey"></i></a>
							
							<a href="<?=base_url('homecontroller/addbookmarkandlikes/'.$grid_list->id.'/1')?>" class="<?=test_method($grid_list->id,1) ? 'text-danger':'text-grey'?> "> 
								<i class="fas fa-heart"></i> </a>
								<a href="<?=base_url('homecontroller/addbookmarkandlikes/'.$grid_list->id.'/2')?>" class="<?=test_method($grid_list->id,2) ? 'text-danger':'text-grey'?>">  <i class="fas fa-bookmark"></i> </a>
								
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
										<a href="<?=base_url('homecontroller/addbookmarkandlikes/'.$grid_list->id.'/1')?>" class="card-link <?=test_method($grid_list->id,1) ? 'text-danger':'text-grey'?>"><i class="fas fa-heart"></i> Like</a>
										<a href="<?=base_url('homecontroller/addbookmarkandlikes/'.$grid_list->id.'/2')?>" class="card-link <?=test_method($grid_list->id,2) ? 'text-danger':'text-grey'?>"><i class="fas fa-bookmark"></i> Save</a>
										<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A//graduateresearchproject.com/book-details/<?=$grid_list->id?>"target="_blank" class="card-link"><i class="fas fa-share text-grey"></i> Share</a>
									</div>
								</div>
							</div>
						</div>
					</div><?php  } ?>
					
				<style>
				.shareicon a{
			    width: 40px;
			  
                   height: 40px;
		         float:right;
				 margin-right:0px!important;
				}
				.shareicon a i{
				font-size:20px!important;
				font-weight:bold;
				}
				.text-grey{
				color:grey!important;}
				</style>