<footer>
  <div class="container container-footer">	
	<?php 
	$image = get_field('footer', 'options');
	if( !empty($image) ): ?>

	<?php endif; ?>

	<?php if( have_rows('links', 'options') ) : ?>
		<div class="bottom-nav">
			<ul>
				<?php while( have_rows('links', 'options') ) : the_row(); ?>
					<a href="<?php the_sub_field('fa_link', 'options'); ?>"><?php the_sub_field('fa_icon', 'options'); ?></a>
				<?php endwhile; ?>
			</ul>
		</div> <!-- end .bottom-nav-->

		<div class="footer-logo">
			  <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
			<img class="footLogo foot-logo1" src="<?php bloginfo('template_directory'); ?>/img/lisaLine.svg" alt="Lisa Folkerson"><img class="footLogo foot-logo2" src="<?php bloginfo('template_directory'); ?>/img/titleLine.svg" alt="Lisa Folkerson"></a>
		</div><!--end footer-logo-->

		<a href="#top" class="upArrow smoothScroll">&#10548;</a>
	<?php endif; ?> 
		<!-- <div class="mailList">
		<?php // the_field('mailing_list', 'options'); ?>-->


	    <!-- <p>&copy; Lisa Folkerson --> <?php // echo date('Y'); ?><!-- </p> -->	 	    <!--</div> end .mailList-->
  </div><!--end container-footer-->
</footer>

<!-- Google Analytics! -->


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60684916-1', 'auto');
  ga('send', 'pageview');

</script>



<?php wp_footer(); ?>
	</div> <!-- end bg -->
</body>
</html>