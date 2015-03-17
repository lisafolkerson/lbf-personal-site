<?php

/*
	Template Name: Custom Home Page
*/

get_header();  ?>

<div class="main clearfix">
  <div class="aboutMe clearfix">
    <a href="#portfolio" class="smoothScroll"><p class="downArrow smoothScroll">&#10553;</p></a>
    

     <?php // Start the loop ?>
     <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
   
   <?php the_content(); ?>
   </div> <!-- end .aboutMe -->
   
   <div class="portfolioPieces" id="portfolio">
   
     <?php //going to pull in the latest blog posts ?>
     <?php $latestPosts = new WP_Query(array(
         'post_type' => 'portfolio', //only want portfolio posts
     )) ?>
   
     <?php if ($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post(); ?>
   
       <div class="featuredPost">
         <div class="ft-img"><a target="_blank" href="<?php the_field( 'live_link' ) ?>">
           <?php the_post_thumbnail('custom_size'); ?>
           </a>
         </div> <!-- end .ft-img-->
         <div class="rightInfo">
           <h2><a target="_blank" href="<?php the_field( 'live_link' ) ?>"><?php the_title() ?></a></h2>
           <p><?php the_field( 'short_desc' ); ?></p>
           <p class="builtWith">// Built with: </p>
             <div class="inclTags"><p class="tags"><?php the_terms($post->ID, 'technologies', ' ', '+', ' '); ?></p>
           </div>
           <div class="linkToLive">
            <?php if( get_field('live_link') ): ?>
             <a target="_blank" href="<?php the_field( 'live_link' ) ?>">
           <?php endif; ?>
             ✿  View it Live</a><br>
             <?php if( get_field('git_link') ): ?>
             <a target="_blank" href="<?php the_field( 'git_link' ) ?>">
             ✿  View it on Github</a>
             <?php endif; ?>
           </div><!--end .linkToLive-->
         </div> <!--end .rightInfo -->
   
   
       </div> <!--end featured post-->
       
     <?php endwhile //end custom loop ?>
     <?php wp_reset_postdata(); //return env back to regular functionality?>
   
   </div> <!-- end .portfolioPieces-->
   <section class="contactForm" id="contact">
     <div class="offset-img">
        <?php get_the_post_thumbnail('medium'); ?>
      </div> <!-- end offset-img-->
      <?php the_field('content'); ?>
   </section>
   
       <?php endwhile; // end the loop?><!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>