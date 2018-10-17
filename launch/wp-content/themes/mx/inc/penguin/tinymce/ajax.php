<?php
/**
 *
 * @return string folder content
 */
add_action('wp_ajax_penguinshortcodes_tinymce', 'penguinshortcodes_ajax_tinymce');
/**
 * Call TinyMCE window content via admin-ajax
 *
 * @since 1.7.0
 * @return html content
 */
function penguinshortcodes_ajax_tinymce() {
    if (!current_user_can('edit_pages') && !current_user_can('edit_posts')){
        die(__("You are not allowed to be here",'MX'));
	}

    include_once( dirname(dirname(__FILE__)) . '/tinymce/window.php');
	
	exit;
}
?>