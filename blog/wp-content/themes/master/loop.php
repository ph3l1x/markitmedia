<?php

	/**

	 * The loop that displays posts.

	 *

	 * The loop displays the posts and the post content.  See

	 * http://codex.wordpress.org/The_Loop to understand it and

	 * http://codex.wordpress.org/Template_Tags to understand

	 * the tags used in it.

	 *

	 * This can be overridden in child themes with loop.php or

	 * loop-template.php, where 'template' is the loop context

	 * requested by a template. For example, loop-index.php would

	 * be used if it exists and we ask for the loop with:

	 * <code>get_template_part( 'loop', 'index' );</code>

	 *

	 * @package WordPress

	 * @subpackage Master Theme

	 */

?>



	<?php if ( have_posts() ) the_post();  ?>

    <p class="blog-title TEST">

        <?php if ( is_day() ) : ?>

            <?php printf( __( 'DAILY ARCHIVES: <span>%s</span>', 'twentyten' ), get_the_date() ); ?>

        <?php elseif ( is_month() ) : ?>

            <?php printf( __( 'MONTHLY ARCHIVES: <span>%s</span>', 'twentyten' ), get_the_date( 'F Y' ) ); ?>

        <?php elseif ( is_year() ) : ?>

            <?php printf( __( 'YEARLY ARCHIVES: <span>%s</span>', 'twentyten' ), get_the_date( 'Y' ) ); ?>

        <?php else : ?>

            <?php _e( 'Markit Media Blog', 'twentyten' ); ?>

        <?php endif; ?>

    </p>

    <?php rewind_posts(); ?>

        

    <?php /* Display navigation to next/previous pages when applicable */ ?>

    <?php if ( $wp_query->max_num_pages > 1 ) : ?>

        <div id="nav-above" class="navigation">

            <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'master' ) ); ?></div>

            <div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'master' ) ); ?></div>

        </div><!-- #nav-above -->

    <?php endif; ?>

    

    <?php /* If there are no posts to display, such as an empty archive page */ ?>

    <?php if ( !have_posts() ) : ?>

        <div id="post-0" class="post error404 not-found">

            <h1 class="entry-title"><?php _e( 'Not Found', 'master' ); ?></h1>

            <div class="entry-content">

                <p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'master' ); ?></p>

                <?php get_search_form(); ?>

            </div><!-- .entry-content -->

        </div><!-- #post-0 -->

    <?php endif; ?>

                

    <?php /** Start the Loop **/

    while ( have_posts() ) : the_post(); ?>



        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        

            <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'master' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>



            <div class="entry-meta">
                <?php the_date('F jS, Y', "Published on "); ?>
             

            </div><!-- .entry-meta -->



			<?php if ( is_single() ) : // display excerpts for everything but a single post ?>

                <div class="entry-content">

                    <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'master' ) ); ?>

                    <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'master' ), 'after' => '</div>' ) ); ?>

                </div><!-- .entry-content -->

            <?php else : ?>

                <div class="entry-content">

                    <?php the_excerpt(); ?>

                </div><!-- .entry-summary -->

            <?php endif; ?>



            <div class="entry-utility">

                <?php if ( count( get_the_category() ) ) : ?>

                    <span class="cat-links">

                        <?php printf( __( '<span class="%1$s">Posted in</span> %2$s', 'master' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>

                    </span>

                    <span class="meta-sep">|</span>

                <?php endif; ?>

                <?php $tags_list = get_the_tag_list( '', ', ' );

                if ( $tags_list ): ?>

                    <span class="tag-links">

                        <?php printf( __( '<span class="%1$s">Tagged</span> %2$s', 'master' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?>

                    </span>

                    <span class="meta-sep">|</span>

                <?php endif; ?>

                <!-- Enables comments<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'master' ), __( '1 Comment', 'master' ), __( '% Comments', 'master' ) ); ?></span>-->

                <?php edit_post_link( __( 'Edit', 'master' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>

            </div><!-- .entry-utility -->

            

            <?php if( function_exists( do_sociable() ) ){ do_sociable(); } ?>

            

        </div><!-- #post-## -->



        <?php //comments_template( '', false ); ?>

        

    <?php endwhile; // End the loop. Whew. ?>

    

    <?php /* Display navigation to next/previous pages when applicable */ ?>

    

    <?php if (  $wp_query->max_num_pages > 1 ) : ?>

        <div id="nav-below" class="navigation">

            <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'master' ) ); ?></div>

            <div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'master' ) ); ?></div>

        </div><!-- #nav-below -->

    <?php endif; ?>

