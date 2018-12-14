
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <ul class="page-header-breadcrumb">
                    <li><a href="<?= get_bloginfo('url');?>"><?php _e('Home',WEBMAG);?></a></li>
                <?php

                    if(is_search()){
                        $output="Search for :\"".get_search_query()."\"";

                    }elseif(is_page()){
                        $output=get_the_title();

                    }elseif(is_archive()){

                        $output =single_term_title('',false);
                    }

                ?>
                    <li><?=$output?></li>

                </ul>

                <?php

                    if(is_search()){
                        $output="Search for :\"".get_search_query()."\"";

                    }elseif(is_page()){
                        $output=get_the_title();

                    }elseif(is_archive()){

                        $output =single_term_title('',false);
                    }

                ?>
                <h1><?= $output ?></h1>
            </div>
        </div>
    </div>
</div>