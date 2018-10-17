<?php
/**
 * Template Name: Sitemap Template
 *
 * @since MX 1.0
 */
get_header();

// get page layout
$layout = mx_get_page_layout(); 
$layout_class = mx_get_page_layout_class();

?>
<div id="main" class="container">
	<div class="row">
        <section class="<?php echo $layout == 1 ? 'col-md-12 col-sm-12' : 'mx-col col-lg-9 col-md-8 col-sm-8 mx-'.$layout_class; ?>">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
                <?php wp_link_pages(); ?>
            <?php endwhile; else: ?>
            <?php endif; ?>
            <div class="sitemap-element col-md-4 col-sm-4">
                <h4 class="sitemap-title"><?php _e('Pages','MX'); ?></h4>
                <div class="line"><span class="left-line"></span><span class="right-line"></span></div>
                <div class="clear"></div>
                <ul class="sitemap-ul">
                <?php wp_list_pages('title_li='); ?>
                </ul>
            </div>
            
            <div class="sitemap-element col-md-4 col-sm-4">
                <h4 class="sitemap-title"><?php _e('Posts','MX'); ?></h4>
                <div class="line"><span class="left-line"></span><span class="right-line"></span></div>
                <div class="clear"></div>
                <ul class="sitemap-ul">
                <?php
                    $cats = get_categories();
                    foreach ($cats as $cat) {
                      echo '<li class="sitemap-cat"><a href="'.esc_url(get_category_link($cat->cat_ID)).'">'.$cat->cat_name.'</a>';
                      echo "<ul>";
                      query_posts('posts_per_page=-1&cat='.$cat->cat_ID);
                      while(have_posts()) {
                        the_post();
                          echo '<li><a href="'.esc_url(get_permalink()).'">'.get_the_title().'</a></li>';
                      }
                      echo "</ul>";
                      echo "</li>";
                    }
                    wp_reset_postdata();
                ?>
                </ul>
            </div>
            
            <div class="sitemap-element col-md-4 col-sm-4">
                <h4 class="sitemap-title"><?php _e('Portfolios','MX'); ?></h4>
                <div class="line"><span class="left-line"></span><span class="right-line"></span></div>
                <div class="clear"></div>
                <ul class="sitemap-ul">
                <?php
                    $cats = mx_get_custom_all_categories('portfolio-cats');
                    foreach ($cats as $cat) {
                      echo '<li class="sitemap-cat"><a href="'.esc_url(get_term_link($cat->slug, 'portfolio-cats' )).'">'.$cat->name.'</a>';
                      echo "<ul>";
                      
                      $args=array(
                              'post_type' => 'portfolio',
                              'post_status' => 'publish',
                              'posts_per_page' => '-1',
                              'tax_query' => array(
                                            array(
                                                'taxonomy' => 'portfolio-cats',
                                                'field' => 'id',
                                                'terms' => $cat->term_id
                                            )
                                    )
                              );
                      
                      query_posts($args);
                      while(have_posts()) {
                        the_post();
                        $category = mx_get_custom_post_categories(get_the_ID(), "portfolio-cats");
                        echo '<li><a href="'.esc_url(get_permalink()).'">'.get_the_title().'</a></li>';
                      }
                      echo "</ul>";
                      echo "</li>";
                    }
                    wp_reset_postdata();
                ?>
                </ul>
            </div>
        </section>
        <?php if($layout != 1) { ?> 
        <aside class="mx-col col-lg-3 col-md-4 col-sm-4 mx-<?php echo $layout_class;?>"><?php generated_dynamic_sidebar(); ?></aside>
        <?php } ?>
    </div>
</div>
<?php get_footer(); ?>