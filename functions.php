<?php
// return entry meta information for posts, used by multiple loops.
function gb_entry_meta() {
	echo '<time class="updated" datetime="'. get_the_time('c') .'" pubdate>'. sprintf(__('Posted on %s', 'reverie'), get_the_time('l, F jS, Y'), get_the_time()) .'</time>';
}

if ( function_exists('register_sidebar') )
	register_sidebar(array('name'=>'Frontpage side',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
));
if ( function_exists('register_sidebar') )
	register_sidebar(array('name'=>'Frontpage bottom left',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
));
if ( function_exists('register_sidebar') )
	register_sidebar(array('name'=>'Frontpage bottom middle',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
));
if ( function_exists('register_sidebar') )
	register_sidebar(array('name'=>'Frontpage bottom right',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
));
if ( function_exists('register_sidebar') )
	register_sidebar(array('name'=>'Primary Sidebar',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
));

/*-------------------------------------------
	Custom Post type - Menu
------------------------------------------ */

/* Taxonomy first for better urls i.e. /custompost/taxonomy/ */
$labels = array(  
    'name'                          => __( 'Types', 'your-themes-text-domain' ),  
    'singular_name'                 => __( 'Type', 'your-themes-text-domain' ),  
    'search_items'                  => __( 'Search Types', 'your-themes-text-domain' ),  
    'popular_items'                 => __( 'Popular Types', 'your-themes-text-domain' ),  
    'all_items'                     => __( 'All Types', 'your-themes-text-domain' ),  
    'parent_item'                   => __( 'Parent Type', 'your-themes-text-domain' ),  
    'edit_item'                     => __( 'Edit Type', 'your-themes-text-domain' ),  
    'update_item'                   => __( 'Update Type', 'your-themes-text-domain' ),  
    'add_new_item'                  => __( 'Add New Type', 'your-themes-text-domain' ),  
    'new_item_name'                 => __( 'New Type', 'your-themes-text-domain' ),  
    'separate_items_with_commas'    => __( 'Separate Types with commas', 'your-themes-text-domain' ),  
    'add_or_remove_items'           => __( 'Add or remove Types', 'your-themes-text-domain' ),  
    'choose_from_most_used'         => __( 'Choose from most used Types', 'your-themes-text-domain' )  
);  
  
$args = array(  
    'labels'                        => $labels,  
    'public'                        => true,  
    'hierarchical'                  => true,  
    'show_ui'                       => true,  
    'show_in_nav_menus'             => true, 
    'args'                          => array( 'orderby' => 'term_order' ),
    'rewrite'                       => array( 'slug' => 'menu/types', 'with_front' => false ), 
    'query_var'                     => true  
);  
  
register_taxonomy( 'types', 'menu', $args ); 


/* Custom post type - Menu */
register_post_type( 'menu',
    array(
        'labels'                => array(
            'name'              => __( 'Menu Items' ),
            'singular_name'     => __( 'Menu Item' )
            ),
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'rewrite'               => array( 'slug' => 'menu', 'with_front' => false ),
        'has_archive'           => true
    )
);


/*-------------------------------------------
	Custom Post type - Locations
------------------------------------------ */

/* Taxonomy first for better urls i.e. /custompost/taxonomy/ */
$labels = array(  
    'name'                          => __( 'States', 'your-themes-text-domain' ),  
    'singular_name'                 => __( 'State', 'your-themes-text-domain' ),  
    'search_items'                  => __( 'Search States', 'your-themes-text-domain' ),  
    'popular_items'                 => __( 'Popular States', 'your-themes-text-domain' ),  
    'all_items'                     => __( 'All States', 'your-themes-text-domain' ),  
    'parent_item'                   => __( 'Parent State', 'your-themes-text-domain' ),  
    'edit_item'                     => __( 'Edit State', 'your-themes-text-domain' ),  
    'update_item'                   => __( 'Update State', 'your-themes-text-domain' ),  
    'add_new_item'                  => __( 'Add New State', 'your-themes-text-domain' ),  
    'new_item_name'                 => __( 'New State', 'your-themes-text-domain' ),  
    'separate_items_with_commas'    => __( 'Separate States with commas', 'your-themes-text-domain' ),  
    'add_or_remove_items'           => __( 'Add or remove States', 'your-themes-text-domain' ),  
    'choose_from_most_used'         => __( 'Choose from most used States', 'your-themes-text-domain' )  
);  
  
$args = array(  
    'labels'                        => $labels,  
    'public'                        => true,  
    'hierarchical'                  => true,  
    'show_ui'                       => true,  
    'show_in_nav_menus'             => true, 
    'args'                          => array( 'orderby' => 'term_order' ),
    'rewrite'                       => array( 'slug' => 'locations/state', 'with_front' => false ), 
    'query_var'                     => true  
);  
  
register_taxonomy( 'states', 'locations', $args ); 


/* Custom post type - Location */
register_post_type( 'locations',
    array(
        'labels'                => array(
            'name'              => __( 'Locations' ),
            'singular_name'     => __( 'Location' )
            ),
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'rewrite'               => array( 'slug' => 'locations', 'with_front' => false ),
        'has_archive'           => true
    )
);

?>