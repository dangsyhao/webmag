

<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row featured-news">
            <?php get_template_part('template-parts/page/front-page/blocks/recent-posts/featured-news')?>
        </div>
        <!-- /row -->

        <!-- row -->
        <div class="row recent-posts-first">
            <div class="col-md-12">
                <div class="section-title">
                    <h2><?php _e('Recent Posts',WEBMAG);?></h2>
                </div>
            </div>
            <?php get_template_part('template-parts/page/front-page/blocks/recent-posts/recent-posts-first')?>
        </div>
        <!-- /row -->

        <!-- row -->
        <div class="row recent-posts-second">
            <div class="col-md-8">
                <div class="row">
                    <?php get_template_part('template-parts/page/front-page/blocks/recent-posts/recent-posts-second')?>
                </div>
            </div>
            <div class="col-md-4">
                <!-- post widget -->
                <?php get_template_part('template-parts/page/front-page/blocks/recent-posts/aside-widget')?>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>