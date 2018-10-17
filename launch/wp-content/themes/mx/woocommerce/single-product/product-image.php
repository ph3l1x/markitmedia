<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.6.3
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $post, $woocommerce, $product;

?>
<div class="images">

	<?php
		if ( has_post_thumbnail() ) {

			$image_title 		= "";
			$image_link  		= wp_get_attachment_url( get_post_thumbnail_id() );
			$image       		= get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ), array('title' => $image_title) );
			
			$attachment_count   = count( $product->get_gallery_attachment_ids() );
			
			if ( $attachment_count > 0 ) {
				$gallery = '[product-gallery]';
				$zoom = "";
			} else {
				$gallery = '';
				$zoom = 'zoom';
			}
			
			
			
			$html = '';
			
			if($product->is_featured()){
				$html = apply_filters('woocommerce_sale_flash', '<span class="featured">'.__('Featured','MX').'</span>', $post, $product);
			}else if($product->is_on_sale()){
				$html = apply_filters('woocommerce_sale_flash', '<span class="onsale">'.__( 'Sale!', 'woocommerce' ).'</span>', $post, $product);
			}else if(!$product->is_in_stock()){
				$html = '<span class="outofstock">'.__('Out of Stock','MX').'</span>';
			}else  if(!$product->get_price()){
				$html = '<span class="free">'.__('Free','MX').'</span>';
			}
			
			echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<a href="%s" itemprop="image" class="woocommerce-main-image '.$zoom.'" title="%s"  rel="prettyPhoto' . $gallery . '" data-url="%s">%s<span class="preview_loading"><span><i class="fa fa-spinner fa-spin"></i></span></span><div class="preview_cover"></div>'.$html.'</a>', $image_link, $image_title, $image_link ,  $image ), $post->ID );
			echo '<div class="preview_zoom"></div>';
		} else {

			echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<img src="%s" alt="Placeholder" />', woocommerce_placeholder_img_src() ), $post->ID );
		
		}
	?>
	
	<?php do_action( 'woocommerce_product_thumbnails' ); ?>

</div>
