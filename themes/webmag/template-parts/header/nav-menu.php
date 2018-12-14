
<?php

wp_nav_menu( array(
        'theme_location' => 'top',
        'container'      =>'<ul>',
        'menu_class'    => 'nav-menu nav navbar-nav',
        'walker'         =>  new custom_top_menu()
));
