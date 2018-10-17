<?php
/**
 * Single Product Thumbnails
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-thumbnails.php.
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

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $product, $woocommerce;

$attachment_ids = $product->get_gallery_attachment_ids();

if ( $attachment_ids ) {
	?>
	<ul class="thumbnails-ul inline"><?php

		$loop = 1;
		//$columns = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
		$columns = 4;
		
		if ( count($attachment_ids) > 0) {
			$image_class		= 'zoom first';
			$image_title 		= esc_attr( get_the_title( get_post_thumbnail_id() ) );
			$image_link  		= wp_get_attachment_url( get_post_thumbnail_id() );
			$image       		= wp_get_attachment_image( get_post_thumbnail_id() , apply_filters( 'single_product_small_thumbnail_size', 'shop_thumbnail' ) );
			
			$image_single = wp_get_attachment_image_src( get_post_thumbnail_id() , 'shop_single');
			$image_single_link	= $image_single[0];
	
			echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', sprintf( '<li><a href="%s" class="%s" data-title="%s" rel="prettyPhoto[product-gallery]" data-single="%s">%s</a></li>', $image_link, $image_class, $image_title , $image_single_link , $image), get_post_thumbnail_id(), $post->ID, $image_class );
		}
		
		foreach ( $attachment_ids as $attachment_id ) {

			$classes = array( 'zoom' );

			if ( $loop == 0 || $loop % $columns == 0 )
				$classes[] = 'first';

			if ( ( $loop + 1 ) % $columns == 0 )
				$classes[] = 'last';

			$image_link = wp_get_attachment_url( $attachment_id );

			if ( ! $image_link )
				continue;

			$image       = wp_get_attachment_image( $attachment_id, apply_filters( 'single_product_small_thumbnail_size', 'shop_thumbnail' ) );
			$image_class = esc_attr( implode( ' ', $classes ) );
			$image_title = esc_attr( get_the_title( $attachment_id ) );
			$image_single = wp_get_attachment_image_src( $attachment_id , 'shop_single');
			$image_single_link	= $image_single[0];

			echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', sprintf( '<li><a href="%s" class="%s" data-title="%s"  rel="prettyPhoto[product-gallery]" data-single="%s">%s</a></li>', $image_link, $image_class, $image_title, $image_single_link, $image ), $attachment_id, $post->ID, $image_class );

			$loop++;
		}

	?></ul>
	<?php
}