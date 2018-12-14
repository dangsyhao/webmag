
    <footer id="footer">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-5">
                    <div class="footer-widget">
                        <?php get_template_part('template-parts/footer/blocks/footer-info')?>
                     </div>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="footer-widget">
                                <h3 class="footer-title"><?php _e('About Us',WEBMAG);?></h3>
                                <?php get_template_part('template-parts/footer/blocks/footer-about')?>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="footer-widget">
                                <h3 class="footer-title"><?php _e('Catagories',WEBMAG);?></h3>
                                <?php get_template_part('template-parts/footer/blocks/footer-cat')?>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3 class="footer-title"><?php _e('Join our Newsletter',WEBMAG);?></h3>
                        <?php get_template_part('template-parts/footer/blocks/footer-join')?>

                    </div>
                </div>

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </footer>

    <!-- jQuery Plugins -->
    <script src="<?=ASSETS_PATH?>js/main.js"></script>
    <?php wp_footer()?>

    </body>

</html>