

<div class="col-md-4">
    <!-- ad -->
    <div class="aside-widget text-center">
        <a href="#" style="display: inline-block;margin: auto;">
            <img class="img-responsive" src="<?= ASSETS_PATH ?>img/ad-1.jpg" alt="">
        </a>
    </div>
    <!-- /ad -->

    <!-- post widget -->
    <div class="aside-widget">
        <div class="section-title">
            <h2><?php _e('Most Read',WEBMAG);?></h2>
        </div>
       <?php get_template_part('template-parts/right-widget/blocks/most-read')?>
    </div>
    <!-- /post widget -->


    <?php if(is_single()): ?>
        <!-- post widget -->
        <div class="aside-widget">
            <div class="section-title">
                <h2><?php _e('Featured Posts',WEBMAG);?></h2>
            </div>
            <?php get_template_part('template-parts/right-widget/blocks/featured-posts');?>
         </div>

    <?php endif;?>

    <!-- /post widget -->

    <!-- catagories -->
    <?php if(!is_page()): ?>
    <div class="aside-widget">
        <div class="section-title">
            <h2><?php _e('Catagories',WEBMAG);?></h2>
        </div>
        <?php get_template_part('template-parts/right-widget/blocks/categories');?>
    </div>
    <?php endif;?>
    <!-- /catagories -->

    <!-- tags -->
    <?php if(!is_page()): ?>
    <div class="aside-widget">
        <?php get_template_part('template-parts/right-widget/blocks/tags');?>
    </div>
    <?php endif;?>
    <!-- /tags -->

    <!-- archive -->
    <?php if(!is_page()): ?>
    <div class="aside-widget">
        <div class="section-title">
            <h2><?php _e('Archive',WEBMAG);?></h2>
        </div>
        <?php get_template_part('template-parts/right-widget/blocks/archive');?>
    </div>
    <?php endif;?>

    <!-- /archive -->
</div>