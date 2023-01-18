

<!doctype html>
<html lang="en">


<!-- Mirrored from codervent.com/rukada/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Mar 2022 22:15:32 GMT -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="<?=base_url('assets/')?>/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="<?=base_url('assets/')?>/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
	<link href="<?=base_url('assets/')?>/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="<?=base_url('assets/')?>/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="<?=base_url('assets/')?>/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="<?=base_url('assets/')?>/css/pace.min.css" rel="stylesheet" />
	<script src="<?=base_url('assets/')?>/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="<?=base_url('assets/')?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=base_url('assets/')?>/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="<?=base_url('assets/')?>/css/app.css" rel="stylesheet">
	<link href="<?=base_url('assets/')?>/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="<?=base_url('assets/')?>/css/dark-theme.css" />
	<link rel="stylesheet" href="<?=base_url('assets/')?>/css/semi-dark.css" />
	<link rel="stylesheet" href="<?=base_url('assets/')?>/css/header-colors.css" />
	<title>Rukada - Responsive Bootstrap 5 Admin Template</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="<?=base_url('assets/')?>/images/logo-icon.png" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Rukada</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				
				<li class="menu-label">UI Elements</li>
				<li>
					<a href="dashboard">
						<div class="parent-icon"><i class='bx bx-cookie'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
                </li>
				<li>
					<a href="blog">
						<div class="parent-icon"><i class='bx bx-cookie'></i>
						</div>
						<div class="menu-title">Blogs</div>
					</a>
                </li>
				<li>
					<a href="poem">
						<div class="parent-icon"><i class='bx bx-cookie'></i>
						</div>
						<div class="menu-title">Poem</div>
					</a>
                </li>
				<li>
					<a href="ebook">
						<div class="parent-icon"><i class='bx bx-cookie'></i>
						</div>
						<div class="menu-title">EBook</div>
					</a>
                </li>
				
				<li>
					<a href="user">
						<div class="parent-icon"><i class='bx bx-cookie'></i>
						</div>
						<div class="menu-title">Register Customer </div>
					</a>
                </li>
                <li>
					<a href="widgets.html">
						<div class="parent-icon"><i class='bx bx-cookie'></i>
						</div>
						<div class="menu-title">Book Request </div>
					</a>
                </li>
				
				
			
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					<div class="search-bar flex-grow-1">
						<div class="position-relative search-bar-box">
							<input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
							<span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
						</div>
					</div>
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center">
							<li class="nav-item mobile-search-icon">
								<a class="nav-link" href="#">	<i class='bx bx-search'></i>
								</a>
							</li>
							
						</ul>
					</div>
					
				</nav>
			</div>
		</header>
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Dashboard</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Blogs</li>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->

				<div class="row">
					<div class="col-xl-12 mx-auto">
					    <div class="card border-top border-0 border-4 border-info">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<div><i class="bx bxs-user me-1 font-22 text-info"></i>
										</div>
										<h5 class="mb-0 text-info">Add Blogs</h5>
									</div>
									<hr/>
									<form action="<?=base_url('index.php/poem/addpoems')?>" method="POST" enctype="multipart/form-data">
										<?=$this->session->flashdata('message')?>
										<input type="hidden" name="id" value="<?php echo $blogdata->id ??  ""?>">
										
									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Enter Title</label>
										<div class="col-sm-9">
										
                                <span class="text-danger">dfh</span>
                            
											<input type="text" class="form-control" value="<?php echo $blogdata->title ??  ""?>" name="title" id="inputEnterYourName" placeholder="Enter Your Name">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputPhoneNo2" class="col-sm-3 col-form-label">Thumbnail Image</label>
										<div class="col-sm-9">
										
                                <span class="text-danger">iumage error</span>
                            
											<input type="file" name="thumb_img" class="form-control" id="inputPhoneNo2" placeholder="Phone No">
										</div>
										<?php if(isset($blogdata->thumb_img)) {?>
										<div class="col"> <img height="80" src="<?=base_url('upload/'.$blogdata->thumb_img)?>"></div>
									<?php } ?>
									</div>
									
									<div class="row mb-3">
										<label for="inputAddress4" class="col-sm-3 col-form-label">description</label>
										<div class="col-sm-9">
										
											<textarea class="form-control" name="description" id="description" rows="3" placeholder="Address"> <?php echo $blogdata->description ??  ""?></textarea>
										</div>
									</div>
									
									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<button type="submit" class="btn btn-info px-5">Save</button>
										</div>
									</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Sr No.</th>
										<th>Title</th>
										<th>Thumb Image</th>
										<th>Description</th>
										<th> date</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php  foreach ($blog_list as $key => $value): ?>
										
									
									<tr>
										<td><?=++$key?></td>
										<td><?=$value->title?></td>
										<td><img src="<?=base_url("upload/".$value->thumb_img)?>" height="80px" alt="job image" title="job image"></td>
										<td><?=$value->description?></td>
										<td><?=$value->created_at?></td>
										<td>
											<a href="<?=base_url("index.php/poem/update/".$value->id)?>" class="btn "> <i class="bx bx-pencil"></i> </a>
											<a href="<?=base_url("index.php/poem/delete/".$value->id)?>" class="btn btn"> <i class="bx bx-trash"></i> </a>
										</td>
									</tr>
								<?php endforeach ?>
									
									
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">booklanding © 2021. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="<?=base_url('assets/')?>/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="<?=base_url('assets/')?>/js/jquery.min.js"></script>
	<script src="<?=base_url('assets/')?>/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="<?=base_url('assets/')?>/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="<?=base_url('assets/')?>/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="<?=base_url('assets/')?>/plugins/chartjs/js/Chart.min.js"></script>
	<script src="<?=base_url('assets/')?>/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?=base_url('assets/')?>/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?=base_url('assets/')?>/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="<?=base_url('assets/')?>/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
	<script src="<?=base_url('assets/')?>/plugins/jquery-knob/excanvas.js"></script>
	<script src="<?=base_url('assets/')?>/plugins/jquery-knob/jquery.knob.js"></script>
	<script src="<?=base_url('assets/')?>/js/index.js"></script>
	<!--app JS-->
	<script src="<?=base_url('assets/')?>/js/app.js"></script>
	<script src="<?=base_url('assets/')?>/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url('assets/')?>/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script src="<?=base_url('assets/')?>/js/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>

	
	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>
	<script type="text/javascript">
    CKEDITOR.replace('description');
	</script>

</body>


<!-- Mirrored from codervent.com/rukada/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Mar 2022 22:16:12 GMT -->
</html>


