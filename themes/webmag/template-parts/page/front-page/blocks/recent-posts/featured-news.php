
<?php

    if($acf_objs=get_field(WEBMAG_FEATURED_NEWS,'option')){
        $posts=$acf_objs;
    }
     else{
         $args = array(
            'posts_per_page'    =>2,
            'orderby'           => 'post_date',
            'order'             => 'DESC',
            'post_type'         => 'post',
            'post_status'       => 'publish',
            'suppress_filters'  => true
         );
        $the_query=new WP_Query($args);
        $posts=$the_query->posts;
     }
 ?>
    <?php $post_count=0;?>
    <?php foreach ($posts as $post):?>
        <?php setup_postdata($post);$post_count++?>
        <div class="col-md-6">
            <div class="post post-thumb">
                <a class="post-img" href="<?php the_permalink();?>"><img src="<?= get_the_post_thumbnail_url($post->ID,'post-thumbnails');?>" alt=""></a>
                <div class="post-body">
                    <div class="post-meta">
                        <?php $cat_obj=get_the_category($post->ID);?>
                        <?php $cat_id=$cat_obj[0]->cat_ID;?>
                        <?php $color=get_field('cat_color',"category_".$cat_id);?>
                        <a class="post-category " style="background-color:<?= $color;?>; " href="<?= get_category_link($cat_id)?>"><?= get_cat_name($cat_id)?></a>                        <span class="post-date"><?php the_date();?></span>
                    </div>
                    <h3 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                </div>
            </div>
        </div>
        <?php if($post_count==2) break;?>
    <?php endforeach;?>
    <?php wp_reset_postdata();?>
    <?php wp_reset_query();?>

