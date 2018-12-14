
<div class="category-widget">
    <ul>
        <?php $cat_objs=get_categories();;?>
        <?php if(isset($cat_objs)):?>
            <?php foreach ($cat_objs as $cat_obj):?>
                <?php $cat_id=$cat_obj->cat_ID;?>
                <?php $color=get_field('cat_color',"category_".$cat_id);?>
                <li>
                    <a href="<?= get_category_link($cat_obj->cat_ID)?>" onmouseover="this.style.color='<?= $color?>'" onmouseout="this.style.color=''">
                        <?= $cat_obj->cat_name?>
                        <span style="background-color: <?= $color?>"><?= $cat_obj->category_count;?></span>
                    </a>
                </li>
            <?php endforeach;?>
        <?php endif;?>
    </ul>
</div>
