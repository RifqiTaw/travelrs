<!doctype html >
<!--[if IE 8]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang=en-US prefix="og: http://ogp.me/ns#" class="no-js"> <!--<![endif]-->
<head>
<meta charset=UTF-8 />
<title><?= $this->config->item('apps_title') ?></title>
<base href="<?= base_url() ?>" />
    
<!-- <link rel="shortcut icon" href="assets/frontend/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="assets/frontend/images/favicon.ico" type="image/x-icon">

<link rel=stylesheet id=td-theme-css href='assets/frontend/A.style.css,qver=7.8_d22434.pagespeed.cf.3ooS9wkokK.css' type='text/css' media=all />
<link rel=stylesheet id=td-theme-css href='assets/frontend/custom.css' type='text/css' media=all /> -->

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
</head>
<body class="<?= isset($body) ? $body : '' ?> td-animation-stack-type0 td-full-layout td-js-loaded">

<!-- <div class=td-scroll-up>
	<i class=td-icon-menu-up></i>
</div>

<div class=td-menu-background></div>

<div id=td-mobile-nav>
    <div class=td-mobile-container>
        <div class=td-menu-socials-wrap>
            <div class=td-menu-socials>
                <span class="td-social-icon-wrap">
                    <a target="_blank" href="https://www.facebook.com/soc.telkomuniversity/" title="Facebook"><i class="td-icon-font td-icon-facebook"></i></a>
                </span>
                <span class="td-social-icon-wrap">
                    <a target="_blank" href="https://www.facebook.com/groups/soc.telkomuniversity/" title="Facebook"><i class="td-icon-font td-icon-facebook"></i></a>
                </span>
                <span class="td-social-icon-wrap">
                    <a target="_blank" href="https://www.youtube.com/user/soctelkomuniv" title="Youtube"><i class="td-icon-font td-icon-youtube"></i></a>
                </span>
            </div>
            <div class=td-mobile-close>
            	<a href="#"><i class=td-icon-close-mobile></i></a>
            </div>
        </div>
        
        <div class=td-mobile-content>
        	<div class=menu-main-menu-container>
            	<ul id=menu-main-menu class=td-mobile-main-menu>
                	<?php $this->load->view('frontend/_menus', array('mode' => 'mobile')); ?>
        		</ul>
        	</div> 
        </div>
    </div>
</div>
 
<div class="td-search-background"></div>

<div class="td-search-wrap-mob">
    <div class="td-drop-down-search" aria-labelledby="td-header-search-button">
        <form class="td-search-form">
            <div class="td-search-close">
            	<a href="#"><i class=td-icon-close-mobile></i></a>
            </div>
            <div role="search" class="td-search-input">
                <span>Search</span>
                <input id="td-header-search-mob" type="text" value="" name="s" autocomplete="off" />
            </div>
        </form>
        <div id="td-aj-search-mob"></div>
    </div>
</div>

<div id=td-outer-wrap class=td-theme-wrap>
	<div class="td-header-wrap td-header-style-1">
        <div class="td-header-top-menu-full td-container-wrap ">
            <div class="td-container td-header-row td-header-top-menu">
                <div class=top-bar-style-1>
                    <div class=td-header-sp-top-menu>
                    	<?php $weather = y_weather(); ?>
                        <div class=td-weather-top-widget id=td_top_weather_uid>
                            <i class="td-icons <?= $weather['icon'] ?>"></i>
                            <div class=td-weather-now data-block-uid=td_top_weather_uid>
                                <span class=td-big-degrees><?= $weather['c'] ?></span>
                                <span class=td-weather-unit>C</span>
                            </div>
                            <div class=td-weather-header>
                                <div class=td-weather-city>Bandung, Indonesia</div>
                            </div>
                        </div>
                        <div class=td_data_time>
                            <div><?= y_date_text(date('Y-m-d')) ?></div>
                        </div>
                        <div class=menu-top-container>
                            <ul id=menu-top-menu class=top-header-menu>
                                <li class="menu-item td-menu-item td-normal-menu"><a href="http://soc.telkomuniversity.ac.id">School of Computing</a></li>
                                <li class="menu-item td-menu-item td-normal-menu"><a href="https://www.telkomuniversity.ac.id">Telkom University</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class=td-header-sp-top-widget>
                        
                    </div>
                </div>
            </div>
        </div>
        
        <div class="td-banner-wrap-full td-logo-wrap-full td-container-wrap ">
        <div class="td-container td-header-row td-header-header">
            <div class="td-header-sp-logo">
                <h1 class="td-logo"> 
                    <a class="td-main-logo" href="<?= base_url() ?>">
                    	<img class="td-retina-data" data-retina="assets/frontend/images/travel-crs-retina.png" src="assets/frontend/images/travel-crs.png">
                    </a>
                </h1> 
            </div>
            <div class="td-header-sp-recs">
            <div class="td-header-rec-wrap">
            <div class="td-a-rec td-a-rec-id-header">
                <div class="td-visible-desktop">
                	<a href="recommender" target="_blank"><img class="td-retina" style="max-width:728px" src="assets/frontend/images/banner.jpg" alt="" width="728" height="90"></a>
                </div>
                <div class="td-visible-tablet-landscape">
                	<a href="recommender" target="_blank"><img class="td-retina" style="max-width:728px" src="assets/frontend/images/banner.jpg" alt="" width="728" height="90"></a>
                </div>
                <div class="td-visible-tablet-portrait">
                	<a href="recommender" target="_blank"><img class="td-retina" style="max-width:468px" src="assets/frontend/images/banner.jpg" alt="" width="468" height="60"></a>
                </div>
            </div>
            </div> 
            </div>
        </div>
        </div>
        
        <div class="td-header-menu-wrap-full td-container-wrap ">
            <div class="td-header-menu-wrap td-header-gradient">
                <div class="td-container td-header-row td-header-main-menu y-menu">
                    <div id=td-header-menu role=navigation>
                        <div id=td-top-mobile-toggle><a href="#"><i class="td-icon-font td-icon-mobile"></i></a></div>
                        <div class="td-main-menu-logo td-logo-in-menu">
                            <a class="td-mobile-logo td-sticky-header" href="<?= base_url() ?>">
                                <img class="td-retina-data" data-retina="assets/frontend/images/travel-crs-retina.png" src="assets/frontend/images/travel-crs.png" alt="Fakultas Informatika Universitas Telkom"/>
                            </a>
                            <a class="td-header-logo td-sticky-header" href="<?= base_url() ?>">
                                <img class="td-retina-data" data-retina="assets/frontend/images/travel-crs-retina.png" src="assets/frontend/images/travel-crs.png" alt="Fakultas Informatika Universitas Telkom"/>
                            </a>
                        </div>
                        <div class="menu-main-menu-container">
                            <ul class="sf-menu">
                            	<?php $this->load->view('frontend/_menus', array('mode' => 'fullsite')); ?>
                            </ul>
                        </div>
                    </div>
        
        
                    <div class=td-search-wrapper>
                        <div id=td-top-search>
                            <div class=header-search-wrap>
                                <div class="dropdown header-search">
                                    <a id=td-header-search-button href="#" role=button class="dropdown-toggle " data-toggle=dropdown><i class=td-icon-search></i></a>
                                    <a id=td-header-search-button-mob href="#" role=button class="dropdown-toggle " data-toggle=dropdown><i class=td-icon-search></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-search-wrap">
                        <div class="dropdown header-search">
                            <div class="td-drop-down-search" aria-labelledby="td-header-search-button">
                                <form class="td-search-form">
                                    <div role="search" class="td-head-form-search-wrap">
                                        <input id="td-header-search" type="text" value="" name="s" autocomplete="off" />
                                        <input class="wpb_button wpb_btn-inverse btn" id="td-header-search-top" value="Search" type="submit" />
                                    </div>
                                </form>
                                <div id="td-aj-search"></div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
	</div> -->
    <body>	
			<header id="header">
				<div class="header-top">
					<div class="container">
			  		<div class="row align-items-center">
			  			<div class="col-lg-6 col-sm-6 col-6 header-top-left">
			  				<ul>
			  					<li><a href="https://www.telkomuniversity.ac.id">Telkom University</a></li>
			  					<li><a href="https://soc.telkomuniversity.ac.id">School of Computing</a></li>
			  				</ul>			
			  			</div>
			  			<div class="col-lg-6 col-sm-6 col-6 header-top-right">
							<div class="header-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
							</div>
			  			</div>
			  		</div>			  					
					</div>
				</div>
				<div class="container main-menu">
					<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="assets/traveltemplate/img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li><a href="<?= base_url() ?>">Home</a></li>
				          <li><a href="<?= base_url() ?>places">Places</a></li>
				          <li><a href="<?= base_url() ?>recommender">Recommender</a></li>
				      </nav><!-- #nav-menu-container -->					      		  
					</div>
				</div>
			</header><!-- #header -->
			
			<!-- start banner Area -->
			<section class="banner-area relative">
				<div class="overlay overlay-bg"></div>				
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 banner-left">
							<h1 class="text-white">Plan your travel</h1>
							<p class="text-white">
								Dapatkan rekomendasi wisata selama anda berlibur di bandung berdasarkan preferensi anda.
							</p>
							<a href="<?= base_url() ?>recommender" class="primary-btn text-uppercase">Get Started</a>
						</div>
					</div>
				</div>					
			</section>
    
    
    <!-- content -->
    <?php $this->load->view($view); ?>
    <!-- end main content -->
    
    <!-- main footer -->
    <?php $this->load->view('frontend/_footer'); ?>
    <!-- end main footer -->
</div>


            <script src="assets/traveltemplate/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="assets/traveltemplate/js/popper.min.js"></script>
			<script src="assets/traveltemplate/js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>		
 			<script src="assets/traveltemplate/js/jquery-ui.js"></script>					
  			<script src="assets/traveltemplate/js/easing.min.js"></script>			
			<script src="assets/traveltemplate/js/hoverIntent.js"></script>
			<script src="assets/traveltemplate/js/superfish.min.js"></script>	
			<script src="assets/traveltemplate/js/jquery.ajaxchimp.min.js"></script>
			<script src="assets/traveltemplate/js/jquery.magnific-popup.min.js"></script>						
			<script src="assets/traveltemplate/js/jquery.nice-select.min.js"></script>					
			<script src="assets/traveltemplate/js/owl.carousel.min.js"></script>							
			<script src="assets/traveltemplate/js/mail-script.js"></script>	
			<script src="assets/traveltemplate/js/main.js"></script>
<!-- <link rel="stylesheet" id="google-fonts-style-css" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400,400italic,600,600italic,700|Roboto:300,400,400italic,500,500italic,700,900&ver=127" type="text/css" media="all" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js?ver=1.11.1"></script>
<script type="text/javascript" src="assets/frontend/js/tagdiv_theme.min.js,qver=7.8_d22434.pagespeed.jm.cxO6E7x8G4.js"></script> -->

<script>var td_is_safari=false;var td_is_ios=false;var td_is_windows_phone=false;var ua=navigator.userAgent.toLowerCase();var td_is_android=ua.indexOf('android')>-1;if(ua.indexOf('safari')!=-1){if(ua.indexOf('chrome')>-1){}else{td_is_safari=true;}}if(navigator.userAgent.match(/(iPhone|iPod|iPad)/i)){td_is_ios=true;}if(navigator.userAgent.match(/Windows Phone/i)){td_is_windows_phone=true;}if(td_is_ios||td_is_safari||td_is_windows_phone||td_is_android){if(top.location!=location){top.location.replace('https://demo.tagdiv.com/newspaper/');}}var tdBlocksArray=[];function tdBlock(){this.id='';this.block_type=1;this.atts='';this.td_column_number='';this.td_current_page=1;this.post_count=0;this.found_posts=0;this.max_num_pages=0;this.td_filter_value='';this.is_ajax_running=false;this.td_user_action='';this.header_color='';this.ajax_pagination_infinite_stop='';}(function(){var htmlTag=document.getElementsByTagName("html")[0];if(navigator.userAgent.indexOf("MSIE 10.0")>-1){htmlTag.className+=' ie10';}if(!!navigator.userAgent.match(/Trident.*rv\:11\./)){htmlTag.className+=' ie11';}if(/(iPad|iPhone|iPod)/g.test(navigator.userAgent)){htmlTag.className+=' td-md-is-ios';}var user_agent=navigator.userAgent.toLowerCase();if(user_agent.indexOf("android")>-1){htmlTag.className+=' td-md-is-android';}if(-1!==navigator.userAgent.indexOf('Mac OS X')){htmlTag.className+=' td-md-is-os-x';}if(/chrom(e|ium)/.test(navigator.userAgent.toLowerCase())){htmlTag.className+=' td-md-is-chrome';}if(-1!==navigator.userAgent.indexOf('Firefox')){htmlTag.className+=' td-md-is-firefox';}if(-1!==navigator.userAgent.indexOf('Safari')&&-1===navigator.userAgent.indexOf('Chrome')){htmlTag.className+=' td-md-is-safari';}if(-1!==navigator.userAgent.indexOf('IEMobile')){htmlTag.className+=' td-md-is-iemobile';}})();var tdLocalCache={};(function(){"use strict";tdLocalCache={data:{},remove:function(resource_id){delete tdLocalCache.data[resource_id];},exist:function(resource_id){return tdLocalCache.data.hasOwnProperty(resource_id)&&tdLocalCache.data[resource_id]!==null;},get:function(resource_id){return tdLocalCache.data[resource_id];},set:function(resource_id,cachedData){tdLocalCache.remove(resource_id);tdLocalCache.data[resource_id]=cachedData;}};})();var tds_login_sing_in_widget="show";var td_viewport_interval_list=[{"limitBottom":767,"sidebarWidth":228},{"limitBottom":1018,"sidebarWidth":300},{"limitBottom":1140,"sidebarWidth":324}];var td_animation_stack_effect="type0";var tds_animation_stack=true;var td_animation_stack_specific_selectors=".entry-thumb, img";var td_animation_stack_general_selectors=".td-animation-stack img, .td-animation-stack .entry-thumb, .post img";var td_ajax_url="https:\/\/demo.tagdiv.com\/newspaper\/wp-admin\/admin-ajax.php?td_theme_name=Newspaper&v=7.8_d22434";var td_get_template_directory_uri="assets\/frontend\/";var tds_snap_menu="smart_snap_always";var tds_logo_on_sticky="show_header_logo";var tds_header_style="";var td_please_wait="Please wait...";var td_email_user_pass_incorrect="User or password incorrect!";var td_email_user_incorrect="Email or username incorrect!";var td_email_incorrect="Email incorrect!";var tds_more_articles_on_post_enable="";var tds_more_articles_on_post_time_to_wait="";var tds_more_articles_on_post_pages_distance_from_top=0;var tds_theme_color_site_wide="#4db2ec";var tds_smart_sidebar="enabled";var tdThemeName="Newspaper";var td_magnific_popup_translation_tPrev="Previous (Left arrow key)";var td_magnific_popup_translation_tNext="Next (Right arrow key)";var td_magnific_popup_translation_tCounter="%curr% of %total%";var td_magnific_popup_translation_ajax_tError="The content from %url% could not be loaded.";var td_magnific_popup_translation_image_tError="The image #%curr% could not be loaded.";var td_ad_background_click_link="";var td_ad_background_click_target="";</script>

</body>
</html>
