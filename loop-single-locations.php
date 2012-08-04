<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
		<div class="entry-content">
			<div class="summary">					
				<?php if (get_field('summary')) : ?>
					<p><?php the_field('summary'); ?></p>
				<?php endif; ?>			
	            <?php if (get_field('facebook_link')) : ?>
	                <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2F<?php the_field('facebook_link'); ?>&amp;send=false&amp;layout=standard&amp;width=400&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:400px; height:35px;" allowTransparency="true"></iframe>
	            <?php endif ;?>
			</div>
			<div class="row">
				<div class="columns five">
				<?php if (get_field('address')) : ?>
					<h3>Address</h3>
					<p><?php the_field('address'); ?></p>
				<?php endif; ?>
				<?php if (get_field('phone')) : ?>
					<h3>Phone</h3>
					<p><?php the_field('phone'); ?></p>
				<?php endif; ?>
				<?php if (get_field('email')) : ?>
					<h3>Email</h3>
					<p><?php the_field('email'); ?></p>
				<?php endif; ?>
				<?php if (get_field('opening_hours')) : ?>
					<h3>Opening Hours</h3>
					<p><?php the_field('opening_hours'); ?></p>
				<?php endif; ?>
				</div>
				<div class="columns seven">
					<img src="http://placehold.it/437x300"><br />
				</div>
			</div>
		</div>
		<footer>
			<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
		</footer>
	</article>
<?php endwhile; // End the loop ?>