<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->
<head>
	<?php include("Meta.php");?>

	<title>Green Leaf Wild Life - Premium site template for a country accommodation.</title>

	<!-- Favicons-->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo site_url('img/favicon.ico');?>">
	<link rel="apple-touch-icon" type="image/x-icon" href="<?php echo site_url('img/apple-touch-icon-57x57-precomposed.png');?>">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo site_url('img/apple-touch-icon-72x72-precomposed.png');?>">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo site_url('img/apple-touch-icon-114x114-precomposed.png');?>">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo site_url('img/apple-touch-icon-144x144-precomposed.png');?>">

	<!-- Google web fonts -->
	<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>

	<!-- CSS -->
	<link href="<?php echo site_url('css/base.css');?>" rel="stylesheet">

	<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

	<!--[if lte IE 8]>
		<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
	<![endif]-->

	<div id="preloader">
		<div class="sk-spinner sk-spinner-wave">
			<div class="sk-rect1"></div>
			<div class="sk-rect2"></div>
			<div class="sk-rect3"></div>
			<div class="sk-rect4"></div>
			<div class="sk-rect5"></div>
		</div>
	</div>
	<!-- End Preload -->

	<div class="layer"></div>
	<!-- Mobile menu overlay mask -->

	<!-- Header================================================== -->
	<header>
		<div id="top_line">
			<div class="container">
			</div>
		</div>

		<div id="top_header">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-4">
						<div id="logo">
							<!--img/logo.png-->
							<a href="<?php echo site_url('Home');?>"><img src="" width="240" height="40" alt="Your Logo" data-retina="true"></a>
						</div>
					</div>
					<nav class="col-md-8 col-sm-8 col-xs-8">
						<a class="cmn-toggle-switch cmn-toggle-switch__rot  open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
						<div class="main-menu">
							<div id="header_menu">
								<img src="" width="240" height="40" alt="GreenLeafWildLife" data-retina="true">
							</div>
							<a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
							<ul>
								<li class="submenu">
									<a href="<?php echo site_url('Home');?>" class="show-submenu">Home </a>
								</li>
								<!--  <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Rooms <i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="rooms_list.html">Room list</a></li>
                                    <li><a href="room_details.html">Room details</a></li>
                                    <li><a href="room_booking.html">Room details Booking</a></li>
                                </ul>
                            </li> -->
								<li><a href="about.html">About</a></li>
								<li class="submenu">
									<a href="javascript:void(0);" class="show-submenu">Activities <i class="icon-down-open-mini"></i></a>
									<ul>
										<li><a href="#">All activities</a></li>
										<li><a href="#">Family activities</a></li>
										<li><a href="#">Corporate activities</a></li>
										<!-- <li><a href="cooking.html">Cooking local food</a></li>
                                    <li><a href="farm.html">Farm activities</a></li>-->
									</ul>
								</li>
								<li><a href="#">Contact us</a></li>
								<li><a href="fullscreen_gallery.html">Gallery</a></li>

								<!-- <li class="megamenu submenu">
                                <a href="javascript:void(0);" class="show-submenu-mega">Pages &amp; elements<i class="icon-down-open-mini"></i></a>
                                <div class="menu-wrapper">
                                    <div class="col-md-4">
                                        <h3>Pages</h3>
                                        <ul>
                                            <li><a href="gallery_3_columns.html">Gallery 3 columns</a></li>
                                           <li><a href="gallery_4_columns.html">Gallery 4 columns</a></li>
                                            <li><a href="fullscreen_gallery.html">Gallery fullscreen</a></li>
                                            <li><a href="404.html">404 Error page</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <h3>Pages</h3>
                                        <ul>
                                             <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog_post.html">Blog post</a></li>
                                            <li><a href="site_launch/index.html">Site launch / Coming soon</a></li>
                                            <li><a href="shortcodes.html"><i class="icon-tools"></i> Shortcodes</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <h3>Elements</h3>
                                        <ul>
                                            <li><a href="../boxed/index.html"><i class="icon-columns"></i> Boxed version</a></li>
                                            <li><a href="icon_pack_1.html"><i class="icon-inbox-alt"></i> Icon pack 1 (1900)</a></li>
                                            <li><a href="icon_pack_2.html"><i class="icon-inbox-alt"></i> Icon pack 2 (100)</a></li>
                                            <li><a href="icon_pack_3.html"><i class="icon-inbox-alt"></i> Icon pack 3(17)</a></li>
                                        </ul>
                                    </div>
                                </div><!-- End menu-wrapper -->
								<!--   </li>-->
							</ul>
						</div>
						<!-- End main-menu -->

					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- End Header -->

	<section class="header-video">
		<div id="hero_video">
			<div class="intro_title">
				<h1 class="animated fadeInDown">Green Leaf Wild Life</h1>
				<p class="animated fadeInDown">Family / Corporate Tours</p>
				<a href="#" class="animated fadeInUp button_intro">View Tours</a>
				<a href="#" class="animated fadeInUp button_intro outline hidden-sm hidden-xs">Activities</a>
				<a href="https://www.youtube.com/watch?v=Zz5cu72Gv5Y" class="video animated fadeInUp button_intro outline">Play video</a>
			</div>
		</div>
		<img src="img/video_fix.png" alt="" class="header-video--media" data-video-src="video/tree" data-teaser-source="video/tree" data-provider="Youtube" data-video-width="1920" data-video-height="960">
		<div id="general_decor"></div>
	</section>
	<!-- End Header video -->

	<div class="container margin_60 padd_bottom_20">
		<div class="main_title">
			<span></span>
			<h2>We love Wild Life</h2>
			<p>
				At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.
			</p>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="box_home">
					<i class="icon_set_2_icon-104"></i>
					<h3>Relaxing Accomodations</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box_home">
					<i class="icon_set_1_icon-24"></i>
					<h3>Amazing Scenery</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box_home">
					<i class="icon_set_1_icon-34"></i>
					<h3>Specially Designed Activities</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
					</p>
				</div>
			</div>
		</div>
		<!-- End row -->
	</div>
	<!-- End container -->

	<div class="bg_gray add_bottom_60">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="img_zoom">
						<a href="room_details.html"><img style="min-height:275px;" src="http://greenleafwildlife.com/wp-content/uploads/2015/06/tadoba7-580x460.jpg" alt="" class="img-responsive"></a>
					</div>
					<h3>Tour 1 <span class="price_home">$90<em></em></span></h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
					</p>
					<p>
						<a href="#" class="btn_1">Read more</a>
					</p>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="img_zoom">
						<a href="room_details.html"><img style="min-height:275px;" src="http://greenleafwildlife.com/wp-content/uploads/2015/07/IMG_1156-580x460.jpg" alt="" class="img-responsive"></a>
					</div>
					<h3>Tour 2 <span class="price_home">$120<em></em></span></h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
					</p>
					<p>
						<a href="#" class="btn_1">Read more</a>
					</p>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="img_zoom">
						<a href="room_details.html"><img style="min-height:275px;" src="http://greenleafwildlife.com/wp-content/uploads/2015/06/IMG-20150607-WA0016.jpg" alt="" class="img-responsive"></a>
					</div>
					<h3>Tour 3 <span class="price_home">$140<em></em></span></h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
					</p>
					<p>
						<a href="#" class="btn_1">Read more</a>
					</p>
				</div>
			</div>
			<!-- End row -->
		</div>
		<!-- End container -->
	</div>

	<div class="container add_bottom_60">
		<div class="main_title add_bottom_45">
			<span></span>
			<h2>Other stuff you may consider</h2>
			<p>
				At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.
			</p>
		</div>
		<div class="row">
			<div class="col-md-8" id="strip_activities">
				<ul>
					<li>
						<img src="img/activities_1_thumb.jpg" alt="" class="img-circle styled">
						<h4>Get A/C cars to commute</h4>
						<p>
							Ad cum movet fierent assueverit, mei stet legere ne. Mel at vide soluta, ut utamur antiopam inciderint sed. Ut iriure perpetua voluptaria has, vim postea denique in, mollis pertinax elaboraret sed in. Per no vidit timeam, quis omittam sed at. <a href="#" class="link_normal">Read more</a>
						</p>
					</li>
					<li><img src="img/activities_2_thumb.jpg" alt="" class="img-circle styled">
						<h4>Discover local but hygienic food </h4>
						<p>
							Ad cum movet fierent assueverit, mei stet legere ne. Mel at vide soluta, ut utamur antiopam inciderint sed. Ut iriure perpetua voluptaria has, vim postea denique in, mollis pertinax elaboraret sed in. Per no vidit timeam, quis omittam sed at. <a href="#" class="link_normal">Read more</a>
						</p>
					</li>
					<li><img src="img/activities_3_thumb.jpg" alt="" class="img-circle styled">
						<h4>Learn to take marvelous photos</h4>
						<p>
							Ad cum movet fierent assueverit, mei stet legere ne. Mel at vide soluta, ut utamur antiopam inciderint sed. Ut iriure perpetua voluptaria has, vim postea denique in, mollis pertinax elaboraret sed in. Per no vidit timeam, quis omittam sed at. <a href="#" class="link_normal">Read more</a>
						</p>
					</li>
					<li><img src="img/activities_4_thumb.jpg" alt="" class="img-circle styled">
						<h4>Enjoy clean & comfortable resorts, hotels</h4>
						<p>
							Ad cum movet fierent assueverit, mei stet legere ne. Mel at vide soluta, ut utamur antiopam inciderint sed. Ut iriure perpetua voluptaria has, vim postea denique in, mollis pertinax elaboraret sed in. Per no vidit timeam, quis omittam sed at. <a href="#" class="link_normal">Read more</a>
						</p>
					</li>
				</ul>
			</div>
			<div class="col-md-4">
				<div class="box_style_1 text-center">
					<p><img src="img/best_price.png" alt=""></p>
					<p>
						Id pri consul aeterno petentium. Vivendo abhorreant et vim, et quot persecuti mel. Libris hendrerit ex sea. Duo legere evertitur an, pri hinc <strong>doctus definitiones</strong> an, vix id dicam putent. Ius ornatus instructior in.
					</p>
					<p>
						Ad cum movet fierent assueverit, mei stet legere ne. Mel at vide soluta, ut utamur antiopam inciderint sed.
					</p>
				</div>
				<!-- End box_style_1 -->

				<a class="box_style_1 weahter" href="about.html">
					<i class="icon-light-up"></i> View Weahter forecast </a>
				<!-- End  weather-->

				<div id="banner">
					<h3><span>-30% OFF</span>This week only for all rooms!</h3>
				</div>
				<!-- End banner -->

			</div>
		</div>
		<!-- End row -->
	</div>
	<!-- End container -->

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 nopadding">
				<div class="features-bg">
					<div class="features-img">
					</div>
				</div>
			</div>
			<div class="col-md-6 nopadding">
				<div class="features-content">
					<h3>"Enjoy spectacular Wild Life"</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.
					</p>
					<p>
						<a href="#" class=" btn_1 white">Read more</a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- End container-fluid  -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-3">
					<h3>Contacts</h3>
					<ul id="contact_details_footer">
						<li>Route de Sablet 1023, Marseille<br>France 01923</li>
						<li><a href="tel://004542344599">+45 423 445 99</a> / <a href="tel://004542344599">+45 423 445 99</a></li>
						<li><a href="mailto:info@GreenLeafWildLife.com">info@GreenLeafWildLife.com</a></li>
					</ul>
				</div>
				<div class="col-md-2 col-sm-2">
					<h3>About</h3>
					<ul>
						<li><a href="#">About us</a></li>
						<!-- <li><a href="#">Rooms</a></li>-->
						<li><a href="#">Activities</a></li>
						<li><a href="#">Contact us</a></li>
						<li><a href="#">Gallery</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-3">
					<h3>Change language</h3>
					<ul>
						<li><a href="#">English</a></li>
						<li><a href="#">French</a></li>
						<li><a href="#">Spanish</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-3" id="newsletter">
					<h3>Newsletter</h3>
					<p>Join our newsletter to keep be informed about offers and news.</p>
					<div id="message-newsletter_2"></div>
					<form method="post" action="assets/newsletter.php" name="newsletter_2" id="newsletter_2">
						<div class="form-group">
							<input name="email_newsletter_2" id="email_newsletter_2" type="email" value="" placeholder="Your mail" class="form-control">
						</div>
						<input type="submit" value="Subscribe" class="btn_1 white" id="submit-newsletter_2">
					</form>
				</div>
			</div>
			<!-- End row -->
			<div class="row">
				<div class="col-md-12">
					<div id="social_footer">
						<ul>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-google"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
							<li><a href="#"><i class="icon-pinterest"></i></a></li>
							<li><a href="#"><i class="icon-vimeo"></i></a></li>
							<li><a href="#"><i class="icon-youtube-play"></i></a></li>
						</ul>
						<p>© GreenLeafWildLife 2015</p>
					</div>
				</div>
			</div>
			<!-- End row -->
		</div>
		<!-- End container -->
	</footer>
	<!-- End footer -->

	<div id="toTop"></div>
	<!-- Back to top button -->

	<!-- Common scripts -->
	<script src="<?php echo site_url('js/jquery-1.11.2.min.js');?>"></script>
	<script src="<?php echo site_url('js/common_scripts_min.js');?>"></script>
	<script src="<?php echo site_url('js/functions.js');?>"></script>
	<script src="<?php echo site_url('assets/validate.js');?>"></script>

	<!-- Specific scripts -->
	<script src="<?php echo site_url('js/modernizr.js');?>"></script>
	<script src="<?php echo site_url('js/video_header.js');?>"></script>
	<script>
		$(document).ready(function() {
			HeaderVideo.init({
				container: $('.header-video'),
				header: $('.header-video--media'),
				videoTrigger: $("#video-trigger"),
				autoPlayVideo: false
			});

		});
	</script>
</body>
</html>