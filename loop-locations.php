<?php /* If there are no posts to display, such as an empty archive page */ ?>
<h1><?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); echo $term->name; ?></h1>

<?php if (!have_posts()) : ?>
    <div class="notice">
        <p class="bottom"><?php _e('Sorry, no results were found.', 'reverie'); ?></p>
    </div>
    <?php get_search_form(); ?> 
<?php endif; ?>

<?php /* Start loop */ ?>
<?php while ( have_posts()) :  the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="row">
            <div class="columns seven">
                <header>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?><span class="round alert label right">store details</span></a></h2>                    
                    <?php if (get_field('facebook_link')) : ?>
                        <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2F<?php the_field('facebook_link'); ?>&amp;send=false&amp;layout=standard&amp;width=400&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:400px; height:35px;" allowTransparency="true"></iframe>
                    <?php endif ;?>
                </header>
                <div class="entry-content">
                    <?php if (get_field('address')) : ?>
                        <p><?php the_field('address'); ?></p>
                    <?php endif ;?>
                    <p>
                    <?php if (get_field('phone')) : ?>
                        <strong>Phone:</strong><?php the_field('phone'); ?><br />
                    <?php endif ;?>
                    <?php if (get_field('email')) : ?>
                        <strong>Email:</strong><?php the_field('email'); ?><br />
                    <?php endif ;?>
                    </p>
                </div>
            </div>
            <div class="columns five">
                <img src="http://placehold.it/283x194">
            </div>
        </div>
        <div class="divider"></div>
    </article>  
<?php endwhile; // End the loop ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ( function_exists('reverie_pagination') ) { reverie_pagination(); } else if ( is_paged() ) { ?>
<nav id="post-nav">
    <div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
    <div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>
</nav>
<?php } ?>

<?php wp_reset_query(); ?>
