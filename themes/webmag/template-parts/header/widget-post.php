<div id="nav-aside">
    <!-- nav -->
        <?php
            wp_nav_menu( array(
                'theme_location'    => 'aside',
                'menu_class'        => 'nav-aside-menu',
                'container_class'   =>'section-row'
                ));
        ?>

    <!-- /nav -->

    <!-- widget posts -->
    <div class="section-row">
        <h3>Recent Posts</h3>
        <?php
        $args = array(
            'post_type'         => 'post',
            'posts_per_page'    =>  3,
            'meta_key'        	=> 'webmag_post_views_count',
            'orderby'         	=> 'meta_value',
            'order'             => 'DESC',
            'post_status'       => 'publish',
            'suppress_filters'  => true
        );
        $the_query=new WP_Query($args);

        ?>
        <!-- post -->
        <?php while($the_query->have_posts()):$the_query->the_post();?>
        <div class="post post-widget">
            <a class="post-img" href="<?php the_permalink()?>"><img src="<?= get_the_post_thumbnail_url($post->ID,'webmag-mostread-aside-post-image')?>" alt=""></a>
            <div class="post-body">
                <h3 class="post-title"><a href="<?php the_permalink()?>"><?php the_title()?></a></h3>
            </div>
        </div>
        <?php endwhile;?>
        <?php wp_reset_query();?>
    </div>
    <!-- /widget posts -->

    <!-- social links -->
    <div class="section-row">
        <h3>Follow us</h3>

        <?php
            wp_nav_menu( array(
                    'theme_location' => 'social-aside',
                    'container'      =>'<ul>',
                    'menu_class'    => 'nav-aside-social',
                    'walker'         =>  new custom_social_menu()
            ));
        ?>

    </div>
    <!-- /social links -->

    <!-- aside nav close -->
    <button class="nav-aside-close"><i class="fa fa-times"></i></button>
    <!-- /aside nav close -->
</div>