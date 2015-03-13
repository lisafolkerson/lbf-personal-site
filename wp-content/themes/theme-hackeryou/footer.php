<footer>
  <div class="container">	
	<?php 
	$image = get_field('footer', 'options');
	if( !empty($image) ): ?>

		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

	<?php endif; ?>

	<?php if( have_rows('links', 'options') ) : ?>
		<ul>
			<?php while( have_rows('links', 'options') ) : the_row(); ?>
				<a href="<?php the_sub_field('fa_link', 'options'); ?>"><?php the_sub_field('fa_icon', 'options'); ?></a>
			<?php endwhile; ?>
		</ul>
	<?php endif; ?> 

	<?php the_field('mailing_list', 'options'); ?>

    <p>&copy; Lisa Folkerson <?php echo date('Y'); ?></p>
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