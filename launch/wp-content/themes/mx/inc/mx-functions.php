<?php

//========================================================
//  	THEME METHODS
//========================================================

if ( ! function_exists( 'mx_get_custom_font' ) ) :
/**
 * get Custom Font For google font	
 *
 * @since MX 1.0
 */
function mx_get_custom_font(){
	global $mx_options,$google_fonts,$google_load_fonts,$google_custom_fonts;
	$google_load_fonts = "";
	$google_custom_fonts = array();
 	$general_font 				= 'Lato';
	$general_font_size 			= '14px';
	$menu_font					= 'Lato';
	$menu_font_size				= '13px';
	
	$title_font					= 'Lato';
	$font_names = array();
	$load = false;
	if(mx_get_options_key('custom-enable-font') == "on"){

		$array = explode("|",$google_fonts);
		
		if( intval(mx_get_options_key('custom-general-font')) != 0){
			$font_name = $array[intval($mx_options['custom-general-font'])-1];
			$general_font = mx_get_current_font_name($font_name);
			array_push($font_names,$font_name.':'.mx_get_options_key('custom-general-font-weight'));
		}else{
			$load = true;
		}
			
		if( intval(mx_get_options_key('custom-menu-font')) != 0){
			$font_name = $array[intval($mx_options['custom-menu-font'])-1];
			$menu_font = mx_get_current_font_name($font_name);
			array_push($font_names,$font_name.':'.mx_get_options_key('custom-menu-font-weight'));
		}else{
			$load = true;
		}
		
		if( intval(mx_get_options_key('custom-title-font')) != 0){
			$font_name = $array[intval($mx_options['custom-title-font'])-1];
			$title_font = mx_get_current_font_name($font_name);
			array_push($font_names,$font_name.':'.mx_get_options_key('custom-title-font-weight'));
		}else{
			$load = true;
		}
	}else{
		$load = true;
	}
	
	if($load == true) {
		array_push($font_names,'Lato:400,300,700,300italic,400italic,700italic');
	}

	$google_custom_fonts['general_font']				= $general_font;
	$google_custom_fonts['menu_font']					= $menu_font;
	$google_custom_fonts['title_font']					= $title_font;
	
	$google_load_fonts = implode("|",array_unique($font_names));
	
}
endif;

if ( ! function_exists( 'mx_get_current_font_name' ) ) :
/**
 * Get current font name
 *
 * @since MX 1.0
 */
function mx_get_current_font_name($font_name){
	$arr = explode(":", str_replace("+"," ",$font_name) );
	return $arr[0];
}
endif;

if ( ! function_exists( 'mx_content_nav' ) ) :
/**
 * Display navigation to next/previous pages when applicable
 *
 * @since MX 1.0
 */
function mx_content_nav( $nav_id ,$nav_class = '' ) {
	global $wp_query;
	if ( $wp_query->max_num_pages > 1 ) : ?>
        <nav id="<?php echo $nav_id; ?>"  class="posts-nav <?php echo $nav_class; ?>">
			<div class="nav-prev"><?php next_posts_link( __( '&larr; Older posts', 'MX' ) ); ?></div>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'MX' ) ); ?>
		</nav>
	<?php endif;
}
endif;

if ( ! function_exists( 'mx_single_content_nav' ) ) :
/**
 * Display single post navigation to next/previous post when applicable
 *
 * @since MX 1.0
 */
function mx_single_content_nav( $nav_id ,$nav_class = '' ) {
?>
	<nav class="single-pagination row-fluid">
		<?php previous_post_link('%link', __('&laquo; %title', 'MX')); ?>
		<?php next_post_link('%link ', __('%title &raquo;', 'MX')); ?>
	</nav>
<?php
}
endif;

if ( ! function_exists( 'mx_single_content_nav_follow' ) ) :
/**
 * Display single post navigation to next/previous align screen left,right center
 *
 * @since MX 1.0
 */
function mx_single_content_nav_follow( $nav_id ,$nav_class = '' ) {
?>
	<nav id="<?php echo $nav_id; ?>" class="single-pagination-follow <?php echo $nav_class; ?>">
		<?php previous_post_link('%link', '<i class="fa fa-angle-left"></i><span>%title</span>'); ?>
		<?php next_post_link('%link ', '<span>%title</span><i class="fa fa-angle-right"></i>'); ?>
	</nav>
<?php
}
endif;

if ( ! function_exists( 'mx_posted_on' ) ) :
/**
 * Print HTML with meta information for the current author and category.
 *
 * @since MX 1.0
 */
function mx_posted_on(){
	?>
	<span class="author vcard"><a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"><span itemprop="author"><?php echo get_the_author(); ?></span></a></span><?php _e(' wrote in ','MX');?><span class="cat-links" itemprop="genre"><?php echo get_the_category_list( __( ', ', 'MX' ) ); ?></span>
    <?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>
	<span class="comments-link" itemprop="interactionCount"><?php _e(' with ','MX');?><?php comments_popup_link( __( '0 comment', 'MX' ), __( '1 Comment', 'MX' ), __( '% Comments', 'MX' ) ); ?></span>
	<?php } ?>
    <?php echo '.'; ?>
    <?php edit_post_link( '<i class="fa fa-pencil"></i>'.__( 'Edit', 'MX' ), ' <span class="edit-link">', '</span>' ); ?>
	<?php
}
endif;

if ( ! function_exists( 'mx_get_thumbnail_size' ) ) :
/**
 * get current element image show size
 *
 * @since MX 1.0
 */
function mx_get_thumbnail_size($column_number, $no_crop = ''){
	if($no_crop == "on"){
		return 'mx-nocrop-thumbs';
	}
	$thumbnail_size = 'mx-m-thumbs';
	switch(intval($column_number)){
		case 0:$thumbnail_size = 'mx-m-thumbs';break;
		case 1:$thumbnail_size = 'mx-s-thumbs';break;
		case 2:$thumbnail_size = 'mx-s-thumbs';break;
	}
	return $thumbnail_size;
}
endif;

if ( ! function_exists( 'mx_get_element_columns' ) ) :
/**
 * get current element columns class
 *
 * @since MX 1.0
 */
function mx_get_element_columns($column_number){
	$columns = 'col-md-4 col-sm-6 col-xs-6';
	switch(intval($column_number)){
		case -1:$columns = 'col-md-12 col-sm-12 col-xs-12';break;
		case 0:$columns = 'col-md-6 col-sm-6 col-xs-6';break;
		case 1:$columns = 'col-md-4 col-sm-6 col-xs-6';break;
		case 2:$columns = 'col-md-3 col-sm-4 col-xs-6';break;
	}
	return $columns;;
}
endif;

if ( ! function_exists( 'mx_get_page_layout' ) ) :
/**
 * Get Page Layout
 * @since MX 1.0
 */
function mx_get_page_layout($id = "-1") {
	if($id != 'global'){
		$layout = intval(get_post_meta($id != "-1" ? $id : get_the_ID(), 'layout-type', true));
		if($layout != 0){
			return $layout;
		}
	}
	if(intval(mx_get_options_key('global-sidebar-layout')) == 1){
		return 2;
	}else if(intval(mx_get_options_key('global-sidebar-layout')) == 2){
		return 3;
	}
	return 1;
}
endif;

if ( ! function_exists( 'mx_get_page_layout_class' ) ) :
/**
 * Get Page Layout
 *
 * @since mx 4.0
 */
function mx_get_page_layout_class($id = "-1") {
	if($id != 'global'){
		$layout = intval(get_post_meta($id != "-1" ? $id : get_the_ID(), 'layout-type', true));
		switch($layout){
			case 1: return '';
			case 2: return 'left';
			case 3: return 'right';
		}
	}
	switch(intval(mx_get_options_key('global-sidebar-layout'))){
		case 1: return 'left';
		case 2: return 'right';
	}
	return 'right';
}
endif;

if ( ! function_exists( 'mx_page_links' ) ) :
/**
 * Get Page Header Links
 *
 * @since MX 1.0
 */
function mx_page_links() {
	
	$output = '';
	// page is not front page show first link with "home" page;
    if( !is_front_page() ) {
       $output .= '<a href="'.home_url().'" title="'.__('Home','MX').'"><i class="fa fa-home"></i></a>';
    }
    
	// page is used home page as posts
	if((is_home() || is_category() || is_tag() || is_date() || is_single()) && !is_front_page()){
		
		$single_type = get_post_type(get_the_ID());
		
		if(is_single() && $single_type == "portfolio") {
			global $portfolio_default_page_id;
		
			// show default portfolio page
			$portfolio_default_page_id  = mx_get_default_portfolio_page();
			$portfolio_page = get_page( $portfolio_default_page_id );
			
			$output .= '<span class="breadcrumb-right">/</span><a href="'.get_permalink($portfolio_default_page_id).'" title="'.$portfolio_page->post_title.'">'.$portfolio_page->post_title.'</a>';
		} else {
			if(intval(get_option('page_for_posts')) > 0) {
				$page = get_page( get_option('page_for_posts') );
				$output .= '<span class="breadcrumb-right">/</span><a href="'.get_permalink(get_option('page_for_posts')).'" title="'.$page->post_title.'">'.$page->post_title.'</a>';
			}
		}
	}
	
	// page is category
	if(is_category()){
		$cat = get_category( get_query_var( 'cat' ) );
		$output .= '<span class="breadcrumb-right">/</span><span>'.__('Category Archive for "','MX').$cat->name.'"</span>';
	}
	
	// show portfolio category link
	if(is_tax()) {
		global $term,$portfolio_default_page_id,$current_tax;
		if((taxonomy_exists('portfolio-cats') && $current_tax == "portfolio-cats") || (taxonomy_exists('portfolio-tags') && $current_tax == "portfolio-tags")){
			// show default portfolio page
			$portfolio_default_page_id  = mx_get_default_portfolio_page();
			$portfolio_page = get_page( $portfolio_default_page_id );
			
			$output .= '<span class="breadcrumb-right">/</span><a href="'.get_permalink($portfolio_default_page_id).'" title="'.$portfolio_page->post_title.'">'.$portfolio_page->post_title.'</a>';
			// show category name
			$output .= '<span class="breadcrumb-right">/</span><span>'.$term->name.'</span>';
		}
	}
	
	// show page title
	if(is_page() || is_single()){
		global $post;
		if ( is_page() && $post->post_parent ) {
      		$parent_id  = $post->post_parent;
      		$breadcrumbs = array();
			while ($parent_id) {
				$page = get_page($parent_id);
				$breadcrumbs[] = '<span class="breadcrumb-right">/</span><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
				$parent_id  = $page->post_parent;
			}
			$breadcrumbs = array_reverse($breadcrumbs);
			for ($i = 0; $i < count($breadcrumbs); $i++) {
				$output .= $breadcrumbs[$i];
			}
    	}
		
		//add category link for post
		if(is_single()){
			if( is_singular('post') && mx_get_options_key('blog-enable-breadchrumb') == 'on'){
				$categories = get_the_category();
				if($categories){
					$cat_first = true;
					$output .= '<span class="breadcrumb-right">/</span>';
					foreach($categories as $category) {
						if(!$cat_first){ $output .= ' , ';}
						$output .= '<a href="'.get_category_link($category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s",'MX'), $category->name ) ) . '">'.$category->cat_name.'</a>';
						$cat_first = false;
					}
				}
			}else if( is_singular('portfolio') && mx_get_options_key('portfolio-enable-breadchrumb') == 'on'){
				$categories = mx_get_custom_portfolio_category_links( mx_get_custom_post_categories(get_the_ID(),'portfolio-cats',false)  , ' , ');
				if($categories != ""){ $output .= '<span class="breadcrumb-right">/</span>'.$categories; }
			}
		}
		
		$output .= '<span class="breadcrumb-right">/</span><span>'.get_the_title().'</span>';
	}
	
	// tag page
	if(is_tag()) {

		$output .= '<span class="breadcrumb-right">/</span><span>'.__('Posts Tagged "','MX').single_tag_title('', false).'"</span>';
	}
	
	// search page
	if(is_search()) {
		//$output .= '<span class="breadcrumb-right">/</span><span>'.__('Search' , 'MX').'</span>';
	}
	
	// 404 page
	if(is_404()){
		$output .= '<span class="breadcrumb-right">/</span><span>'.__('404 Error' , 'MX').'</span>';
	}
	
	// date page
	if(is_date()){
		$output .= '<span class="breadcrumb-right">/</span><span>'.__('Date Archives for "','MX').get_the_time('Y-M').'"</span>';
	}
	
	// author page
	if(is_author()){
		global $author_name;
		$output .= '<span>'.__('Author "','MX').$author_name.'"</span>';
	}
	return $output;
}
endif;

if ( ! function_exists( 'mx_page_title' ) ) :
/**
 * Get Page Title
 *
 * @since MX 1.0
 */
function mx_page_title(){
	$output = '';
	
	// category page
	if(is_category()) $output = single_cat_title('', false);
	
	// tag page
	if(is_tag()) $output = single_tag_title('', false);
	
	// search page
	if(is_search()) $output = __('Search' , 'MX');
	
	// 404 page
	if(is_404()) $output = __('Nothing Found' , 'MX');
	
	// date page
	if(is_date())  $output = get_the_time('Y-M');
	
	// author page
	if(is_author()) $output = __('Author' , 'MX');
	
	if(is_tax()){
		global $term,$current_tax;
		if( taxonomy_exists('portfolio-cats') && $current_tax == "portfolio-cats") {
			$output = __('Category for : ','MX').$term->name;
		}else if( taxonomy_exists('portfolio-tags') && $current_tax == "portfolio-tags") {
			$output = __('Tag for : ','MX').$term->name;
		}
	}
	
	return $output;
}
endif;

if ( ! function_exists( 'mx_get_topbar_content' ) ) :
/**
 * Show topbar left, right content
 *
 * @since MX 1.0
 */
function mx_get_topbar_content($position = 0){
	$topbar_custom_style = mx_get_options_key('topbar-custom-style');

	if($topbar_custom_style && $topbar_custom_style != ""){
		$topbars 	= explode("|", $topbar_custom_style); 
		$open_ul	=	false;
		foreach($topbars as $topbar){
			$option = explode("-", $topbar);
			if(count($option)>1 && intval($option[1]) != 2){
				if(intval($option[1]) == $position){
					switch($option[0]){
						case '0':
								if($open_ul) {echo '</ul>';$open_ul = false;}
								
								$mx_topbar_menu = array(
									'theme_location'  	=> 'mx_topbar_menu',
									'container'			=> '',
									'menu_class'    	=> 'mx-topbar-menu',
									'fallback_cb'	  	=> 'mx_show_setting_other_menu'
								); 
								wp_nav_menu($mx_topbar_menu);
								break;
						case '1':
								if($open_ul) {echo '</ul>';	$open_ul = false;}
								?>
                                <ul class="topbar-login">
                                <li>
                                <?php 
								if(class_exists( 'woocommerce' )){
									global $woocommerce;
									
									if ( is_user_logged_in() ) {
									?>
                                    	<a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php _e( 'View your account', 'MX' ); ?>"><i class="fa fa-user topbar-title-icon"></i><div class="topbar-title"><?php echo __('My Account','MX');
                                    ?></div></a>
                                    <?php
									}else{
									?>
                                    	<a class="wc-login-in" href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php _e( 'Login', 'MX' ); ?>"><i class="fa fa-user topbar-title-icon"></i><div class="topbar-title"><?php _e( 'Log In', 'MX' ); ?></div></a>
                                    <?php
									}
								}else{
									if ( is_user_logged_in() ) { ?>
                                        <a href="<?php echo esc_url( mx_get_options_key('global-login-page') ); ?>" title="<?php _e( 'View your account', 'MX' ); ?>"><i class="fa fa-user topbar-title-icon"></i><div class="topbar-title"><?php echo __('My Account','MX');
                                    ?></div></a>
                                    
                                    <?php }else{ ?>
                                        <a class="wc-register" href="<?php echo esc_url( mx_add_param_for_link( mx_get_options_key('global-login-page'), 'action=register') ); ?>" title="<?php _e( 'Create a Free Account', 'MX' ); ?>"><i class="fa fa-plus-square topbar-title-icon"></i><div class="topbar-title"><?php _e( 'Create an Account', 'MX' ); ?></div></a>
                                    </li>
                                    <li>
                                    	<a class="wc-login-in" href="<?php echo esc_url( mx_add_param_for_link( mx_get_options_key('global-login-page'), 'action=login') ); ?>" title="<?php _e( 'Login', 'MX' ); ?>"><i class="fa fa-user topbar-title-icon"></i><div class="topbar-title"><?php _e( 'Log In', 'MX' ); ?></div></a>
                                    <?php }
								}	
								?>
                                </li>
                                </ul>
                                <?php
								break;
						case '2':
								if(class_exists( 'woocommerce' )){
									if(!$open_ul) {echo '<ul>';	$open_ul = true;}
									echo '<li class="topbar-cart">';
									get_template_part( 'woocommerce/content', 'topbar-header' );
									echo '</li>';
								}
								break;
						case '3':
								if($open_ul) {echo '</ul>';	$open_ul = false;}
								echo '<ul class="topbar-social share-social">'.mx_get_social_list('',true).'</ul>';
								break;
						case '4':
								if($open_ul) {echo '</ul>';	$open_ul = false;}
								echo '<ul class="topbar-wmpl">'.penguin_get_wpml_switcher().'</ul>';
								break;
						case '5':
								if($open_ul) {echo '</ul>';	$open_ul = false;}
								echo '<div class="custom-content">'.do_shortcode(mx_get_options_key('topbar-content')).'</div>';
								break;
					}
				}
			}
		}
		if($open_ul) {echo '</ul>';	}
	}
}
endif;

if ( ! function_exists( 'mx_get_footer_widget_active_items' ) ) :
/**
 * Get footer widget items
 *
 * @since MX 1.0
 */
function mx_get_footer_widget_active_items(){
	$widgets = array();
	$footer_widget_style = intval(mx_get_options_key('footer-widget-style'));
	$count = 0;
	if (function_exists('dynamic_sidebar')){
		
		for($i = 1;$i<5;$i++){
			if(is_active_sidebar('sidebar-footer-'.$i)){
				//1-1-1
				if($footer_widget_style == 8){
					$widgets[] = array('col-md-4 col-sm-4','sidebar-footer-'.$i);
					$count++;
					if($count >= 3){
						break;
					}
					continue;
				}else if($footer_widget_style == 9 || $footer_widget_style == 10){
					
					if(($footer_widget_style == 9 && $count == 0) || ($footer_widget_style == 10 && $count == 1)){
						$widgets[] = array('col-md-4 col-sm-4','sidebar-footer-'.$i);
					}else{
						$widgets[] = array('col-md-8 col-sm-8','sidebar-footer-'.$i);
					}
					$count++;
					if($count >= 2){
						break;
					}
					continue;
				}
				
				// full width
				if($footer_widget_style == 7){
					$widgets[] = array('col-md-12 col-sm-12','sidebar-footer-'.$i);
					break;
				}
				
				//'1-1-1-1','1-2-1','2-1-1','1-1-2','2-2','1-3','3-1'
				if($footer_widget_style == 0 || ($footer_widget_style == 1 && $count != 1) || ($footer_widget_style == 2 && $count != 0) || ($footer_widget_style == 3 && $count != 2) || ($footer_widget_style == 5 && $count == 0) || ($footer_widget_style == 6 && $count == 1)){
					$widgets[] = array('col-md-3 col-sm-3','sidebar-footer-'.$i);
				}else if($footer_widget_style >0 && $footer_widget_style < 5){
					$widgets[] = array('col-md-6 col-sm-6','sidebar-footer-'.$i);
				}else {
					$widgets[] = array('col-md-9 col-sm-9','sidebar-footer-'.$i);
				}
				$count++;
				if(($footer_widget_style > 0 && $footer_widget_style < 4  && $count >= 3) || ($footer_widget_style > 4 && $count >= 2)){
					break;
				}
			}
		}
	}
	return $widgets;
}
endif;

if ( ! function_exists( 'mx_get_post_gallery_ids' ) ) :
/**
 * Get Page,Post custom gallery ids
 *
 * @since MX 1.0
 */
function mx_get_post_gallery_ids($gallery_images){
	$ids = array();
	$list = explode("{|}",$gallery_images);
	foreach($list as $item){
		$img_data = explode("<|>",$item);
		if(count($img_data) > 1 && isset($img_data[1])){
			$ids[] = $img_data[1];
		}
	}
	return $ids;
}
endif;

if ( ! function_exists( 'mx_get_portfolio_custom_fields' ) ) :
/**
 * Get Portfolio custom gallery ids
 *
 * @since MX 1.0
 */
function mx_get_portfolio_custom_fields($current_data){
	$lists = explode("{|}",$current_data);
	if(count($lists) > 0){
		foreach($lists as $list_item){
			if($list_item == "") {continue;}
			$fileds = explode("[|]",$list_item);
			if(count($fileds) > 2){
				echo '<li><div class="type"><i class="fa '.esc_attr($fileds[1]).'"></i>'.esc_html($fileds[0]).'</div><div class="value">'.esc_html($fileds[2]).'</div></li>';
			}
		}
	}
}
endif;

if ( ! function_exists( 'mx_get_page_custom_options_css' ) ) :
/**
 * Get Page Custom Options CSS
 *
 * @since MX 1.0
 */
function mx_get_page_custom_options_css(){
	if((class_exists( 'woocommerce') && is_shop()) || is_page() || is_single() || is_home() || is_front_page()){
		
		if(class_exists( 'woocommerce') && is_shop()){
			$post_id = woocommerce_get_page_id( 'shop');
		}else if(is_home() && !is_front_page() && intval(get_option('page_for_posts')) > 0){
			$post_id = get_option('page_for_posts');
		}else{
			$post_id = get_the_ID();
		}

		$options = get_post_custom($post_id);
		?>
<style id="mx-custom-page-css" type="text/css">
<?php
if(mx_get_post_meta_key('title-align',$post_id) != "" && intval(mx_get_post_meta_key('title-align',$post_id)) != 0){
	switch(intval(mx_get_post_meta_key('title-align',$post_id))){
		case 1: echo '#site-content-header {text-align:left;}';break;
		case 2: echo '#site-content-header {text-align:center;}';break;
		case 3: echo '#site-content-header {text-align:right;}';break;
	}
}
mx_add_background_style('page', 'body.boxed-layout, body.fixed-layout', 1, false, $options); 
mx_add_background_style('page-header','#mx-header',1, false, $options); 
mx_add_background_style('page-title','#site-content-header',1, false, $options); 
mx_add_background_style('page-content','#page-content-wrap',1, false, $options); 
mx_add_background_style('page-footer','#site-footer-widget',1, false, $options); 

if(mx_get_post_meta_key('post-css-style',$post_id) != ""){
	echo mx_get_post_meta_key('post-css-style',$post_id);
}
?>
@media only screen and (-Webkit-min-device-pixel-ratio: 1.5),
only screen and (-moz-min-device-pixel-ratio: 1.5),
only screen and (-o-min-device-pixel-ratio: 3/2),
only screen and (min-device-pixel-ratio: 1.5) {
<?php 
mx_add_background_style('page', 'body.boxed-layout, body.fixed-layout', 1, true, $options); 
mx_add_background_style('page-header','#mx-header',1, true, $options); 
mx_add_background_style('page-title','#site-content-header',1, true, $options); 
mx_add_background_style('page-content','#page-content-wrap',1, true, $options); 
mx_add_background_style('page-footer','#site-footer-widget',1, true, $options); 

if(mx_get_post_meta_key('post-css-retina-style',$post_id) != ""){
	echo mx_get_post_meta_key('post-css-retina-style',$post_id);
}

?>	
}
</style>
        <?php 
	}
}
endif;

if ( ! function_exists( 'mx_get_page_custom_options_scripts' ) ) :
/**
 * Get Page Custom Scripts
 *
 * @since MX 1.1
 */
function mx_get_page_custom_options_scripts(){
	if((class_exists( 'woocommerce') && is_shop()) || is_page() || is_single() || is_home() || is_front_page()){
		if(class_exists( 'woocommerce') && is_shop()){
			$post_id = woocommerce_get_page_id( 'shop');
		}else if(is_home() && !is_front_page() && intval(get_option('page_for_posts')) > 0){
			$post_id = get_option('page_for_posts');
		}else{
			$post_id = get_the_ID();
		}
		if(mx_get_post_meta_key('post-custom-scripts',$post_id) != ""){
			return mx_get_post_meta_key('post-custom-scripts',$post_id);
		}
	}
	return '';
}
endif;

if ( ! function_exists( 'mx_get_all_template_type_pages' ) ) :
/**
 * Get All Portfolio Type Pages
 *
 * @since MX 1.0
 */
function mx_get_all_template_type_pages($template = array(), $re_id = false) {
	$template_pages = array();
	$p_types = $template;
	if(count($p_types) > 0){
		foreach($p_types as $p_type){
			$args = array(
				'meta_key' => '_wp_page_template',
				'meta_value' => $p_type,
				'post_type' => 'page',
				'post_status' => 'publish',
				'sort_column' => 'ID',
				'sort_order' => 'asc'
			); 
			$pages = get_pages($args); 
			if(!empty($pages)) {
				foreach($pages as $page){
					if($re_id){
						$template_pages[] = $page->ID;
					}else {
						$template_pages[$page->ID] = $page->post_title;
					}
				}
			}
		}
		if($re_id){
			sort($template_pages, SORT_NUMERIC);
		}else{
			ksort($template_pages, SORT_NUMERIC);
		}
	}
	return $template_pages;
}
endif;

if ( ! function_exists( 'mx_get_default_portfolio_page' ) ) :
/**
 * Get Default Portfolio Page
 *
 * @since MX 1.0
 */
function mx_get_default_portfolio_page() {
	global $portfolio_default_page_id;
	$default_page_id = intval( mx_get_options_key('portfolio-default-page') );
	$pages = mx_get_all_template_type_pages(array('page-portfolio.php', 'page-portfolio-ajax.php'), true);
	if(isset($pages[$default_page_id])) {
		$default_page_id = $pages[$default_page_id];
		$template = get_post_meta( $default_page_id , '_wp_page_template', true );
		if($template == 'page-portfolio.php' || $template == 'page-portfolio-ajax.php' ) {
			$portfolio_default_page_id = $default_page_id;
			return $portfolio_default_page_id;
		}
	}
	foreach($pages as $key=>$value){
		$portfolio_default_page_id = $key;
		break;
	}
	return $portfolio_default_page_id;
}
endif;

if ( ! function_exists( 'mx_get_default_blog_masonry_page' ) ) :
/**
 * Get Default Blog Masonry Page
 *
 * @since MX 1.1
 */
function mx_get_default_blog_masonry_page() {
	$default_page_id = intval( mx_get_options_key('blog-masonry-page') );

	$b_pages = mx_get_all_template_type_pages(array('page-blog-ajax.php'), true);

	if(isset($b_pages[$default_page_id])) {
		return $b_pages[$default_page_id];
	}
	
	if(count($b_pages)> 0){
		return $b_pages[0];
	}
	return 0;
}
endif;

if ( ! function_exists( 'mx_get_custom_all_categories' ) ) :
/**
 * Get all categories
 * @bool = true return <li> list with name
 */
function mx_get_custom_all_categories($taxonomies,$bool = false){
	$categories = get_terms($taxonomies);
	$output = "";
	if($bool){ 
		foreach($categories as $category){
			$output .= '<li>'.strtoupper($category->name).'</li>';
		}
	} else {
		return $categories;
	}
	return $output;
}
endif;

if ( ! function_exists( 'mx_get_portfolio_categories' ) ) :
/**
 * Get Portfolio categories
 */
function mx_get_portfolio_categories($show_count = false){
	$output = '<ul>';
	$categories = mx_get_custom_all_categories('portfolio-cats');
	if(count($categories) > 0){
		foreach($categories as $category){
			if(intval($category->parent) != 0) continue;
			$subcategories = get_terms('portfolio-cats',array('child_of' => $category->term_id));

			$output .= '<li><a href="'.esc_attr(get_term_link($category, 'portfolio-cats')).'">'.$category->name;
			if($show_count){
				$output .= ' ( '.mx_get_portfolio_list_by_categories(array($category->term_id),true).' ) ';
			}
			$output .='</a>';
			if(count($subcategories)>0){
				$output .='<ul>';
				foreach($subcategories as $subcategory){
					$output .='<li><a href="'.esc_attr(get_term_link($subcategory, 'portfolio-cats')).'">'.$subcategory->name;
					if($show_count){
						$output .= ' ( '.mx_get_portfolio_list_by_categories(array($subcategory->term_id),true).' ) ';
					}
					$output .='</a></li>';
				}
				$output .='</ul>';
			}
			$output .= '</li>';
		}
	}
    $output .='</ul>';
	return $output;
}
endif;

if ( ! function_exists( 'mx_get_portfolio_list_by_categories' ) ) :
/**
 * Get Portfolio categories
 */
function mx_get_portfolio_list_by_categories($slugs = array(),$re_count = false){
	$args = array(
			'post_type' => 'portfolio',
			'posts_per_page' => -1, 
			'tax_query' => array(
				array(
					'taxonomy' => 'portfolio-cats',
					'field' => 'term',
					'terms' => $slugs)
				)
			);
	$the_query = new WP_Query($args);
	
	if($re_count){
		if($the_query->have_posts()) return $the_query->post_count;
		return 0;
	}
	return $the_query;
}
endif;

if ( ! function_exists( 'mx_get_custom_post_categories' ) ) :
/**
 * Get current post categories
 * @bool = true return "," string name
 */
function mx_get_custom_post_categories($id,$taxonomies,$bool = false,$sep=' , ' , $type = 'name' , $exter = ''){
	$categories = get_the_terms($id,$taxonomies);
	$output = "";
	// return <li> html code
	if($bool && !empty($categories)){
		$first = true;
		foreach($categories as $category){
			if(!$first)
				$output .=$sep;
			else
				$first = false;
				
			$output .= $exter.$category->$type;
		}
	} else {
		return $categories;
	}
	return $output;
}
endif;

if ( ! function_exists( 'mx_get_custom_portfolio_category_links' ) ) :
/**
 * Get custom portfolio category links
 *
 * @since MX 1.0
 */
function mx_get_custom_portfolio_category_links($categories , $sep ='' , $taxonomies = "portfolio-cats", $error_txt = ''){
	
	$output = '';
	if( !empty($categories) ){
		$bool = false;
		foreach($categories as $category){
			if($bool){ $output .= $sep;}
			$output .= '<a href="'.get_term_link($category->slug, $taxonomies ).'">'.$category->name.'</a>';
			$bool = true;
		}
	}
	if($output == ''){
		if($error_txt == ""){
			$output = __('Uncategorized','MX');
		}else{
			$output = $error_txt;
		}
	}
	return $output;
}
endif;

if ( ! function_exists( 'mx_get_social_list' ) ) :
/**
 * Get social account from MX setting
 *
 * @since MX 1.0
 */
function mx_get_social_list($extra_name='',$topbar = false){
	global $mx_options;
	
	$str = "";
	$social_list = array(	array('twitter','Twitter',1) ,
							array('facebook', 'Facebook',1) ,
							array('google-plus', 'Google Plus',1) ,
							array('dribbble', 'Dribbble',1) ,
							array('pinterest', 'Pinterest',1) ,
							array('flickr', 'Flickr',1) ,
							array('skype', 'Skype',1) ,
							array('youtube', 'Youtube',1) ,
							array('vimeo', 'Vimeo',2,'vimeo-square') ,
							array('linkedin', 'Linkedin',1),
							array('digg', 'Digg',1) ,
							array('deviantart', 'Deviantart',1) ,
							array('behance', 'Behance',1) ,
							array('forrst', 'Forrst',0) ,
							array('lastfm', 'Lastfm',1) ,
							array('xing', 'XING',1),
							array('instagram', 'instagram',1),
							array('stumbleupon', 'StumbleUpon',1),
							array('picasa', 'Picasa',0),
							array('email','Email',2,'envelope'),
							array('delicious','Delicious',3,'delicious'),
							array('codepen','Codepen',3,'codepen'),
							array('foursquare','Foursquare',3,'foursquare'),
							array('trello','Trello',3,'trello'),
							array('tumblr','Tumblr',3,'tumblr'),
							array('github','Github',3,'github-alt')
						);
	foreach($social_list as $social_item){
		if(mx_get_options_key('social-'.$social_item[0]) != '') {
			if(!$topbar) {
				if($social_item[2] != 3) {
					$str .=  '<li><a title="'.$social_item[1].'" href="'.mx_get_options_key('social-'.$social_item[0]).'" target="_blank" class="mx-icon-'.$social_item[0].'"></a></li>';
				}
			}else if($social_item[2] != 0){
				if($social_item[2] == 3){
					$str .=  ' <li class="social"><a href="'.mx_get_options_key('social-'.$social_item[0]).'" target="_blank" ><i class="fa fa-'.$social_item[3].'"></i></a></li>';
				}else{
					$str .=  ' <li class="social"><a href="'.mx_get_options_key('social-'.$social_item[0]).'" target="_blank" ><i class="fa fa-'.($social_item[2] == 1 ? $social_item[0] : $social_item[3]).'"></i></a></li>';
				}
			}
			
		}
	}
	return $str;
}
endif;

if ( ! function_exists( 'mx_comment_form' ) ) :
/**
 * Get comment form
 * 
 * @since MX 1.0
 */
function mx_comment_form(){
	global $user_identity;
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );

	if ( comments_open() ) { ?>
		<div id="respond">
        	<div id="reply-title" class="mx-title">
            	<h4 class="post-title"><?php comment_form_title(__('Leave A Comment', 'MX'), __('Leave A Comment', 'MX')); ?></h4>
                <div class="line"><span class="left-line"></span><span class="right-line"></span></div>
                <div class="clear"></div>
        	</div>
            
            <?php cancel_comment_reply_link(); ?>
            
			<form id="comment-form" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">
        	
            <?php if ( is_user_logged_in() ) : ?>

            <p><?php _e('Logged in as', 'MX'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account"><?php _e('Log out &raquo;', 'MX'); ?></a></p>
            <div id="comment-fields">
                <div id="comment-textarea">
                	 <label for="comment"><?php _e('Comment Message', 'MX'); ?><span class="description"><?php _e('(required)', 'MX'); ?></span></label>
                    <textarea name="comment" id="comment" cols="60" rows="5" tabindex="4" class="textarea-comment logged-in"></textarea>
                </div>
            </div>
            <div id="comment-alert-error" class="alert alert-warning">
                <span class="comment-alert-error-message"><?php _e('Please enter message.', 'MX'); ?></span>
            </div>
            
            <div id="comment-submit">
                <button type="submit" class="btn btn-theme"><?php _e('Post Comment', 'MX'); ?></button>
                <?php comment_id_fields(); ?>
                <?php do_action('comment_form', get_the_ID()); ?>
            </div>
		
		<?php else : ?>
        
            <div id="comment-fields">
            	<div id="comment-author">
                    <label for="author"><?php _e('Name', 'MX'); ?><span class="description"><?php _e('(required)', 'MX'); ?></span></label>
                    <input type="text" name="author" id="author" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> class="input-name">
                </div>
                <div id="comment-email">
                    <label for="email"><?php _e('Email', 'MX'); ?><span class="description"><?php _e('(required)', 'MX'); ?></span></label>
                    <input type="text" name="email" id="email" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> class="input-email">
                </div>
                <div id="comment-url">
                <label for="url"><?php _e('Website', 'MX'); ?></label>
                <input type="text" name="url" id="url" tabindex="3" class="input-website">
                </div>
                <div id="comment-textarea">
                    <label for="comment"><?php _e('Comment Message', 'MX'); ?><span class="description"><?php _e('(required)', 'MX'); ?></span></label>
                    <textarea name="comment" id="comment" cols="60" rows="5" tabindex="4" class="textarea-comment"></textarea>
                </div>
            </div>
            
            <div id="comment-alert-error" class="alert alert-warning">
            	<span class="comment-alert-error-name"><?php _e('Please enter your name.', 'MX'); ?></span>
                <span class="comment-alert-error-email"><?php _e('Please enter an valid email address.', 'MX'); ?></span>
                <span class="comment-alert-error-message"><?php _e('Please enter message.', 'MX'); ?></span>
            </div>
            
            <div id="comment-submit">
                <button type="submit" class="btn btn-theme"><?php _e('Post Comment', 'MX'); ?></button>
                <?php comment_id_fields(); ?>
                <?php do_action('comment_form', get_the_ID()); ?>
            </div>
    
            <?php endif; ?>
        </form>
    </div>
	<?php
	}
}
endif;

if ( ! function_exists( 'mx_comment' ) ) :
/**
 * Get comments list
 *
 * @since MX 1.0
 */
function mx_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);
	if ( 'div' == $args['style'] ) {
		$add_below = 'comment';
	} else {
		$add_below = 'div-comment';
	}
	?>
    <li id="comment-<?php comment_ID() ?>">
    	<article id="div-comment-<?php comment_ID() ?>" class="comment-item">
        	<?php if ($args['avatar_size'] != 0){ ?>
            	<div class="comment-avatar">
            <?php echo  get_avatar( $comment, $args['avatar_size']); ?>
            	</div>
            <?php } ?>
        	<div class="comment-content">
            	<div class="comment-meta"><span class="author-name"><?php echo comment_author_link($comment->comment_ID);?></span><span class="comment-date"><?php echo get_comment_date(); ?> <?php _e('at', 'MX'); ?> <?php echo get_comment_time(); ?></span></div>
            	<?php comment_text(); ?>
				<?php if ($comment->comment_approved == '0') : ?>
                      <em class="comment-wait-approved"><?php _e('Your comment is awaiting approved.' , 'MX') ?></em>
            	<?php endif; ?>
            	<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        	</div>
    	</article>
    <?php 
}
endif;
	
if ( ! function_exists( 'mx_get_blog_widget_post' ) ) :		
/**
 * Get blog posts for sidebar widget
 */
function mx_get_blog_widget_post($type = "", $per_page = "", $orderby = "", $cat_in = "", $tag_in = "", $post__in = "", $post__not_in = "", $order = "") {
	
	if($per_page == ""){
		$per_page = 4;
	}
	
	$args = array('post_type' => 'post', 'post_status' => 'publish' , 'posts_per_page' => $per_page);
	
	if($orderby != ""){
		$args['orderby']  = $orderby;
	}
	
	if($order != ""){
		$args['order']  = $order;
	}
	
	switch($type){
		case 'featured':
				$post_ids = explode("," , $post__in);
				if(count($post_ids) == 0){
					return "";
				}
				$args['post__in']= $post_ids;
				$args['posts_per_page']= count($post_ids);
				break;
		case 'popular':
				$args['orderby']= 'comment_count';
				break;
		case 'related':
				$post_cats = explode("," , $cat_in);
				$post_tags = explode("," , $tag_in);
				
				if(count($post_cats) == 0 && count($post_tags) == 0){
					return "";
				}
				if(count($post_cats) > 0 && $post_cats[0] != ""){
					$args['category__in'] = $post_cats;
				}
				if(count($post_tags) > 0 && $post_tags[0] != ""){
					$args['tag__in'] = $post_tags;
				}
				break;
	}
	if($post__not_in != ""){
		$post__not_in = explode("," , $post__not_in);
		$args['post__not_in'] = $post__not_in;
	}

	$blog_posts = new WP_Query($args);
	
	return $blog_posts;
}
endif;


if ( ! function_exists( 'mx_get_portfolio_widget_post' ) ) :		
/**
 * Get portfolio posts for sidebar widget
 */
function mx_get_portfolio_widget_post($type = "", $per_page = "", $orderby = "", $cat_in = "", $tag_in = "", $post__in = "", $post__not_in = "", $order = "") {
	if($per_page == ""){
		$per_page = 4;
	}
	
	$args=array( 'post_type' => 'portfolio', 'post_status' => 'publish', 'posts_per_page' => $per_page );
	
	if($orderby != ""){
		$args['orderby']  = $orderby;
	}
	
	if($order != ""){
		$args['order']  = $order;
	}
			 
	switch($type){
		case 'featured':
				$post_ids = explode("," , $post__in);
				if(count($post_ids) == 0){
					return "";
				}
				$args['post__in']= $post_ids;
				$args['posts_per_page']= count($post_ids);
			break;
		case 'related':
				$cat_slugs = explode("," , $cat_in);
				$tag_slugs = explode("," , $tag_in);
				if(count($cat_slugs) == 0 && count($tag_slugs) == 0){
					return "";
				}
				
				$args['tax_query'] = array();
				if(count($cat_slugs) > 0 && $cat_slugs[0] != ""){
					$args['tax_query'][] = array('taxonomy' => 'portfolio-cats', 'field' => 'slug', 'terms' => $cat_slugs);
				}
				
				if(count($tag_slugs) > 0  && $tag_slugs[0] != ""){
					$args['tax_query'][] = array('taxonomy' => 'portfolio-tags', 'field' => 'slug', 'terms' => $tag_slugs);
				}
			break;
	}
	
	if($post__not_in != ""){
		$post__not_in = explode("," , $post__not_in);
		$args['post__not_in'] = $post__not_in;
	}

	$portfolios = new WP_Query($args);
	
	return $portfolios;
}
endif;

if ( ! function_exists( 'mx_get_portfolio_recent_post' ) ) :
/**
 * Get portfolio post for widget
 *
 * @since MX 1.0
 */
function mx_get_portfolio_recent_post($type, $num, $style = 1, $ids = '',$rand = ""){
	global $portfolio_recent_post_content;
	if($type == "recent"){
		if($rand == "yes"){
			$rand = "rand";
		}else{
			$rand = "";
		}
		$portfolios = mx_get_portfolio_widget_post('recent',$num, $rand);
	}else if($type == "featured"){
		$portfolios = mx_get_portfolio_widget_post('featured',$num, '','','',$ids);
	}
	$output = "";
	if($portfolios != "" && $portfolios->have_posts()){
		$output .= '<ul class="widget-portfolio-recent mline">';
		while($portfolios->have_posts()) {
			$portfolios->the_post();
			$portfolio_recent_post_content = "";
			$output .= '<li>';
			get_template_part( 'template/portfolio/portfolio', 'widget-recent-style-'.esc_attr($style));
			$output .= $portfolio_recent_post_content;
			$output .= '</li>';
		}
		$output .= '</ul>';
	}
	wp_reset_postdata();
	return $output;
}
endif;

if ( ! function_exists( 'mx_get_blog_recent_post' ) ) :
/**
 * Get blog post for widget
 *
 * @since MX 1.0
 */
function mx_get_blog_recent_post($type, $num, $style = 1, $ids = '',$rand = ""){
	global $posts_recent_post_content;
	if($type == "recent"){
		if($rand == "yes"){
			$rand = "rand";
		}else{
			$rand = "";
		}
		$posts = mx_get_blog_widget_post('recent',$num, $rand);
	}else if($type == "featured"){
		$posts = mx_get_blog_widget_post('featured',$num, '','','',$ids);
	}else if($type == "popular"){
		$posts = mx_get_blog_widget_post('popular',$num);
	}
	$output = "";
	if($posts != "" && $posts->have_posts()){
		$output .= '<ul class="widget-blog-recent mline">';
		while($posts->have_posts()) {
			$posts->the_post();
			$posts_recent_post_content = "";
			$output .= '<li>';
			get_template_part( 'template/blog/blog', 'widget-recent-style-'.esc_attr($style));
			$output .= $posts_recent_post_content;
			$output .= '</li>';
		}
		$output .= '</ul>';
	}
	wp_reset_postdata();
	return $output;
}
endif;

if ( ! function_exists( 'mx_get_mini_bar_content' ) ) :
/**
 * Get mini bar content
 *
 * @since MX 1.0
 */
function mx_get_mini_bar_content(){
	$minibar_custom_style = mx_get_options_key('minibar-custom-style');
	if($minibar_custom_style && $minibar_custom_style != ""){
		$minibars 	= explode("|", $minibar_custom_style); 
		
		foreach($minibars as $minibar){
			$option = explode("-", $minibar);
			if(count($option)>1 && intval($option[1]) == 0){
				switch($option[0]){
					case 0:mx_mini_bar_login();break;
					case 1:mx_mini_bar_wishlist();break;
					case 2:mx_mini_bar_cart();break;
					case 3:mx_mini_bar_search();break;
					case 4:mx_mini_bar_custom();break;
				}
			}
		}
	}
}
endif;

if ( ! function_exists( 'mx_mini_bar_login' ) ) :
/**
 * Get mini bar login
 *
 * @since MX 1.0
 */
function mx_mini_bar_login(){
?>
<li class="mini-bar-user">
	<?php get_template_part( 'template/tools/mini-bar', 'login-content' ); ?>
</li>
<?php	
}
endif;

if ( ! function_exists( 'mx_mini_bar_wishlist' ) ) :
/**
 * Get mini bar wishlist
 *
 * @since MX 1.0
 */
function mx_mini_bar_wishlist(){
	
	if(class_exists( 'woocommerce' ) && class_exists( 'YITH_WCWL_UI' )){
?>
<li class="mini-bar-wishlist">
    <?php get_template_part( 'woocommerce/content', 'mini-bar-wish-list' ); ?>
</li>
<?php	
	}
}
endif;

if ( ! function_exists( 'mx_mini_bar_cart' ) ) :
/**
 * Get mini bar cart
 *
 * @since MX 1.0
 */
function mx_mini_bar_cart(){
	if(class_exists( 'woocommerce' )){
?>
<li class="mini-bar-cart">
	<?php get_template_part( 'woocommerce/content', 'mini-bar-cart-list-btn' ); ?>
    <div class="minibar-content">
    <?php get_template_part( 'woocommerce/content', 'mini-bar-cart-list' ); ?>
    </div>
</li>
<?php	
	}
}
endif;

if ( ! function_exists( 'mx_mini_bar_search' ) ) :
/**
 * Get mini bar search
 *
 * @since MX 1.0
 */
function mx_mini_bar_search(){
?>
<li class="mini-bar-search">
    <a class="minibar-search-btn"><i class="fa fa-search"></i></a>
    <div class="minibar-content">
        <form role="search" class="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div>
            <?php if (class_exists( 'woocommerce' )) { ?>
                <input class="sf-type" name="post_type" type="hidden" value="product" />
            <?php } ?>
            <input class="sf-s" name="s" type="text" placeholder="<?php _e('Search ...','MX'); ?>" />
            <button type="submit" class="sf-submit btn btn-theme"><i class="fa fa-search"></i></button>
           </div>
        </form>
    </div>
</li>
<?php	
}
endif;

if ( ! function_exists( 'mx_mini_bar_custom' ) ) :
/**
 * Get mini bar custom
 *
 * @since MX 1.0
 */
function mx_mini_bar_custom(){
	$mini_bar_custom_icon = mx_get_options_key('minibar-icon','',false,'fa-bell');
?>
<li class="mini-bar-custom">
    <a><i class="fa <?php echo esc_attr($mini_bar_custom_icon); ?>"></i></a>
    <div class="minibar-content">
        <?php echo do_shortcode( mx_get_options_key('minibar-content')); ?>
    </div>
</li>
<?php	
}
endif;

//========================================================
//  	COMMON METHODS
//========================================================

if ( ! function_exists( 'mx_get_options_key' ) ) :
/**
 * Get custom option key value
 *
 * @since MX 1.0
 */
function mx_get_options_key($key, $options = '', $rebool = false, $default = '', $is_meta = false){
	global $mx_options;
	if($options == ''){	$options = $mx_options;	}
	if(isset($options[$key])){
		if($rebool){return true;}
		if($is_meta && is_array($options[$key]) && isset($options[$key][0])){
			return $options[$key][0];
		}
		return $options[$key];
	}else{
		if($rebool){return false;}
	}
	return $default;
}
endif;

if ( ! function_exists( 'mx_get_post_meta_key' ) ) :
/**
 * Get post meta key value
 *
 * @since MX 1.0
 */
function mx_get_post_meta_key($key, $ID = 0, $default = ''){
	if($ID == 0){ $ID = get_the_ID(); }
	if($ID <= 0){ return $default;}
	$result = get_post_meta($ID , $key , true);
	if($result){ return $result; }
	return $default;
}
endif;

if ( ! function_exists( 'mx_generate_options_css' ) ) :
/**
 * Generate Options CSS
 *
 * @since MX 1.0
 */
function mx_generate_options_css() {
	
	//get theme update history
	$options_update_name = 'mx_options_update';
	//get theme update history
	$options_update = get_option($options_update_name);
	
	//get theme version
	$theme_old_version = get_option($options_update_name.'-ver');
	$theme_data = wp_get_theme();
	if($theme_data->Template != ''){
		$theme_data = wp_get_theme($theme_data->Template);
	}
	if(!$theme_old_version){
		$theme_old_version = $theme_data['Version'];
		update_option($options_update_name.'-ver', $theme_data['Version']);
	}
	
	/** Define some vars **/
	$uploads = wp_upload_dir();
	
	/** Save on different directory if on multisite **/
	if(is_multisite()) {
		$uploads_dir = $uploads['basedir'].'/mx/';
	} else {
		$uploads_dir = $uploads['basedir'].'/mx/';
	}
	
	if(!is_writable($uploads['basedir'])) {
		echo 'Your wp-content/uploads can\'t write theme style files.';
		return;
	}
	// Create necessary folders under /uploads
	if(!file_exists($uploads_dir)) { mkdir($uploads_dir, 0755); }

	if(isset($options_update['update'])){
		if($options_update['update'] == 'yes'){
			if(version_compare($theme_data['Version'], $theme_old_version, '>')){
				update_option($options_update_name.'-ver', $theme_data['Version']);
			}else{
				if (file_exists($uploads_dir . 'mx-styles.css')) {
					return;
				}
			}
		}
		$update_data = array('update'=>'yes','version'=> (intval($options_update['version']) + 1) );
	}else{
		$update_data = array('update'=>'yes','version'=> 0 );
	}

	/** Capture CSS output **/
	ob_start();
	require(get_template_directory() . '/custom/custom-styles.php');
	$css = ob_get_clean();
	
	/** Write to file **/
	WP_Filesystem();
	global $wp_filesystem;
	if ( ! $wp_filesystem->put_contents( $uploads_dir .  'mx-styles.css', $css, 0644) ) {
		echo 'Your wp-content/uploads can\'t write theme style files.';
		return;
	}
	
	update_option($options_update_name ,$update_data);
}
endif;

if ( ! function_exists( 'mx_add_image_size' ) ) :
/**
 * Add custom image size for feature image crop
 *
 * @since MX 1.0
 */
function mx_add_image_size($name,$w,$h,$crop = true){
	add_image_size( $name, $w, $h, $crop );
	update_option($name.'_size_w', $w);
	update_option($name.'_size_h', $h);
	update_option($name.'_crop', $crop ? 1 : 0);
}
endif;

if ( ! function_exists( 'string_limit_words' ) ) :
/**
 * Get limit words
 *
 * @since MX 1.0
 */
function string_limit_words($str, $limit = 18 , $need_end = false) {
	$words = explode(' ', $str, ($limit + 1));
	if(count($words) > $limit) {
		array_pop($words);
		array_push($words,'...');
	}
	return implode(' ', $words);
}
endif;

if ( ! function_exists( 'mx_content_pagination' ) ) :
/**
 * Display navigation to pagination pages numbers when applicable
 *
 * @since MX 1.0
 */
function mx_content_pagination($pagination_id, $pagination_class = '', $max_show_number = 2 , $query = ''){
	global $wp_query;
	
	if($query == ''){ 
		$query = $wp_query;
	}

	if ( $query->max_num_pages > 1 ) {
		// get the current page
		$paged = 1;
		if (get_query_var('paged')) {
			$paged = get_query_var('paged');
		} else if (get_query_var('page')) {
			$paged = get_query_var('page');
		}
		
		?>
        <div id="<?php echo $pagination_id; ?>" class="<?php echo $pagination_class; ?>">
        	<ul class="pagination">
			<?php
            $max_number = $query->max_num_pages;
            //prev button
            if($paged > 1){
                echo '<li><a href="'. get_pagenum_link($paged-1) .'">'.__('&laquo; Prev','MX').'</a></li>';
                if($paged - $max_show_number > 1){
					echo '<li><a href="'. get_pagenum_link(1) .'">1</a></li>';
				}
            }
            
            if($paged - $max_show_number > 2){
				echo  '<li><span>...</span></li>';
			}
            
            for($k= $paged - $max_show_number; $k <= ($paged+$max_show_number) & $k <= $max_number; $k++){
                if($k < 1){
					continue;
				}
                if($k == $paged) {
                    echo '<li><span class="disabled">'.$k.'</span></li>';
				}else{
                    echo '<li><a href="'.get_pagenum_link( $k).'">'.$k.'</a></li>';
				}
            }
            if($paged + $max_show_number < $max_number) {
                 if($paged + $max_show_number < ($max_number-1)){
					 echo  '<li><span>...</span></li>';
				 }
                 echo '<li><a href="'.get_pagenum_link( $max_number ).'">'.$max_number.'</a></li>';
            }
            //next button
            if($paged < $max_number){
				echo '<li><a href="'.get_pagenum_link($paged+1).'">'.__('Next &raquo;','MX').'</a></li>';
			}
        	?>
        	</ul>
        </div>
        <?php
	}
}
endif;

if ( ! function_exists( 'mx_show_setting_primary_menu' ) ) :
/**
 * get show have no menu information
 *
 * @since MX 1.0
 */
function mx_show_setting_primary_menu(){
	echo '<h5 style="float:left;margin-left: 10px;line-height: 20px;">'.__('Please open Admin -&gt; Appearance -&gt; Menus Setting','MX').'</h5>';
}
endif;

if ( ! function_exists( 'mx_show_setting_other_menu' ) ) :
function mx_show_setting_other_menu(){
	echo __('Please open Admin -&gt; Appearance -&gt; Menus Setting','MX');
}
endif;

if ( ! function_exists( 'mx_add_background_style' ) ) :
/**
 * show background css
 *
 * @since MX 1.0
 */
function mx_add_background_style($key, $target, $type_key = 0, $retina = false, $options = ''){
	if(!$retina){
		if(intval(mx_get_options_key($key.'-bg-type',$options,false,'',true)) == $type_key && intval(mx_get_options_key($key.'-bg-pattern-width',$options,false,'',true)) != 0 && intval(mx_get_options_key($key.'-bg-pattern-width',$options,false,'',true)) != 0 && mx_get_options_key($key.'-bg-pattern-image',$options,false,'',true) != ""){
		?>
<?php echo $target; ?> {
	background-size:<?php echo mx_get_options_key($key.'-bg-pattern-width',$options,false,'',true);?>px <?php echo mx_get_options_key($key.'-bg-pattern-height',$options,false,'',true);?>px;
	background-repeat: repeat;
	background-image:url(<?php echo mx_get_options_key($key.'-bg-pattern-image',$options,false,'',true);?>);
}
		<?php
		}else if(intval(mx_get_options_key($key.'-bg-type',$options,false,'',true)) == ($type_key + 1) && mx_get_options_key($key.'-bg-image',$options,false,'',true) != ""){
		?>
<?php echo $target; ?> { 
	background: url(<?php echo mx_get_options_key($key.'-bg-image',$options,false,'',true); ?>) no-repeat center center fixed; 
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}
		<?php
		}else if(intval(mx_get_options_key($key.'-bg-type',$options,false,'',true)) == ($type_key + 2) && mx_get_options_key($key.'-bg-color',$options,false,'',true) != ""){
		?>
<?php echo $target; ?> {
	background:#<?php echo mx_get_options_key($key.'-bg-color',$options,false,'',true); ?>;
}
		<?php	
		}
		if(intval(mx_get_options_key($key.'-bg-type',$options,false,'',true)) >= $type_key){
			//footer copyright area color
			if(($key == "global-footer" || $key == "page-footer") && mx_get_options_key($key.'-border-top-color',$options,false,'',true) != "" && mx_get_options_key($key.'-border-bottom-color',$options,false,'',true) != "" && mx_get_options_key($key.'-copyright-bg-color',$options,false,'',true) != "" && mx_get_options_key($key.'-copyright-border-top-color',$options,false,'',true) != ""){
			?>
	#site-footer-widget {border-top: 3px solid #<?php echo mx_get_options_key($key.'-border-top-color',$options,false,'',true); ?>;border-bottom: 1px solid #<?php echo mx_get_options_key($key.'-border-bottom-color',$options,false,'',true); ?>;}
	#site-footer-bottom {background: #<?php echo mx_get_options_key($key.'-copyright-bg-color',$options,false,'',true); ?>;border-top: 1px solid #<?php echo mx_get_options_key($key.'-copyright-border-top-color',$options,false,'',true); ?>;}
			<?php
			}
		}
		
	}else if(intval(mx_get_options_key($key.'-bg-type',$options,false,'',true)) == $type_key && mx_get_options_key($key.'-bg-pattern-retina',$options,false,'',true) != ""){
	?>
<?php echo $target; ?> {
	background-image:url(<?php echo mx_get_options_key($key.'-bg-pattern-retina',$options,false,'',true);?>);
}
    <?php
	}
}
endif;

if ( ! function_exists( 'mx_add_param_for_link' ) ) :
/**
 * get custom param link
 *
 * @since MX 1.0
 */
function mx_add_param_for_link($link,$param){
	if(!strpos($link,'?')){
		return $link.'?'.$param;
	}
	return $link.'&amp;'.$param;
}
endif;

if ( ! function_exists( 'mx_get_theme_skin' ) ) :
/**
 * get theme skin
 *
 * @since MX 1.0
 */
function mx_get_theme_skin(){
	if(intval(mx_get_options_key('global-skin')) == 1){
		return 'dark';
	}
	return 'light';
}
endif;


if ( ! function_exists( 'alter_get_attachments' ) ) :
/**
 * get attachments  image array
 *
 * @since MX 1.0
 */
function mx_get_attachments($id , $args , $show_size ) {
	$args = wp_parse_args( $args , array(
		'post_type' => 'attachment',
		'numberposts' => '10',
		'post_status' => null,
		'post_parent' => $id,
		'post_mime_type' => 'image',
		'exclude' => get_post_thumbnail_id($id)
	));
	
	$attachments = get_posts($args);
	$images = array();
	foreach($attachments as $attachment) { 	
								
		$attachment_image = wp_get_attachment_image_src($attachment->ID, $show_size );
		if(is_array($attachment_image) && $attachment_image[0] != '') {
			$images[] = $attachment_image;
		}
	}
	return $images;
}
endif;