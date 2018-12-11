

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
            <h2>Most Read</h2>
        </div>
       <?php get_template_part('template-parts/right-widget/blocks/most-read')?>
    </div>
    <!-- /post widget -->


    <?php if(is_single()): ?>
        <!-- post widget -->
        <div class="aside-widget">
            <div class="section-title">
                <h2>Featured Posts</h2>
            </div>
            <?php get_template_part('template-parts/right-widget/blocks/featured-posts');?>
         </div>

    <?php endif;?>

    <!-- /post widget -->

    <!-- catagories -->
    <div class="aside-widget">
        <div class="section-title">
            <h2>Catagories</h2>
        </div>
        <?php get_template_part('template-parts/right-widget/blocks/categories');?>
    </div>
    <!-- /catagories -->

    <!-- tags -->
    <div class="aside-widget">
        <?php get_template_part('template-parts/right-widget/blocks/tags');?>
    </div>
    <!-- /tags -->

    <!-- archive -->
    <div class="aside-widget">
        <div class="section-title">
            <h2>Archive</h2>
        </div>
        <?php get_template_part('template-parts/right-widget/blocks/archive');?>
    </div>
    <!-- /archive -->
</div>