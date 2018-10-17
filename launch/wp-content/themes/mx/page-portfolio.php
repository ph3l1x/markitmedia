<?php
/**
 * Template Name: Portfolio Template
 *
 * @since MX 4.0
 */
 
global $paged, $portfolio_show_columns, $thumbnail_size;

get_header();

// get page layout
$layout = mx_get_page_layout();
$layout_class = mx_get_page_layout_class();
// get portfolio item show style
$portfolio_show_style 		= intval(mx_get_post_meta_key('portfolio-show-style', $post->ID)) + 1;
// get portfolio page items show columns
$portfolio_show_columns		= mx_get_post_meta_key('portfolio-show-columns', $post->ID);
// get portfolio page items show number
$portfolio_per_page_numbers = mx_get_post_meta_key('page-show-numbers', $post->ID);
// get image need crop
$page_image_no_crop = mx_get_post_meta_key('page-image-no-crop', $post->ID );
// get show columns class name
$portfolio_columns = mx_get_element_columns(intval($portfolio_show_columns));
// get thumbs name
$thumbnail_size = mx_get_thumbnail_size(intval($portfolio_show_columns), $page_image_no_crop);

?>
<div id="main" class="container">
	<div class="row">
        <section class="<?php echo $layout == 1 ? 'col-md-12 col-sm-12' : 'mx-col col-lg-9 col-md-8 col-sm-8 mx-'.$layout_class; ?>">
			<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
            <div class="post-content">
                  <?php the_content(); ?>
                  <?php wp_link_pages(); ?>
            </div>
            <?php }} ?>
            <?php 
				$show_filters 	= get_post_meta($post->ID, 'portfolio-show-filters', true); 
				$show_tags	 	= get_post_meta($post->ID, 'portfolio-show-tags', true); 
				$tax_query		= array();
				$cats_slugs		= array();
				$tags_slugs		= array();
				$portfolio_show_cats = get_post_meta($post->ID, 'portfolio-filters-cats', true); 
				if($portfolio_show_cats != "") {
					$cats_slugs = explode("," , $portfolio_show_cats);
					$tax_query[] = array('taxonomy' => 'portfolio-cats','field' => 'slug','terms' => $cats_slugs);
				}
				
				if($show_tags == "on"){
					$portfolio_show_tags = get_post_meta($post->ID, 'portfolio-filters-tags', true); 
					if($portfolio_show_tags != "") {
						$tags_slugs = explode("," , $portfolio_show_tags);
						$tax_query[] = array('taxonomy' => 'portfolio-tags','field' => 'slug','terms' => $tags_slugs);
					}
				}
			?>
            <div class="portfolio-main-area">
            	<?php if($show_filters == "on"){ ?>
                <section class="portfolio-filters row">
                    <div class="portfolio-filters-cats <?php 
							if($show_tags != "on"){ 
								echo 'portfolio-filters-default-style';
							}else{
								echo 'col-9 col-sm-9';
							}
						?>">
                        <ul class="inline">
                            <li><a data-filters="*" class="active"><?php _e('All', 'MX'); ?></a></li>
                            <?php 
							if($show_tags == "on"){
                            	$categories 		= mx_get_custom_all_categories('portfolio-tags'); 
								$slugs				= $tags_slugs;
							}else{
								$categories 		= mx_get_custom_all_categories('portfolio-cats'); 
								$slugs				= $cats_slugs;
							}
                            if(count($slugs) > 0) {
                                foreach($categories as $category){
                                    foreach($slugs as $slug){
                                        if( $slug == $category->slug){
                                            echo '<li><a data-filters=".cat-'.$category->slug.'" >'.$category->name.'</a></li>';
                                            break;
                                        }
                                    }
                                }
                            }else{
                                 foreach($categories as $category){
                                    echo '<li><a data-filters=".cat-'.$category->slug.'" >'.$category->name.'</a></li>';
                                }
                            }
                            ?>
                        </ul>
                    </div>
                    <?php if($show_tags == "on"){ ?>
                    <div class="portfolio-filters-cats-select col-3 col-sm-3">
                    	<select>
                        	<option selected="selected" value="*"><?php _e('All', 'MX'); ?></option>
                    	<?php 
                            $categories = mx_get_custom_all_categories('portfolio-cats'); 
                            if($portfolio_show_cats != "") {
                                $slugs = $cats_slugs;
                                foreach($categories as $category){
                                    foreach($slugs as $slug){
                                        if( $slug == $category->slug){
                                            echo '<option value=".cat2-'.$category->slug.'" >'.$category->name.'</option>';
                                            break;
                                        }
                                    }
                                }
                            }else{
                                 foreach($categories as $category){
                                    echo '<option value=".cat2-'.$category->slug.'" >'.$category->name.'</option>';
                                }
                            }
                            ?>
                          </select>
                    </div>
                    <?php } ?>
                </section>
                <?php } ?>
                <section class="portfolio-container row portfolio-isotope" <?php echo $page_image_no_crop == "on" ? 'data-layoutmode="masonry"' : ''; ?>>
                    <?php 
                    if($paged == 0){ $paged = 1;}
                    
                    $args = array(	'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'paged' => $paged,
                                    'posts_per_page'=> intval($portfolio_per_page_numbers)
                                 );
                    
                    // show category,tags portfolio
                    if(count($tax_query) > 0) {
						$args['tax_query'] = $tax_query;
                    }
                    
                    // The Query
                    $portfolios = new WP_Query($args);
                    if ($portfolios -> have_posts() ) {
                        while ($portfolios -> have_posts() ) {
                            $portfolios-> the_post();

							if($show_filters == "on" && $show_tags == "on"){
								$portfolio_cats = mx_get_custom_post_categories(get_the_ID(),'portfolio-cats',true,' ','slug','cat2-');
								$portfolio_tags = mx_get_custom_post_categories(get_the_ID(),'portfolio-tags',true,' ','slug','cat-');
							}else{
								$portfolio_cats = mx_get_custom_post_categories(get_the_ID(),'portfolio-cats',true,' ','slug','cat-');
								$portfolio_tags = '';
							}						
							
							?>
							<article id="post-<?php the_ID(); ?>" <?php post_class('portfolio-element '.$portfolio_columns.' '.$portfolio_cats.' '.$portfolio_tags.' portfolio-style-'.$portfolio_show_style);?> itemscope itemtype="http://schema.org/CreativeWork">
                            <?php
							get_template_part( 'template/portfolio/portfolio', 'content-style-'.$portfolio_show_style);
                        }
                    }
                    ?>
                </section>
                <?php mx_content_pagination('nav-bottom' , 'pagination-centered' , 2 , $portfolios); ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </section>
        <?php if($layout != 1) { ?> 
        <aside class="mx-col col-lg-3 col-md-4 col-sm-4 mx-<?php echo $layout_class;?>"><?php generated_dynamic_sidebar(); ?></aside>
        <?php } ?>
    </div>
</div>

<?php get_footer(); ?>