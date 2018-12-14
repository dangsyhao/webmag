<?php
/* Template Name: Contact Page */
get_header()

?>
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="section-row">
                        <?php while(have_rows(WEBMAG_CONTACTS)):the_row();?>
                        <h3>Contact Information</h3>
                        <p><?= get_sub_field('contact_information') ?></p>
                        <ul class="list-style">
                            <li><p><strong>Email:</strong> <a href="#"> <?= get_sub_field('email') ?></a></p></li>
                            <li><p><strong>Phone:</strong> <?= get_sub_field('phone') ?></p></li>
                            <li><p><strong>Address:</strong> <?= get_sub_field('address') ?></p></li>
                        </ul>
                        <?php endwhile;?>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <div class="section-row">
                        <h3>Send A Message</h3>
                        <?= do_shortcode("[contact-form-7 id=\"5\" title=\"Contact form 1\"]"); ?>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>



<?php get_footer()?>