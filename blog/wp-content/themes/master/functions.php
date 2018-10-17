<?php

/**

 * Set the content width based on the theme's design and stylesheet.

 *

 * Used to set the width of images and content. Should be equal to the width the theme

 * is designed for, generally via the style.css stylesheet.

 */

if ( ! isset( $content_width ) )

	$content_width = 640;





/** Tell WordPress to run master_setup() when the 'after_setup_theme' hook is run. */

add_action( 'after_setup_theme', 'master_setup' );



if ( ! function_exists( 'master_setup' ) ):

/**

 * Sets up theme defaults and registers support for various WordPress features.

 *

 * Note that this function is hooked into the after_setup_theme hook, which runs

 * before the init hook. The init hook is too late for some features, such as indicating

 * support post thumbnails.

 *

 * To override twentyten_setup() in a child theme, add your own twentyten_setup to your child theme's

 * functions.php file.

 *

 * @uses add_theme_support() To add support for post thumbnails and automatic feed links.

 * @uses register_nav_menus() To add support for navigation menus.

 * @uses add_custom_background() To add support for a custom background.

 * @uses add_editor_style() To style the visual editor.

 * @uses load_theme_textdomain() For translation/localization support.

 * @uses add_custom_image_header() To add support for a custom header.

 * @uses register_default_headers() To register the default custom header images provided with the theme.

 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.

 *

 * @since Master Theme 1.0

 */

function master_setup() {



	// This theme styles the visual editor with editor-style.css to match the theme style.

	add_editor_style();



	// This theme uses post thumbnails

	add_theme_support( 'post-thumbnails' );



	// Add default posts and comments RSS feed links to head

	add_theme_support( 'automatic-feed-links' );



	// Make theme available for translation

	// Translations can be filed in the /languages/ directory

	load_theme_textdomain( 'master', TEMPLATEPATH . '/languages' );



	$locale = get_locale();

	$locale_file = TEMPLATEPATH . "/languages/$locale.php";

	if ( is_readable( $locale_file ) )

		require_once( $locale_file );



}

endif;



if ( ! function_exists( 'master_admin_header_style' ) ) :

/**

 * Styles the header image displayed on the Appearance > Header admin panel.

 *

 * Referenced via add_custom_image_header() in master_setup().

 *

 * @since Master Theme 1.0

 */

function master_admin_header_style() {

?>

<style type="text/css">

/* Shows the same border as on front end */

#headimg {

	border-bottom: 1px solid #000;

	border-top: 4px solid #000;

}

/* If NO_HEADER_TEXT is false, you would style the text with these selectors:

	#headimg #name { }

	#headimg #desc { }

*/

</style>

<?php

}

endif;



/**

 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.

 *

 * To override this in a child theme, remove the filter and optionally add

 * your own function tied to the wp_page_menu_args filter hook.

 *

 * @since Master Theme 1.0

 */

function master_page_menu_args( $args ) {

	$args['show_home'] = true;

	return $args;

}

add_filter( 'wp_page_menu_args', 'master_page_menu_args' );



/**

 * Sets the post excerpt length to 40 characters.

 *

 * To override this length in a child theme, remove the filter and add your own

 * function tied to the excerpt_length filter hook.

 *

 * @since Master Theme 1.0

 * @return int

 */

function master_excerpt_length( $length ) {

	return 40;

}

add_filter( 'excerpt_length', 'master_excerpt_length' );



/**

 * Returns a "Continue Reading" link for excerpts

 *

 * @since Master Theme 1.0

 * @return string "Continue Reading" link

 */

function master_continue_reading_link() {

	return ' <a href="'. get_permalink() . '">' . __( 'Read More', 'master' ) . '</a>';

}



/**

 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and master_continue_reading_link().

 *

 * To override this in a child theme, remove the filter and add your own

 * function tied to the excerpt_more filter hook.

 *

 * @since Master Theme 1.0

 * @return string An ellipsis

 */

function master_auto_excerpt_more( $more ) {

	return ' &hellip;' . master_continue_reading_link();

}

add_filter( 'excerpt_more', 'master_auto_excerpt_more' );



/**

 * Adds a pretty "Continue Reading" link to custom post excerpts.

 *

 * To override this link in a child theme, remove the filter and add your own

 * function tied to the get_the_excerpt filter hook.

 *

 * @since Master Theme 1.0

 * @return string Excerpt with a pretty "Continue Reading" link

 */

function master_custom_excerpt_more( $output ) {

	if ( has_excerpt() && ! is_attachment() ) {

		$output .= master_continue_reading_link();

	}

	return $output;

}

add_filter( 'get_the_excerpt', 'master_custom_excerpt_more' );



if ( ! function_exists( 'master_comment' ) ) :

/**

 * Template for comments and pingbacks.

 *

 * To override this walker in a child theme without modifying the comments template

 * simply create your own twentyten_comment(), and that function will be used instead.

 *

 * Used as a callback by wp_list_comments() for displaying the comments.

 *

 * @since Master Theme 1.0

 */

function master_comment( $comment, $args, $depth ) {

	$GLOBALS['comment'] = $comment;

	switch ( $comment->comment_type ) :

		case '' :

	?>

	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">

		<div id="comment-<?php comment_ID(); ?>">

		<div class="comment-author vcard">

			<?php echo get_avatar( $comment, 40 ); ?>

			<?php printf( __( '%s <span class="says">says:</span>', 'master' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>

		</div><!-- .comment-author .vcard -->

		<?php if ( $comment->comment_approved == '0' ) : ?>

			<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'master' ); ?></em>

			<br />

		<?php endif; ?>



		<div class="comment-meta commentmetadata"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">

			<?php

				/* translators: 1: date, 2: time */

				printf( __( '%1$s at %2$s', 'master' ), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)', 'master' ), ' ' );

			?>

		</div><!-- .comment-meta .commentmetadata -->



		<div class="comment-body"><?php comment_text(); ?></div>



		<div class="reply">

			<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>

		</div><!-- .reply -->

	</div><!-- #comment-##  -->



	<?php

			break;

		case 'pingback'  :

		case 'trackback' :

	?>

	<li class="post pingback">

		<p><?php _e( 'Pingback:', 'master' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'master' ), ' ' ); ?></p>

	<?php

			break;

	endswitch;

}

endif;



/**

 * Register widgetized areas, including two sidebars and four widget-ready columns in the footer.

 *

 * To override master_widgets_init() in a child theme, remove the action hook and add your own

 * function tied to the init hook.

 *

 * @since Master Theme 1.0

 * @uses register_sidebar

 */

function master_widgets_init() {

	

	// Area 7, located on the blog / archieve pages.

	register_sidebar( array(

		'name' => __( 'Blog Primary Widget Area', 'master' ),

		'id' => 'blog-primary-widget-area',

		'description' => __( 'The blog / archieve pages primary widget area', 'master' ),

		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',

		'after_widget' => '</li>',

		'before_title' => '<h3 class="blog-widget-title">',

		'after_title' => '</h3>',

	) );



}

/** Register sidebars by running twentyten_widgets_init() on the widgets_init hook. */

add_action( 'widgets_init', 'master_widgets_init' );



/**

 * Removes the default styles that are packaged with the Recent Comments widget.

 *

 * To override this in a child theme, remove the filter and optionally add your own

 * function tied to the widgets_init action hook.

 *

 * This function uses a filter (show_recent_comments_widget_style) new in WordPress 3.1

 * to remove the default style. Using Master Theme 1.0 in WordPress 3.0 will show the styles,

 * but they won't have any effect on the widget in default Twenty Ten styling.

 *

 * @since Master Theme 1.0

 */

function master_remove_recent_comments_style() {

	add_filter( 'show_recent_comments_widget_style', '__return_false' );

}

add_action( 'widgets_init', 'master_remove_recent_comments_style' );



/**

 * Prints HTML with meta information for the current post-date/time and author.

 *

 * @since Master Theme 1.0

 */

function master_posted_on() {

	// Retrieves tag list of current post, separated by commas.

	$tag_list = get_the_tag_list( '', ', ' );

	if ( $tag_list ) {

		$posted_in = ' <span class="meta-sep">in</span> ' . get_the_category_list( ', ' ) . ' <span class="meta-sep">and tagged</span> ' . $tag_list;

	} elseif ( is_object_in_taxonomy( get_post_type(), 'category' ) ) {

		$posted_in = ' <span class="meta-sep">in</span> ' . get_the_category_list( ', ' );

	} else {

		$posted_in = '';

	}

	if( get_the_author() == 'guestblogger' || get_the_author() == 'admin' ) {

		printf( __( '<span class="%1$s">Posted</span> <span class="meta-sep">by Markit Media</span> %3$s', 'master' ),

			'meta-prep meta-prep-author',

			sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',

				get_permalink(),

				esc_attr( get_the_time() ),

				get_the_date()

			),

			$posted_in

		);

	} else {

		printf( __( '<span class="%1$s">Posted on</span> %2$s <span class="meta-sep">by</span> %3$s', 'master' ),

			'meta-prep meta-prep-author',

			sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',

				get_permalink(),

				esc_attr( get_the_time() ),

				get_the_date()

			),

			sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',

				get_author_posts_url( get_the_author_meta( 'ID' ) ),

				sprintf( esc_attr__( 'View all posts by %s', 'twentyten' ), get_the_author() ),

				get_the_author()

			)

		);

	}

}



if ( ! function_exists( 'master_posted_in' ) ) :

/**

 * Prints HTML with meta information for the current post (category, tags and permalink).

 *

 * @since Master Theme 1.0

 */

function master_posted_in() {

	// Retrieves tag list of current post, separated by commas.

	$tag_list = get_the_tag_list( '', ', ' );

	if ( $tag_list ) {

		#$posted_in = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'master' );

		$posted_in = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'master' );

	#} elseif ( is_object_in_taxonomy( get_post_type(), 'category' ) ) {

	#	$posted_in = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'master' );

	} else {

		$posted_in = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'master' );

	}

	// Prints the string, replacing the placeholders.

	printf(

		$posted_in,

		#get_the_category_list( ', ' ),

		$tag_list,

		get_permalink(),

		the_title_attribute( 'echo=0' )

	);

}

endif;







// disable comment feeds for individual posts

function disablePostCommentsFeedLink($for_comments) {

	return;

}

add_filter('post_comments_feed_link','disablePostCommentsFeedLink');



// kill all extra feed links in the head

remove_action('wp_head','feed_links_extra', 3);

remove_action('wp_head','feed_links', 2);





function mini_posts ( $number_of_posts, $excerpt_length, $read_more, $title_link  ) { // Jesse's 'Recent Posts' widget... use in wigdet with <?php mini_posts($number_of_posts,$excerpt_length,$read_more,$title_link);

// Set Defaults

		if ( isset( $number_of_posts ) ) { $numberofposts = $number_of_posts; } else { $numberofposts = 3; }

		if ( isset( $excerpt_length ) ) { $excerptlength = $excerpt_length; } else { $excerptlength = 250; }

		if ( isset( $read_more ) ) { $readmore = $read_more; } else { $readmore = true; }

		if ( isset( $title_link ) ) { $titlelink = $title_link; } else { $titlelink = false; }

// The Query

		$the_query = new WP_Query( 'post_type=post&orderby=date&reder=asc&posts_per_page=' . $numberofposts );

// The Loop

		echo '<div id="recent_posts_excerpts">';

			while ( $the_query->have_posts() ) : $the_query->the_post();

				global $post;

				echo '<p class="recentpost_title">';

				if ( $titlelink ) { ?><a href="<?php the_permalink() ?>"><?php }

				echo $post->post_title;

				echo '</p>';

				if ( $titlelink ) { ?></a><?php }

				echo '<p class="recentpost_content">' . substr(strip_tags($post->post_content), 0, $excerptlength) . '...';

				if ( $readmore ) { ?><br /><a href="<?php the_permalink() ?>">Read More &#8250;</a></p><?php }

			endwhile;

		echo '</div>';

// Reset Post Data

		wp_reset_postdata();

}









function printCode($code, $high_light = 0, $lines_number = 0) {

	if (!is_array($code)) $code = explode("\n", $code);



	$count_lines = count($code);



	foreach ($code as $line => $code_line) {



		if ($lines_number) $r1 = "<span class=\"lines_number\">".($line + 1)." </span>";



		if ($high_light) {

			if (ereg("<\?(php)?[^[:graph:]]", $code_line)) {

				$r2 = highlight_string($code_line, 1)."<br />";

			} else {



				$r2 = ereg_replace("(&lt;\?php&nbsp;)+", "", highlight_string("<?php ".$code_line, 1))."<br />";



			}

		} else {

			$r2 = (!$line) ? "<pre>" : "";

			$r2 .= htmlentities($code_line);

			$r2 .= ($line == ($count_lines - 1)) ? "<br /></pre>" : ""; 

		} 



		$r .= $r1.$r2;



	}



	echo "<div class=\"code\">".$r."</div>";

}