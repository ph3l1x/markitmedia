<?php
/**
 * The Template for displaying all portfolio single posts
 *
 * @since MX 1.0
 */
get_header();
// get portfolio single page style
$portfolio_single_style = mx_get_post_meta_key('post-style');

if(intval($portfolio_single_style) == 0){
	// get default portfolio page style
	$portfolio_single_style = intval(mx_get_options_key('portfolio-single-style')) + 1;
}
?>
<div id="main" class="container">
	<div class="row">
    	<?php 
			get_template_part( 'template/portfolio/portfolio', 'single-style-'.$portfolio_single_style );
		?>
    </div>
</div>
<?php get_footer(); ?>