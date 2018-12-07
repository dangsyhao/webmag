<?php
/**
 * Template for displaying search forms in Twenty Seventeen
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>


<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input class="search-input" type="text"  placeholder="Enter Your Search ..." name="s">
    <button class="search-close" type="submit"><i class="fa fa-times"></i></button>

</form>
