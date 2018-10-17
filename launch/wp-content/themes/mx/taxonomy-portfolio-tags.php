<?php
/**
 * The Template for displaying portfolio categories archive.
 *
 * @since MX 1.0
 */

global $portfolio_slug_tax;

$portfolio_slug_tax = 'portfolio-tags';

get_template_part( 'taxonomy-portfolio-cats' );

?>