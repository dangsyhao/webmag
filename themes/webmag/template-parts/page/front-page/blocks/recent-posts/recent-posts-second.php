
<!-- post -->
<?php if(have_posts()):?>
<div class="col-md-12">
    <div class="post post-thumb">
        <a class="post-img" href="<?php the_permalink();?>"><img src="<?= get_the_post_thumbnail_url( $post->ID,'webmag-thumb-post-image')?>" alt=""></a>
        <div class="post-body">
            <div class="post-meta">
                <?php $cat_obj=get_the_category($post->ID);?>
                <?php $cat_id=$cat_obj[0]->cat_ID;?>
                <?php $color=get_field('cat_color',"category_".$cat_id);?>
                <a class="post-category " style="background-color:<?= $color;?>; " href="<?= get_category_link($cat_id)?>"><?= get_cat_name($cat_id)?></a>                <span class="post-date"><?= get_the_date()?></span>
            </div>
            <h3 class="post-title"><a href="<?php the_permalink()?>"><?php the_title()?></a></h3>
        </div>
    </div>
</div>
<?php endif;?>
<!-- /post -->

<?php
    $args = array(
        'posts_per_page'    =>6,
        'paged'             =>2,
        'orderby'           => 'post_date',
        'order'             => 'DESC',
        'post_type'         => 'post',
        'post_status'       => 'publish',
        'suppress_filters'  => true
    );
    $the_query=new WP_Query($args);
?>
<!-- post -->
<?php $post_count=0;?>
<?php while($the_query->have_posts()):$the_query->the_post();?>
    <?php $post_count++;?>
    <div class="col-md-6">
        <div class="post">
            <a class="post-img" href="<?php the_permalink()?>"><img src="<?= get_the_post_thumbnail_url( $post->ID,'post-thumbnails')?>" alt=""></a>
            <div class="post-body">
                <div class="post-meta">
                    <?php $cat_obj=get_the_category($post->ID);?>
                    <?php $cat_id=$cat_obj[0]->cat_ID;?>
                    <?php $color=get_field('cat_color',"category_".$cat_id);?>
                    <a class="post-category " style="background-color:<?= $color;?>; " href="<?= get_category_link($cat_id)?>"><?= get_cat_name($cat_id)?></a>                    <span class="post-date"><?= get_the_date()?></span>
                </div>
                <h3 class="post-title"><a href="<?php the_permalink()?>"><?php the_title()?></a></h3>
            </div>
        </div>
    </div>
    <?php if($post_count % 2==0):?>
        <div class="clearfix visible-md visible-lg"></div>
    <?php endif;?>
<?php endwhile;?>
<?php wp_reset_query(); ?>
<!-- /post -->



