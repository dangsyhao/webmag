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

//Set Class Category
function set_cat_class(){
    $cat_objs=get_categories();
    $arr=array();
    $count_cat=0;
    foreach($cat_objs as $cat_obj){
        $count_cat++;
        $arr[$cat_obj->cat_ID]="cat-".$count_cat;
    }
return $arr;
}
//Get Class Category
function get_cat_class($cat_id){
    $arr=set_cat_class();
    foreach ($arr as $key => $value) {
        if($cat_id==$key){
            return $value;
        }
        else{
            return false;
        }
    }

}