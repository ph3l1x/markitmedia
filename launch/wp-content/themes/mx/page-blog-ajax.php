<?php
/**
 * Template Name: Blog Mansory Template
 *
 * @since MX 4.0
 */

global $paged, $blog_ajax_per_page_num,$blog_ajax_show_columns,$blog_ajax_auto_load, $blog_ajax_page_cats,$page_image_no_crop,$blog_ajax_style;

get_header();

// get page layout
$layout = mx_get_page_layout();
$layout_class = mx_get_page_layout_class();
// get page items show columns
$blog_ajax_show_columns = mx_get_post_meta_key('ajax-show-columns', $post->ID);
// get page items show number
$blog_ajax_per_page_num = mx_get_post_meta_key('page-show-numbers', $post->ID);
// get page items show categories
$blog_ajax_page_cats = mx_get_post_meta_key('ajax-cats', $post->ID);
// get page items auto load 
$blog_ajax_auto_load = mx_get_post_meta_key('ajax-enabld-auto', $post->ID);
// get image need crop
$page_image_no_crop = mx_get_post_meta_key('page-image-no-crop', $post->ID);
// get show style
$blog_ajax_style = intval(mx_get_post_meta_key('post-show-style', $post->ID))+1;

?>
<div id="main" class="container">
	<div class="row">
        <section class="<?php echo $layout == 1 ? 'col-md-12 col-sm-12' : 'mx-col col-lg-9 col-md-8 col-sm-8 mx-'.$layout_class; ?>">
			<?php
            if (have_posts() ) {
                while ( have_posts() ) { the_post();
            ?>
                <div class="post-content">
                      <?php the_content(); ?>
                      <?php wp_link_pages(); ?>
                </div>
            <?php
                }
            }
            get_template_part( 'template/blog/blog', 'ajax-content');
            ?>
		</section>
		<?php if($layout != 1) { ?> 
        <aside class="mx-col col-lg-3 col-md-4 col-sm-4 mx-<?php echo $layout_class;?>"><?php generated_dynamic_sidebar(); ?></aside>
        <?php } ?>
    </div>
</div>
<?php get_footer(); ?>