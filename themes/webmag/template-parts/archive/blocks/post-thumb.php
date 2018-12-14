<div class="col-md-12">
    <div class="post post-thumb">
        <a class="post-img" href="<?php the_permalink()?>"><img src="<?= get_the_post_thumbnail_url($post->ID,'webmag-thumb-post-image');?>" alt=""></a>
        <div class="post-body">
            <div class="post-meta">
                <?php $cat_obj=get_the_category($post->ID);?>
                <?php $cat_id=$cat_obj[0]->cat_ID;?>
                <?php $color=get_field('cat_color',"category_".$cat_id);?>
                <a class="post-category " style="background-color:<?= $color;?>; " href="<?= get_category_link($cat_id)?>"><?= get_cat_name($cat_id)?></a>
                <span class="post-date"><?php the_date()?></span>
            </div>
            <h3 class="post-title"><a href="<?php the_permalink()?>"><?php the_title()?></a></h3>
        </div>
    </div>
</div>
