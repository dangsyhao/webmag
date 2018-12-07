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
        <div class="post post-widget">
            <a class="post-img" href="blog-post.html"><img src="<?= ASSETS_PATH?>img/widget-2.jpg" alt=""></a>
            <div class="post-body">
                <h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
            </div>
        </div>

        <div class="post post-widget">
            <a class="post-img" href="blog-post.html"><img src="<?= ASSETS_PATH?>img/widget-3.jpg" alt=""></a>
            <div class="post-body">
                <h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid On The Backend Development Block!</a></h3>
            </div>
        </div>

        <div class="post post-widget">
            <a class="post-img" href="blog-post.html"><img src="<?= ASSETS_PATH?>img/widget-4.jpg" alt=""></a>
            <div class="post-body">
                <h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
            </div>
        </div>
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