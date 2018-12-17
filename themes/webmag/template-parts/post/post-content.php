
<div class="col-md-8">
    <?php get_template_part('template-parts/post/blocks/main-post')?>
    <?php if ( comments_open() || get_comments_number() )  comments_template(); ?>
</div>