<?php
/**
 * mx functions and definitions
 *
 * @since MX 4.0
 */
 
 
/**
 * All MX common functions.
 * Don't remove it.
 *
 * @since MX 1.0
 */
require_once("inc/mx-functions.php");

/**
 * Sets up theme custom options, post, update notifier.
 * Don't remove it.
 *
 * @since MX 1.0
 */
include_once("inc/penguin-config.php");
/**
 * Get all MX options value
 */
global $mx_options;
$mx_options = get_option("mx_options");

if (class_exists( 'woocommerce' )) {
	require_once('woocommerce/woocommerce-config.php');
}

add_action('wp_ajax_nopriv_post-like', 'penguin_post_like');
add_action('wp_ajax_post-like', 'penguin_post_like');

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 788;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_theme_support() To add support for post thumbnails, automatic feed links and post formats.
 * @uses register_nav_menus() To add support for navigation menus.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since MX 1.0
 */
function mx_setup() {

	// Load the Themes' Translations through domain
	load_theme_textdomain( 'MX', get_template_directory() . '/languages' );
	
	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );
	
	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );
	
	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'mx_menu', __( 'MX Main Menus', 'MX' ) );
	register_nav_menu( 'mx_topbar_menu', __( 'MX Topbar Menus', 'MX' ) );
	register_nav_menu( 'mx_bottom_menu', __( 'MX Bottom Menus', 'MX' ) );

	// Add support for a variety of post formats
	add_theme_support( 'post-formats', array( 'gallery', 'video', 'audio' ,'image' , 'quote' ) );
	
	// This theme uses Featured Images (also known as post thumbnails) for per-post/per-page Custom Header images
	add_theme_support( 'post-thumbnails' );
	
	// Add Woocommerce Support
	add_theme_support( 'woocommerce' );
	
	// We'll be using post thumbnails for custom header images on posts and pages.
	// We want them to be the size of the header image that we just defined
	// Larger images will be auto-cropped to fit, smaller ones will be ignored. See header.php.
	set_post_thumbnail_size( 788, 445, true );
	
	//mx theme image size
	add_image_size( 'mx-l-thumbs' , 750 , 423 , true);
	add_image_size( 'mx-m-thumbs' , 555 , 313 , true);
	add_image_size( 'mx-s-thumbs' , 450 , 254 , true);
	add_image_size( 'mx-square-thumbs' , 750 , 750 , true);
	add_image_size( 'mx-nocrop-thumbs' , 750 , 1500 , false);
	
}
add_action( 'after_setup_theme', 'mx_setup' );

/**
 * Sets up title old v4.1
 *
 * @since MX 4.5.1
 */
if ( ! function_exists( '_wp_render_title_tag' ) ) {
	function mx_theme_slug_render_title() {
?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php
	}
	add_action( 'wp_head', 'mx_theme_slug_render_title' );
}

/**
 * Sets up theme defaults styles and scripts.
 *
 * @since MX 1.0
 */
function mx_init_styles_scripts() {
	global $google_load_fonts,$mx_options;
	
	//get template directory url
	$dir = get_template_directory_uri();
	
	//get theme version
	$theme_data = wp_get_theme();
	if($theme_data->Template != ''){
		$theme_data = wp_get_theme($theme_data->Template);
	}
	$ver = $theme_data['Version'];
	
	/* bootstrap & fontawesome css files */
	if(mx_get_options_key('bootstrap-fontawesome-cdn') == "on"){
		wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' , array() , $ver );
		wp_enqueue_style( 'fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' , array() , $ver );
	}else{
		wp_enqueue_style( 'bootstrap', $dir . '/bootstrap/css/bootstrap.min.css' , array() , $ver );
		wp_enqueue_style( 'fontawesome', $dir . '/fontawesome/css/font-awesome.min.css' , array() , $ver );	
	}
	wp_enqueue_style( 'flexslider_style', $dir . '/js/flexslider/flexslider.css' , array() , $ver );
	wp_enqueue_style( 'fancyBox_style', $dir . '/js/fancyBox/jquery.fancybox.css' , array() , $ver );
	wp_enqueue_style( 'fancyBox_helper_style', $dir . '/js/fancyBox/helpers/jquery.fancybox-thumbs.css' , array() , $ver );
	wp_enqueue_style( 'animate', $dir . '/css/animate.min.css' , array() , $ver );
	if (class_exists( 'woocommerce' )) { 
		wp_enqueue_style( 'woocommerce_style', $dir . '/woocommerce/assets/css/woocommerce-'. mx_get_theme_skin() .'.css' , array() , $ver ); 
	}
	wp_enqueue_style( 'mx_skin', $dir . '/css/' . mx_get_theme_skin() . '.css'  , array() , $ver );
	wp_enqueue_style( 'mx_style', get_stylesheet_uri()  , array() , $ver );
	wp_enqueue_style( 'mx_responsive_style', $dir . '/css/responsive.css'  , array() , $ver );
	
	//Custom
	$mx_options_update = get_option('mx_options_update');
	if(isset($mx_options_update['version'])){
		$uploads = wp_upload_dir();
		if (file_exists($uploads['basedir'] . '/mx/mx-styles.css')) {
			$custom_css = $uploads['baseurl'] . '/mx/mx-styles.css';
			wp_enqueue_style( 'custom_style', $custom_css  , array() , $mx_options_update['version'] );
		}
	}
	
	//Font
	mx_get_custom_font();
	if($google_load_fonts != null && $google_load_fonts != ""){
		$subsets = mx_get_options_key('google-font-subset') != "" ? '&subset='.mx_get_options_key('google-font-subset') : "";
		wp_enqueue_style( 'custom-font', '//fonts.googleapis.com/css?family='.$google_load_fonts.$subsets);
	}
	
	//Javascripts
	wp_enqueue_script('jquery');
	if ( is_singular() && comments_open() ) { wp_enqueue_script( 'comment-reply' );	}
	if(mx_get_options_key('bootstrap-fontawesome-cdn') == "on"){
		wp_enqueue_script( 'bootstrap' , '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' , array('jquery') , $ver , true);
	}else{
		wp_enqueue_script( 'bootstrap' , $dir . '/bootstrap/js/bootstrap.min.js' , array('jquery') , $ver , true);
	}
	wp_enqueue_script( 'isotope' , $dir . '/js/isotope.pkgd.min.js' , array('jquery') , $ver , true);
	wp_enqueue_script( 'fancyBox_mousewheel' , $dir . '/js/fancyBox/jquery.mousewheel-3.0.6.pack.js' , array('jquery') , $ver , true);
	wp_enqueue_script( 'fancyBox_js' , $dir . '/js/fancyBox/jquery.fancybox.pack.js' , array('jquery') , $ver , true);
	wp_enqueue_script( 'fancyBox_helpers_js' , $dir . '/js/fancyBox/helpers/jquery.fancybox-thumbs.js' , array('jquery') , $ver , true);
	wp_enqueue_script( 'flexslider_js' , $dir . '/js/flexslider/jquery.flexslider-min.js' , array('jquery') , $ver , true);
	wp_enqueue_script( 'mx_script' , $dir . '/js/jquery.theme.js' , array('jquery') , $ver , true);
	
	if (class_exists( 'woocommerce' )) {
		wc_enqueue_js( "$('a.zoom').fancybox({helpers: {thumbs: {width: 80,height	: 80}}});$('body').mxpreview();" );
	}
	
	if(mx_get_options_key('blog-viewlike-enable') == "on" || mx_get_options_key('portfolio-viewlike-enable') == "on"){
		
		wp_enqueue_script( 'like_post' , $dir . '/js/jquery.likepost.js' , array('jquery') , $ver , true);
		
		wp_localize_script('like_post', 'ajax_var', array(
			'url' => admin_url('admin-ajax.php'),
			'nonce' => wp_create_nonce('ajax-nonce')
		));
	}
}
add_action('wp_enqueue_scripts', 'mx_init_styles_scripts');

/**
 * Sets up custom theme styles
 *
 * @since MX 1.0
 */
function mx_custom_styles(){
	global $mx_page_custom_scripts;
	// get page custom css
	mx_get_page_custom_options_css();

	// get option custom css style
	if(mx_get_options_key('custom-enable-css') == "on" && mx_get_options_key('custom-css-content') != ""){
		?>
        <style id="mx-custom-css" type="text/css">
			<?php echo mx_get_options_key('custom-css-content'); ?>
			@media only screen and (-Webkit-min-device-pixel-ratio: 1.5),
			only screen and (-moz-min-device-pixel-ratio: 1.5),
			only screen and (-o-min-device-pixel-ratio: 3/2),
			only screen and (min-device-pixel-ratio: 1.5) {
			<?php echo mx_get_options_key('custom-css-retina-content'); ?>
			}
		</style>
        <?php 
	}
	
	// get page custom scripts
	$mx_page_custom_scripts = mx_get_page_custom_options_scripts();
	
	// get gogole analytics
	echo intval(mx_get_options_key('google_analytics-position')) == 0 ? mx_get_options_key('google_analytics-content') : "";
}
add_action( 'wp_head', 'mx_custom_styles' );

/**
 * Sets up footer custom theme styles
 *
 * @since MX 1.0
 */
function mx_wp_footer_scripts(){
	global $mx_map_id,$mx_page_custom_scripts;
	//get template directory url
	$dir = get_template_directory_uri();

	if(isset($mx_map_id) && intval($mx_map_id > 0)){
		/* google map */
		wp_enqueue_script( 'googleapis', '//maps.googleapis.com/maps/api/js?v=3&amp;sensor=false');
		wp_enqueue_script( 'map-infobox', $dir . '/js/infobox.js');
	}
	if((mx_get_options_key('custom-enable-scripts') == "on" && mx_get_options_key('custom-scripts-content') != "") || (isset($mx_page_custom_scripts) && $mx_page_custom_scripts != '')){
?>
	<script type="text/javascript">
    <?php 
		if(mx_get_options_key('custom-enable-scripts') == "on" && mx_get_options_key('custom-scripts-content') != ""){
			echo mx_get_options_key('custom-scripts-content'); 
		}
		if(isset($mx_page_custom_scripts) && $mx_page_custom_scripts != ''){
			echo $mx_page_custom_scripts;
		}
	?>
    </script>
<?php 
	}
	
	echo intval(mx_get_options_key('google_analytics-position')) == 1 ? mx_get_options_key('google_analytics-content') : "";
}
add_action( 'wp_footer', 'mx_wp_footer_scripts' );

/**
 * Add shortcode
 *
 * @since MX 1.0
 */
 
// Use shortcodes in text widgets.
add_filter('widget_text', 'do_shortcode');
include("inc/shortcodes.php");

/**
 * Register our sidebars and widgetized areas. Also register the default Epherma widget.
 *
 * @since MX 1.0
 */
function mx_widgets_init() {
	
	register_sidebar( array(
		'id'	=>'sidebar-1',
		'name' => __( 'Global Sidebar', 'MX' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4><div class="line"></div><div class="clear"></div>'
	));
	
	register_sidebar( array(
		'id'	=>'sidebar-footer-1',
		'name' => __( 'Footer 1', 'MX' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>'
	));
	
	register_sidebar( array(
		'id'	=>'sidebar-footer-2',
		'name' => __( 'Footer 2', 'MX' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>'
	));
	
	register_sidebar( array(
		'id'	=>'sidebar-footer-3',
		'name' => __( 'Footer 3', 'MX' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>'
	));
	
	register_sidebar( array(
		'id'	=>'sidebar-footer-4',
		'name' => __( 'Footer 4', 'MX' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>'
	));
	
	register_sidebar( array(
		'id'	=>'shop',
		'name' => __( 'Woocommerce Shop', 'MX' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4><div class="line"></div><div class="clear"></div>'
	));

}
add_action( 'widgets_init', 'mx_widgets_init' );
include_once("inc/custom-widgets.php");

/**
 * Redesign login page
 */
function mx_login_logo() { 
	global $mx_options;
?>
    <style type="text/css">
        body.login div#login h1 a {
			width:<?php echo mx_get_options_key('logo-image-width'); ?>px;
			height:<?php echo mx_get_options_key('logo-image-height'); ?>px;
			background-image:url(<?php echo mx_get_options_key('logo-image') == "" ?  get_template_directory_uri()."/img/logo.png" : mx_get_options_key('logo-image'); ?>);
    		background-size: <?php echo mx_get_options_key('logo-image-width'); ?>px <?php echo mx_get_options_key('logo-image-height'); ?>px;
        }
		@media only screen and (-Webkit-min-device-pixel-ratio: 1.5),
		only screen and (-moz-min-device-pixel-ratio: 1.5),
		only screen and (-o-min-device-pixel-ratio: 3/2),
		only screen and (min-device-pixel-ratio: 1.5) {
		body.login div#login h1 a {
			background-image: url(<?php echo mx_get_options_key('logo-retina-image') == "" ?  get_template_directory_uri()."/img/logo@2x.png" : mx_get_options_key('logo-retina-image'); ?>);
        }
		}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'mx_login_logo' );

function mx_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'mx_login_logo_url' );

function mx_login_logo_url_title() {
    return get_bloginfo('title');
}
add_filter( 'login_headertitle', 'mx_login_logo_url_title' );

?>