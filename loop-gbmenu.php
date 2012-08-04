<?php /* If there are no posts to display, such as an empty archive page */ ?>
<h1>
    <span class="head-line left hide-for-small"></span>
    <span class="head-line right hide-for-small"></span>
    <?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); echo $term->name; ?>
</h1>
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
            <div class="columns eight">
                <header>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </header>
            </div>
            <div class="two columns price">
                $<?php the_field('price'); ?>
            </div>
        </div>
        <div class="row">        
            <div class="entry-content columns eight end">
                <p><?php the_field('short_description'); ?></p>
            </div>
        </div>
        <footer>
            <?php $tag = get_the_tags(); if (!$tag) { } else { ?><p><?php the_tags(); ?></p><?php } ?>
        </footer>
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
