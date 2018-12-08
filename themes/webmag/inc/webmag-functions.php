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

/*/ Hien thi View bai viet /*/
// function webmag_get_post_views($postID){
//     $count_key = 'webmag_post_views_count';
//     $count = get_post_meta($postID, $count_key, true);
//     if($count==''){
//         delete_post_meta($postID, $count_key);
//         add_post_meta($postID, $count_key, '0');
//         return 0;
//     }
//     return $count;
// }