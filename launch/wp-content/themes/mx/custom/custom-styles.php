<?php
/**
 * Custom Layout,Font,Css
 *
 * @since MX 1.0
 */
 
 global $mx_options, $google_custom_fonts, $options_custom_color;
 
 if($google_custom_fonts == null){
	 mx_get_custom_font();
 }
 $current_colors = array();
 if(mx_get_options_key('custom-enable-color') == "on"){
	 // setting colors
	 foreach($options_custom_color as $key => $value){
		 if(isset($mx_options[$key])){
			 $current_colors[$key] = '#'.$mx_options[$key];
		 }else{
			 $current_colors[$key] = '#'.$value;
		 }
	 }
 }else{
	$current_colors['theme-color'] = '#cc3333';
 }

header("Content-type: text/css; charset: UTF-8");
?>

::-moz-selection { background:<?php echo $current_colors['theme-color']; ?>; color: #ffffff; text-shadow: none; }
::selection { background:<?php echo $current_colors['theme-color']; ?>; color: #ffffff; text-shadow: none; }

/* 	----------------------------------------------------------------------------------------------	
										CUSTOM GENERAL STYLE																												
	----------------------------------------------------------------------------------------------	*/
<?php
//boxed padding
if(intval(mx_get_options_key('global-layout')) == 0) {
	echo '.wrapper {margin: '.mx_get_options_key('global-layout-boxed-padding').'px auto;}';
} 
?>
/* header logo */
.mx-header-logo .logo {margin-top: <?php echo mx_get_options_key('logo-image-padding-top'); ?>px;}
/* social */
.mx-header-right .mx-social {margin-top: <?php echo mx_get_options_key('header-social-padding-top'); ?>px;}
.site-header-style-3 .mx-social {margin-top: <?php echo mx_get_options_key('header-social-padding-top'); ?>px;}

/* header custom content */
.mx-header-right-custom {margin-top: <?php echo mx_get_options_key('header-custom-content-padding-top'); ?>px;}


.site-header-style-3 .mx-header-right > ul {margin-top: <?php echo mx_get_options_key('header-custom-cart-padding-top'); ?>px;}
<?php
if(mx_get_options_key('global-title-align') != ""){
	switch( intval(mx_get_options_key('global-title-align')) ){
		case 0: echo '#site-content-header {text-align:left;}';break;
		case 1: echo '#site-content-header {text-align:center;}';break;
		case 2: echo '#site-content-header {text-align:right;}';break;
	}
}
?>

<?php if(mx_get_options_key('custom-background-enable') == "on"){ ?>
/* 	----------------------------------------------------------------------------------------------	
										CUSTOM BACKGROUND																												
	----------------------------------------------------------------------------------------------	*/
<?php 
/* body */
if(intval(mx_get_options_key('global-layout')) != 1) {mx_add_background_style('global','body.boxed-layout, body.fixed-layout');} 
/* header */
mx_add_background_style('global-header','#mx-header');
/* title */
mx_add_background_style('global-title','#site-content-header');
/* content */
mx_add_background_style('global-content','#page-content-wrap');
/* footer */
mx_add_background_style('global-footer','#site-footer-widget');
}
?>

<?php  if(mx_get_options_key('custom-enable-font') == "on"){ ?>  
/* 	----------------------------------------------------------------------------------------------	
										CUSTOM FONT																												
	----------------------------------------------------------------------------------------------	*/
body {font-family:<?php echo $google_custom_fonts['general_font'];?>,"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:<?php echo mx_get_options_key('custom-general-font-size'); ?>px;}
h1,h2,h3,h4,h5,h6 {font-family:<?php echo $google_custom_fonts['title_font']; ?>,Arial,Helvetica,sans-serif;}
.mx-nav-menu li.menu-item > a {font-size:<?php echo mx_get_options_key('custom-menu-font-size'); ?>px;font-family: <?php echo $google_custom_fonts['menu_font']; ?>,Helvetica,Arial,sans-serif;}
.mx-nav-menu li li.menu-item > a {font-size:<?php echo mx_get_options_key('custom-menu-sub-font-size'); ?>px;}
.mx-nav-menu .mega-menu.mega-horizontal .mega-menu-item-stitle, .mx-nav-menu .mega-menu.mega-vertical .mega-menu-item-stitle {font-size:<?php echo mx_get_options_key('custom-menu-sub-title-font-size'); ?>px;}
<?php } ?>
<?php  if(mx_get_options_key('custom-enable-color') == "on"){ ?>  
/* 	----------------------------------------------------------------------------------------------	
										CUSTOM COLOR																												
	----------------------------------------------------------------------------------------------	*/

body {color:<?php echo $current_colors['custom-general-color']; ?>;}
h1,h2,h3,h4,h5,h6 {color:<?php echo $current_colors['custom-h-color']; ?>;}

textarea:focus,
input[type="text"]:focus,
input[type="password"]:focus,
input[type="datetime"]:focus,
input[type="datetime-local"]:focus,
input[type="date"]:focus,
input[type="month"]:focus,
input[type="time"]:focus,
input[type="week"]:focus,
input[type="number"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="search"]:focus,
input[type="tel"]:focus,
input[type="color"]:focus,
.uneditable-input:focus {
  	border: 1px solid <?php echo $current_colors['theme-color']; ?> !important;
}

a {color: <?php echo $current_colors['custom-a-color']; ?>;}
a:hover {color: <?php echo $current_colors['custom-a-hover-color']; ?>;}

/* header topbar */
#header-banner {background: <?php echo $current_colors['custom-topbanner-bg-color']; ?>;}
#header-topbar {background:<?php echo $current_colors['custom-topbar-bg-color']; ?>;color:<?php echo $current_colors['custom-topbar-font-color']; ?>;}
#header-topbar ul li:hover{background:<?php echo $current_colors['custom-topbar-bg-hover-color']; ?>;}
#header-topbar ul li ul {background:<?php echo $current_colors['custom-topbar-bg-hover-color']; ?>;}
#header-topbar span, #header-topbar a {color:<?php echo $current_colors['custom-topbar-font-color']; ?>;}
#header-topbar a:hover, 
#header-topbar a:hover .amount {color:<?php echo $current_colors['custom-topbar-hover-font-color']; ?>;}
#header-topbar li ul li:hover {background:<?php echo $current_colors['custom-topbar-sub-bg-hover-color']; ?>;}

<?php
if(mx_get_options_key('custom-menu-color-enable') == "on"){
?>
#mx-nav {border-top: 1px <?php echo $current_colors['custom-menu-border-top-color']; ?> solid;border-bottom: 4px <?php echo $current_colors['custom-menu-border-bottom-color']; ?> solid;background: <?php echo $current_colors['custom-menu-bg-color']; ?>;}
.mx-nav-menu > li.current-menu-item > a, .mx-nav-menu > li.current-menu-ancestor > a {border-top: <?php echo $current_colors['custom-menu-item-hover-color']; ?> 2px solid;}
.mx-nav-menu > li > a {color: <?php echo $current_colors['custom-menu-item-font-color']; ?>;}
.mx-nav-menu > li:hover > a {color: <?php echo $current_colors['custom-menu-item-hover-font-color']; ?>;border-top: <?php echo $current_colors['custom-menu-item-hover-color']; ?> 2px solid;background: <?php echo $current_colors['custom-menu-item-hover-color']; ?>;}
.mx-nav-menu > li > ul li.menu-item {background: <?php echo $current_colors['custom-submenu-item-bg-color']; ?>;border: 1px solid <?php echo $current_colors['custom-submenu-item-border-color']; ?>;}
.mx-nav-menu > li > ul li.menu-item > a {color: <?php echo $current_colors['custom-submenu-item-font-color']; ?>;}
.mx-nav-menu > li > ul li.menu-item > a:hover {color: <?php echo $current_colors['custom-submenu-item-hover-font-color']; ?>; background: <?php echo $current_colors['custom-submenu-item-bg-hover-color']; ?>;}

.mx-nav-menu .mega-menu.mega-horizontal li.menu-item > a {color: <?php echo $current_colors['custom-mega-menu-item-font-color']; ?>;}
.mx-nav-menu .mega-menu.mega-horizontal li li.menu-item > a {color: <?php echo $current_colors['custom-mega-submenu-item-font-color']; ?>;}
.mx-nav-menu .mega-menu.mega-horizontal li.menu-item > a:hover {color: <?php echo $current_colors['custom-mega-menu-item-hover-font-color']; ?>;}
.mx-nav-menu .mega-menu.mega-horizontal li li.menu-item > a:hover {color: <?php echo $current_colors['custom-mega-submenu-item-hover-font-color']; ?>;}

.mx-nav-menu .mega-menu.mega-horizontal > ul {background: <?php echo $current_colors['custom-mega-menu-background-color']; ?>;border: 1px solid <?php echo $current_colors['custom-mega-menu-border-color']; ?>;}
.mx-nav-menu .mega-menu.mega-horizontal > ul > li > a {border-bottom: <?php echo $current_colors['custom-mega-menu-item-border-bottom-color']; ?> solid 1px;}

.mx-nav-menu .mega-menu.mega-vertical > ul {border: 1px solid <?php echo $current_colors['custom-mega-menu-ver-border-color']; ?>;}

.mx-nav-right-container > ul > li:hover > a {background:<?php echo $current_colors['custom-menu-item-hover-color']; ?>;}

.site-header-style-2 .mx-nav-menu > li > ul, .site-header-style-2 .mx-nav-menu > li > ul ul.sub-menu {border: 1px solid <?php echo $current_colors['custom-submenu-item-border-color']; ?>;}
.site-header-style-2 .mx-nav-menu > li > ul li.menu-item {border-bottom: 1px solid <?php echo $current_colors['custom-submenu-item-border-color']; ?>;}

.site-header-style-2 .mx-nav-menu > li.current-menu-item > a, .site-header-style-2 .mx-nav-menu > li.current-menu-ancestor > a {
color: <?php echo $current_colors['custom-menu-item-hover-font-color']; ?>;
}
.site-header-style-2 .mx-nav-menu > li:hover > a {background: <?php echo $current_colors['custom-menu-item-hover-color']; ?>;color: <?php echo $current_colors['custom-menu-item-hover-font-color']; ?>;}

.site-header-style-2 .mx-nav-menu > li > ul li.menu-item > a:hover {color: <?php echo $current_colors['custom-submenu-item-hover-font-color']; ?>; background: <?php echo $current_colors['custom-submenu-item-bg-hover-color']; ?>;}

.site-header-style-3 #mx-nav {border-top: 1px <?php echo $current_colors['custom-menu-border-top-color']; ?> solid;border-bottom: 1px <?php echo $current_colors['custom-menu-border-bottom-color']; ?> solid;}

.site-header-style-3 .mx-nav-menu > li.current-menu-item > a, .site-header-style-3 .mx-nav-menu > li.current-menu-ancestor > a {
border-bottom: <?php echo $current_colors['custom-menu-item-hover-color']; ?> 2px solid;color: <?php echo $current_colors['custom-menu-item-hover-font-color']; ?>;}

.site-header-style-3 .mx-nav-menu > li:hover > a {border-bottom: <?php echo $current_colors['custom-menu-item-hover-color']; ?> 2px solid;color: <?php echo $current_colors['custom-menu-item-hover-font-color']; ?>;}
.site-header-style-3 .mx-nav-menu > li > ul li.menu-item:first-child {border-top: 2px solid <?php echo $current_colors['custom-menu-item-hover-color']; ?>;}
.site-header-style-3 .mx-nav-menu .mega-menu.mega-horizontal > ul {border-top: 2px solid <?php echo $current_colors['custom-menu-item-hover-color']; ?>;}
.site-header-style-4 .mx-nav-menu > li.current-menu-item > a,
.site-header-style-4 .mx-nav-menu > li.current-menu-ancestor > a {background: <?php echo $current_colors['custom-menu-item-hover-color']; ?>;color: <?php echo $current_colors['custom-menu-item-hover-font-color']; ?>;}

.site-header-style-4 .mx-nav-menu > li:hover > a {background: <?php echo $current_colors['custom-menu-item-hover-color']; ?>;color: <?php echo $current_colors['custom-menu-item-hover-font-color']; ?>;}
.site-header-style-4 .mx-nav-menu ul.sub-menu {border-top: 2px solid <?php echo $current_colors['custom-menu-item-hover-color']; ?>;}
.site-header-style-4 .mx-header-right-list > li:hover > a {background: <?php echo $current_colors['theme-color']; ?>;border: 1px solid <?php echo $current_colors['theme-color']; ?>;}
.site-header-style-5 #mx-nav {border-top: 1px <?php echo $current_colors['custom-menu-border-top-color']; ?> solid;border-bottom: 2px <?php echo $current_colors['custom-menu-border-bottom-color']; ?> solid;background: <?php echo $current_colors['custom-menu-bg-color']; ?>;}
.site-header-style-5 .mx-nav-menu > li.current-menu-item > a, 
.site-header-style-5 .mx-nav-menu > li.current-menu-ancestor > a {
	color: <?php echo $current_colors['custom-menu-item-hover-font-color']; ?>;border-bottom: <?php echo $current_colors['custom-menu-item-hover-color']; ?> 2px solid;}
.site-header-style-5 .mx-nav-menu > li:hover > a {color: <?php echo $current_colors['custom-menu-item-hover-font-color']; ?>;border-bottom: <?php echo $current_colors['custom-menu-item-hover-color']; ?> 2px solid;}

<?php
}else{
?>
/* header menu area */
#mx-nav {border-bottom: 4px <?php echo $current_colors['theme-color']; ?> solid;}

/* Nav Menu */
.mx-nav-menu > li.current-menu-item > a, .mx-nav-menu > li.current-menu-ancestor > a {border-top: <?php echo $current_colors['theme-color']; ?> 2px solid;}
.mx-nav-menu > li:hover > a {border-top: <?php echo $current_colors['theme-color']; ?> 2px solid;background: <?php echo $current_colors['theme-color']; ?>;}

/*.mega vertical*/
.mx-nav-menu .mega-menu.mega-vertical > ul{border: 1px solid <?php echo $current_colors['theme-color']; ?>;}
.mx-nav-menu .mega-menu.mega-vertical > ul > li > a:after {border-left: 2px solid <?php echo $current_colors['theme-color']; ?>;
	border-right: 2px solid <?php echo $current_colors['theme-color']; ?>;
	border-bottom: 2px solid <?php echo $current_colors['theme-color']; ?>;
	border-top: 2px solid <?php echo $current_colors['theme-color']; ?>;
}
.mx-nav-right-container > ul > li:hover > a {background:<?php echo $current_colors['theme-color']; ?>;}

/* = Site Header Style 2
-------------------------------------------------------------- */
.site-header-style-2 .mx-nav-menu > li:hover > a {color: <?php echo $current_colors['theme-color']; ?>;}
.site-header-style-2 .mx-nav-menu > li.current-menu-item > a, 
.site-header-style-2 .mx-nav-menu > li.current-menu-ancestor > a {color: <?php echo $current_colors['theme-color']; ?>;}
.site-header-style-2 .mx-search-container > ul > li.mx-cart-list > a {background:<?php echo $current_colors['theme-color']; ?>;}

/* = Site Header Style 3
-------------------------------------------------------------- */

.site-header-style-3 .mx-nav-menu > li.current-menu-item > a, .site-header-style-3 .mx-nav-menu > li.current-menu-ancestor > a {
	border-bottom: <?php echo $current_colors['theme-color']; ?> 2px solid;}
.site-header-style-3 .mx-nav-menu > li:hover > a {border-bottom: <?php echo $current_colors['theme-color']; ?> 2px solid;color:<?php echo $current_colors['theme-color']; ?>;}
.site-header-style-3 .mx-header-right > ul > li.mx-cart-list > a {background: <?php echo $current_colors['theme-color']; ?>;}
.site-header-style-3 .mx-nav-menu > li > ul li.menu-item:first-child {border-top:2px solid <?php echo $current_colors['theme-color']; ?>;}
.site-header-style-3 .mx-nav-menu .mega-menu.mega-horizontal > ul {border-top: 2px solid <?php echo $current_colors['theme-color']; ?>;}

/* = Site Header Style 4
-------------------------------------------------------------- */
.site-header-style-4 .mx-nav-menu > li.current-menu-item > a,
.site-header-style-4 .mx-nav-menu > li.current-menu-ancestor > a {background: <?php echo $current_colors['theme-color']; ?>;}
.site-header-style-4 .mx-nav-menu > li:hover > a {background: <?php echo $current_colors['theme-color']; ?>;}
.site-header-style-4 .mx-nav-menu ul.sub-menu {border-top: 2px solid <?php echo $current_colors['theme-color']; ?>;}
.site-header-style-4 .mx-header-right-list > li:hover > a {background: <?php echo $current_colors['theme-color']; ?>;border: 1px solid <?php echo $current_colors['theme-color']; ?>;}

/* = Site Header Style 5
-------------------------------------------------------------- */
.site-header-style-5 .mx-nav-menu > li.current-menu-item > a, 
.site-header-style-5 .mx-nav-menu > li.current-menu-ancestor > a {
	color: <?php echo $current_colors['theme-color']; ?>;border-bottom: <?php echo $current_colors['theme-color']; ?> 2px solid;}
.site-header-style-5 .mx-nav-menu > li:hover > a {color: <?php echo $current_colors['theme-color']; ?>;border-bottom: <?php echo $current_colors['theme-color']; ?> 2px solid;}

<?php } ?>
#site-content-header .title {color: <?php echo $current_colors['custom-page-title-color']; ?>;}

#site-footer-bottom a {color:<?php echo $current_colors['custom-footer-a-color']; ?>;}
#site-footer-bottom a:hover {color:<?php echo $current_colors['custom-footer-a-hover-color']; ?>;}

#back-top:hover {background:<?php echo $current_colors['theme-color']; ?>;}
.post-entry .post-date-type .post-type {background: <?php echo $current_colors['theme-color']; ?>;}
.post-tip .bg {background: <?php echo $current_colors['theme-color']; ?>;}
.post-quote {background: <?php echo $current_colors['theme-color']; ?>;}
.single-post-date-type .post-type {background: <?php echo $current_colors['theme-color']; ?>;}
.comment-list .comment-item .comment-content a {color:<?php echo $current_colors['theme-color']; ?>;}
.comment-list .comment-item .comment-content a:hover {color:<?php echo $current_colors['custom-theme-btn-hover-color']; ?>;}
.post-ajax-element.blog-timeline-style-1 .post-timeline-element-container .post-type {background: <?php echo $current_colors['theme-color']; ?>;}
.post-ajax-element.blog-timeline-style-2 .post-timeline-element-container .post-type {background: <?php echo $current_colors['theme-color']; ?>;}
.shortcode-post-entry.blog-shortcode-style-3 .entry-date {background: <?php echo $current_colors['theme-color']; ?>;}

/* portfolio */
.portfolio-filters-cats li a.active {background:<?php echo $current_colors['theme-color']; ?>;}
.portfolio-element.portfolio-style-2:hover .portfolio-element-container {border-bottom: 1px solid <?php echo $current_colors['theme-color']; ?>;}
.single-portfolio-metas {border-top: 2px solid <?php echo $current_colors['theme-color']; ?>;}
.single-portfolio-metas li a {color:<?php echo $current_colors['theme-color']; ?>;}
.single-portfolio-metas li a:hover {color:<?php echo $current_colors['custom-theme-btn-hover-color']; ?>;}

/* footer */
.site-footer-widget a {color: <?php echo $current_colors['custom-footer-widget-a-color']; ?>;}
.site-footer-widget a:hover {color:<?php echo $current_colors['custom-footer-widget-a-hover-color']; ?>;}

/* sidebar */
.widget_product_search #searchform #searchsubmit {background: <?php echo $current_colors['theme-color']; ?>;}
.sidebar-portfolio-recent.icon-style .post-type {background: <?php echo $current_colors['theme-color']; ?>;}
.sidebar-blog-recent.icon-style .post-type {background: <?php echo $current_colors['theme-color']; ?>;}
.sidebar-blog-recent .entry-meta a {color:#888;}
.sidebar-blog-recent .entry-meta a:hover {color:<?php echo $current_colors['theme-color']; ?>;}

/* shortcode */
.mx-content .title span {color:<?php echo $current_colors['theme-color']; ?>;}
.btn:hover, .btn:focus {color: <?php echo $current_colors['theme-color']; ?>;}
.btn.btn-theme {background:<?php echo $current_colors['theme-color']; ?>;}
.btn.btn-theme:hover {background:<?php echo $current_colors['custom-theme-btn-hover-color']; ?>;}

.map-info-window.black a {color:#fff;}
.map-info-window.black a:hover {color:<?php echo $current_colors['theme-color']; ?>;}

.skills .skill-cover {background: <?php echo $current_colors['theme-color']; ?>;}

.bullets.theme li > span {background: <?php echo $current_colors['theme-color']; ?>;}

.mx-accordion .accordion-icon {background: <?php echo $current_colors['theme-color']; ?>;}

.flexslider.mx-fl .flex-direction-nav a:hover {background-color: <?php echo $current_colors['theme-color']; ?>;}
.flexslider.mx-fl.mx-fl-clean .flex-control-nav li .flex-active {background: <?php echo $current_colors['theme-color']; ?>;}

.tabs .tabs-nav li.current {border-top:1px <?php echo $current_colors['theme-color']; ?> solid;}
.sidetabs.left .sidetabs-nav li.current {border-right: 1px solid <?php echo $current_colors['theme-color']; ?>;}
.sidetabs.right .sidetabs-nav li.current {border-left: 1px solid <?php echo $current_colors['theme-color']; ?>;}

.timeline.timeline-style-1 .timeline-date span {background: <?php echo $current_colors['theme-color']; ?>;}
.timeline.timeline-style-1 .timeline-date span:after {border-left: 7px solid <?php echo $current_colors['theme-color']; ?>;}
.timeline .features .timeline-c-line {background: <?php echo $current_colors['theme-color']; ?>;}
.timeline .start .timeline-c-line {background: <?php echo $current_colors['theme-color']; ?>;}
.timeline .end .timeline-c-line {border: 5px solid <?php echo $current_colors['theme-color']; ?>;}
.timeline.timeline-style-3 .timeline-icon span {background: <?php echo $current_colors['theme-color']; ?>;}

.features.bg:hover {background:<?php echo $current_colors['theme-color']; ?>;}
.features .feature-icon {color: <?php echo $current_colors['theme-color']; ?>;}
.features.circle .feature-icon,.features.rect .feature-icon {border: 2px solid <?php echo $current_colors['theme-color']; ?>;}
.features.circle:hover .feature-icon,.features.rect:hover .feature-icon {background: <?php echo $current_colors['theme-color']; ?>;}
.features.center.cover:hover {border: 1px solid <?php echo $current_colors['theme-color']; ?>;}

.totalcount.totalcount-style-2 .totalcount-number {border: 4px solid <?php echo $current_colors['theme-color']; ?>;}
.totalcount.totalcount-style-2 .totalnumber {color: <?php echo $current_colors['theme-color']; ?>;}

.mx-pagenav li a.current,
.mx-pagenav li a:hover {background: <?php echo $current_colors['theme-color']; ?>;}
.mx-pagenav.black li a.current, .mx-pagenav.black li a:hover {background: <?php echo $current_colors['theme-color']; ?>;}

.wpcf7 .wpcf7-submit {background: <?php echo $current_colors['theme-color']; ?>;}
.wpcf7 .wpcf7-submit:hover {background:<?php echo $current_colors['custom-theme-btn-hover-color']; ?>;}


.woocommerce .star-rating {
	color: <?php echo $current_colors['theme-color']; ?>;
}


.woocommerce .thumbnails-ul li a.current, .woocommerce-page .thumbnails-ul li a.current {
	border: 1px solid <?php echo $current_colors['theme-color']; ?>;
}

.woocommerce .thumbnails-ul li a.current:before, .woocommerce-page .thumbnails-ul li a.current:before {
	border-bottom: 6px solid <?php echo $current_colors['theme-color']; ?>;
}

.woocommerce div.product p.price, .woocommerce div.product span.price {
	color: <?php echo $current_colors['theme-color']; ?>;
}

.woocommerce-ordering-filter .orderby-list li.select .fa-check{display:inline-block;color: <?php echo $current_colors['theme-color']; ?>;}

.woocommerce-ordering-listorder a.select {background: <?php echo $current_colors['theme-color']; ?>;
border: 1px solid <?php echo $current_colors['theme-color']; ?>;}

.woocommerce ul.products li.product .price {
	color: <?php echo $current_colors['theme-color']; ?>;
}

.woocommerce #respond input#submit:hover,
.woocommerce a.button:hover,
.woocommerce button.button:hover,
.woocommerce input.button:hover {
	background-color: <?php echo $current_colors['theme-color']; ?>;
}

.woocommerce #respond input#submit.alt,
.woocommerce a.button.alt,
.woocommerce button.button.alt,
.woocommerce input.button.alt {
	background-color: <?php echo $current_colors['theme-color']; ?>;
}


.woocommerce .widget_price_filter .ui-slider .ui-slider-handle {
	background-color: <?php echo $current_colors['theme-color']; ?>;
}


.woocommerce ul.product_list_widget li ins .amount {
	color: <?php echo $current_colors['theme-color']; ?>;
}

.woocommerce div.product .woocommerce-tabs ul.tabs li.active {
	border-top: 1px solid <?php echo $current_colors['theme-color']; ?>;
}

/* cart list */
.cart-list_product-quantity .amount {color:#cc3333;}
.cart-list_total .total .amount {color: #cc3333;font-size: 26px;}
<?php } ?>
/* 	----------------------------------------------------------------------------------------------	
										RETINA																												
	----------------------------------------------------------------------------------------------	*/
@media only screen and (-Webkit-min-device-pixel-ratio: 1.5),
only screen and (-moz-min-device-pixel-ratio: 1.5),
only screen and (-o-min-device-pixel-ratio: 3/2),
only screen and (min-device-pixel-ratio: 1.5) {
<?php if(mx_get_options_key('custom-background-enable') == "on"){ 
/* body */
if(intval(mx_get_options_key('global-layout')) != 1) {mx_add_background_style('global','body.boxed-layout, body.fixed-layout', 0, true);}
/* header */
mx_add_background_style('global-header','#mx-header', 0, true);
/* title */
mx_add_background_style('global-title','#site-content-header', 0, true);
/* content */
mx_add_background_style('global-content','#page-content-wrap', 0, true);
/* footer */
mx_add_background_style('global-footer','#site-footer-widget', 0, true);
}?>
}