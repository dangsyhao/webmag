
<?php $GLOBALS['wp_the_query']?>
<div class="col-md-8">
    <div class="row">
        <?php $post_count=0;?>
        <?php while (have_posts()):the_post();?>
        <?php $post_count++;?>
        <!-- post -->
        <?php
            if($post_count==1){
                get_template_part('template-parts/archive/blocks/post-thumb');
            }?>
        <!-- /post -->

        <!-- post -->
        <?php
        if($post_count ==2 || $post_count ==3){
            get_template_part('template-parts/archive/blocks/post-under-thumb');
        }
        ?>
        <!-- /post -->

        <!-- ad -->
        <?php if($post_count ==3):?>
        <div class="clearfix visible-md visible-lg"></div>
            <?php get_template_part('template-parts/archive/blocks/ad');?>
        <?php endif;?>
        <!-- ad -->

        <!-- post -->
            <?php
            if($post_count >3){
                get_template_part('template-parts/archive/blocks/post-list');
            }
            ?>
        <!-- /post -->

        <?php endwhile;?>
        <div class="col-md-12">
            <div class="section-row">
                <button class="primary-button center-block">Load More</button>
            </div>
        </div>

    </div>
</div>

<!-- Load Right Widget-->
<?php get_template_part('template-parts/right-widget/right-widget');?>

