<?php
// Dem View bai viet .

function webmag_set_post_views($postID){
    $count_key = 'webmag_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count=0;
        add_post_meta($postID, $count_key,$count);
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//Dòng này để chắc chắc WordPress sẽ đếm chính xác hơn
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


//Set Color Class Category
function set_color_menu(){
   $cat_objs=get_categories();
    $output=array();
    foreach ($cat_objs as $cat_obj){
       $cat_id=$cat_obj->cat_ID;
       $color=get_field('cat_color',"category_".$cat_id);

       $output[]='
       .nav-menu li.cate-'.$cat_id.' a:after{
                        background-color:'.$color.';
                    }
                    .nav-menu li.cate-'.$cat_id.' a:hover{
                        color:'.$color.'
                    }
       ';
   }
   echo "<style>".join('',$output)."</style>\n";
}
add_action('wp_footer', 'set_color_menu');



