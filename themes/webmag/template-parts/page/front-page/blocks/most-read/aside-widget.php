
<!-- /ad -->
<?php $adv_objs=get_field(ADV_ASIDE_MOST_READ,'option');?>

<?php if($adv_objs):?>
    <?php foreach ($adv_objs as $adv_obj):?>
        <div class="aside-widget text-center">
            <a href="<?= $adv_obj['adv_link']?>" style="display: inline-block;margin: auto;">
                <img class="img-responsive" src="<?= $adv_obj['adv_image']?>" alt="">
            </a>
        </div>
    <?php endforeach;?>
<?php endif;?>

<!-- catagories -->
<div class="aside-widget">
    <div class="section-title">
        <h2><?php _e('Catagories',WEBMAG);?></h2>
    </div>
    <div class="category-widget">
        <ul>
        <?php $cat_objs=get_categories();//var_dump($cat_objs);?>
        <?php if(isset($cat_objs)):?>
            <?php foreach ($cat_objs as $cat_obj):?>
                <li>
                    <?php $cat_id=$cat_obj->cat_ID;?>
                    <?php $color=get_field('cat_color',"category_".$cat_id);?>
                    <a href="<?= get_category_link($cat_obj->cat_ID)?>" onmouseover="this.style.color='<?= $color?>'" onmouseout="this.style.color=''">
                        <?= $cat_obj->cat_name?>
                        <span style="background-color: <?= $color?>"><?= $cat_obj->category_count;?></span>
                    </a>
                </li>
            <?php endforeach;?>
        <?php endif;?>
        </ul>
    </div>
</div>

<!-- /catagories -->

<!-- tags -->
<div class="aside-widget">
    <div class="tags-widget">

        <ul>
            <?php $tag_objs=get_the_tags()?>
            <?php if(isset($tag_objs)):?>
                <?php foreach ($tag_objs as $tag_obj):?>
                    <li>
                        <a href="<?= get_tag_link($tag_obj->term_id) ?>" class="cat-1"><?= $tag_obj->name;?></a>
                    </li>
                <?php endforeach;?>
            <?php endif;?>

        </ul>
    </div>
</div>