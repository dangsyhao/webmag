
    <div class="aside-widget">
        <div class="section-title">
            <h2><?php _e('Most Read',WEBMAG);?></h2>
        </div>
            <?php get_template_part('template-parts/page/front-page/blocks/recent-posts/blocks/most-read')?>
    </div>
    <!-- /post widget -->

    <!-- post widget -->
    <div class="aside-widget">
        <div class="section-title">
            <h2><?php _e('Featured Posts',WEBMAG);?></h2>
        </div>
            <?php get_template_part('template-parts/page/front-page/blocks/recent-posts/blocks/featured')?>
    </div>
    <!-- /post widget -->

    <!-- ad -->
    <?php $adv_objs=get_field(ADV_ASIDE_RECENT_POST,'option');?>

    <?php if($adv_objs):?>
        <?php foreach ($adv_objs as $adv_obj):?>
        <div class="aside-widget text-center">
            <a href="<?= $adv_obj['adv_link']?>" style="display: inline-block;margin: auto;">
                <img class="img-responsive" src="<?= $adv_obj['adv_image']?>" alt="">
            </a>
        </div>
        <?php endforeach;?>
    <?php endif;?>
    <!-- /ad -->
