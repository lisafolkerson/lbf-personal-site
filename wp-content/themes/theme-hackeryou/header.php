<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<div class="border b-top"></div>
<div class="border b-left"></div>
<div class="border b-right"></div>
<div class="border b-bottom"></div>
<header>
  <div class="container">
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
    <img class="mainLogo" src="<?php bloginfo('template_directory'); ?>/img/lili_dev_logo.png" alt="Lisa Folkerson">
    <h1>
        <?php // bloginfo( 'name' ); ?>
      </a>
    </h1>

    <?php wp_nav_menu( array(
      'container' => false,
      'theme_locations' => 'primary'
    )); ?>
  </div> <!-- /.container -->
</header><!--/.header-->

