<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>
   <?php include("Meta.php");?>
    <title>Country Holidays</title>

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
    <link href="<?php echo site_url();?>/css/base.css" rel="stylesheet">
    
    <!-- SPECIFIC CSS -->
    <link href="<?php echo site_url();?>/css/supersized.css" rel="stylesheet" >
	<link href="<?php echo site_url();?>/css/supersized.shutter.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->


</head>
<body>

<a href="<?php echo site_url('Home');?>" id="close"></a>
<!--Arrow Navigation-->
<a id="prevslide" class="load-item"></a>
<a id="nextslide" class="load-item"></a>
<div id="slidecaption" ></div>

<!-- Common scripts -->
    <script src="<?php echo site_url();?>/js/jquery-1.11.2.min.js"></script>
  <script src="<?php echo site_url();?>/js/common_scripts_min.js"></script>
    <script src="<?php echo site_url();?>/js/functions.js"></script>

     
     <!-- Specific scripts -->
<script src="<?php echo site_url();?>/js/jquery.easing.min.js"></script>
<script src="<?php echo site_url();?>/js/supersized.3.2.7.min.js"></script>
<script src="<?php echo site_url();?>/js/supersized.shutter.min.js"></script>
<script>
jQuery(function($){
$.supersized({
slides :  	[			// Slideshow Images
{image : 'http://greenleafwildlife.com/wp-content/uploads/2015/06/cobra.jpg', title : 'Amazing places<span>Lorem ipsum dolor sit amet, lacus <a href="#"> sollicitudin nullam</a>.</span>'},
{image : 'http://greenleafwildlife.com/wp-content/uploads/2015/06/girgit.jpg', title : 'Amazing places<span>Lorem ipsum dolor sit amet, lacus.</span>'},
{image : 'http://greenleafwildlife.com/wp-content/uploads/2015/06/frog.jpg', title : 'Amazing places<span>Lorem ipsum dolor sit amet, lacus.</span>'},
{image : '<?php echo site_url();?>/img/gallery_fullscreen/3.jpg', title : 'Amazing places<span>Lorem ipsum dolor sit amet, lacus dictum urna sollicitudin nullam ac.</span>'} // Last has no comma
]				
});
});
</script>
</body>
</html>