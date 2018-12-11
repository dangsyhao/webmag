<?php
/**
 * Template for displaying search forms
 */

?>


<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input class="search-input" type="text"  placeholder="Enter Your Search ..." name="s">
    <button class="search-close" type="submit"><i class="fa fa-times"></i></button>

</form>
