
<?php $cat_objs=get_categories();?>
<?php if(isset($cat_objs)):?>
    <ul class="footer-links">
        <?php foreach($cat_objs as $cat_obj):?>
            <li><a href="<?= get_category_link($cat_obj->cat_ID) ?>"><?= $cat_obj->cat_name;?></a></li>
        <?php endforeach;?>
    </ul>
<?php endif;?>