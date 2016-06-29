<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>
	<?php $this->load->view('Meta.php'); ?>
	
    <title>Green Leaf Wild Life - Bird Watching</title>

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
   
    <!-- BASE CSS -->
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
                        <ul id="top_links">
                        </ul>
            </div><!-- End container-->
        </div><!-- End top line-->
        
        <div id="top_header">
        	<div class="container">
            	<div class="row">
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <div id="logo">
                        <a href="<?php echo site_url('Home');?>"><img src="#"  alt="Your Logo" data-retina="true"></a>
                    </div>
                </div>
                <?php $this->load->view('Nav.php'); ?>
            </div>
            </div>
        </div>
    </header><!-- End Header -->

   <section class="sub_header" id="bg_room">
        <div class="sub_header_content">
            <div class="animated fadeInDown">
                <h1>All Activities</h1>
                <p>
                    Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.
                </p>
            </div>
        </div>
    </section><!-- End Section -->

	<div id="position">
    	<div class="container">
                	<ul>
                    	<li><a href="<?php echo site_url("Home");?>">Home</a></li>
                    	<li><a href="<?php echo site_url("Activities");?>">All Activities</a></li>
                    </ul>
        </div>
    </div><!-- End Position -->

<div class="container margin_60">
	<div class="row">
		<div class="col-lg-9 col-md-8">
			<div class="strip_all_rooms_list wow fadeIn" data-wow-delay="0.1s">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="img_list">
							<a href="#"><img src="<?php echo site_url();?>/img/room_list_1.jpg" alt=""></a>
						</div>
					</div>
					<div class="clearfix visible-xs-block">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="rooms_list_desc">
							<h3><strong>Jungle Safari</strong></h3>
							<p>
								Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit....
							</p>
							<ul class="add_info">
								<li>
								<a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Plasma TV with cable channels"><i class="icon_set_2_icon-116"></i></a>
								</li>
								<li>
								<a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Breakfast included"><i class="icon_set_1_icon-59"></i></a>
								</li>
								<li>
								<a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="King size bed"><i class="icon_set_2_icon-104"></i></a>
								</li>
								<li>
								<a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Shower"><i class="icon_set_2_icon-118"></i></a>
								</li>
								<li>
								<a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="No smoking"><i class="icon_set_1_icon-47"></i></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2">
						<div class="price_list">
							<div>
								<sup>$</sup>89*<span class="normal_price_list">$99</span><small>*Pax/Per night</small>
								<p>
									<a href="#" class="btn_1">Details</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div><!--End strip -->
            
			<div class="strip_all_rooms_list wow fadeIn" data-wow-delay="0.2s">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="img_list">
							<a href="#"><img src="<?php echo site_url();?>/img/room_list_2.jpg" alt=""></a>
						</div>
					</div>
					<div class="clearfix visible-xs-block">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="rooms_list_desc">
							<h3><strong>Bird Watching</strong></h3>
							<p>
								Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit....
							</p>
							<ul class="add_info">
								<li>
								<a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Plasma TV with cable channels"><i class="icon_set_2_icon-116"></i></a>
								</li>
								<li>
								<a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Breakfast included"><i class="icon_set_1_icon-59"></i></a>
								</li>
								<li>
								<a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="King size bed"><i class="icon_set_2_icon-104"></i></a>
								</li>
								<li>
								<a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Shower"><i class="icon_set_2_icon-118"></i></a>
								</li>
								<li>
								<a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="No smoking"><i class="icon_set_1_icon-47"></i></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2">
						<div class="price_list">
							<div>
								<sup>$</sup>89*<span class="normal_price_list">$99</span><small>*Pax/Per night</small>
								<p>
									<a href="#" class="btn_1">Details</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div><!--End strip -->
            
			<div class="strip_all_rooms_list wow fadeIn" data-wow-delay="0.3s">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="img_list">
							<a href="#"><img src="<?php echo site_url();?>/img/room_list_3.jpg" alt=""></a>
						</div>
					</div>
					<div class="clearfix visible-xs-block">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="rooms_list_desc">
							<h3><strong>Photography</strong></h3>
							<p>
								Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit....
							</p>
							<ul class="add_info">
								<li>
								<a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Plasma TV with cable channels"><i class="icon_set_2_icon-116"></i></a>
								</li>
								<li>
								<a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Breakfast included"><i class="icon_set_1_icon-59"></i></a>
								</li>
								<li>
								<a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="King size bed"><i class="icon_set_2_icon-104"></i></a>
								</li>
								<li>
								<a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Shower"><i class="icon_set_2_icon-118"></i></a>
								</li>
								<li>
								<a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="No smoking"><i class="icon_set_1_icon-47"></i></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2">
						<div class="price_list">
							<div>
								<sup>$</sup>89*<span class="normal_price_list">$99</span><small>*Pax/Per night</small>
								<p>
									<a href="#" class="btn_1">Details</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div><!--End strip -->
			
			<div class="strip_all_rooms_list wow fadeIn" data-wow-delay="0.3s">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="img_list">
							<a href="#"><img src="<?php echo site_url();?>/img/room_list_3.jpg" alt=""></a>
						</div>
					</div>
					<div class="clearfix visible-xs-block">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="rooms_list_desc">
							<h3><strong>Jungle Trail</strong></h3>
							<p>
								Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit....
							</p>
							<ul class="add_info">
								<li>
								<a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Plasma TV with cable channels"><i class="icon_set_2_icon-116"></i></a>
								</li>
								<li>
								<a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Breakfast included"><i class="icon_set_1_icon-59"></i></a>
								</li>
								<li>
								<a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="King size bed"><i class="icon_set_2_icon-104"></i></a>
								</li>
								<li>
								<a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Shower"><i class="icon_set_2_icon-118"></i></a>
								</li>
								<li>
								<a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="No smoking"><i class="icon_set_1_icon-47"></i></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2">
						<div class="price_list">
							<div>
								<sup>$</sup>89*<span class="normal_price_list">$99</span><small>*Pax/Per night</small>
								<p>
									<a href="#" class="btn_1">Details</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div><!--End strip -->
		</div><!-- End col-lg-9 -->
        
		<div class="col-lg-3 col-md-4">
			<div class="box_style_1" id="general_facilities">
				<h3>General facilities</h3>
				<ul>
					<li><i class="icon_set_1_icon-86"></i>Free Wifi</li>
					<li><i class="icon_set_2_icon-103"></i>Loundry service</li>
					<li><i class="icon_set_2_icon-110"></i>Swimming pool</li>
					<li><i class="icon_set_1_icon-58"></i>Restaurant</li>
					<li><i class="icon_set_1_icon-27"></i>Parking</li>
				</ul>
				<p>
					His <strong>civibus tacimates</strong> ex, an quo nominavi qualisque. In erant dissentiunt vel, dicit legimus docendi an nam. Te congue perfecto eos, aliquid corrumpit ea est, eam petentium repudiandae ad.
				</p>
			</div>
			<div class=" box_style_2">
				<i class="icon_set_1_icon-90"></i>
				<h4>Need help? Call us</h4>
				<a href="tel://004542344599" class="phone">+45 423 445 99</a>
				<small>Monday to Friday 9.00am - 7.30pm</small>
			</div>
		</div><!-- End col-lg-3 -->
	</div><!-- End row -->
</div><!-- End Container -->
<?php $this->load->view('Footer.php'); ?>

<div id="toTop"></div><!-- Back to top button -->

<!-- Common scripts -->
<script src="<?php echo site_url('js/jquery-1.11.2.min.js');?>"></script>
<script src="<?php echo site_url('js/common_scripts_min.js');?>"></script>
<script src="<?php echo site_url('js/functions.js');?>"></script>
<script src="<?php echo site_url('assets/validate.js');?>"></script>

</body>
</html>