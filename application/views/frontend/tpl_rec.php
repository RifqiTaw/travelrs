<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $this->config->item('apps_title') ?></title>
	<base href="<?= base_url() ?>" />

	<link rel="shortcut icon" href="assets/frontend/images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="assets/frontend/images/favicon.ico" type="image/x-icon">

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/frontend_limit/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/frontend_limit/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/frontend_limit/css/core.css" rel="stylesheet" type="text/css">
	<link href="assets/frontend_limit/css/components.css" rel="stylesheet" type="text/css">
	<link href="assets/frontend_limit/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->
    
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="assets/traveltemplate/img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="assets/traveltemplate/css/linearicons.css">
			<link rel="stylesheet" href="assets/traveltemplate/css/font-awesome.min.css">
			<link rel="stylesheet" href="assets/traveltemplate/css/bootstrap.css">
			<link rel="stylesheet" href="assets/traveltemplate/css/magnific-popup.css">
			<link rel="stylesheet" href="assets/traveltemplate/css/jquery-ui.css">				
			<link rel="stylesheet" href="assets/traveltemplate/css/nice-select.css">							
			<link rel="stylesheet" href="assets/traveltemplate/css/animate.min.css">
			<link rel="stylesheet" href="assets/traveltemplate/css/owl.carousel.css">				
			<link rel="stylesheet" href="assets/traveltemplate/css/main.css">

    <style>
	.content {
		padding: 0 10px 80px;
	}
	.page-header-default {
		margin-bottom: 10px;
	}
	.form-group {
		margin-bottom:10px;
	}
	.btn-table {
		padding:2px 8px !important;
		border-radius:0px !important;
	}
	.label-table {
		font-size:11px;
	}
	.center {
		text-align:center;
	}

	.yloading {
		width:100%;
		height:100%;
		padding:0px;
		margin:0px;
		top:0px;
		left:0px;
		background-color:rgba(51,51,51,0.5);
		z-index: 130299;
		position: fixed;
		display:none;
	}
	.loader-container {
		width: 150px;
		height: 150px;
		padding: 50px;
		background-color:#232323;
		color:#FFF;
		text-align: center;
		border-radius: 10px !important;
		position: fixed;
		z-index: 130300;
		left: 50%;
		top: 50%;
		margin-left: -150px;
		margin-top: -150px;

		box-sizing:content-box !important;
	}

	.theme_xbox, .theme_xbox_sm, .theme_xbox_xs {
		width: 100px;
		height: 100px;
	}

	.theme_xbox .pace_activity, .theme_xbox_sm .pace_activity, .theme_xbox_xs .pace_activity {
   		width: 150px;
    	height: 150px;
	}

	.theme_xbox .pace_activity, .theme_xbox .pace_activity::after, .theme_xbox .pace_activity::before, .theme_xbox_sm .pace_activity, .theme_xbox_sm .pace_activity::after, .theme_xbox_sm .pace_activity::before, .theme_xbox_xs .pace_activity, .theme_xbox_xs .pace_activity::after, .theme_xbox_xs .pace_activity::before {
		border-top-color: #61ED00;
	}

	.theme_xbox_with_text span {
		width:150px;
		margin-top: 7px;
	}
	</style>
</head>

<body class="<?= isset($body) && !empty($body) ? $body : '' ?>">
			<header id="header">
			</header><!-- #header -->
			  
			<!-- start banner Area -->
			<section style="margin-top:-50px;" class="about-banner relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Recommender				
							</h1>	
							<p class="text-white link-nav"><a href="<?= base_url() ?>">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?= base_url() ?>recommender"> Recommender</a></p>
						</div>	
					</div>
				</div>
			</section>

    <?php $this->load->view($view); ?>
</body>

</html>
