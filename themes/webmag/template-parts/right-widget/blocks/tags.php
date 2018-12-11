<div class="tags-widget">
    <ul>
        <?php
        $posts=new WP_Query($args=array('post_type'=>'post'));
        $post=$posts->post;
        setup_postdata($post);
        $tag_objs=get_the_tags();
        ?>
        <?php if($tag_objs):?>
            <?php foreach ($tag_objs as $tag_obj):?>
                <li>
                    <a href="<?= get_tag_link($tag_obj->term_id) ?>" class="cat-1"><?= $tag_obj->name;?></a>
                </li>
            <?php endforeach;?>
        <?php endif;?>
        <?php wp_reset_postdata();?>
        <?php wp_reset_query();?>
    </ul>
</div>