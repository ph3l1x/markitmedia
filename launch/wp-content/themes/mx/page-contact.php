<?php
/**
 * Template Name: Contact Template
 *
 * @since MX 1.0
 */
get_header();

// get page layout
$layout = mx_get_page_layout(); 
$layout_class = mx_get_page_layout_class();
			
// header show google map
if(mx_get_post_meta_key('contact-show-map') == "on") {
	$map_height = intval(mx_get_post_meta_key('contact-map-height'));
	if($map_height == 0){ $map_height = '350';}
	echo do_shortcode('[map width="100%" height="'.esc_attr($map_height).'" latlng="'.esc_attr(mx_get_post_meta_key('contact-map-latlng')).'" theme="'.esc_attr(mx_get_post_meta_key('contact-map-theme')).'" scrollwheel="no" show_marker="yes" show_info="yes" info_width="300"]'.mx_get_post_meta_key('contact-map-address').'[/map]'); 
}
?> 
<div id="main" class="container">
	<div class="row">
        <section class="<?php echo $layout == 1 ? 'col-md-12 col-sm-12' : 'mx-col col-lg-9 col-md-8 col-sm-8 mx-'.$layout_class; ?>">
			<?php if ( have_posts() ){
						while ( have_posts() ) {
							the_post();
							the_content(); 
							wp_link_pages();
							if(mx_get_post_meta_key('contact-form') == "on"){
								get_template_part( 'template/contact/custom', 'contact-form');
							}
				  		}
					} else { ?>
                <p><?php _e('Sorry, this page does not exist.' , 'MX' ); ?></p>
            <?php } ?>
        </section>
        <?php if($layout != 1) { ?> 
        <aside class="mx-col col-lg-3 col-md-4 col-sm-4 mx-<?php echo $layout_class;?>"><?php generated_dynamic_sidebar(); ?></aside>
        <?php } ?>
    </div>
</div>
<?php get_footer(); ?>