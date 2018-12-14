<div class="col-md-12">
    <div class="section-row">
    <?php $ads=get_field(ADV_ARCHIVE_PAGE,'option');?>
    <?php if($ads): ?>
        <?php foreach ($ads as $ad):?>
        <a href="<?= $ad['adv_link']?>">
            <img class="img-responsive center-block" src="<?= $ad['adv_image']?>" alt="">
        </a>
        <?php endforeach;?>
    <?php endif;?>
    </div>
</div>