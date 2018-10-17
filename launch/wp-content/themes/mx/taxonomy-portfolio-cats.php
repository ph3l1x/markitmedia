<?php
/**
 * The Template for displaying portfolio categories archive.
 *
 * @since MX 4.0
 */

global $term,$portfolio_default_page_id,$portfolio_slug_tax,$portfolio_show_columns, $thumbnail_size,$portfolio_per_page_numbers;

// get current tax type
if(!$portfolio_slug_tax){ $portfolio_slug_tax = 'portfolio-cats';}
// get the taxonomy slug
$slug = get_query_var('term');
// get the current taxonomy_id
$term = get_term_by('slug',$slug, $portfolio_slug_tax );

get_header(); 

// get page layout 
$layout 					= mx_get_page_layout($portfolio_default_page_id); 
$layout_class				= mx_get_page_layout_class($portfolio_default_page_id);
// get portfolio item show style
$portfolio_show_style 		= intval(mx_get_post_meta_key('portfolio-show-style', $portfolio_default_page_id)) + 1;
// get portfolio items show columns
$portfolio_show_columns		= mx_get_post_meta_key('portfolio-show-columns', $portfolio_default_page_id);
// get portfolio items number
$portfolio_per_page_numbers = mx_get_post_meta_key('page-show-numbers', $portfolio_default_page_id);
// get portfolio crop 
$page_image_no_crop = mx_get_post_meta_key('page-image-no-crop', $portfolio_default_page_id);
// get portfolio columns class name
$portfolio_columns = mx_get_element_columns(intval($portfolio_show_columns));
// get thumbs image size
$thumbnail_size = mx_get_thumbnail_size(intval($portfolio_show_columns), $page_image_no_crop);

?>
<div id="main" class="container">
	<div class="row">
        <section class="<?php echo $layout == 1 ? 'col-md-12 col-sm-12' : 'mx-col col-lg-9 col-md-8 col-sm-8 mx-'.$layout_class; ?>">
            <div class="portfolio-main-area">
            	<section class="portfolio-container row portfolio-isotope">
				<?php 
					global $wp_query;
                    $args = array_merge( $wp_query->query_vars, array( 'posts_per_page' => $portfolio_per_page_numbers ) );
                    query_posts( $args );
                    if (have_posts() ) {
                        while (have_posts() ) { 
							the_post();
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('portfolio-element '.$portfolio_columns.' portfolio-style-'.$portfolio_show_style);?> itemscope itemtype="http://schema.org/CreativeWork">
                    <?php
                        	get_template_part( 'template/portfolio/portfolio', 'content-style-'.$portfolio_show_style );
                        }
                    }
                    ?>
                </section>
                <?php mx_content_pagination('nav-bottom' , 'pagination-centered'); ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
        <?php if($layout != 1) { ?> 
        <aside class="mx-col col-lg-3 col-md-4 col-sm-4 mx-<?php echo $layout_class;?>"><?php generated_dynamic_sidebar(); ?></aside>
        <?php } ?>
    </div>
</div>
<?php get_footer(); ?>