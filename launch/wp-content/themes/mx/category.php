<?php
/**
 * The post category.
 *
 * @since MX 4.0
 */
if(intval(mx_get_options_key('blog-cats-show-style')) == 0 || intval(mx_get_default_blog_masonry_page()) == 0){
	get_template_part( 'index' );
	return;
}

global $paged, $blog_ajax_per_page_num,$blog_ajax_show_columns, $blog_ajax_page_cats, $blog_ajax_auto_load, $page_image_no_crop,$blog_ajax_style, $blog_ajax_columns, $thumbnail_size, $blog_ajax_page;

get_header();

$page_id = intval(mx_get_default_blog_masonry_page());

// get page layout
$layout = mx_get_page_layout($page_id);
$layout_class = mx_get_page_layout_class($page_id);
// get page items show columns
$blog_ajax_show_columns = mx_get_post_meta_key('ajax-show-columns', $page_id);
// get page items show number
$blog_ajax_per_page_num = mx_get_post_meta_key('page-show-numbers', $page_id);
// get page items show categories
$blog_ajax_page_cats = mx_get_post_meta_key('ajax-cats', $page_id);
// get page items auto load 
$blog_ajax_auto_load = mx_get_post_meta_key('ajax-enabld-auto', $page_id);
// get image need crop
$page_image_no_crop = mx_get_post_meta_key('page-image-no-crop', $page_id);
// get show style
$blog_ajax_style = intval(mx_get_post_meta_key('post-show-style', $page_id))+1;
$blog_ajax_columns = mx_get_element_columns(intval($blog_ajax_show_columns));
$thumbnail_size = mx_get_thumbnail_size(intval($blog_ajax_show_columns), $page_image_no_crop);

$sidebar_name = mx_get_post_meta_key('sidebar-type', $page_id);
if($sidebar_name == ""){
	$sidebar_name = "0";
}

?>
<div id="main" class="container">
	<div class="row">
        <section class="<?php echo $layout == 1 ? 'col-md-12 col-sm-12' : 'mx-col col-lg-9 col-md-8 col-sm-8 mx-'.$layout_class; ?>">
			<?php if ( have_posts() ) { ?>
            <div class="ajax-main-area">
                <section class="ajax-isotope row blog-ajax-type">
                <?php 
                    while ( have_posts() ) {
                        the_post();
                ?>
                    <?php get_template_part( 'template/blog/blog', 'ajax-content-item-style-'.$blog_ajax_style); ?>
                <?php } ?>
                </section>
                <?php 
                    if($wp_query->max_num_pages > $paged) {
                ?>
                <div class="ajax-load-content" data-link="<?php echo (isset($blog_ajax_page) && $blog_ajax_page != "" ? esc_url($blog_ajax_page) : esc_url(get_pagenum_link($paged+1))) ;?>" data-page="<?php echo esc_attr($paged+1); ?>" data-max="<?php echo esc_attr($wp_query->max_num_pages); ?>"></div>
                <div class="ajax-load-btn-container row">
                    <?php if($blog_ajax_auto_load != "on"){ ?>
                    <a class="post-ajax-load-btn btn btn-theme btn-large"><?php echo __('Click Load More ...','MX'); ?></a>
                    <?php }else{ ?>
                    <span class="post-ajax-scroll-load"><i class="fa fa-arrow-down"></i></span>
                    <?php } ?>
                    <span class="post-ajax-loading"><i class="fa fa-spinner fa-spin"></i><?php echo __('Load ...','MX'); ?></span>
                </div>
                <?php } ?>
            </div>
            <?php }?>
		</section>
        <?php if($layout != 1) { ?> 
        <aside class="mx-col col-lg-3 col-md-4 col-sm-4 mx-<?php echo $layout_class;?>"><?php generated_dynamic_sidebar($sidebar_name); ?></aside>
        <?php } ?>
    </div>
</div>
<?php get_footer(); ?>