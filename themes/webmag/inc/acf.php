
<?php

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Webmag Option',
        'menu_title'	=> 'Webmag Option',
        'menu_slug' 	=> 'webmag-option',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => __('Blocks', DOMAIN),
        'menu_title'    => __('Blocks', DOMAIN),
        'parent_slug'   => 'athena-theme-settings',
    ));


}