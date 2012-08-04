<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
		<div class="entry-content">
			<div class="row">
				<?php if ( has_post_thumbnail() ) : ?>
				<div class="columns six">					
					<?php the_post_thumbnail(); ?>
				</div>
				<?php endif; ?>
				<div class="columns six <?php if ( !has_post_thumbnail() ) : ?>centered<?php endif; ?> menu-details">
				<?php if (get_field('long_description')) : ?>
					<p><?php the_field('long_description'); ?></p>
				<?php endif; ?>
					<p class="type"><?php echo get_the_term_list( $post->ID, 'types', 'Type: ', ', ', '' ); ?></p>
				<?php if (get_field('price')) : ?>
					<p class="price">$<?php the_field('price'); ?></p>
				<?php endif; ?>
				<div></div>
				</div>
			</div>
		</div>
		<footer>
			<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
		</footer>
	</article>
<?php endwhile; // End the loop ?>