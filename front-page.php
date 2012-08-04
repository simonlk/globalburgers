<?php get_header(); ?>
		
		<?php get_sidebar(); ?>

		<!-- Row for main content area -->
		<div id="content" class="twelve columns front-page" role="main">
			<div class="row">
				<div class="post-box eight columns">
					<?php /* Start loop */ ?>
					<?php while (have_posts()) : the_post(); ?>
						<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
							<div class="entry-content">
								<?php the_content(); ?>
							</div>
						</article>
					<?php endwhile; // End the loop ?>
				</div>

				<div class="four columns">
					<?php dynamic_sidebar("Frontpage side"); ?>
				</div>

			</div><!-- End Content row -->
			<div class="row">
				<div class="four columns">
					<?php dynamic_sidebar("Frontpage bottom left"); ?>
				</div>
				<div class="four columns">
					<?php dynamic_sidebar("Frontpage bottom middle"); ?>
				</div>
				<div class="four columns">
					<?php dynamic_sidebar("Frontpage bottom right"); ?>
				</div>
			</div>
		</div>
		
<?php get_footer(); ?>