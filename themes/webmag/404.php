<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', WEBMAG ); ?></h1>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>

<?php get_footer();
