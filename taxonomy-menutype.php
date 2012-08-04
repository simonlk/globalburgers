<?php get_header(); ?>
		
		<?php get_sidebar(); ?>

		<!-- Row for main content area -->
		<div id="content" class="nine columns gbmenu" role="main">
	
			<div class="post-box">
				<?php get_template_part('loop', 'gbmenu'); ?>
			</div>

		</div><!-- End Content row -->
		
<?php get_footer(); ?>