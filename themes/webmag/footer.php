
    <footer id="footer">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-5">
                    <div class="footer-widget">
                        <?php $info=get_field(WEBMAG_LOGO,'option');?>
                        <?php if($info):?>
                    <div class="footer-logo">
                        <a href="<?= get_bloginfo('url');?>" class="logo"><img src="<?= $info['url']?>" alt=""></a>
                    </div>
                        <?php endif;?>

                    <?php $info=get_field(WEBMAG_INFOMATION,'option');?>
                    <?php if($info):?>
                        <ul class="footer-nav">
                            <li><a href="<?= $info['privacy_policy']?>">Privacy Policy</a></li>
                            <li><a href="<?= $info['advertisement']?>">Advertisement</a></li>
                        </ul>

                        <div class="footer-copyright">
                            <span><?= $info['copyright']?></span>
                        </div>
                    <?php endif;?>

                        </div>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-6">
                            <?php $rows=get_field(WEBMAG_ABOUT_US,'option');?>
                            <?php if($rows):?>
                            <div class="footer-widget">
                                <h3 class="footer-title">About Us</h3>
                                <ul class="footer-links">
                                <?php foreach($rows as $row):?>
                                    <li><a href="<?= $row['about_link']?>"><?= $row['about_label']?></a></li>
                                <?php endforeach;?>
                                </ul>
                            </div>
                            <?php endif;?>

                        </div>

                        <div class="col-md-6">
                            <?php $cat_objs=get_categories();?>
                            <?php if(isset($cat_objs)):?>
                            <div class="footer-widget">
                                <h3 class="footer-title">Catagories</h3>
                                <ul class="footer-links">
                                <?php foreach($cat_objs as $cat_obj):?>
                                    <li><a href="<?= get_category_link($cat_obj->cat_ID) ?>"><?= $cat_obj->cat_name;?></a></li>
                                <?php endforeach;?>
                                </ul>
                            </div>
                            <?php endif;?>
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3 class="footer-title">Join our Newsletter</h3>
                        <div class="footer-newsletter">
                            <form method="get" action="http://webmag.me/contact/">
                                <input class="input" type="email" name="newsletter" placeholder="Enter your email">
                                <button class="newsletter-btn"><i class="fa fa-paper-plane"></i></button>
                            </form>
                        </div>

                    <?php
                        wp_nav_menu( array(
                        'theme_location' => 'social-aside',
                        'container'      =>'<ul>',
                        'menu_class'    => 'footer-social',
                        'walker'         =>  new custom_social_menu()
                        ));
                    ?>

                    </div>
                </div>

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </footer>

    <!-- jQuery Plugins -->
    <script src="<?=ASSETS_PATH?>js/main.js"></script>

    </body>
</html>