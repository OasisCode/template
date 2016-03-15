<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package oasiscode
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

		<header id="masthead" class="site-header" role="banner">
		
			<nav class="navbar navbar-default" role="navigation"> 
				<div class="container">			  
				  <!-- Brand and toggle get grouped for better mobile display --> 
				  <div class="navbar-header"> 
				    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> 
				      <span class="sr-only">Toggle navigation</span> 
				      <span class="icon-bar"></span> 
				      <span class="icon-bar"></span> 
				      <span class="icon-bar"></span> 
				    </button> 
				    <a class="navbar-brand" href="<?php echo bloginfo('wpurl'); ?>">
				    <?php bloginfo( 'name' ); ?>
				    </a> 
				  </div> 	

				  <!-- Collect the nav links, forms, and other content for toggling --> 
				  <div class="collapse navbar-collapse navbar-ex1-collapse"> 
				    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'nav navbar-nav' ) ); ?>
				  </div> <!-- /.navbar-collapse -->
				</div> <!-- end of container -->
			</nav>

		</header><!-- end of masthead -->

		<div id="content" class="site-content">
