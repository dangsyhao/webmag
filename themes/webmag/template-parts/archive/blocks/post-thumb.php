<div class="col-md-12">
    <div class="post post-thumb">
        <a class="post-img" href="<?php the_permalink()?>"><img src="<?= get_the_post_thumbnail_url($post->ID,'webmag-thumb-post-image');?>" alt=""></a>
        <div class="post-body">
            <div class="post-meta">
                <?php $cate_obj=get_the_category();?>
                <a class="post-category cat-2" href="<?= get_category_link($cate_obj[0]->cat_ID)?>"><?= get_cat_name($cate_obj[0]->cat_ID)?></a>
                <span class="post-date"><?php the_date()?></span>
            </div>
            <h3 class="post-title"><a href="<?php the_permalink()?>"><?php the_title()?></a></h3>
        </div>
    </div>
</div>
