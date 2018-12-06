<div id="nav-aside">
    <!-- nav -->
    <div class="section-row">
        <ul class="nav-aside-menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="#">Join Us</a></li>
            <li><a href="#">Advertisement</a></li>
            <li><a href="contact.html">Contacts</a></li>
        </ul>
    </div>
    <!-- /nav -->

    <!-- Beadcrumb -->
    <?php if(!is_front_page() && !is_single()):?>

        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <ul class="page-header-breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>Contact</li>
                        </ul>
                        <h1>Contact</h1>
                    </div>
                </div>
            </div>
        </div>
    <?php endif;?>
    <!-- /Beadcrumb -->


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
        <ul class="nav-aside-social">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
        </ul>
    </div>
    <!-- /social links -->

    <!-- aside nav close -->
    <button class="nav-aside-close"><i class="fa fa-times"></i></button>
    <!-- /aside nav close -->
</div>