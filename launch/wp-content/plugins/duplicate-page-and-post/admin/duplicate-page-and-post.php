<?php
/**
 * The admin-specific functionality of the plugin.
 *
 * @since      2.0.0
 *
 * @package    Duplicate_Page_And_Post
 * @subpackage Duplicate_Page_And_Post/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version.
 *
 * @package    Duplicate_Page_And_Post
 * @subpackage Duplicate_Page_And_Post/admin
 * @author     pluginsforwp
 */
class Duplicate_Page_And_Post_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    2.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    2.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    2.0.0
	 * @param    string $plugin_name    The name of this plugin.
	 * @param    string $version        The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Add the duplicate option link to action list for post_row_actions
	 *
	 * @since    2.0.0
	 * @param    array $actions    The action should be displayed on post page.
	 * @param    object $post       The id of the post is passing through the parameter.
     * @return   array $actions
	 */
	public function admin_duplicate_post_link( $actions, $post ) {

	    if ( current_user_can( 'edit_posts' ) ) {
			$actions['duplicate'] =
                '<a href="' . wp_nonce_url( admin_url( 'admin.php?action=duplicate&amp;post=' . $post ->ID ) ) . '" aria-label="' .  __( 'Duplicate', $this->plugin_name ) . ' “' . $post->post_title . '”">' .
                    __( 'Duplicate', $this->plugin_name ) .
                '</a>';
		}

		return $actions;

	}

	/**
	 * Function is to create the duplicate post as draft redirect it to the edit post.
	 *
	 * @since    2.0.0
	 */
	public function admin_duplicate_post_as_draft() {

	    if ( ! ( isset( $_GET['post'] ) || isset( $_POST['post'] ) || ( isset( $_REQUEST['action'] ) && 'duplicate' === wp_verify_nonce( sanitize_key( $_REQUEST['action'] ) ) ) ) ) { // Input var okay.
			wp_die( __( 'No post to duplicate has been supplied!', $this->plugin_name ) );
		}

		/*
		 * get the original post id
		 */
		$post_id = ( ( sanitize_text_field( wp_unslash( isset( $_GET['post'] ) ) ) ) ? ( sanitize_text_field( wp_unslash( $_GET['post'] ) ) ) : sanitize_text_field( wp_unslash( $_POST['post'] ) ) ); // Input var okay.

		/*
		 * and all the original post data then
		 */
		$post = get_post( $post_id );

		/*
		 * if you don't want current user to be the new post author,
		 * then change next couple of lines to this: $new_post_author = $post->post_author;
		 */
		$current_user = wp_get_current_user();
		$new_post_author = $current_user->ID;

		/*
		 * if the post is exists then create duplicate post.
		 */
		if ( isset( $post ) && null !== $post ) {
			/*
			 * new post data array as draft
			 */
			$args = array(
				'comment_status' => $post->comment_status,
				'ping_status'    => $post->ping_status,
				'post_author'    => $new_post_author,
				'post_content'   => $post->post_content,
				'post_excerpt'   => $post->post_excerpt,
				'post_name'      => $post->post_name,
				'post_parent'    => $post->post_parent,
				'post_password'  => $post->post_password,
				'post_status'    => 'draft',
				'post_title'     => $post->post_title,
				'post_type'      => $post->post_type,
				'to_ping'        => $post->to_ping,
				'menu_order'     => $post->menu_order,
			);

			/*
			 * insert the post by wp_insert_post() function
			 */
			$new_post_id = wp_insert_post( $args );

			/*
			 * get all current post terms ad set them to the new post draft
			 */
			$taxonomies = get_object_taxonomies( $post->post_type ); // returns array of taxonomy names for post type, ex array("category", "post_tag");
			foreach ( $taxonomies as $taxonomy ) {
				$post_terms = wp_get_object_terms( $post_id, $taxonomy, array(
					'fields' => 'slugs',
				));
				wp_set_object_terms( $new_post_id, $post_terms, $taxonomy, false );
			}

			/*
			 * duplicate all post meta just in two SQL queries
			 */
			$post_custom_keys = get_post_custom_keys( $post_id );
			$count = count( $post_custom_keys );
			for ( $i = 0; $i < $count ; $i++ ) {
				$post_custom_vlues = get_post_custom_values( $post_custom_keys[ $i ], $post_id );
				$meta_values = $post_custom_vlues[0];
				add_post_meta( $new_post_id, $post_custom_keys[ $i ], $meta_values );
			}

			/*
			 * finally, redirect to the edit post screen for the new draft
			 */
			wp_safe_redirect( admin_url( 'post.php?action=edit&post=' . $new_post_id ) );
			exit;
		} else {
			wp_die( __( 'Post creation failed, could not find original post.', $this->plugin_name ) );
		}

	}

}
