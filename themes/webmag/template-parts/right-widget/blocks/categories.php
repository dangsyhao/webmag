
<div class="category-widget">
    <ul>
        <?php $cat_objs=get_categories();//var_dump($cat_objs);?>
        <?php if(isset($cat_objs)):?>
            <?php foreach ($cat_objs as $cat_obj):?>
                <li>
                    <a href="<?= get_category_link($cat_obj->cat_ID) ?>" class="cat-1"><?= $cat_obj->cat_name;?>
                        <span><?= $cat_obj->category_count;?></span>
                    </a>
                </li>
            <?php endforeach;?>
        <?php endif;?>
    </ul>
</div>