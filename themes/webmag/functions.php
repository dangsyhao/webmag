<?php

function webmag_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/webmag
	 * If you're building a theme based on Twenty Seventeen, use a find and replace
	 * to change 'webmag' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( WEBMAG);

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 360, 216, true ); // default Featured Image dimensions (cropped)
	add_image_size( 'webmag-logo-image', 114, 18, true );
	add_image_size( 'webmag-featured-top-post-image', 114, 18, true );
	add_image_size( 'webmag-thumb-post-image', 750, 450, true );
	add_image_size( 'webmag-mostread-bottom-post-image', 300, 180, true );
	add_image_size( 'webmag-mostread-aside-post-image', 90, 90, true );
    add_image_size( 'webmag-adv-aside-300-250-image', 300, 250, true );
    add_image_size( 'webmag-adv-single-300-250-image', 728, 90, true );
    add_image_size( 'webmag-post-banner-image', 1903, 269, true );


    // This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    		=> __( 'Top Menu', WEBMAG ),
		'social-aside' 	=> __( 'Social Aside Menu',WEBMAG),
        'social-footer' => __( 'Social Footer Menu',WEBMAG),
        'aside'    		=> __( 'Aside Menu',WEBMAG),
    ) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

}
add_action( 'after_setup_theme', 'webmag_setup' );


/**
 * Enqueue scripts and styles.
 */
function webmag_scripts() {

    // Add custom JS.
    wp_enqueue_script('webmag-script-jquery',ASSETS_PATH.'js/jquery.min.js',array(),null);
    wp_enqueue_script('webmag-script-bootstrap',ASSETS_PATH.'js/bootstrap.min.js',array(),null);

	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style('webmag-fonts',ASSETS_PATH.'css/font-awesome.min.css',array(),null );
	// Theme stylesheet.
	wp_enqueue_style('webmag-style-bootstrap',ASSETS_PATH.'css/bootstrap.min.css');
    wp_enqueue_style('webmag-style-style',ASSETS_PATH.'css/style.css');


}
add_action( 'wp_enqueue_scripts','webmag_scripts');

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path( '/inc/define.php' );

/**
 * Implement the Custom Header feature.
 */
require get_parent_theme_file_path( '/inc/acf.php' );


/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path( '/inc/webmag-functions.php' );

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path( '/inc/custom_top_menu.php' );

require get_parent_theme_file_path( '/inc/custom_social_menu.php' );

require get_parent_theme_file_path( '/inc/webmag_list_comment_walker.php' );



