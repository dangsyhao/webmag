<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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

                <?php get_template_part('template-parts/page/page/left-section')?>
                <?php get_template_part('template-parts/page/page/right-section')?>


            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>

<?php get_footer();
