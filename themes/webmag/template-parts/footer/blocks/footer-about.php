
<?php $rows=get_field(WEBMAG_ABOUT_US,'option');?>
<?php if($rows):?>
    <ul class="footer-links">
        <?php foreach($rows as $row):?>
            <li><a href="<?= $row['about_link']?>"><?= $row['about_label']?></a></li>
        <?php endforeach;?>
    </ul>
<?php endif;?>