<!-- post -->
<div class="col-md-6">
    <div class="post post-thumb">
        <a class="post-img" href="blog-post.html"><img src="<?= ASSETS_PATH ?>img/post-1.jpg" alt=""></a>
        <div class="post-body">
            <div class="post-meta">
            <?php $cat_objs=get_categories();?>
                <a class="post-category <?= get_cat_class($cat_objs[0]->cat_ID)?>" href="<?= get_category_link($cat_objs[0]->cat_ID)?>"><?= get_cat_name($cat_objs[0]->cat_ID)?></a>
                <span class="post-date">March 27, 2018</span>
            </div>
            <h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
        </div>
    </div>
</div>
<!-- /post -->

<!-- post -->
<div class="col-md-6">
    <div class="post post-thumb">
        <a class="post-img" href="blog-post.html"><img src="<?= ASSETS_PATH ?>img/post-2.jpg" alt=""></a>
        <div class="post-body">
            <div class="post-meta">
                <a class="post-category cat-3" href="category.html">Jquery</a>
                <span class="post-date">March 27, 2018</span>
            </div>
            <h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
        </div>
    </div>
</div>
<!-- /post -->