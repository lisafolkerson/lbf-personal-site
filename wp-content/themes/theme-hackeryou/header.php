<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/lisa-favicon.png"> 
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">

  <link href='http://fonts.googleapis.com/css?family=Inconsolata|Lato:300,400,400italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class('preload'); ?> >
  <div class="bodyContainer container-with-background clearfix" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/whiteMarble.png)" id="top">
    <div class="border b-top"></div>
    <div class="border b-left"></div>
    <div class="border b-right"></div>
    <div class="border b-bottom"></div>
    <header>
      <div class="container clearfix">

        <div class="main-animater">
            <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
          <img class="mainLogo logo1" src="<?php bloginfo('template_directory'); ?>/img/lisaLine.svg" alt="Lisa Folkerson"><img class="mainLogo logo2" src="<?php bloginfo('template_directory'); ?>/img/titleLine.svg" alt="Lisa Folkerson"></a>
              <?php // bloginfo( 'name' ); ?>
          </div><!-- end .main-animate-->           

        <div class="menu smoothScroll"><?php 
        $menuParameters = array(
        'menu_location' => 'primary',
          'container'       => false,
          'echo'            => false,
          'items_wrap'      => '%3$s',
          'depth'           => 0,
        );

        echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' ); ?>
        </div>

      </div> <!-- /.container -->
    </header> <!--/.header-->

