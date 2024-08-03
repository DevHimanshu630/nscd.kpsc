<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 *
 * @package WordPress
 * @subpackage kuru museum
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- Icon css link -->
<link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">

<!-- Bootstrap -->
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">


<!-- Rev slider css -->
<link href="<?php echo get_template_directory_uri(); ?>/vendors/revolution/css/settings.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/vendors/revolution/css/layers.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/vendors/revolution/css/navigation.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/vendors/animate-css/animate.css" rel="stylesheet">

<!-- Extra plugin css -->
<link href="<?php echo get_template_directory_uri(); ?>/vendors/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/vendors/magnific-popup/magnific-popup.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/vendors/animate-css/news_site.css" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php //body_class(); ?>>

<!--================Header Area =================-->
<header class="main_header_area">
  <div class="header_top">

    <div class="container">
      <div class="pull-left"> <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a>
         <?php //the_custom_logo(); ?>
      </div>
      <div class="pull-right">
        <div class="header_c_text">
          <h4><i class="fa fa-phone fa-2x"></i> Call us<br>01744-251100, 270810 </h4>
        </div>
        <div class="header_c_text">
          <h4><i class="fa fa-clock-o fa-2x"></i> Museum opening hours: <br>10AM to 5PM. Open all days</h4>
        </div>
        <div class="header_c_text">
          <h4><i class="fa fa-envelope-o fa-2x"></i> Email Us<br>kpsckkr@gmail.com </h4>
        </div>
        <div class="header_c_text"><a class="quote_btn" href="#">Online Booking</a>
          </div>
       <div class="header_c_text" style="top:-16px;"><?php if ( function_exists( 'mltlngg_display_switcher' ) ) mltlngg_display_switcher(); ?> </div>
      </div>
    </div>
  </div>
  <div class="main_menu_area">
    <nav class="navbar navbar-default">
      <div class="container"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
		'menu_class'        => 'nav navbar-nav',
	) ); ?>
          
          <ul class="nav navbar-nav navbar-right">
            <li>
             <div class="input-group">
                <!-- <input type="text" class="form-control" placeholder="Search here...">
                <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                </span> --> 
                 <?php get_search_form(); ?>
                </div>
              
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse --> 
      </div>
      <!-- /.container --> 
    </nav>
  </div>
</header>
<!--================End Header Area =================--> 




