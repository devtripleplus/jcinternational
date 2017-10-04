<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/controls.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/date.picker/css/bootstrap-datetimepicker-standalone.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/date.picker/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery-ui.css" />
    <script type="text/javascript" src="http://qddemo.isaaviations.com/js_scripts/ond.js"></script>
    
           
</head>

<body <?php body_class(); ?>>
<div class="wrapper">
    <header id="header">
        <div class="mainHeader myAcc">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

			<?php wp_nav_menu( array('menu'=> 'login register', 'menu_class' => 'pull-right') );?>
                        
                    </div>
                </div>
           </div>
        </div>
        <div class="mainHeader">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile bgcdisplay -->
                <div class="navbar-header">
                   
                    <a class="navbar-brand" href="<?php bloginfo('home');?>"><img src="<?php the_field('logo','options'); ?>" alt=""></a>
                     <button type="button" class="navbar-toggle"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <ul id="mobileNav" class="nav navbar-nav navbar-right visible-xs">
                            <li>
                            <a href="#" class="openSearch"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/iconSearch.png" alt=""></a>
                            
                            <div class="innerSearch ">
<!--
                        	<input type="text" class="searchInput">
                        	<button>
                        	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/iconSearch.png" alt="">
                        	</button>
                        	
-->
                           
                            <?php echo get_search_form( $echo ); ?>
                        	</div>
                            </li>
                          <li><?php dynamic_sidebar('language_switch'); ?></li>
                        <?php //echo do_shortcode('[google-translator]'); ?>
                    </ul>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="hidden2" id="bs-example-navbar-collapse-1" style="position:relative">
                	<ul class="nav navbar-nav navbar-right">

                        <li class="hidden-xs">
                        	<a href="#" class="openSearch hidden-xs">
                        		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/iconSearch.png" alt="">
                        	</a>
                        	<div class="innerSearch">
                             <?php echo get_search_form( $echo ); ?>
                        	
                        	</div>
                    	</li>
                        <li  class="hidden-xs">
                        	<?php //echo do_shortcode('[google-translator]'); ?>
                            <?php dynamic_sidebar('language_switch'); ?>
                        </li>
                    </ul>
                    
                   <?php  wp_nav_menu( array( 'menu' => 'main menu', 'menu_class' => 'nav navbar-nav navbar-right' ) ); ?>

                   <div class="dropDownBox">
                       <ul class="upperMenuDropDown">
                          <?php if(have_rows("menu","options")): while(have_rows("menu","options")): the_row(); ?>
                            <li class="col-md-3"><a href="<?php echo get_sub_field('link');?>"><img src="<?php echo get_sub_field('icon');?>" /> <span><?php echo get_sub_field('text');?></span></a></li>
                         <?php endwhile; endif; ?>
                       </ul>
                       <hr />
                      <?php  wp_nav_menu( array( 'menu' => 'DropDown Menu', 'menu_class' => 'belowMenuDropDown' ) ); ?>
                       
                   </div>
                </div>
                 <div class="clearfix"></div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </div>
    </header>
    <!-- / HEADER -->
