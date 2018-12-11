
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
        <div class="post post-widget">
            <a class="post-img" href="<?php the_permalink();?>"><img src="<?= get_the_post_thumbnail_url($post->ID,'webmag-mostread-aside-post-image')?>" alt=""></a>
            <div class="post-body">
                <h3 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
            </div>
        </div>
    <?php endwhile;?>
<?php wp_reset_query();?>