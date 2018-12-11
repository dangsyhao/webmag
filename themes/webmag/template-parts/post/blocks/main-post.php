<div class="section-row sticky-container">
    <div class="main-post">
        <?php the_content();?>
    </div>

    <div class="post-shares sticky-shares" style="position: absolute; top: 0px; left: 0px;">
        <a href="#" class="share-facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="share-twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="share-google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="share-pinterest"><i class="fa fa-pinterest"></i></a>
        <a href="#" class="share-linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-envelope"></i></a>
    </div>
</div>

<!-- /ad -->
<?php $adv_objs=get_field(ADV_SINGLE_POST,'option');?>
<?php if($adv_objs):?>
    <?php foreach ($adv_objs as $adv_obj):?>
        <div class="section-row text-center">
            <a href="<?= $adv_obj['adv_link']?>"  style="display: inline-block;margin: auto;">
                <img class="img-responsive" src="<?= $adv_obj['adv_image']?>" alt="">
            </a>
        </div>
    <?php endforeach;?>
<?php endif;?>

<div class="section-row">
    <div class="post-author">
        <?php get_template_part('template-parts/post/blocks/author');?>
    </div>
</div>