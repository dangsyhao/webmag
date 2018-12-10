
    <div class="aside-widget">
        <div class="section-title">
            <h2>Most Read</h2>
        </div>
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
    </div>
    <!-- /post widget -->

    <!-- post widget -->
    <div class="aside-widget">
        <div class="section-title">
            <h2>Featured Posts</h2>
        </div>

        <?php $posts=get_field(WEBMAG_FEATURED_NEWS,'option');?>
        <?php $post_count=1;?>
        <?php if($posts):?>
            <?php foreach ($posts as $post):?>
                <?php setup_postdata($post);$post_count++?>
                <div class="post post-thumb">
                    <a class="post-img" href="<?php the_permalink()?>"><img src="<?= get_the_post_thumbnail_url($post->ID,'post-thumbnails')?>" alt=""></a>
                    <div class="post-body">
                        <div class="post-meta">
                            <?php $cat_obj=get_the_category($post->ID);?>
                            <a class="post-category cat-3" href="<?= get_category_link($cat_obj[0]->cat_ID)?>"><?= get_cat_name($cat_obj[0]->cat_ID)?></a>
                            <span class="post-date"><?php the_date();?></span>
                        </div>
                        <h3 class="post-title"><a href="<?php the_permalink()?>"><?php the_title();?></a></h3>
                    </div>
                </div>
                <?php if($post_count==3) break;?>
            <?php endforeach;?>
            <?php wp_reset_postdata();?>
        <?php else:?>

            <?php
            $args = array(
                'posts_per_page'    =>3,
                'orderby'           => 'post_date',
                'order'             => 'DESC',
                'post_type'         => 'post',
                'post_status'       => 'publish',
                'suppress_filters'  => true
            );
            $the_query=new WP_Query($args);
            ?>
            <?php while($the_query->have_posts()):$the_query->the_post();?>
                <div class="post post-thumb">
                    <a class="post-img" href="<?php the_permalink()?>"><img src="<?= get_the_post_thumbnail_url($post->ID,'post-thumbnails')?>" alt=""></a>
                    <div class="post-body">
                        <div class="post-meta">
                            <?php $cat_obj=get_the_category($post->ID);?>
                            <a class="post-category cat-3" href="<?= get_category_link($cat_obj[0]->cat_ID)?>"><?= get_cat_name($cat_obj[0]->cat_ID)?></a>
                            <span class="post-date"><?php the_date();?></span>
                        </div>
                        <h3 class="post-title"><a href="<?php the_permalink()?>"><?php the_title();?></a></h3>
                    </div>
                </div>
            <?php endwhile;?>
        <?php endif;?>
        <?php wp_reset_query();?>


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
