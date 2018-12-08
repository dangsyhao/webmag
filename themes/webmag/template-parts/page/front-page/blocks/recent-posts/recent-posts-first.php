<?php
$args = array(
    'posts_per_page'    =>6,
    'paged'             =>1,
	'orderby'           => 'post_date',
	'order'             => 'DESC',
	'post_type'         => 'post',
	'post_status'       => 'publish',
	'suppress_filters'  => true
);
$the_query=new WP_Query($args);
?>
<!-- post -->
<?php while($the_query->have_posts()):$the_query->the_post();?>
<div class="col-md-4">
    <div class="post">
        <a class="post-img" href="<?php the_permalink()?>"><img src="<?= get_the_post_thumbnail_url( $post->ID,'post-thumbnails')?>" alt=""></a>
        <div class="post-body">
            <div class="post-meta">
            <?php $cat_obj=get_the_category($post->ID);?>
                <a class="post-category cat-1" href="<?= get_category_link($cat_obj[0]->cat_ID)?>"><?= get_cat_name($cat_obj[0]->cat_ID)?></a>
                <span class="post-date"><?= get_the_date()?></span>
            </div>
            <h3 class="post-title"><a href="<?php the_permalink()?>"><?php the_title()?></a></h3>
        </div>
    </div>
</div>
<?php endwhile;?>
<?php wp_reset_query(); ?>

<!-- /post -->
