<aside id="sidebar" class="three columns" role="complementary">
	<div class="sidebar-box">
		<?php
			if (is_page( array(14, 16) ) ){				
				wp_nav_menu('menu=Subscribe&menu_class=nav-bar vertical menu');
			}
			if (get_post_type($post->ID) == 'locations' || is_singular('locations') || is_tax('state')){
				wp_nav_menu('menu=Locations Menu&menu_class=nav-bar vertical menu'); 
			}
			if (get_post_type($post->ID) == 'menu' || is_singular('menu') || is_tax('types')){
				wp_nav_menu('menu=Menu&menu_class=nav-bar vertical menu');
			}
		?>
		<?php dynamic_sidebar("Primary Sidebar"); ?>
	</div>
</aside><!-- /#sidebar -->