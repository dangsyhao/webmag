<?php

function webmag_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/webmag
	 * If you're building a theme based on Twenty Seventeen, use a find and replace
	 * to change 'webmag' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'webmag' );

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
    add_image_size( 'webmag-logo-image', 114, 18, true );



    // This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Top Menu', DOMAIN ),
		'social-aside' => __( 'Social Aside Menu',DOMAIN),
        'social-footer' => __( 'Social Footer Menu',DOMAIN),
        'aside'    => __( 'Aside Menu',DOMAIN),

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
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param string $link Link to single post/page.
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function webmag_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'webmag' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'webmag_excerpt_more' );



/**
 * Enqueue scripts and styles.
 */
function webmag_scripts() {

    // Add custom JS.
    wp_enqueue_script('webmag-script-jquery',ASSETS_PATH.'js/jquery.min.js',array(),null);
    wp_enqueue_script('webmag-script-bootstrap',ASSETS_PATH.'js/bootstrap.min.js',array(),null);
    wp_enqueue_script('webmag-script-main', ASSETS_PATH.'js/main.js',array(),null);

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
require get_parent_theme_file_path( '/inc/template-functions.php' );

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path( '/inc/custom_top_menu.php' );
require get_parent_theme_file_path( '/inc/custom_social_menu.php' );



