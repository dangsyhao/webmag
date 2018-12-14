
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