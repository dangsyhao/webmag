<?php
$args = array(
    'posts_per_page'    =>4,
    'paged'             =>1,
    'orderby'           => 'post_date',
    'order'             => 'DESC',
    'post_type'         => 'post',
    'post_status'       => 'publish',
    'suppress_filters'  => true
);
$the_query=new WP_Query($args);
?>
<?php while($the_query->have_posts()):$the_query->the_post();?>
    <div class="post post-widget">
        <a class="post-img" href="<?php the_permalink()?>"><img src="<?= get_the_post_thumbnail_url($post->ID,'webmag-mostread-aside-post-image') ?>" alt=""></a>
        <div class="post-body">
            <h3 class="post-title"><a href="<?php the_permalink()?>"><?php the_title()?></a></h3>
        </div>
    </div>
<?php endwhile;?>
<?php wp_reset_query();?>