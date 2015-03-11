<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link href='http://fonts.googleapis.com/css?family=Inconsolata|Chivo:400,400italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?> >
  <div class="bodyContainer container-with-background clearfix" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/whiteMarble.png)">
    <div class="border b-top"></div>
    <div class="border b-left"></div>
    <div class="border b-right"></div>
    <div class="border b-bottom"></div>
    <header>
      <div class="container clearfix">
          <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <img class="mainLogo" src="<?php bloginfo('template_directory'); ?>/img/lili_dev_logo.png" alt="Lisa Folkerson"></a>
            <?php // bloginfo( 'name' ); ?>         

        <?php wp_nav_menu( array(
          'container' => false,
          'theme_locations' => 'primary'
        )); ?>

      </div> <!-- /.container -->
    </header> <!--/.header-->

