<?php
function my_theme_enqueue_styles() {

    $parent_style = 'startertheme-style'; // This is 'startertheme-style' for the Starter theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function init_scripts() {
wp_enqueue_script('main_script', get_bloginfo( 'stylesheet_directory' ) . "/js/init.js", 'jquery', '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'init_scripts' );


// ===============================================================================
//     Add secondary nav for mobiles
//

add_filter( 'wp_nav_menu', function( $nav_menu, $args ) {
	// skip primary menu
	if($args->menu->name == 'Primary') {
        return $nav_menu;
    }

    // secondary menus - add mobile trigger, unify wrapper classes
    $nav_menu = str_replace('menu-' . $args->menu->slug . '-container', 'menu-submenu-navigation-container', $nav_menu);
	$nav_menu = '<label for="show-submenu" class="show-submenu"><i class="fa fa-bars" aria-hidden="true"></i></label><input type="checkbox" id="show-submenu" role="button">' . $nav_menu;
	return $nav_menu;
}, 1, 2 );


/**
 * Define news thumbnail image size
 */

add_image_size( 'news-thumbnail', 400, 265, true );


function child_theme_setup() {
	// override parent theme's 'more' text for excerpts
	remove_filter( 'excerpt_more', 'twentyeleven_auto_excerpt_more' ); 
	remove_filter( 'get_the_excerpt', 'twentyeleven_custom_excerpt_more' );
}
add_action( 'after_setup_theme', 'child_theme_setup' );

// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
       global $post;
	return ' <a class="moretag" href="'. get_permalink($post->ID) . '"> read more...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
