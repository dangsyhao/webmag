<?php if(have_posts()):?>
    <div id="post-header" class="page-header">
        <?php $post_page=get_field(WEBMAG_POST_BANER,'option');?>
        <?php if($post_page):?>
        <div class="background-img" style="background-image: url('<?= $post_page;?>');"></div>
        <?php endif;?>
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="post-meta">
                        <?php $cat_obj=get_the_category($post->ID);?>
                        <?php $cat_id=$cat_obj[0]->cat_ID;?>
                        <?php $color=get_field('cat_color',"category_".$cat_id);?>
                        <a class="post-category " style="background-color:<?= $color;?>; " href="<?= get_category_link($cat_id)?>"><?= get_cat_name($cat_id)?></a>
                        <span class="post-date"><?php the_date();?></span>
                    </div>
                    <h1><?php the_title();?></h1>
                </div>
            </div>
        </div>
    </div>
<?php endif;?>