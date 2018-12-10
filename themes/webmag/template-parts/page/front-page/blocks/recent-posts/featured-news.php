
<?php $posts=get_field(WEBMAG_FEATURED_NEWS,'option');?>
<?php if($posts):?>
    <?php $post_count=1;?>
    <?php foreach ($posts as $post):?>
    <?php setup_postdata($post);$post_count++?>
    <div class="col-md-6">
        <div class="post post-thumb">
            <a class="post-img" href="<?php the_permalink();?>"><img src="<?= get_the_post_thumbnail_url($post->ID,'post-thumbnails');?>" alt=""></a>
            <div class="post-body">
                <div class="post-meta">
                    <?php $cat_obj=get_the_category($post->ID);?>
                    <a class="post-category cat-2" href="<?= get_category_link($cat_obj[0]->cat_ID)?>"><?= get_cat_name($cat_obj[0]->cat_ID)?></a>
                    <span class="post-date"><?php the_date();?></span>
                </div>
                <h3 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
            </div>
        </div>
    </div>
        <?php if($post_count==3) break;?>
    <?php endforeach;?>
    <?php wp_reset_postdata();?>
<?php else:?>

    <?php
    $args = array(
    'posts_per_page'    =>2,
    'orderby'           => 'post_date',
    'order'             => 'DESC',
    'post_type'         => 'post',
    'post_status'       => 'publish',
    'suppress_filters'  => true
    );
    $the_query=new WP_Query($args);
    ?>
    <?php while($the_query->have_posts()):$the_query->the_post();?>
        <div class="col-md-6">
            <div class="post post-thumb">
                <a class="post-img" href="<?php the_permalink();?>"><img src="<?= get_the_post_thumbnail_url($post->ID,'post-thumbnails');?>" alt=""></a>
                <div class="post-body">
                    <div class="post-meta">
                        <?php $cat_obj=get_the_category($post->ID);?>
                        <a class="post-category cat-2" href="<?= get_category_link($cat_obj[0]->cat_ID)?>"><?= get_cat_name($cat_obj[0]->cat_ID)?></a>
                        <span class="post-date"><?php the_date();?></span>
                    </div>
                    <h3 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                </div>
            </div>
        </div>
    <?php endwhile;?>
<?php endif;?>
<?php wp_reset_query();?>
