

<div class="media">
    <div class="media-left">
        <img class="media-object" src="<?= get_avatar_url( get_the_author_meta('ID'),'post-thumbnails'); ?>
?>img/author.png" alt="">
    </div>
    <div class="media-body">
        <div class="media-heading">
            <h3><?= get_the_author_meta('nickname');?></h3>
        </div>
        <p><?= get_the_author_meta('description');?></p>

        <?php
        wp_nav_menu( array(
            'theme_location' => 'social-aside',
            'container'      =>'<ul>',
            'menu_class'    => 'author-social',
            'walker'         =>  new custom_social_menu()
        ));
        ?>

    </div>
</div>