<?php
/**
 * The template for displaying search forms in MX
 *
 * @since MX 1.0
 */
?>
<form role="search" class="sidebar-searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
   <div>
        <input class="sidebar-s" name="s" type="text" placeholder="<?php _e('Search','MX'); ?>">
        <button type="submit" class="btn btn-theme"><i class="fa fa-search"></i></button>
   </div>
</form>