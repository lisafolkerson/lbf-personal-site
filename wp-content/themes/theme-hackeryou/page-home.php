<?php

/*
	Template Name: Custom Home Page
*/

get_header();  ?>

<div class="main clearfix">
  <div class="container clearfix">
      <div class="aboutMe">
        <?php // Start the loop ?>
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <!--       <h2><?php the_title(); ?></h2> -->
      <?php the_content(); ?>
      </div> <!-- end .aboutMe -->
      
      <div class="portfolioPieces" id="portfolio">

        <?php //going to pull in the latest 4 blog posts ?>
        <?php $latestPosts = new WP_Query(array(
        		'post_type' => 'portfolio', //only want portfolio posts
        		'posts_per_page' => 6
        )) ?>

        <?php if ($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post(); ?>

        	<div class="featuredPost">
        		<h2><?php the_title() ?></h2>
        	</div> <!--end featured post-->
        	
        <?php endwhile //end custom loop ?>
        <?php wp_reset_postdata(); //return env back to regular functionality?>

      </div> <!-- end .portfolioPieces-->

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>