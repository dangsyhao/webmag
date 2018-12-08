<div class="row">
    <div class="col-md-12">
        <div class="section-title">
            <h2>Most Read</h2>
        </div>
    </div>

<?php
    $args = array(
        'post_type'         => 'post',
        'posts_per_page'    =>  4,
        'paged'             =>  1,
        'meta_key'        	=> 'webmag_post_views_count',
        'orderby'         	=> 'meta_value',
        'order'             => 'DESC',
        'post_status'       => 'publish',
        'suppress_filters'  => true
    );
    $the_query=new WP_Query($args);

?>
    <!-- post -->
<?php while($the_query->have_posts()):$the_query->the_post();?>
    <div class="col-md-12">
        <div class="post post-row">
            <a class="post-img" href="<?php the_permalink();?>"><img src="<?= get_the_post_thumbnail_url($post->ID,'webmag-mostread-bottom-post-image')?>" alt=""></a>
            <div class="post-body">
                <div class="post-meta">
                <?php $cate_obj=get_the_category($post->ID);?>
                    <a class="post-category cat-2" href="<?= get_category_link($cate_obj[0]->cat_ID)?>"><?= get_cat_name($cate_obj[0]->cat_ID)?></a>
                    <span class="post-date"><?= get_the_date()?></span>
                </div>
                <h3 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                <p><?php the_excerpt();?></p>
            </div>
        </div>
    </div>
<?php endwhile;?>
<?php wp_reset_query();?>

    <!-- /post -->


    <div class="col-md-12">
        <div class="section-row">
            <button class="primary-button center-block">Load More</button>
        </div>
    </div>

</div>