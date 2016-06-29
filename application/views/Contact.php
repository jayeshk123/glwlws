<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>
    <?php include("Meta.php");?>
    <title>Country Holidays - Contact us</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- Google web fonts -->
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
    
    <!-- BASE CSS -->
    <link href="<?php echo site_url(); ?>/css/base.css" rel="stylesheet">

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
                <?php require("Nav.php");?>
            </div>
            </div>
        </div>
    </header><!-- End Header -->

 <div id="map"> </div><!-- end map-->

   <div id="position">
   	<div id="map_decor"></div>
    	<div class="container">
                	<ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Contact</a></li>
                    </ul>
        </div>
    </div><!-- End Position -->

    <div class="container margin_60">
    	<div class="row">
        	<div class="col-md-8">
            
            <div id="message-contact"></div>
				<form method="post" action="<?php echo site_url(); ?>/assets/contact.php" id="contactform">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>First Name</label>
								<input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="Enter Name">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Last Name</label>
								<input type="text" class="form-control" id="lastname_contact" name="lastname_contact" placeholder="Enter Last Name">
							</div>
						</div>
					</div>
					<!-- End row -->
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Email</label>
								<input type="email" id="email_contact" name="email_contact" class="form-control" placeholder="Enter Email">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Phone</label>
								<input type="text" id="phone_contact" name="phone_contact" class="form-control" placeholder="Enter Phone number">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Message</label>
								<textarea id="message_contact" name="message_contact" class="form-control" placeholder="Write your message" style="height:150px;"></textarea>
							</div>
						</div>
					</div>
					<div class="row add_bottom_30">
						<div class="col-md-6">
                        	<div class="form-group">
                                <label>Human verification</label>
                                <input type="text" id="verify_contact" class=" form-control add_bottom_30" placeholder="Are you human? 3 + 1 =">
                            </div>
							<input type="submit" value="Submit" class="btn_1" id="submit-contact">
						</div>
					</div>
				</form>               
            </div><!-- End col-md-8 -->
            
            <div class="col-md-4">
            	<div class="box_style_1">
                	<h3>Contacts</h3>
                    <h5>Address</h5>
                    <p>Route de Sablet 1023, Marseille<br>France 01923</p>
                    <h5>Telephone</h5>
                    <p><a href="tel://004542344599">+45 423 445 99</a> / <a href="tel://004542344599">+45 423 445 99</a></p>
                    <h5>Email</h5>
                    <p><a href="mailto:info@countryholidays.com">info@countryholidays.com</a></p>
                    <p>His civibus tacimates ex, an quo nominavi qualisque. In erant dissentiunt vel, dicit legimus docendi an nam. Te congue perfecto eos, aliquid corrumpit ea est, eam petentium repudiandae ad.</p>
                </div>
            </div><!-- End col-md-4 -->
        </div><!-- End row -->
    </div><!-- End Container -->
    
 <?php require("Footer.php");?>

<div id="toTop"></div><!-- Back to top button -->

<!-- Common scripts -->
<script src="<?php echo site_url(); ?>/js/jquery-1.11.2.min.js"></script>
<script src="<?php echo site_url(); ?>/js/common_scripts_min.js"></script>
<script src="<?php echo site_url(); ?>/js/functions.js"></script>
<script src="<?php echo site_url(); ?>/assets/validate.js"></script>

<!-- Specifi scripts -->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/js/mapmarker.jquery.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/js/mapmarker_func.jquery.js"></script>

</body>

</html>