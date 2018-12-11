<?php get_header(); ?>

    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <?php if(have_posts()):?>
                <div class="col-md-8">
                    <?php while(have_posts()):the_post();?>
                    <div class="col-md-12">
                        <div class="post post-row">
                            <a class="post-img" href="<?php the_permalink()?>"><img src="<?= get_the_post_thumbnail_url($post->ID,'webmag-mostread-bottom-post-image');?>" alt=""></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <?php $cate_obj=get_the_category();?>
                                    <a class="post-category cat-2" href="<?= get_category_link($cate_obj[0]->cat_ID)?>"><?= get_cat_name($cate_obj[0]->cat_ID)?></a>
                                    <span class="post-date"><?php the_date()?></span>
                                </div>
                                <h3 class="post-title"><a href="<?php the_permalink()?>"><?php the_title()?></a></h3>
                                <p><?php the_excerpt();?></p>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;?>
                </div>
                <?php else:?>
                    <div class="col-md-12">
                        <div class="post post-row">
                            <div class="post-body">
                                <h4 class="post-title">No results were found ... !</h4>
                            </div>
                        </div>
                    </div>

                <?php endif;?>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>


<?php get_footer();
