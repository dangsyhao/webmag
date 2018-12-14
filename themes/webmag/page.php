<?php get_header(); ?>

    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
            <?php if(have_posts()):?>
                <?php get_template_part('template-parts/page/page/page-default')?>
                <?php get_template_part('template-parts/right-widget/right-widget')?>
                <?php $a= set_cat_class();var_dump($a)?>

            <?php endif;?>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>


<?php get_footer();
