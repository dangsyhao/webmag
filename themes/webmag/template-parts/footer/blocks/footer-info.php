
<?php $info=get_field(WEBMAG_LOGO,'option');?>
<?php if($info):?>
    <div class="footer-logo">
        <a href="<?= get_bloginfo('url');?>" class="logo"><img src="<?= $info['url']?>" alt=""></a>
    </div>
<?php endif;?>

<?php $info=get_field(WEBMAG_INFOMATION,'option');?>
<?php if($info):?>
    <ul class="footer-nav">
        <li><a href="<?= $info['privacy_policy']?>">Privacy Policy</a></li>
        <li><a href="<?= $info['advertisement']?>">Advertisement</a></li>
    </ul>

    <div class="footer-copyright">
        <span><?= $info['copyright']?></span>
    </div>
<?php endif;?>