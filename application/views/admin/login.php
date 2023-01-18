<?php date_default_timezone_set('Asia/Kolkata'); ?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codervent.com/rukada/demo/vertical/authentication-lock-screen.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Mar 2022 22:20:12 GMT -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="<?=base_url('assets/')?>images/favicon-32x32.png" type="image/png" />
	<!-- loader-->
	<link href="<?=base_url('assets/')?>css/pace.min.css" rel="stylesheet" />
	<script src="<?=base_url('assets/')?>js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="<?=base_url('assets/')?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=base_url('assets/')?>css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="<?=base_url('assets/')?>css/app.css" rel="stylesheet">
	<link href="<?=base_url('assets/')?>css/icons.css" rel="stylesheet">
	<title>Rukada - Responsive Bootstrap 5 Admin Template</title>
</head>

<body class="bg-lock-screen">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="authentication-lock-screen d-flex align-items-center justify-content-center">
			<form action="<?=base_url('index.php/admin/login')?>" method="post">
			<div class="card shadow-none bg-transparent">
				<div class="card-body p-md-5 text-center">
					<h2 class="text-white"><?=date('h:i A');?></h2>
					<h5 class="text-white"> <?= date("d");?> ,<?= date('F, Y')?></h5>
					<div class="">
						<img src="<?=base_url('assets/')?>images/icons/user.png" class="mt-5" width="120" alt="" />
					</div>
					<p class="mt-2 text-white">Administrator</p>
					<?=$this->session->flashdata('message')?>
					<div class="mb-3 mt-3">
						<input type="password" name="password" class="form-control" placeholder="Password" />
					</div>
					<div class="d-grid">
						<button type="submit" class="btn btn-white">Login</button>
					</div>
				</div>
			</div>
			 </form>
		</div>
	</div>
	<!-- end wrapper -->
</body>


<!-- Mirrored from codervent.com/rukada/demo/vertical/authentication-lock-screen.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Mar 2022 22:20:12 GMT -->
</html>