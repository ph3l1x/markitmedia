
<?php
wp_enqueue_script('jquery');
global $wp_scripts;

$effect_list = array("none", "bounce", "flash", "pulse", "rubberBand", "shake", "swing", "tada", "wobble", "bounceIn", "bounceInDown", "bounceInLeft", "bounceInRight", "bounceInUp", "bounceOut", "bounceOutDown", "bounceOutLeft", "bounceOutRight", "bounceOutUp", "fadeIn", "fadeInDown", "fadeInDownBig", "fadeInLeft", "fadeInLeftBig", "fadeInRight", "fadeInRightBig", "fadeInUp", "fadeInUpBig", "fadeOut", "fadeOutDown", "fadeOutDownBig", "fadeOutLeft", "fadeOutLeftBig", "fadeOutRight", "fadeOutRightBig", "fadeOutUp", "fadeOutUpBig", "flip", "flipInX", "flipInY", "flipOutX", "flipOutY", "lightSpeedIn", "lightSpeedOut", "rotateIn", "rotateInDownLeft", "rotateInDownRight", "rotateInUpLeft", "rotateInUpRight", "rotateOut", "rotateOutDownLeft", "rotateOutDownRight", "rotateOutUpLeft", "rotateOutUpRight", "hinge", "rollIn", "rollOut", "zoomIn", "zoomInDown", "zoomInLeft", "zoomInRight", "zoomInUp", "zoomOut", "zoomOutDown", "zoomOutLeft", "zoomOutRight", "zoomOutUp");

//input
function penguin_shortcode_input($name = '', $key = '', $desc = '', $default = ''){
	return '<div class="penguin-table-tr" data-type="input" data-key="'.$key.'">
				<div class="penguin-table-title">'.$name.'<div class="penguin-page-content-desc">'.$desc.'</div></div>
				<div class="penguin-table-content"><input class="penguin-input-text" value="'.$default.'" type="text"></div>
			</div>';
}

//number
function penguin_shortcode_number($name = '', $key = '', $desc = '', $default = ''){
	return '<div class="penguin-table-tr" data-type="input" data-key="'.$key.'">
				<div class="penguin-table-title">'.$name.'<div class="penguin-page-content-desc">'.$desc.'</div></div>
				<div class="penguin-table-content"><input class="penguin-input-text" value="'.$default.'" type="number"></div>
			</div>';
}

//select
function penguin_shortcode_select($name = '', $key = '', $desc = '', $options = array(), $default = ''){
	$output =  '<div class="penguin-table-tr" data-type="select" data-key="'.$key.'">
				<div class="penguin-table-title">'.$name.'<div class="penguin-page-content-desc">'.$desc.'</div></div>
				<div class="penguin-table-content"><select class="penguin-select">';
				foreach($options as $option){
					$output .=  '<option '.($default == $option ? 'selected' : '' ).' value='.$option.'>'.$option.'</option>';
				}
	$output .= '</select></div></div>';
	return $output;
}

//color
function penguin_shortcode_color($name = '', $key = '', $desc = '', $default = ''){
	if($default == ""){
		$default = '#f5f5f5';
	}
	$output =  '<div class="penguin-table-tr" data-type="color" data-key="'.$key.'">
				<div class="penguin-table-title">'.$name.'<div class="penguin-page-content-desc">'.$desc.'</div></div>
				<div class="penguin-table-content"><input class="color penguin-color-picker" value="'.$default.'"></div></div>';
	return $output;
}

//textarea
function penguin_shortcode_textarea($name = '', $key = '', $desc = '', $default = ''){
	$output =  '<div class="penguin-table-tr" data-type="textarea" data-key="'.$key.'">
				<div class="penguin-table-title">'.$name.'<div class="penguin-page-content-desc">'.$desc.'</div></div>
				<div class="penguin-table-content"><textarea class="penguin-textarea">'.$default.'</textarea></div></div>';
	return $output;
}


?>
<!DOCTYPE html>
	<head>
        <title>MX Theme Shortcodes</title>
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php echo get_option('blog_charset'); ?>" />
        <link rel='stylesheet' id='bootstrap-css'  href='<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.min.css' type='text/css' media='all' />
		<link rel='stylesheet' id='fontawesome-css'  href='<?php echo get_template_directory_uri(); ?>/fontawesome/css/font-awesome.min.css' type='text/css' media='all' />
        <link rel='stylesheet' id='penguinshortcodes-css'  href='<?php echo get_template_directory_uri() . '/inc/penguin/tinymce/penguinshortcodes_tinymce.css'; ?>' type='text/css' media='all' />
       	<script language="javascript" type="text/javascript" src="<?php echo site_url(); ?>/wp-includes/js/jquery/jquery.js"></script>
        <script language="javascript" type="text/javascript" src="<?php echo site_url(); ?>/wp-includes/js/tinymce/tiny_mce_popup.js"></script>
        <script language="javascript" type="text/javascript" src="<?php echo site_url(); ?>/wp-includes/js/tinymce/utils/form_utils.js"></script>
        <script language="javascript" type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.min.js'></script>
        <script language="javascript" type="text/javascript" src="<?php echo get_template_directory_uri() . '/inc/penguin/tinymce/jscolor.js'; ?>"></script>
        <script language="javascript" type="text/javascript" src="<?php echo get_template_directory_uri() . '/inc/penguin/tinymce/penguinshortcodes_tinymce.js'; ?>"></script>
        <base target="_self" />
    </head>
    <body id="link">
        <section>
            <div class="penguin-shortcode-header">
				<div class="penguin-shortcode-title"><?php _e("Current Element:", 'MX'); ?></div>
                <div class="penguin-shortcode-select">
                	<select id="shortcode-select">
                    	<option value="0"><?php _e("Choose Insert Shortcode", 'MX'); ?></option>
                        <optgroup label="Complex" >
                        <option value="101">Space</option>
                        <option value="102">Icon</option>
                        <option value="103">Title</option>
                        <option value="104">Content</option>
                        <option value="105">Button</option>
                        <option value="106">Alert</option>
                        <option value="107">Map</option>
                        <option value="108">Share</option>
                        <option value="109">Social</option>
                        <option value="110">Skills</option>
                        <option value="111">Bullets</option>
                        <option value="112">Dropcap</option>
                        <option value="113">Blockquote</option>
                        <option value="114">Accordion</option>
                        <option value="115">Toggle</option>
                        <option value="116">Testimonials</option>
                        <option value="117">FlexSlider</option>
                        <option value="118">Carousel</option>
                        <option value="119">Call to action</option>
                        <option value="120">Call to action bar</option>
                        <option value="121">PriceTable</option>
                        <option value="122">Tabs</option>
                        <option value="123">SideTabs</option>
                        <option value="124">TimeLine</option>
                        <option value="125">Features</option>
                        <option value="126">Services</option>
                        <option value="127">Total Count</option>
                        <option value="128">Page Navigation</option>
                        <option value="129">Team</option>
                        <option value="130">Clients</option>
                        </optgroup>
                        
                        <optgroup label="Media" >
                        <option value="201">Youtube</option>
                        <option value="202">Vimeo</option>
                        <option value="203">Soundcloud</option>
                        </optgroup>
                        
                        <optgroup label="Module" >
                        <option value="301">Blog List</option>
                        <option value="302">Blog Ajax List</option>
                        <option value="303">Blog TimeLine List</option>
                        <option value="304">Portflio List</option>
                        <option value="305">Portflio Ajax List</option>
                        </optgroup>
                        
                        <optgroup label="Columns & Wide" >
                        <option value="401">Wide Background</option>
                        <option value="402">One</option>
                        <option value="403">Row</option>
                        <option value="404">Inner Row</option>
                        <option value="405">One Half</option>
                        <option value="406">One Third</option>
                        <option value="407">Two Third</option>
                        <option value="408">One Fourth</option>
                        <option value="409">Two Fourth</option>
                        <option value="410">Three Fourth</option>
                        </optgroup>
                    </select>
            	</div>
            </div>
            
            <div class="shortcodes-container">
                <div id="shortcodes-element-101" data-shortcode="space" class="shortcodes-element">
                	<?php 
					echo penguin_shortcode_select(__('Show line','MX'),'line','', array('yes','no'));
                	echo penguin_shortcode_select(__('Space size','MX'),'size','', array('normal','small','big'));
                    echo penguin_shortcode_select(__('Line style','MX'),'style','', array('solid','dashed')); 
					?>
                </div>
                
                <div id="shortcodes-element-102" data-shortcode="icon" class="shortcodes-element">
                	<?php 
					echo penguin_shortcode_input(__('Icon name','MX'),'icon_name',__('FontAwesome icon name e.g. fa-flag','MX'),'fa-flag');
                	echo penguin_shortcode_select(__('Icon size','MX'),'icon_size','', array('default', 'fa-large' , 'fa-2x', 'fa-3x', 'fa-4x' , 'fa-5x'));
                    echo penguin_shortcode_color(__('Icon color','MX'),'icon_color',__('Custom icon color.','MX'),'#cc3333');
                    echo penguin_shortcode_input(__('Icon style','MX'),'icon_style',__('Custom icon style.(Options)','MX'));
					?>
                </div>
              
            	<div id="shortcodes-element-103" data-shortcode="title" class="shortcodes-element">
                	<?php 
					echo penguin_shortcode_input(__('Class name','MX'),'class',__('Custom title class name.(Options)','MX'));
                    echo penguin_shortcode_select(__('Type','MX'),'type','', array('default','text','icon'));
                    echo penguin_shortcode_select(__('Align','MX'),'align','', array('left','center','right'));
                	echo penguin_shortcode_input(__('Text','MX'),'value',__('Title text value.','MX'),'Title');
                    echo penguin_shortcode_select(__('Text size','MX'),'size','', array('h1','h2','h3','h4','h5','h6'),'h3');
                    echo penguin_shortcode_select(__('Text uppercase','MX'),'uppercase','', array('yes','no'));
                    echo penguin_shortcode_select(__('Text bold','MX'),'bold','', array('yes','no'));
                    echo penguin_shortcode_input(__('Icon name','MX'),'icon',__('FontAwesome icon name e.g. fa-flag (Options)','MX'),'fa-flag');
                    echo penguin_shortcode_select(__('Icon size','MX'),'icon_size','', array('default','min','big'));
                	echo penguin_shortcode_select(__('Show text background','MX'),'show_bg','', array('yes','no'));
                    echo penguin_shortcode_select(__('Text background radius','MX'),'radius','', array('yes','no'),'no');
                	echo penguin_shortcode_select(__('Show line','MX'),'line','', array('yes','no'));
                    echo penguin_shortcode_select(__('Line align','MX'),'line_align','', array('center','top','bottom'));
                    echo penguin_shortcode_color(__('Text or Icon color','MX'),'color','','#666666');
                    echo penguin_shortcode_color(__('Background color','MX'),'bg_color','','#ffffff');
                    echo penguin_shortcode_color(__('Line color','MX'),'line_color','','#e8e8e8');
                    echo penguin_shortcode_color(__('Icon type text color ','MX'),'extra_color','','#666666');
                    echo penguin_shortcode_input(__('Style','MX'),'style',__("Icon or Text Style CSS",'MX'));
					?>
                </div>
                
                <div id="shortcodes-element-104" data-shortcode="content" class="shortcodes-element">
                	<?php 
					echo penguin_shortcode_input(__('ID','MX'),'id',__('Content area ID. (options)','MX'));
                    echo penguin_shortcode_input(__('Class name','MX'),'class',__('Custom content area class name.(Options)','MX'));
                	echo penguin_shortcode_select(__('Content align','MX'),'align','', array('left','center','right'));
                    echo penguin_shortcode_textarea(__('Content','MX'),'content','',__('Input content.','MX')); 
					?>
                </div>
                
                <div id="shortcodes-element-105" data-shortcode="button" class="shortcodes-element">
                	<?php 
					echo penguin_shortcode_input(__('Text','MX'),'text');
                    echo penguin_shortcode_select(__('Type','MX'),'type','', array('btn-theme','btn-custom'));
					echo penguin_shortcode_select(__('Size','MX'),'size','', array('default', 'btn-lg' , 'btn-sm' , 'btn-xs'));
                    echo penguin_shortcode_input(__('Link','MX'),'url','','#');
                    echo penguin_shortcode_select(__('Link target','MX'),'target','', array('_self', '_blank'),'_blank');
					echo penguin_shortcode_input(__('Icon name','MX'),'icon',__('FontAwesome icon name e.g. fa-flag (Options)','MX'));
                    echo penguin_shortcode_color(__('Background color','MX'),'bg_color','','#cc3333');
                    echo penguin_shortcode_color(__('Background hover color','MX'),'bg_hover_color','','#242424');
					echo penguin_shortcode_color(__('Font color','MX'),'txt_color','','#ffffff');
                    echo penguin_shortcode_color(__('Font hover color','MX'),'txt_hover_color','','#ffffff');
					?>
                </div>
                
                <div id="shortcodes-element-106" data-shortcode="alert" class="shortcodes-element">
                	<?php 
                    echo penguin_shortcode_select(__('Alert Type','MX'),'type','', array('success' , 'danger' , 'error' , 'info'));
					echo penguin_shortcode_select(__('Alert Message Close','MX'),'close','', array('yes', 'no'));
					echo penguin_shortcode_textarea(__('Content','MX'),'content','',__('Input content.','MX')); 
					?>
                </div>
                
                <div id="shortcodes-element-107" data-shortcode="map" class="shortcodes-element">
                	<?php 
					echo penguin_shortcode_input(__('LatLng','MX'),'latlng',__("The map LatLng value from google map.e.g. 36.597889,-86.234436",'MX'));
					echo penguin_shortcode_input(__('Map width','MX'),'width','','100%');
					echo penguin_shortcode_input(__('Map height','MX'),'height','','300');
					echo penguin_shortcode_number(__('Map Zoom','MX'),'zoom','','13');
                    echo penguin_shortcode_select(__('Draggable','MX'),'draggable','', array('yes' , 'no'));
					echo penguin_shortcode_select(__('Scroll Wheel','MX'),'scrollwheel','', array('yes', 'no'));
					echo penguin_shortcode_select(__('Show Marker','MX'),'show_marker','', array('yes', 'no'));
					echo penguin_shortcode_select(__('Show Address Information','MX'),'show_info',__("The map show info box of address.",'MX'), array('yes', 'no'));
					echo penguin_shortcode_select(__('Information Theme','MX'),'theme','', array('default' , 'black', 'white'));
					echo penguin_shortcode_number(__('Information Width','MX'),'info_width',__("The map info address box width.",'MX'),'260');
					
					echo penguin_shortcode_textarea(__('Content','MX'),'content','',__('Input address content.','MX')); 
					?>
                </div>
                
                <div id="shortcodes-element-108" data-shortcode="share" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_input(__('Socials','MX'),'type',__("The need show socials account use ',' e.g. twitter,facebook(Options)",'MX'));
					echo penguin_shortcode_input(__('Page Title','MX'),'title');
					echo penguin_shortcode_input(__('Page URL','MX'),'link');
					?>
                </div>
                
                <div id="shortcodes-element-109" data-shortcode="social" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_color(__('Background color','MX'),'bg_color','','#e8e8e8');
					echo penguin_shortcode_select(__('Show Circle Style','MX'),'circle','', array('yes', 'no'),'no');
					echo penguin_shortcode_select(__('Show Tooltip','MX'),'tooltip','', array('yes', 'no'),'no');
					echo penguin_shortcode_select(__('Tooltip Placement','MX'),'tooltip_placement','', array('left','right','top','bottom'),'top');
					?>
					<div data-shortcode="social_item" class="shortcodes-child">
                    	<h3><?php _e('Social Item','MX'); ?></h3>
                    	<button class="btn btn-warning shortcodes-child-add"><i class="fa fa-plus"></i></button>
						<div class="shortcodes-child-element">
                        	<?php
							echo penguin_shortcode_select(__('Social type','MX'),'type','',array('twitter','facebook','google-plus','dribbble','pinterest','flickr','skype','youtube','vimeo','linkedin', 'digg','deviantart','behance','forrst','lastfm','xing','instagram','stumbleupon','picasa','email','rss'));
							echo penguin_shortcode_input(__('Title','MX'),'title');
							echo penguin_shortcode_input(__('Link','MX'),'link');
							echo penguin_shortcode_select(__('Link target','MX'),'target','', array('_self', '_blank'),'_blank');
							?>
						</div>
					</div>
                </div>
                
                <div id="shortcodes-element-110" data-shortcode="skills" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_select(__('Style','MX'),'style','', array('1', '2'));
					echo penguin_shortcode_select(__('Border Circle Style','MX'),'circle','', array('yes', 'no'),'no');
					?>
                    <div data-shortcode="skill" class="shortcodes-child">
                    	<h3><?php _e('Skill Item','MX'); ?></h3>
                        <button class="btn btn-warning shortcodes-child-add"><i class="fa fa-plus"></i></button>
                        <div class="shortcodes-child-element">
                        	<?php
							echo penguin_shortcode_input(__('Title','MX'),'name',__('Skill Name','MX'));
							echo penguin_shortcode_input(__('Percent','MX'),'percent','','50%');
							echo penguin_shortcode_input(__('Custom Text','MX'),'text', __('Custom text replace percent number (Options)','MX'));
							echo penguin_shortcode_color(__('Progress color','MX'),'cover_color','','#cc3333');
							echo penguin_shortcode_color(__('Background color','MX'),'bg_color','','#f8f8f8');
							echo penguin_shortcode_color(__('Title color','MX'),'color','','#333333');
							echo penguin_shortcode_color(__('Percent color','MX'),'percent_color','','#333333');
							?>
						</div>
                    </div>
                </div>
                
                <div id="shortcodes-element-111" data-shortcode="bullets" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_select(__('Type','MX'),'type','', array('none', 'number', 'error', 'theme', 'custom') );
					echo penguin_shortcode_select(__('Effect','MX'),'effect','', $effect_list, 'none');
					echo penguin_shortcode_color(__('Bullets color','MX'),'color','','#000000');
					echo penguin_shortcode_color(__('Text color','MX'),'txt_color','','#333333');
					?>
                    <div data-shortcode="bullet" class="shortcodes-child">
                    	<h3><?php _e('Bullet Item','MX'); ?></h3>
                        <button class="btn btn-warning shortcodes-child-add"><i class="fa fa-plus"></i></button>
                        <div class="shortcodes-child-element">
                        	<?php
							echo penguin_shortcode_input(__('Icon name','MX'),'icon',__('FontAwesome icon name e.g. fa-flag (Options)','MX'));
							echo penguin_shortcode_textarea(__('Content','MX'),'content','',__('Input content.','MX')); 
							?>
						</div>
                    </div>
                </div>
                
                <div id="shortcodes-element-112" data-shortcode="dropcap" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_input(__('Text','MX'),'text');
					echo penguin_shortcode_select(__('Type','MX'),'type','', array('default', 'text') );
					echo penguin_shortcode_color(__('Text color','MX'),'txt_color','','#ffffff');
					echo penguin_shortcode_color(__('Background color','MX'),'bg_color','','#242424');
					?>
                </div>
                
                <div id="shortcodes-element-113" data-shortcode="blockquote" class="shortcodes-element">
                	<?php
		  			echo penguin_shortcode_color(__('Text color','MX'),'color','','#666666');
					echo penguin_shortcode_color(__('Border color','MX'),'border_color','','#eeeeee');
					echo penguin_shortcode_color(__('Background color','MX'),'bg_color','','#ffffff');
					echo penguin_shortcode_textarea(__('Content','MX'),'content','',__('Input content.','MX')); 
					?>
                </div>
                
                <div id="shortcodes-element-114" data-shortcode="accordion" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_select(__('Effect','MX'),'effect','', $effect_list, 'none');
					?>
                    <div data-shortcode="accordion_item" class="shortcodes-child">
                    	<h3><?php _e('Accordion Item','MX'); ?></h3>
                        <button class="btn btn-warning shortcodes-child-add"><i class="fa fa-plus"></i></button>
                        <div class="shortcodes-child-element">
                        	<?php
							echo penguin_shortcode_input(__('Title','MX'),'title');
							echo penguin_shortcode_select(__('Open','MX'),'open','', array('yes', 'no'),'no');
							echo penguin_shortcode_color(__('Icon Background color','MX'),'bg_color','','#cc3333');
							echo penguin_shortcode_textarea(__('Content','MX'),'content','',__('Input content.','MX')); 
							?>
						</div>
                    </div>
                </div>
                
                <div id="shortcodes-element-115" data-shortcode="toggle" class="shortcodes-element">
                	<?php
		  			echo penguin_shortcode_input(__('Title','MX'),'title');
					echo penguin_shortcode_select(__('Open','MX'),'open','', array('yes', 'no'),'no');
					echo penguin_shortcode_color(__('Icon Background color','MX'),'bg_color','','#cc3333');
					echo penguin_shortcode_select(__('Effect','MX'),'effect','', $effect_list, 'none');
					echo penguin_shortcode_textarea(__('Content','MX'),'content','',__('Input content.','MX')); 
					?>
                </div>
                
                <div id="shortcodes-element-116" data-shortcode="testimonials" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_select(__('Type','MX'),'type','', array('default', 'wide','avatar'));
					echo penguin_shortcode_select(__('Auto Play','MX'),'autoplay','', array('yes', 'no'),'no');
					echo penguin_shortcode_number(__('Delay Time','MX'),'delay','','6000');
					echo penguin_shortcode_select(__('Show Nav Button','MX'),'show_nav','', array('yes', 'no'),'no');
					echo penguin_shortcode_select(__('Effect','MX'),'effect','', $effect_list, 'none');
					?>
                    <div data-shortcode="testimonials_item" class="shortcodes-child">
                    	<h3><?php _e('Testimonials Item','MX'); ?></h3>
                        <button class="btn btn-warning shortcodes-child-add"><i class="fa fa-plus"></i></button>
                        <div class="shortcodes-child-element">
                        	<?php
							echo penguin_shortcode_input(__('Name','MX'),'name');
							echo penguin_shortcode_input(__('Job','MX'),'job');
							echo penguin_shortcode_input(__('Image url','MX'),'img');
							echo penguin_shortcode_textarea(__('Content','MX'),'content','',__('Input content.','MX')); 
							?>
						</div>
                    </div>
                </div>
                
                <div id="shortcodes-element-117" data-shortcode="flexslider" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_select(__('Style','MX'),'style','', array('default', 'clean'));
					echo penguin_shortcode_select(__('Auto Play','MX'),'auto','', array('yes', 'no'),'no');
					echo penguin_shortcode_number(__('Delay Time','MX'),'delay','','6000');
					?>
                    <div data-shortcode="flexslider_item" class="shortcodes-child">
                    	<h3><?php _e('Flexslider Item','MX'); ?></h3>
                        <button class="btn btn-warning shortcodes-child-add"><i class="fa fa-plus"></i></button>
                        <div class="shortcodes-child-element">
                        	<?php
		  					echo penguin_shortcode_select(__('Type','MX'),'type','', array('image', 'video'));
		  					echo penguin_shortcode_input(__('Image url','MX'),'src');
							echo penguin_shortcode_input(__('Link','MX'),'link');
							echo penguin_shortcode_textarea(__('Content','MX'),'content','',__('Input video content when video type.','MX')); 
							?>
						</div>
                    </div>
                </div>
                
                <div id="shortcodes-element-118" data-shortcode="carousel" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_select(__('Auto Play','MX'),'auto','', array('yes', 'no'),'no');
					echo penguin_shortcode_number(__('Delay Time','MX'),'delay','','6000');
					?>
                    <div data-shortcode="carousel_item" class="shortcodes-child">
                    	<h3><?php _e('Carousel Item','MX'); ?></h3>
                        <button class="btn btn-warning shortcodes-child-add"><i class="fa fa-plus"></i></button>
                        <div class="shortcodes-child-element">
                        	<?php
		  					echo penguin_shortcode_input(__('Image url','MX'),'src');
							echo penguin_shortcode_textarea(__('Content','MX'),'content'); 
							?>
						</div>
                    </div>
                </div>
                
                <div id="shortcodes-element-119" data-shortcode="call_to_action" class="shortcodes-element">
                	<?php
		  			echo penguin_shortcode_input(__('Title','MX'),'title');
					echo penguin_shortcode_select(__('Size','MX'),'size','', array('normal', 'big'));
					echo penguin_shortcode_input(__('Button Title','MX'),'btn_title');
					echo penguin_shortcode_select(__('Button Type','MX'),'btn_type','', array('btn-theme','btn-custom'));
					echo penguin_shortcode_select(__('Button Size','MX'),'btn_size','', array('default', 'btn-lg' , 'btn-sm' , 'btn-xs'));
					echo penguin_shortcode_input(__('Link','MX'),'url','','#');
					echo penguin_shortcode_select(__('Link target','MX'),'target','', array('_self', '_blank'),'_blank');
					echo penguin_shortcode_color(__('Background color','MX'),'bg_color','','#cc3333');
                    echo penguin_shortcode_color(__('Background hover color','MX'),'bg_hover_color','','#242424');
					echo penguin_shortcode_color(__('Font color','MX'),'txt_color','','#ffffff');
                    echo penguin_shortcode_color(__('Font hover color','MX'),'txt_hover_color','','#ffffff');
					echo penguin_shortcode_select(__('Effect','MX'),'effect','', $effect_list, 'none');
					echo penguin_shortcode_textarea(__('Content','MX'),'content','',__('Input content.','MX')); 
					?>
                </div>
                
                <div id="shortcodes-element-200" data-shortcode="call_to_action_bar" class="shortcodes-element">
                	<?php
		  			echo penguin_shortcode_input(__('Title','MX'),'title');
					echo penguin_shortcode_select(__('Size','MX'),'size','', array('normal', 'big'));
					echo penguin_shortcode_input(__('Button Title','MX'),'btn_title');
					echo penguin_shortcode_select(__('Button Type','MX'),'btn_type','', array('btn-theme','btn-custom'));
					echo penguin_shortcode_select(__('Button Size','MX'),'btn_size','', array('default', 'btn-lg' , 'btn-sm' , 'btn-xs'));
					echo penguin_shortcode_input(__('Link','MX'),'url','','#');
					echo penguin_shortcode_select(__('Link target','MX'),'target','', array('_self', '_blank'),'_blank');
					echo penguin_shortcode_color(__('Background color','MX'),'bg_color','','#cc3333');
                    echo penguin_shortcode_color(__('Background hover color','MX'),'bg_hover_color','','#242424');
					echo penguin_shortcode_color(__('Font color','MX'),'txt_color','','#ffffff');
                    echo penguin_shortcode_color(__('Font hover color','MX'),'txt_hover_color','','#ffffff');
					echo penguin_shortcode_select(__('Effect','MX'),'effect','', $effect_list, 'none');
					echo penguin_shortcode_textarea(__('Content','MX'),'content','',__('Input content.','MX')); 
					?>
                </div>
                
                <div id="shortcodes-element-121" data-shortcode="price" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_select(__('Type','MX'),'type','', array('standard','free','recommend','custom'));
					echo penguin_shortcode_input(__('Title','MX'),'title');
					echo penguin_shortcode_input(__('Price','MX'),'price');
					echo penguin_shortcode_input(__('Plan','MX'),'plan');
					echo penguin_shortcode_color(__('Background color','MX'),'background_color','','#787878');
                    echo penguin_shortcode_color(__('Title background color','MX'),'title_bg_color','','#646464');
					echo penguin_shortcode_color(__('Content background color','MX'),'content_bg_color','','#F4F4F4');
					echo penguin_shortcode_select(__('Content align','MX'),'content_align','', array('left', 'center','right'),'center');
					echo penguin_shortcode_select(__('Effect','MX'),'effect','', $effect_list, 'none');
					?>
                    <div data-shortcode="price_item" class="shortcodes-child">
                    	<h3><?php _e('Price Item','MX'); ?></h3>
                        <button class="btn btn-warning shortcodes-child-add"><i class="fa fa-plus"></i></button>
                        <div class="shortcodes-child-element">
                        	<?php
		  					echo penguin_shortcode_select(__('Type','MX'),'type','', array('text','btn'));
		  					echo penguin_shortcode_input(__('Button text','MX'),'btn_text');
							echo penguin_shortcode_select(__('Button Size','MX'),'btn_size','', array('default', 'btn-lg' , 'btn-sm' , 'btn-xs'));
							echo penguin_shortcode_input(__('Link','MX'),'btn_url','','#');
							echo penguin_shortcode_select(__('Link target','MX'),'btn_target','', array('_self', '_blank'),'_blank');
							echo penguin_shortcode_color(__('Background color','MX'),'btn_bg_color','','#cc3333');
							echo penguin_shortcode_color(__('Background hover color','MX'),'btn_bg_hover_color','','#242424');
							echo penguin_shortcode_color(__('Font color','MX'),'btn_txt_color','','#ffffff');
							echo penguin_shortcode_color(__('Font hover color','MX'),'btn_txt_hover_color','','#ffffff');
							echo penguin_shortcode_textarea(__('Content','MX'),'content'); 
							?>
						</div>
                    </div>
                </div>
                
                <div id="shortcodes-element-122" data-shortcode="tabs" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_select(__('Effect','MX'),'effect','', $effect_list, 'none');
					?>
                    <div data-shortcode="tabs_item" class="shortcodes-child">
                    	<h3><?php _e('Tab Item','MX'); ?></h3>
                        <button class="btn btn-warning shortcodes-child-add"><i class="fa fa-plus"></i></button>
                        <div class="shortcodes-child-element">
                        	<?php
		  					echo penguin_shortcode_input(__('Title','MX'),'title');
							echo penguin_shortcode_input(__('Icon name','MX'),'icon',__('FontAwesome icon name e.g. fa-flag (Options)','MX'));
							echo penguin_shortcode_textarea(__('Content','MX'),'content'); 
							?>
						</div>
                    </div>
                </div>
                
                <div id="shortcodes-element-123" data-shortcode="sidetabs" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_select(__('Align','MX'),'align','', array('left','right'));
					echo penguin_shortcode_select(__('Effect','MX'),'effect','', $effect_list, 'none');
					?>
                    <div data-shortcode="sidetabs_item" class="shortcodes-child">
                    	<h3><?php _e('Sidetabs Item','MX'); ?></h3>
                        <button class="btn btn-warning shortcodes-child-add"><i class="fa fa-plus"></i></button>
                        <div class="shortcodes-child-element">
                        	<?php
		  					echo penguin_shortcode_input(__('Title','MX'),'title');
							echo penguin_shortcode_input(__('Icon name','MX'),'icon',__('FontAwesome icon name e.g. fa-flag (Options)','MX'));
							echo penguin_shortcode_textarea(__('Content','MX'),'content'); 
							?>
						</div>
                    </div>
                </div>
                
                <div id="shortcodes-element-124" data-shortcode="timeline" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_select(__('Style','MX'),'style','', array('1','2','3'));
					echo penguin_shortcode_select(__('Effect','MX'),'effect','', $effect_list, 'none');
					?>
                    <div data-shortcode="timeline_item" class="shortcodes-child">
                    	<h3><?php _e('Timeline Item','MX'); ?></h3>
                        <button class="btn btn-warning shortcodes-child-add"><i class="fa fa-plus"></i></button>
                        <div class="shortcodes-child-element">
                        	<?php
		  					echo penguin_shortcode_input(__('Title','MX'),'title');
							echo penguin_shortcode_input(__('Date','MX'),'date');
							echo penguin_shortcode_input(__('Link','MX'),'link');
							echo penguin_shortcode_select(__('Status','MX'),'status','', array('none','start','end','features'));
							echo penguin_shortcode_input(__('Icon name','MX'),'icon',__('FontAwesome icon name e.g. fa-flag (Options)','MX'));
							echo penguin_shortcode_textarea(__('Content','MX'),'content'); 
							?>
						</div>
                    </div>
                </div>
                
                <div id="shortcodes-element-125" data-shortcode="features" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_input(__('Title','MX'),'title');
					echo penguin_shortcode_select(__('Layout','MX'),'layout','', array('left', 'center'));
					echo penguin_shortcode_input(__('Style','MX'),'style',__('Can use circle/rect bg cover','MX'));
					echo penguin_shortcode_input(__('Icon name','MX'),'icon',__('FontAwesome icon name e.g. fa-flag','MX'));
					echo penguin_shortcode_input(__('Link','MX'),'link','','#');
					echo penguin_shortcode_select(__('Effect','MX'),'effect','', $effect_list, 'none');
					echo penguin_shortcode_textarea(__('Content','MX'),'content','',__('Input content.','MX')); 
					?>
                </div>
                
                <div id="shortcodes-element-126" data-shortcode="services" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_select(__('Border','MX'),'border','', array('yes', 'no'));
					echo penguin_shortcode_select(__('Effect','MX'),'effect','', $effect_list, 'none');
					?>
                    <div data-shortcode="services_item" class="shortcodes-child">
                    	<h3><?php _e('Services Item','MX'); ?></h3>
                        <button class="btn btn-warning shortcodes-child-add"><i class="fa fa-plus"></i></button>
                        <div class="shortcodes-child-element">
                        	<?php
							echo penguin_shortcode_input(__('Link','MX'),'link');
							echo penguin_shortcode_input(__('Icon name','MX'),'icon',__('FontAwesome icon name e.g. fa-flag (Options)','MX'));
							echo penguin_shortcode_textarea(__('Content','MX'),'content'); 
							?>
						</div>
                    </div>
                </div>
                
                <div id="shortcodes-element-127" data-shortcode="totalcount" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_select(__('Style','MX'),'style','', array('1', '2'));
					echo penguin_shortcode_input(__('Prefix','MX'),'prefix');
					echo penguin_shortcode_input(__('Suffix','MX'),'suffix');
					echo penguin_shortcode_input(__('Start','MX'),'start','','0');
					echo penguin_shortcode_input(__('Step','MX'),'step','','1');
					echo penguin_shortcode_input(__('End','MX'),'end','','10');
					echo penguin_shortcode_select(__('Align','MX'),'align','', array('left', 'center', 'row'));
					echo penguin_shortcode_color(__('Circle color','MX'),'color','','#cc3333');
					echo penguin_shortcode_select(__('Effect','MX'),'effect','', $effect_list, 'none');
					echo penguin_shortcode_textarea(__('Content','MX'),'content','',__('Input content.','MX')); 
					?>
                </div>
                
                <div id="shortcodes-element-128" data-shortcode="pagenav" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_select(__('Position','MX'),'position','', array('left', 'right','bottom'),'right');
					echo penguin_shortcode_select(__('Style','MX'),'style','', array('black', 'white'),'white');
					?>
                    <div data-shortcode="pagenav_item" class="shortcodes-child">
                    	<h3><?php _e('Page Nav Item','MX'); ?></h3>
                        <button class="btn btn-warning shortcodes-child-add"><i class="fa fa-plus"></i></button>
                        <div class="shortcodes-child-element">
                        	<?php
							echo penguin_shortcode_input(__('Title','MX'),'title');
							echo penguin_shortcode_input(__('Link','MX'),'link');
							?>
						</div>
                    </div>
                </div>
                
                <div id="shortcodes-element-129" data-shortcode="team" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_select(__('Style','MX'),'style','', array('default', '1', '2'));
					echo penguin_shortcode_input(__('Name','MX'),'name');
					echo penguin_shortcode_input(__('Job','MX'),'job');
					echo penguin_shortcode_input(__('Link','MX'),'src');
					echo penguin_shortcode_select(__('Style 1 show job','MX'),'showjob','', array('yes', 'no'));
					echo penguin_shortcode_select(__('Effect','MX'),'effect','', $effect_list, 'none');
					?>
                    <div data-shortcode="team_social" class="shortcodes-child">
                    	<h3><?php _e('Socials','MX'); ?></h3>
                        <button class="btn btn-warning shortcodes-child-add"><i class="fa fa-plus"></i></button>
                        <div class="shortcodes-child-element">
                        	<?php
							echo penguin_shortcode_input(__('Icon name','MX'),'icon',__('FontAwesome icon name e.g. fa-twitter','MX'));
							echo penguin_shortcode_input(__('Link','MX'),'link');
							echo penguin_shortcode_select(__('Link target','MX'),'target','', array('_self', '_blank'),'_blank');
							echo penguin_shortcode_textarea(__('Content','MX'),'content'); 
							?>
						</div>
                    </div>
                    <div data-shortcode="team_content" class="shortcodes-child">
                    	<h3><?php _e('Person Details','MX'); ?></h3>
                        <div class="shortcodes-child-element">
                        	<?php
							echo penguin_shortcode_textarea(__('Content','MX'),'content'); 
							?>
						</div>
                    </div>
                </div>
                
                <div id="shortcodes-element-130" data-shortcode="clients" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_select(__('Effect','MX'),'effect','', $effect_list, 'none');
					?>
                    <div data-shortcode="client" class="shortcodes-child">
                    	<h3><?php _e('Client','MX'); ?></h3>
                        <button class="btn btn-warning shortcodes-child-add"><i class="fa fa-plus"></i></button>
                        <div class="shortcodes-child-element">
                        	<?php
							echo penguin_shortcode_input(__('Image url','MX'),'img');
							echo penguin_shortcode_input(__('Link','MX'),'link');
							echo penguin_shortcode_input(__('Alt','MX'),'alt');
							?>
						</div>
                    </div>
                </div>
                
                
                <div id="shortcodes-element-201" data-shortcode="youtube" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_input(__('Youtube ID','MX'),'id',__("Enter video ID (eg.6htyfxPkYDU).",'MX'));
					echo penguin_shortcode_input(__('Width','MX'),'width','','100%');
					echo penguin_shortcode_input(__('Height','MX'),'height','','360');
					?>
                </div>
                
                <div id="shortcodes-element-202" data-shortcode="vimeo" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_input(__('Vimeo ID','MX'),'id',__("Enter video ID (eg.54578415).",'MX'));
					echo penguin_shortcode_input(__('Width','MX'),'width','','100%');
					echo penguin_shortcode_input(__('Height','MX'),'height','','360');
					?>
                </div>
                
                <div id="shortcodes-element-203" data-shortcode="soundcloud" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_input(__('Soundcloud URL','MX'),'url',__("Enter soundcloud url like http://api.soundcloud.com/tracks/38987054.",'MX'));
					echo penguin_shortcode_input(__('Width','MX'),'width','','100%');
					echo penguin_shortcode_input(__('Height','MX'),'height','','166');
					?>
                </div>
                
                <div id="shortcodes-element-301" data-shortcode="blog_list" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_number(__('Number','MX'),'number','','4');
					echo penguin_shortcode_select(__('Columns','MX'),'columns','',array('1','2','3','4'),'4');
					echo penguin_shortcode_select(__('Style','MX'),'style','',array('1','2','3','4','5'),'1');
					echo penguin_shortcode_select(__('Type','MX'),'type','',array('recent','featured','popular','related'),'recent');
					echo penguin_shortcode_input(__('Orderby','MX'),'orderby',__('(Options)','MX'));
					echo penguin_shortcode_input(__('Cats','MX'),'cat__in',__('(Options)','MX'));
					echo penguin_shortcode_input(__('Tags','MX'),'tag__in',__('(Options)','MX'));
					echo penguin_shortcode_input(__('Post in','MX'),'post__in',__('(Options)','MX'));
					echo penguin_shortcode_input(__('Post not in','MX'),'post__not_in',__('(Options)','MX'));
					echo penguin_shortcode_select(__('Don\' crop','MX'),'nocrop','', array('yes', 'no'),'no');
					echo penguin_shortcode_select(__('Effect','MX'),'effect','', $effect_list, 'none');
					?>
                </div>
                
                 <div id="shortcodes-element-302" data-shortcode="blog_ajax_list" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_number(__('Number','MX'),'number','','4');
					echo penguin_shortcode_select(__('Columns','MX'),'columns','',array('1','2','3','4'),'4');
					echo penguin_shortcode_select(__('Style','MX'),'style','',array('1','2'),'1');
					echo penguin_shortcode_input(__('Cats','MX'),'cat__in',__('(Options)','MX'));
					echo penguin_shortcode_input(__('Load page link','MX'),'nextpage_link',__('!Important, need page options like here.','MX'));
					echo penguin_shortcode_select(__('Auto load','MX'),'autoload','', array('yes', 'no'),'no');
					echo penguin_shortcode_select(__('Don\' crop','MX'),'nocrop','', array('yes', 'no'),'no');
					?>
                </div>
                
                <div id="shortcodes-element-303" data-shortcode="blog_timeline_list" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_number(__('Number','MX'),'number','','4');
					echo penguin_shortcode_select(__('Style','MX'),'columns','',array('1','2'),'1');
					echo penguin_shortcode_input(__('Cats','MX'),'cat__in',__('(Options)','MX'));
					echo penguin_shortcode_input(__('Load page link','MX'),'nextpage_link',__('!Important, need page options like here.','MX'));
					echo penguin_shortcode_select(__('Auto load','MX'),'autoload','', array('yes', 'no'),'no');
					echo penguin_shortcode_select(__('Don\' crop','MX'),'nocrop','', array('yes', 'no'),'no');
					?>
                </div>
                
                 <div id="shortcodes-element-304" data-shortcode="portfolio_list" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_number(__('Number','MX'),'number','','4');
					echo penguin_shortcode_select(__('Columns','MX'),'columns','',array('1','2','3','4'),'4');
					echo penguin_shortcode_select(__('Style','MX'),'style','',array('1','2','3','4','5','6','7','8'),'1');
					echo penguin_shortcode_select(__('Type','MX'),'type','',array('recent','featured','related'),'recent');
					echo penguin_shortcode_input(__('Orderby','MX'),'orderby',__('(Options)','MX'));
					echo penguin_shortcode_input(__('Cat slugs','MX'),'cat_slug_in',__('(Options)','MX'));
					echo penguin_shortcode_input(__('Tag slugs','MX'),'tag_slug_in',__('(Options)','MX'));
					echo penguin_shortcode_input(__('Post in','MX'),'post__in',__('(Options)','MX'));
					echo penguin_shortcode_input(__('Post not in','MX'),'post__not_in',__('(Options)','MX'));
					echo penguin_shortcode_select(__('Don\' crop','MX'),'nocrop','', array('yes', 'no'),'no');
					echo penguin_shortcode_select(__('Effect','MX'),'effect','', $effect_list, 'none');
					?>
                </div>
				
                <div id="shortcodes-element-305" data-shortcode="portfolio_ajax_list" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_number(__('Number','MX'),'number','','4');
					echo penguin_shortcode_select(__('Columns','MX'),'columns','',array('2','3','4'),'4');
					echo penguin_shortcode_select(__('Style','MX'),'style','',array('1','2','3','4','5','6','7','8'),'1');
					echo penguin_shortcode_input(__('Cat slugs','MX'),'cat_slug_in',__('(Options)','MX'));
					echo penguin_shortcode_input(__('Tag slugs','MX'),'tag_slug_in',__('(Options)','MX'));
					echo penguin_shortcode_input(__('Load page link','MX'),'nextpage_link',__('!Important, need page options like here.','MX'));
					echo penguin_shortcode_select(__('Auto load','MX'),'autoload','', array('yes', 'no'),'no');
					echo penguin_shortcode_select(__('Don\' crop','MX'),'nocrop','', array('yes', 'no'),'no');
					?>
                </div>
                
                <div id="shortcodes-element-401" data-shortcode="wide" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_input(__('ID','MX'),'id');
					echo penguin_shortcode_select(__('Class name','MX'),'class');
					echo penguin_shortcode_select(__('Style','MX'),'style');
					echo penguin_shortcode_textarea(__('Content','MX'),'content'); 
					?>
                </div>
                
                <div id="shortcodes-element-402" data-shortcode="one" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_input(__('ID','MX'),'id');
					echo penguin_shortcode_textarea(__('Content','MX'),'content'); 
					?>
                </div>
                
                <div id="shortcodes-element-403" data-shortcode="row" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_input(__('ID','MX'),'id');
					echo penguin_shortcode_textarea(__('Content','MX'),'content'); 
					?>
                </div>
                
                <div id="shortcodes-element-404" data-shortcode="inner_row" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_textarea(__('Content','MX'),'content'); 
					?>
                </div>
                
                <div id="shortcodes-element-405" data-shortcode="one_half" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_textarea(__('Content','MX'),'content'); 
					?>
                </div>
                
                <div id="shortcodes-element-406" data-shortcode="one_third" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_textarea(__('Content','MX'),'content'); 
					?>
                </div>
                
                <div id="shortcodes-element-407" data-shortcode="two_third" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_textarea(__('Content','MX'),'content'); 
					?>
                </div>
                
                <div id="shortcodes-element-408" data-shortcode="one_fourth" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_textarea(__('Content','MX'),'content'); 
					?>
                </div>
                
                <div id="shortcodes-element-409" data-shortcode="two_fourth" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_textarea(__('Content','MX'),'content'); 
					?>
                </div>
                
                <div id="shortcodes-element-410" data-shortcode="three_fourth" class="shortcodes-element">
                	<?php
					echo penguin_shortcode_textarea(__('Content','MX'),'content'); 
					?>
                </div>

            </div>
			
            <div>
                <div style="float: left">
                    <button class="btn btn-info" onClick="tinyMCEPopup.close();"><?php _e("Cancel", 'MX'); ?></button>
                </div>

                <div style="float: right">
                    <button type="submit" class="btn btn-success" onClick="insertpenguinshortcode();"><?php _e("Insert", 'MX'); ?></button>
                </div>
            </div>
        </section>
    </body>
</html>