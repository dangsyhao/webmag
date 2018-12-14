<?php get_header(); ?>
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
            <?php if(have_posts()):?>
                <?php webmag_set_post_views($post->ID);?>
                    <?php get_template_part('template-parts/post/post-content')?>
                    <?php get_template_part('template-parts/right-widget/right-widget')?>
                    <?php //if ( comments_open() || get_comments_number() )  comments_template(); ?>
            <?php endif;?>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>


<?php get_footer();?>
