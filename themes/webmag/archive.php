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
                <?php if(have_posts()):?>
                    <?php get_template_part('template-parts/archive/archive-content')?>
                    <?php get_template_part('template-parts/right-section')?>
                <?php endif;?>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>

<?php get_footer();
