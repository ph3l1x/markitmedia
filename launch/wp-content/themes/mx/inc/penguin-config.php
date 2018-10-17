<?php
/**
 * Penguin Framework Config for penguin framework.
 *
 * @package Penguin
 * @version 1.0
 */
	global $google_fonts, $options_custom_color;
	
	require_once("penguin/penguin.php");
	require_once("penguin/penguin-functions.php");
	
	$dir = get_template_directory_uri();
	
	/**
	 * Google Web Font now 676
	 * http://www.google.com/webfonts
	 * <link href='http://fonts.googleapis.com/css?family=...'rel='stylesheet' type='text/css'>
	 */
	$google_fonts =  'ABeeZee|Abel|Abril+Fatface|Aclonica|Acme|Actor|Adamina|Advent+Pro|Aguafina+Script|Akronim|Aladin|Aldrich|Alef|Alegreya|Alegreya+SC|Alegreya+Sans|Alegreya+Sans+SC|Alex+Brush|Alfa+Slab+One|Alice|Alike|Alike+Angular|Allan|Allerta|Allerta+Stencil|Allura|Almendra|Almendra+Display|Almendra+SC|Amarante|Amaranth|Amatic+SC|Amethysta|Amiri|Amita|Anaheim|Andada|Andika|Angkor|Annie+Use+Your+Telescope|Anonymous+Pro|Antic|Antic+Didone|Antic+Slab|Anton|Arapey|Arbutus|Arbutus+Slab|Architects+Daughter|Archivo+Black|Archivo+Narrow|Arimo|Arizonia|Armata|Artifika|Arvo|Arya|Asap|Asar|Asset|Astloch|Asul|Atomic+Age|Aubrey|Audiowide|Autour+One|Average|Average+Sans|Averia+Gruesa+Libre|Averia+Libre|Averia+Sans+Libre|Averia+Serif+Libre|Bad+Script|Balthazar|Bangers|Basic|Battambang|Baumans|Bayon|Belgrano|Belleza|BenchNine|Bentham|Berkshire+Swash|Bevan|Bigelow+Rules|Bigshot+One|Bilbo|Bilbo+Swash+Caps|Biryani|Bitter|Black+Ops+One|Bokor|Bonbon|Boogaloo|Bowlby+One|Bowlby+One+SC|Brawler|Bree+Serif|Bubblegum+Sans|Bubbler+One|Buda|Buenard|Butcherman|Butterfly+Kids|Cabin|Cabin+Condensed|Cabin+Sketch|Caesar+Dressing|Cagliostro|Calligraffitti|Cambay|Cambo|Candal|Cantarell|Cantata+One|Cantora+One|Capriola|Cardo|Carme|Carrois+Gothic|Carrois+Gothic+SC|Carter+One|Caudex|Cedarville+Cursive|Ceviche+One|Changa+One|Chango|Chau+Philomene+One|Chela+One|Chelsea+Market|Chenla|Cherry+Cream+Soda|Cherry+Swash|Chewy|Chicle|Chivo|Cinzel|Cinzel+Decorative|Clicker+Script|Coda|Coda+Caption|Codystar|Combo|Comfortaa|Coming+Soon|Concert+One|Condiment|Content|Contrail+One|Convergence|Cookie|Copse|Corben|Courgette|Cousine|Coustard|Covered+By+Your+Grace|Crafty+Girls|Creepster|Crete+Round|Crimson+Text|Croissant+One|Crushed|Cuprum|Cutive|Cutive+Mono|Damion|Dancing+Script|Dangrek|Dawning+of+a+New+Day|Days+One|Dekko|Delius|Delius+Swash+Caps|Delius+Unicase|Della+Respira|Denk+One|Devonshire|Dhurjati|Didact+Gothic|Diplomata|Diplomata+SC|Domine|Donegal+One|Doppio+One|Dorsa|Dosis|Dr+Sugiyama|Droid+Sans|Droid+Sans+Mono|Droid+Serif|Duru+Sans|Dynalight|EB+Garamond|Eagle+Lake|Eater|Economica|Eczar|Ek+Mukta|Electrolize|Elsie|Elsie+Swash+Caps|Emblema+One|Emilys+Candy|Engagement|Englebert|Enriqueta|Erica+One|Esteban|Euphoria+Script|Ewert|Exo|Exo+2|Expletus+Sans|Fanwood+Text|Fascinate|Fascinate+Inline|Faster+One|Fasthand|Fauna+One|Federant|Federo|Felipa|Fenix|Finger+Paint|Fira+Mono|Fira+Sans|Fjalla+One|Fjord+One|Flamenco|Flavors|Fondamento|Fontdiner+Swanky|Forum|Francois+One|Freckle+Face|Fredericka+the+Great|Fredoka+One|Freehand|Fresca|Frijole|Fruktur|Fugaz+One|GFS+Didot|GFS+Neohellenic|Gabriela|Gafata|Galdeano|Galindo|Gentium+Basic|Gentium+Book+Basic|Geo|Geostar|Geostar+Fill|Germania+One|Gidugu|Gilda+Display|Give+You+Glory|Glass+Antiqua|Glegoo|Gloria+Hallelujah|Goblin+One|Gochi+Hand|Gorditas|Goudy+Bookletter+1911|Graduate|Grand+Hotel|Gravitas+One|Great+Vibes|Griffy|Gruppo|Gudea|Gurajada|Habibi|Halant|Hammersmith+One|Hanalei|Hanalei+Fill|Handlee|Hanuman|Happy+Monkey|Headland+One|Henny+Penny|Herr+Von+Muellerhoff|Hind|Holtwood+One+SC|Homemade+Apple|Homenaje|IM+Fell+DW+Pica|IM+Fell+DW+Pica+SC|IM+Fell+Double+Pica|IM+Fell+Double+Pica+SC|IM+Fell+English|IM+Fell+English+SC|IM+Fell+French+Canon|IM+Fell+French+Canon+SC|IM+Fell+Great+Primer|IM+Fell+Great+Primer+SC|Iceberg|Iceland|Imprima|Inconsolata|Inder|Indie+Flower|Inika|Inknut+Antiqua|Irish+Grover|Istok+Web|Italiana|Italianno|Jacques+Francois|Jacques+Francois+Shadow|Jaldi|Jim+Nightshade|Jockey+One|Jolly+Lodger|Josefin+Sans|Josefin+Slab|Joti+One|Judson|Julee|Julius+Sans+One|Junge|Jura|Just+Another+Hand|Just+Me+Again+Down+Here|Kadwa|Kalam|Kameron|Kantumruy|Karla|Karma|Kaushan+Script|Kavoon|Kdam+Thmor|Keania+One|Kelly+Slab|Kenia|Khand|Khmer|Khula|Kite+One|Knewave|Kotta+One|Koulen|Kranky|Kreon|Kristi|Krona+One|Kurale|La+Belle+Aurore|Laila|Lakki+Reddy|Lancelot|Lateef|Lato|League+Script|Leckerli+One|Ledger|Lekton|Lemon|Libre+Baskerville|Life+Savers|Lilita+One|Lily+Script+One|Limelight|Linden+Hill|Lobster|Lobster+Two|Londrina+Outline|Londrina+Shadow|Londrina+Sketch|Londrina+Solid|Lora|Love+Ya+Like+A+Sister|Loved+by+the+King|Lovers+Quarrel|Luckiest+Guy|Lusitana|Lustria|Macondo|Macondo+Swash+Caps|Magra|Maiden+Orange|Mako|Mallanna|Mandali|Marcellus|Marcellus+SC|Marck+Script|Margarine|Marko+One|Marmelad|Martel|Martel+Sans|Marvel|Mate|Mate+SC|Maven+Pro|McLaren|Meddon|MedievalSharp|Medula+One|Megrim|Meie+Script|Merienda|Merienda+One|Merriweather|Merriweather+Sans|Metal|Metal+Mania|Metamorphous|Metrophobic|Michroma|Milonga|Miltonian|Miltonian+Tattoo|Miniver|Miss+Fajardose|Modak|Modern+Antiqua|Molengo|Molle|Monda|Monofett|Monoton|Monsieur+La+Doulaise|Montaga|Montez|Montserrat|Montserrat+Alternates|Montserrat+Subrayada|Moul|Moulpali|Mountains+of+Christmas|Mouse+Memoirs|Mr+Bedfort|Mr+Dafoe|Mr+De+Haviland|Mrs+Saint+Delafield|Mrs+Sheppards|Muli|Mystery+Quest|NTR|Neucha|Neuton|New+Rocker|News+Cycle|Niconne|Nixie+One|Nobile|Nokora|Norican|Nosifer|Nothing+You+Could+Do|Noticia+Text|Noto+Sans|Noto+Serif|Nova+Cut|Nova+Flat|Nova+Mono|Nova+Oval|Nova+Round|Nova+Script|Nova+Slim|Nova+Square|Numans|Nunito|Odor+Mean+Chey|Offside|Old+Standard+TT|Oldenburg|Oleo+Script|Oleo+Script+Swash+Caps|Open+Sans|Open+Sans+Condensed|Oranienbaum|Orbitron|Oregano|Orienta|Original+Surfer|Oswald|Over+the+Rainbow|Overlock|Overlock+SC|Ovo|Oxygen|Oxygen+Mono|PT+Mono|PT+Sans|PT+Sans+Caption|PT+Sans+Narrow|PT+Serif|PT+Serif+Caption|Pacifico|Palanquin|Palanquin+Dark|Paprika|Parisienne|Passero+One|Passion+One|Pathway+Gothic+One|Patrick+Hand|Patrick+Hand+SC|Patua+One|Paytone+One|Peddana|Peralta|Permanent+Marker|Petit+Formal+Script|Petrona|Philosopher|Piedra|Pinyon+Script|Pirata+One|Plaster|Play|Playball|Playfair+Display|Playfair+Display+SC|Podkova|Poiret+One|Poller+One|Poly|Pompiere|Pontano+Sans|Poppins|Port+Lligat+Sans|Port+Lligat+Slab|Pragati+Narrow|Prata|Preahvihear|Press+Start+2P|Princess+Sofia|Prociono|Prosto+One|Puritan|Purple+Purse|Quando|Quantico|Quattrocento|Quattrocento+Sans|Questrial|Quicksand|Quintessential|Qwigley|Racing+Sans+One|Radley|Rajdhani|Raleway|Raleway+Dots|Ramabhadra|Ramaraja|Rambla|Rammetto+One|Ranchers|Rancho|Ranga|Rationale|Ravi+Prakash|Redressed|Reenie+Beanie|Revalia|Rhodium+Libre|Ribeye|Ribeye+Marrow|Righteous|Risque|Roboto|Roboto+Condensed|Roboto+Mono|Roboto+Slab|Rochester|Rock+Salt|Rokkitt|Romanesco|Ropa+Sans|Rosario|Rosarivo|Rouge+Script|Rozha+One|Rubik+Mono+One|Rubik+One|Ruda|Rufina|Ruge+Boogie|Ruluko|Rum+Raisin|Ruslan+Display|Russo+One|Ruthie|Rye|Sacramento|Sahitya|Sail|Salsa|Sanchez|Sancreek|Sansita+One|Sarala|Sarina|Sarpanch|Satisfy|Scada|Scheherazade|Schoolbell|Seaweed+Script|Sevillana|Seymour+One|Shadows+Into+Light|Shadows+Into+Light+Two|Shanti|Share|Share+Tech|Share+Tech+Mono|Shojumaru|Short+Stack|Siemreap|Sigmar+One|Signika|Signika+Negative|Simonetta|Sintony|Sirin+Stencil|Six+Caps|Skranji|Slabo+13px|Slabo+27px|Slackey|Smokum|Smythe|Sniglet|Snippet|Snowburst+One|Sofadi+One|Sofia|Sonsie+One|Sorts+Mill+Goudy|Source+Code+Pro|Source+Sans+Pro|Source+Serif+Pro|Special+Elite|Spicy+Rice|Spinnaker|Spirax|Squada+One|Sree+Krushnadevaraya|Stalemate|Stalinist+One|Stardos+Stencil|Stint+Ultra+Condensed|Stint+Ultra+Expanded|Stoke|Strait|Sue+Ellen+Francisco|Sumana|Sunshiney|Supermercado+One|Sura|Suranna|Suravaram|Suwannaphum|Swanky+and+Moo+Moo|Syncopate|Tangerine|Taprom|Tauri|Teko|Telex|Tenali+Ramakrishna|Tenor+Sans|Text+Me+One|The+Girl+Next+Door|Tienne|Tillana|Timmana|Tinos|Titan+One|Titillium+Web|Trade+Winds|Trocchi|Trochut|Trykker|Tulpen+One|Ubuntu|Ubuntu+Condensed|Ubuntu+Mono|Ultra|Uncial+Antiqua|Underdog|Unica+One|UnifrakturCook|UnifrakturMaguntia|Unkempt|Unlock|Unna|VT323|Vampiro+One|Varela|Varela+Round|Vast+Shadow|Vesper+Libre|Vibur|Vidaloka|Viga|Voces|Volkhov|Vollkorn|Voltaire|Waiting+for+the+Sunrise|Wallpoet|Walter+Turncoat|Warnes|Wellfleet|Wendy+One|Wire+One|Yanone+Kaffeesatz|Yantramanav|Yellowtail|Yeseva+One|Yesteryear|Zeyada|';
                     
	/**
	 * Option page content
	 */
	$page_content = array();
	
	/* General Page */
	$page_content[] = array(
			'section' 	=> 'general',
			'icon'		=> 'fa-cog',
			'name' => __('General','MX'),
			'title' => __('General Setting','MX'),
			'elements'	=> array(
					'theme_update'		=> array(
					'title' => __('Theme License Information &amp; Auto Update Setting','MX'),
					'type' 	=> 'moreline',
					'moreline'	=> array(
						'envato_name'		=> array(
								'name'	=> __('Username','MX'),
								'type'	=>	'input',
								'property'	=> 'theme-name',
								'desc'	=> __('Envato market username.','MX')
							),
						'envato_purchase_code'		=> array(
								'name'	=> __('Purchase Code','MX'),
								'type'	=>	'input',
								'property'	=> 'theme-purchase-code',
								'desc'	=> __('Download License Certificate will find Item Purchase Code.','MX')
							),
						'envato_api'		=> array(
								'name'	=> __('Envato API','MX'),
								'type'	=>	'input',
								'property'	=> 'theme-api',
								'desc'	=> __('To obtain your API Key, visit "My Settings" page on any of the Envato Marketplaces.','MX')
							),
						'enable_auto'	=>	array(
								'name'	=> __('Theme Auto Update','MX'),
								'type'	=>	'pc',
								'desc' => __('Turn on auto update when have new version.','MX'),
								'property'	=> 'theme-update-enable'
							),
					)
				),
			'global'		=> array(
					'title' => __('Global Setting','MX'),
					'type' 	=> 'moreline',
					'moreline'	=> array(
						'global_skin'		=> array(
								'name'	=> __('Theme Skin','MX'),
								'type'	=>	'radio',
								'property'	=> 'global-skin',
								'radios'	=> array(0 => __('Light Skin','MX'), 1 => __('Dark Skin','MX')),
						),
						'global_layout'		=> array(
								'name'	=> __('Global Layout','MX'),
								'type'	=>	'radio',
								'property'	=> 'global-layout',
								'radios'	=> array(0 => __('Boxed','MX'), 1 => __('Wide','MX')),
								'enable-element' => 'yes',
								'enable-id'		=> '0-pe_global_layout_wide',
								'enable-group'	=> 'pe_global_layout_group'
						),
						'global_boxed_padding'		=> array(
							'name'	=> __('Boxed Layout Padding','MX'),
							'type'	=>	'number',
							'default'	=> 0, 
							'property'	=> 'global-layout-boxed-padding',
							'desc'	=> __('Setting Global Boxed Layout Top, Bottom Padding','MX'),
							'enabled-id' 	=> 'pe_global_layout_wide',
							'enable-group'	=> 'pe_global_layout_group'
						),
						'global_mobile'		=> array(
								'name'	=> __('Mobile Responsive','MX'),
								'type'	=>	'pc',
								'desc' => __('Turn on mobile responsive support.','MX'),
								'property'	=> 'global-mobile-enable'
							),
						'global_sidebar_layout'		=> array(
								'name'	=> __('Global Sidebar Layout','MX'),
								'type'	=>	'radio',
								'property'	=> 'global-sidebar-layout',
								'default'	=> 2,
								'radios'	=> array(0 => __('Full Width','MX'), 1 => __('Left Sidebar','MX'), 2 => __('Right Sidebar','MX'))
						),
						'global_title_align'		=> array(
								'name'	=> __('Global Page Title Align','MX'),
								'type'	=>	'radio',
								'property'	=> 'global-title-align',
								'default'	=> 0,
								'radios'	=> array(0 => __('Left','MX'), 1 => __('Center','MX'), 2 => __('Right','MX'))
						),
						'mega_menu_enable'		=> array(
								'name'	=> __('Mega Menu Enable','MX'),
								'type'	=>	'pc',
								'desc' => __('Turn on enable Mega Menu.','MX'),
								'property'	=> 'mega-menu-enable'
						),
						'fontawesome-cdn'		=> array(
								'name'	=> __('Enable CDN','MX'),
								'type'	=>	'pc',
								'desc' => __('Turn on enable Bootstrap &amp; FontAwesome from CDN.','MX'),
								'property'	=> 'bootstrap-fontawesome-cdn',
						)
					)
				),
			'favicon'		=> array(
					'name'	=> __('Favicon','MX'),
					'title'	=> __('Favicon','MX'),
					'type'	=>	'upload',
					'property'	=> 'favicon',
					'show_thums'	=> 'yes'
				),
			'rss_feed'		=> array(
					'name'	=> __('Feed url','MX'),
					'title'	=> __('RSS Feed','MX'),
					'type'	=>	'input',
					'property'	=> 'rss-feed',
				),
			'google_analytics'		=> array(
					'title'	=> __('Google Analytics','MX'),
					'type'	=>	'moreline',
					'moreline'	=> array(
							'position' => array(
								'name'	=> __('Script position','MX'),
								'type' 	=> 'radio',
								'property' => 'google_analytics-position',
								'radios'	=> array(
										'radios_1' => __('Header','MX'),
										'radios_2' => __('Footer','MX')
									)
								
								),
							'scripts' => array(
								'name'	=> __('Analytics script','MX'),
								'type' 	=> 'textarea',
								'property' => 'google_analytics-content',
								'desc'	=> __('Paste your Google Analytics or other tracking code here.','MX')
								)	
						)
				)
			)
		);
	
	/* Header Page */
	$page_content[] = array(
			'section' => 'header',
			'icon'	=> 'fa-tasks',
			'name' => __('Header','MX'),
			'title' => __('Header Setting','MX'),
			'elements'	=> array(
				'header_style'	=> array(
					'title' => __('Header Area Style Setting','MX'),
					'type' 	=> 'moreline',
					'moreline'	=> array(
							'top_banner_enable'	=> array(
									'name'	=> __('Enable Top Banner','MX'),
									'type' 	=> 'pc',
									'desc' => __('Check to enable top banner','MX'),
									'property' => 'header-banner-enable',
									'enable-element' => 'yes',
									'enable-id'		=> '1-pe_topbanner_enable',
									'enable-group'	=> 'pe_topbanner_enable_group'
								),
							'header_topbar_enable'	=> array(
								'name'	=> __('Enable Topbar','MX'),
								'type' 	=> 'pc',
								'default'	=>	'on', 
								'desc' => __('Check to enable show topbar elements','MX'),
								'property' => 'header-topbar-enable',
								'enable-element' => 'yes',
								'enable-id'		=> '1-pe_topbar_enable',
								'enable-group'	=> 'pe_topbar_enable_group'
							),
							'header_style'	=> array(
								'name'	=> __('Header Style','MX'),
								'type' 	=> 'select',
								'property' => 'header-style',
								'options'	=> array(0 => __('Header Style #1 (Menu Bottom)','MX'), 1 => __('Header Style #2 (Menu Right)','MX'), 2 => __('Header Style #3 (Menu Center)','MX'), 3 => __('Header Style #4 (Menu Right)','MX'), 4 => __('Header Style #5 (Menu Bottom)','MX')),
								'enable-element' => 'yes',
								'enable-id'		=> '0-pe_header_custom_enable:2-pe_header_custom_enable_2:3-pe_header_custom_enable3:',
								'enable-group'	=> 'pe_header_custom_enable_group',
								
							),
							'header_search_enable'	=> array(
								'name'	=> __('Enable Search Form','MX'),
								'type' 	=> 'pc',
								'property' => 'header-search-enable',
								'desc' => __('Check to enable show search form','MX'),
							),
							'login_enable'		=> array(
								'title'	=> __('Enable Login','MX'),
								'name'	=> __('Enable Login on Menu Area','MX'),
								'type' 	=> 'pe',
								'property' => 'global-login-enable',
								),
							'header_social_enable'	=> array(
								'name'	=> __('Enable Social Button','MX'),
								'type' 	=> 'pc',
								'property' => 'header-social-enable',
								'desc' => __('Check to enable show social accounts','MX')
							),
							'header_fixed_menu_enable'	=> array(
								'name'	=> __('Enable Fixed Menu','MX'),
								'type' 	=> 'pc',
								'property' => 'header-fixed-menu-enable',
								'desc' => __('Check to enable fixed menu when scroll page','MX')
							),
						)
					),
				'header_banner_setting'	=> array(
						'title' => __('Header Banner Setting','MX'),
						'type' 	=> 'moreline',
						'enabled-id'	=> 'pe_topbanner_enable',
						'enable-group'	=> 'pe_topbanner_enable_group',
						'moreline'	=> array(
								'header_banner_id' => array(
									'name'	=> __('ID','MX'),
									'type'	=>	'input',
									'property' => 'header-banner-id',
									'desc'	=> __('Use it different before banner id','MX')
									),
								'header_banner_content' => array(
									'name'	=> __('Content','MX'),
									'type'	=>	'textarea',
									'property' => 'header-banner-content',
									'desc'	=> __('Support HTML format','MX')
									)
							)
					),
				'topbar_custom'	=> array(
					'title' => __('Custom Topbar Setting','MX'),
					'type' 	=> 'moreline',
					'enabled-id'		=> 'pe_topbar_enable',
					'enable-group'	=> 'pe_topbar_enable_group',
					'moreline'	=> array(
							'topbar'	=> array(
								'name'	=> __('Custom Topbar Show Element','MX'),
								'type' 	=> 'drag',
								'property' => 'topbar-custom-style',
								'position' => array(__('Left Side','MX'),__('Right Side','MX')),
								'fields'=> array(
												array('index'=>0, 'open'=> 2, 'name' => __('Topbar Menu','MX')),
												array('index'=>1, 'open'=> 2, 'name' => __('Login','MX')),
												array('index'=>2, 'open'=> 2, 'name' => __('Shop Cart','MX')),
												array('index'=>3, 'open'=> 2, 'name' => __('Socials','MX')),
												array('index'=>4, 'open'=> 2, 'name' => __('Switch Language','MX')),
												array('index'=>5, 'open'=> 2, 'name' => __('Custom Content','MX'))
										),
										
								'desc'	=> __('Drag module as sort show;Click show position as where show it.(Right area position need you view site make sure is you wanted.)','MX')
							),
							'topbar_custom'	=> array(
								'name'	=> __('Topbar Custom Content','MX'),
								'type' 	=> 'textarea',
								'desc' => __('Support html code for topbar custom content.','MX'),
								'property' => 'topbar-content'
							)	
						)
				),
				'header_custom'	=> array(
					'title' => __('Header Area Custom Content Setting','MX'),
					'type' 	=> 'moreline',
					'enabled-id'		=> 'pe_header_custom_enable pe_header_custom_enable_2 pe_header_custom_enable3',
					'enable-group'	=> 'pe_header_custom_enable_group',
					'moreline'	=> array(
										'header_custom_enable'	=> array(
													'name'	=> __('Enable Custom Content','MX'),
													'type' 	=> 'pc',
													'desc' => __('Check to enable custom content','MX'),
													'property' => 'header-custom-enable',
													'default'	=>	'on',
													'enable-element' => 'yes',
													'enable-id'		=> '1-pe_header_custom',
													'enable-group'	=> 'pe_header_custom_group'
												),
										'header_custom_content'	=> array(
													'name'	=> __('Custom Content','MX'),
													'type' 	=> 'textarea',
													'desc' => __('Support html code for topbar custom content.','MX'),
													'property' => 'header-custom-content',
													'enabled-id'		=> 'pe_header_custom',
													'enable-group'	=> 'pe_header_custom_group'
												),
									)
							),
				'header_position'	=> array(
					'title' => __('Header Area Element Setting','MX'),
					'type' 	=> 'moreline',
					'moreline'	=> array(
										'login_page'	=> array(
											'name'	=> __('Login Page Link','MX'),
											'type' 	=> 'input',
											'desc' => __('You need first create page use login template as login page.','MX'),
											'property' => 'global-login-page'
										),
										'logo_image_padding-top' => array(
											'name'	=> __('Logo Padding Top','MX'),
											'type' 	=> 'number',
											'property' => 'logo-image-padding-top',
											'after'	=>	'px'
											),
										'social_padding-top' => array(
											'name'	=> __('Social Padding Top','MX'),
											'type' 	=> 'number',
											'property' => 'header-social-padding-top',
											'after'	=>	'px'
											),
										'custom_content_padding-top' => array(
											'name'	=> __('Custom Content Padding Top','MX'),
											'type' 	=> 'number',
											'property' => 'header-custom-content-padding-top',
											'after'	=>	'px'
											),
										'custom_cart_padding-top' => array(
											'name'	=> __('Right Cart Content Padding Top','MX'),
											'type' 	=> 'number',
											'property' => 'header-custom-cart-padding-top',
											'after'	=>	'px'
											)
									)
							),
				'logo_custom'	=> array(
					'title' => __('Custom Logo','MX'),
					'type' 	=> 'moreline',
					'moreline'	=> array(
							'logo_enable_txt'	=> array(
								'name'	=> __('Enable Custom Logo','MX'),
								'type' 	=> 'pc',
								'desc' => __('Check to enable custom image logo','MX'),
								'property' => 'logo-enable',
								'default'	=>	'on',
								'enable-element' => 'yes',
								'enable-id'		=> '1-pe_logo_enable',
								'enable-group'	=> 'pe_logo_enable_group'
							),
							'logo_image'	=> array(
								'name'	=> __('Logo Image URL','MX'),
								'type' 	=> 'upload',
								'property' => 'logo-image',
								'show_thums'	=> 'yes',
								'enabled-id' 	=> 'pe_logo_enable',
								'enable-group'	=> 'pe_logo_enable_group'
								),
							'logo_retina_image'	=> array(
								'name'	=> __('Logo Retina Image @2x','MX'),
								'type' 	=> 'upload',
								'property' => 'logo-retina-image',
								'show_thums'	=> 'yes',
								'desc'	=> __('You need upload a retina logo @2x default logo size. ','MX'),
								'enabled-id' 	=> 'pe_logo_enable',
								'enable-group'	=> 'pe_logo_enable_group'
								),
							'logo_image_width' => array(
								'name'	=> __('Logo Image Width','MX'),
								'type' 	=> 'number',
								'property' => 'logo-image-width',
								'after'	=>	'px',
								'enabled-id' 	=> 'pe_logo_enable',
								'enable-group'	=> 'pe_logo_enable_group'
								),
							'logo_image_height' => array(
								'name'	=> __('Logo Image Height','MX'),
								'type' 	=> 'number',
								'property' => 'logo-image-height',
								'after'	=>	'px',
								'enabled-id' 	=> 'pe_logo_enable',
								'enable-group'	=> 'pe_logo_enable_group'
								)
						)
				),
			)
		);
	
	/* Footer Page */
	$page_content[] = array(
			'section' => 'footer',
			'icon'	=> 'fa-ellipsis-h',
			'name' => __('Footer','MX'),
			'title' => __('Footer Setting','MX'),
			'elements'	=> array(
				'header_style'	=> array(
					'title' => __('Footer Area Style Setting','MX'),
					'type' 	=> 'moreline',
					'moreline'	=> array(
							'footer_widget_style'	=> array(
								'name'	=> __('Footer Widget Basic Columns','MX'),
								'type' 	=> 'pi',
								'property' => 'footer-widget-style',
								'radios'	=> array( 	array('1-1-1-1',$dir.'/img/penguin/footer_widget_1.png'),
														array('1-2-1',$dir.'/img/penguin/footer_widget_2.png'),
														array('2-1-1',$dir.'/img/penguin/footer_widget_3.png'),
														array('1-1-2',$dir.'/img/penguin/footer_widget_4.png'),
														array('2-2',$dir.'/img/penguin/footer_widget_5.png'),
														array('1-3',$dir.'/img/penguin/footer_widget_6.png'),
														array('3-1',$dir.'/img/penguin/footer_widget_7.png'),
														array('1',$dir.'/img/penguin/footer_widget_11.png'),
														array('1-1-1',$dir.'/img/penguin/footer_widget_8.png'),
														array('1-2',$dir.'/img/penguin/footer_widget_9.png'),
														array('2-1',$dir.'/img/penguin/footer_widget_10.png'),
													),
								'desc' => __('It\'s also depends your footer widgets had added content.','MX'),
							),
							'footer_bottom_style'	=> array(
								'name'	=> __('Footer Bottom Content Style','MX'),
								'type' 	=> 'pi',
								'property' => 'footer-bottom-style',
								'radios'	=> array(array('Left/Right Style', $dir.'/img/penguin/footer_style_1.png'),array('Center Style',$dir.'/img/penguin/footer_style_2.png')),
							),
							'footer_menu_enable'	=> array(
								'name'	=> __('Footer Menu','MX'),
								'type' 	=> 'pc',
								'default'	=>	'on', 
								'desc' => __('Check to enable show footer menu','MX'),
								'property' => 'footer-menu-enable',
							),
							'footer_custom_left_content'	=> array(
								'name'	=> __('Custom Left Area Content','MX'),
								'type' 	=> 'textarea',
								'desc' => __('Support html code for footer bottom custom content left area.','MX'),
								'property' => 'footer-custom-content-left',
							),
							'footer_custom_right_content'	=> array(
								'name'	=> __('Custom Left Area Content','MX'),
								'type' 	=> 'textarea',
								'desc' => __('Support html code for footer bottom custom content right area.','MX'),
								'property' => 'footer-custom-content-right',
							),
							
						)
					)
			)
		);
	
	/* Mini bar */
	$page_content[] = array(
			'section' => 'minibar',
			'icon'	=>	'fa-list-ul',
			'name' => __('Mini Bar','MX'),
			'title' => __('Mini Bar Setting','MX'),
			'elements'	=> array(
					'minibar_enable'		=> array(
						'title'	=> __('Enable Mini Bar Setting','MX'),
						'name'	=> __('Enable Mini Bar','MX'),
						'type' 	=> 'pe',
						'property' => 'minibar-enable',
						'enable-element' => 'yes',
						'enable-id'		=> '1-pe_minibar',
						'enable-group'	=> 'pe_minibar_group'
						),
						
					'minibar_elements'	=> array(
						'title'	=> __('Mini Bar Setting','MX'),
						'type'	=>	'moreline',
						'enabled-id'		=> 'pe_minibar',
						'enable-group'	=> 'pe_minibar_group',
						'moreline'	=> array(
							'minibar_enable'		=> array(
								'name'	=> __('Enable Mini Bar Open','MX'),
								'type' 	=> 'pe',
								'property' => 'minibar-open',
								'desc'	=> __('Enable will default show mini bar or will need click open.','MX')
							),
							'minibar'	=> array(
								'name'	=> __('Custom Mini Bar Show Element','MX'),
								'type' 	=> 'drag',
								'property' => 'minibar-custom-style',
								'position' => array(__('Show','MX')),
								'fields'=> array(
												array('index'=>0, 'open'=> 1, 'name' => __('Login','MX')),
												array('index'=>1, 'open'=> 1, 'name' => __('Shop Wishlist','MX')),
												array('index'=>2, 'open'=> 1, 'name' => __('Shop Cart','MX')),
												array('index'=>3, 'open'=> 1, 'name' => __('Search Form','MX')),
												array('index'=>4, 'open'=> 1, 'name' => __('Custom Content','MX'))
										),
										
								'desc'	=> __('Drag module as sort show.','MX')
							),
							'minibar_custom_icon'	=> array(
								'name'	=> __('Mini Bar Custom Element Icon','MX'),
								'type' 	=> 'input',
								'default' => '',
								'desc' => __('Used FontAwesome icon name.','MX'),
								'property' => 'minibar-icon'
							),
							'minibar_custom'	=> array(
								'name'	=> __('Mini Bar Custom Content','MX'),
								'type' 	=> 'textarea',
								'desc' => __('Support html code for Mini Bar custom content.','MX'),
								'property' => 'minibar-content'
							)	
						)
				)
			)
		);
	/* Background */
	$page_content[] = array(
			'section' => 'background',
			'icon'	=>	'fa-picture-o',
			'name' => __('Background','MX'),
			'title' => __('Background Setting','MX'),
			'elements'	=> array(
					'background_enable'		=> array(
						'title'	=> __('Enable Custom Background Setting','MX'),
						'name'	=> __('Enable Custom Background','MX'),
						'type' 	=> 'pe',
						'property' => 'custom-background-enable',
						'enable-element' => 'yes',
						'enable-id'		=> '1-pe_custom_background',
						'enable-group'	=> 'pe_custom_background_group'
						),
					'background_setting'	=> array(
						'title'	=> __('Body Background Setting','MX'),
						'type'	=>	'moreline',
						'enabled-id'		=> 'pe_custom_background',
						'enable-group'	=> 'pe_custom_background_group',
						'moreline'	=> array(
								'background_type' => array(
									'name'	=> __('Body Background Type','MX'),
									'type' 	=> 'radio',
									'property' => 'global-bg-type',
									'radios' => array(__('Pattern','MX'),__('Image','MX'),__('Color','MX')),
									'enable-element' => 'yes',
									'enable-id'		=> '0-global_bg_type_pattern:1-global_bg_type_image:2-global_bg_type_color',
									'enable-group'	=> 'global_bg_type_group'
								),
								'background_pattern_width' => array(
									'name'	=> __('Pattern Image Width','MX'),
									'type' 	=> 'number',
									'property' => 'global-bg-pattern-width',
									'enabled-id'		=> 'global_bg_type_pattern',
									'enable-group'	=> 'global_bg_type_group'
								),
								'background_pattern_height' => array(
									'name'	=> __('Pattern Image Height','MX'),
									'type' 	=> 'number',
									'property' => 'global-bg-pattern-height',
									'enabled-id'		=> 'global_bg_type_pattern',
									'enable-group'	=> 'global_bg_type_group'
								),
								'background_pattern_image' => array(
									'name'	=> __('Pattern Image','MX'),
									'type' 	=> 'upload',
									'property' => 'global-bg-pattern-image',
									'enabled-id'		=> 'global_bg_type_pattern',
									'enable-group'	=> 'global_bg_type_group'
								),
								'background_pattern_retina' => array(
									'name'	=> __('Pattern Retina Image @2x','MX'),
									'type' 	=> 'upload',
									'property' => 'global-bg-pattern-retina',
									'enabled-id'		=> 'global_bg_type_pattern',
									'enable-group'	=> 'global_bg_type_group'
								),
								'background_image' => array(
									'name'	=> __('Background Image','MX'),
									'type' 	=> 'upload',
									'property' => 'global-bg-image',
									'enabled-id'		=> 'global_bg_type_image',
									'enable-group'	=> 'global_bg_type_group'
								),
								'background_color' => array(
									'name'	=> __('Background Color','MX'),
									'type' 	=> 'color',
									'default'	=>	'ffffff',
									'property' => 'global-bg-color',
									'enabled-id'		=> 'global_bg_type_color',
									'enable-group'	=> 'global_bg_type_group'
								)
							)
					),
					'header_background_setting'	=> array(
						'title'	=> __('Header Background Setting','MX'),
						'type'	=>	'moreline',
						'enabled-id'		=> 'pe_custom_background',
						'enable-group'	=> 'pe_custom_background_group',
						'moreline'	=> array(
								'background_type' => array(
									'name'	=> __('Header Background Type','MX'),
									'type' 	=> 'radio',
									'property' => 'global-header-bg-type',
									'radios' => array(__('Pattern','MX'),__('Image','MX'),__('Color','MX')),
									'enable-element' => 'yes',
									'enable-id'		=> '0-global_header_bg_type_pattern:1-global_header_bg_type_image:2-global_header_bg_type_color',
									'enable-group'	=> 'global_header_bg_type_group'
								),
								'background_pattern_width' => array(
									'name'	=> __('Pattern Image Width','MX'),
									'type' 	=> 'number',
									'property' => 'global-header-bg-pattern-width',
									'enabled-id'		=> 'global_header_bg_type_pattern',
									'enable-group'	=> 'global_header_bg_type_group'
								),
								'background_pattern_height' => array(
									'name'	=> __('Pattern Image Height','MX'),
									'type' 	=> 'number',
									'property' => 'global-header-bg-pattern-height',
									'enabled-id'		=> 'global_header_bg_type_pattern',
									'enable-group'	=> 'global_header_bg_type_group'
								),
								'background_pattern_image' => array(
									'name'	=> __('Pattern Image','MX'),
									'type' 	=> 'upload',
									'property' => 'global-header-bg-pattern-image',
									'enabled-id'		=> 'global_header_bg_type_pattern',
									'enable-group'	=> 'global_header_bg_type_group'
								),
								'background_pattern_retina' => array(
									'name'	=> __('Pattern Retina Image @2x','MX'),
									'type' 	=> 'upload',
									'property' => 'global-header-bg-pattern-retina',
									'enabled-id'		=> 'global_header_bg_type_pattern',
									'enable-group'	=> 'global_header_bg_type_group'
								),
								'background_image' => array(
									'name'	=> __('Background Image','MX'),
									'type' 	=> 'upload',
									'property' => 'global-header-bg-image',
									'enabled-id'		=> 'global_header_bg_type_image',
									'enable-group'	=> 'global_header_bg_type_group'
								),
								'background_color' => array(
									'name'	=> __('Background Color','MX'),
									'type' 	=> 'color',
									'property' => 'global-header-bg-color',
									'enabled-id'		=> 'global_header_bg_type_color',
									'enable-group'	=> 'global_header_bg_type_group'
								)
							)
					),
					'title_background_setting'	=> array(
						'title'	=> __('Title Background Setting','MX'),
						'type'	=>	'moreline',
						'enabled-id'		=> 'pe_custom_background',
						'enable-group'	=> 'pe_custom_background_group',
						'moreline'	=> array(
								'background_type' => array(
									'name'	=> __('Title Background Type','MX'),
									'type' 	=> 'radio',
									'property' => 'global-title-bg-type',
									'radios' => array(__('Pattern','MX'),__('Image','MX'),__('Color','MX')),
									'enable-element' => 'yes',
									'enable-id'		=> '0-global_title_bg_type_pattern:1-global_title_bg_type_image:2-global_title_bg_type_color',
									'enable-group'	=> 'global_title_bg_type_group'
								),
								'background_pattern_width' => array(
									'name'	=> __('Pattern Image Width','MX'),
									'type' 	=> 'number',
									'property' => 'global-title-bg-pattern-width',
									'enabled-id'		=> 'global_title_bg_type_pattern',
									'enable-group'	=> 'global_title_bg_type_group'
								),
								'background_pattern_height' => array(
									'name'	=> __('Pattern Image Height','MX'),
									'type' 	=> 'number',
									'property' => 'global-title-bg-pattern-height',
									'enabled-id'		=> 'global_title_bg_type_pattern',
									'enable-group'	=> 'global_title_bg_type_group'
								),
								'background_pattern_image' => array(
									'name'	=> __('Pattern Image','MX'),
									'type' 	=> 'upload',
									'property' => 'global-title-bg-pattern-image',
									'enabled-id'		=> 'global_title_bg_type_pattern',
									'enable-group'	=> 'global_title_bg_type_group'
								),
								'background_pattern_retina' => array(
									'name'	=> __('Pattern Retina Image @2x','MX'),
									'type' 	=> 'upload',
									'property' => 'global-title-bg-pattern-retina',
									'enabled-id'		=> 'global_title_bg_type_pattern',
									'enable-group'	=> 'global_title_bg_type_group'
								),
								'background_image' => array(
									'name'	=> __('Background Image','MX'),
									'type' 	=> 'upload',
									'property' => 'global-title-bg-image',
									'enabled-id'		=> 'global_title_bg_type_image',
									'enable-group'	=> 'global_title_bg_type_group'
								),
								'background_color' => array(
									'name'	=> __('Background Color','MX'),
									'type' 	=> 'color',
									'property' => 'global-title-bg-color',
									'enabled-id'		=> 'global_title_bg_type_color',
									'enable-group'	=> 'global_title_bg_type_group'
								)
							)
					),
					'content_background_setting'	=> array(
						'title'	=> __('Content Background Setting','MX'),
						'type'	=>	'moreline',
						'enabled-id'		=> 'pe_custom_background',
						'enable-group'	=> 'pe_custom_background_group',
						'moreline'	=> array(
								'background_type' => array(
									'name'	=> __('Content Background Type','MX'),
									'type' 	=> 'radio',
									'property' => 'global-content-bg-type',
									'radios' => array(__('Pattern','MX'),__('Image','MX'),__('Color','MX')),
									'enable-element' => 'yes',
									'enable-id'		=> '0-global_content_bg_type_pattern:1-global_content_bg_type_image:2-global_content_bg_type_color',
									'enable-group'	=> 'global_content_bg_type_group'
								),
								'background_pattern_width' => array(
									'name'	=> __('Pattern Image Width','MX'),
									'type' 	=> 'number',
									'property' => 'global-content-bg-pattern-width',
									'enabled-id'		=> 'global_content_bg_type_pattern',
									'enable-group'	=> 'global_content_bg_type_group'
								),
								'background_pattern_height' => array(
									'name'	=> __('Pattern Image Height','MX'),
									'type' 	=> 'number',
									'property' => 'global-content-bg-pattern-height',
									'enabled-id'		=> 'global_content_bg_type_pattern',
									'enable-group'	=> 'global_content_bg_type_group'
								),
								'background_pattern_image' => array(
									'name'	=> __('Pattern Image','MX'),
									'type' 	=> 'upload',
									'property' => 'global-content-bg-pattern-image',
									'enabled-id'		=> 'global_content_bg_type_pattern',
									'enable-group'	=> 'global_content_bg_type_group'
								),
								'background_pattern_retina' => array(
									'name'	=> __('Pattern Retina Image @2x','MX'),
									'type' 	=> 'upload',
									'property' => 'global-content-bg-pattern-retina',
									'enabled-id'		=> 'global_content_bg_type_pattern',
									'enable-group'	=> 'global_content_bg_type_group'
								),
								'background_image' => array(
									'name'	=> __('Background Image','MX'),
									'type' 	=> 'upload',
									'property' => 'global-content-bg-image',
									'enabled-id'		=> 'global_content_bg_type_image',
									'enable-group'	=> 'global_content_bg_type_group'
								),
								'background_color' => array(
									'name'	=> __('Background Color','MX'),
									'type' 	=> 'color',
									'property' => 'global-content-bg-color',
									'enabled-id'		=> 'global_content_bg_type_color',
									'enable-group'	=> 'global_content_bg_type_group'
								)
							)
					),
					'footer_background_setting'	=> array(
						'title'	=> __('Footer Background Setting','MX'),
						'type'	=>	'moreline',
						'enabled-id'		=> 'pe_custom_background',
						'enable-group'	=> 'pe_custom_background_group',
						'moreline'	=> array(
								'background_type' => array(
									'name'	=> __('Footer Background Type','MX'),
									'type' 	=> 'radio',
									'property' => 'global-footer-bg-type',
									'default'	=> 2,
									'radios' => array(__('Pattern','MX'),__('Image','MX'),__('Color','MX')),
									'enable-element' => 'yes',
									'enable-id'		=> '0-global_footer_bg_type_pattern:1-global_footer_bg_type_image:2-global_footer_bg_type_color',
									'enable-group'	=> 'global_footer_bg_type_group'
								),
								'background_pattern_width' => array(
									'name'	=> __('Pattern Image Width','MX'),
									'type' 	=> 'number',
									'default'	=>	100,
									'property' => 'global-footer-bg-pattern-width',
									'enabled-id'		=> 'global_footer_bg_type_pattern',
									'enable-group'	=> 'global_footer_bg_type_group'
								),
								'background_pattern_height' => array(
									'name'	=> __('Pattern Image Height','MX'),
									'type' 	=> 'number',
									'default'	=>	100,
									'property' => 'global-footer-bg-pattern-height',
									'enabled-id'		=> 'global_footer_bg_type_pattern',
									'enable-group'	=> 'global_footer_bg_type_group'
								),
								'background_pattern_image' => array(
									'name'	=> __('Pattern Image','MX'),
									'type' 	=> 'upload',
									'property' => 'global-footer-bg-pattern-image',
									'enabled-id'		=> 'global_footer_bg_type_pattern',
									'enable-group'	=> 'global_footer_bg_type_group'
								),
								'background_pattern_retina' => array(
									'name'	=> __('Pattern Retina Image @2x','MX'),
									'type' 	=> 'upload',
									'property' => 'global-footer-bg-pattern-retina',
									'enabled-id'		=> 'global_footer_bg_type_pattern',
									'enable-group'	=> 'global_footer_bg_type_group'
								),
								'background_image' => array(
									'name'	=> __('Background Image','MX'),
									'type' 	=> 'upload',
									'property' => 'global-footer-bg-image',
									'enabled-id'		=> 'global_footer_bg_type_image',
									'enable-group'	=> 'global_footer_bg_type_group'
								),
								'background_color' => array(
									'name'	=> __('Background Color','MX'),
									'type' 	=> 'color',
									'default'	=>	'f1f1f1',
									'property' => 'global-footer-bg-color',
									'enabled-id'		=> 'global_footer_bg_type_color',
									'enable-group'	=> 'global_footer_bg_type_group'
								),
								'border_top_color' => array(
									'name'	=> __('Border Top Color','MX'),
									'type' 	=> 'color',
									'default'	=>	'e3e3e3',
									'property' => 'global-footer-border-top-color',
									'enabled-id'		=> 'global_footer_bg_type_color global_footer_bg_type_image global_footer_bg_type_pattern',
									'enable-group'	=> 'global_footer_bg_type_group'
								),
								'border_bottom_color' => array(
									'name'	=> __('Border Bottom Color','MX'),
									'type' 	=> 'color',
									'default'	=>	'e3e3e3',
									'property' => 'global-footer-border-bottom-color',
									'enabled-id'		=> 'global_footer_bg_type_color global_footer_bg_type_image global_footer_bg_type_pattern',
									'enable-group'	=> 'global_footer_bg_type_group'
								),
								'copyright_bg_color' => array(
									'name'	=> __('Copyright Area Background Color','MX'),
									'type' 	=> 'color',
									'default'	=>	'f7f7f7',
									'property' => 'global-footer-copyright-bg-color',
									'enabled-id'		=> 'global_footer_bg_type_color global_footer_bg_type_image global_footer_bg_type_pattern',
									'enable-group'	=> 'global_footer_bg_type_group'
								),
								'copyright_border_color' => array(
									'name'	=> __('Copyright Area Border Top Color','MX'),
									'type' 	=> 'color',
									'default'	=>	'ffffff',
									'property' => 'global-footer-copyright-border-top-color',
									'enabled-id'		=> 'global_footer_bg_type_color global_footer_bg_type_image global_footer_bg_type_pattern',
									'enable-group'	=> 'global_footer_bg_type_group'
								)
							)
					)
			)
		);
	
	/* WooCommerce */
	$page_content[] = array(
			'section' => 'woocommerce',
			'icon'	=> 'fa-shopping-cart',
			'name' => __('Woocommerce','MX'),
			'title' => __('Woocommerce Setting','MX'),
			'elements'	=> array(
								'portfolio_default'	=> array(
											'title'	=> __('Default Woocommerce Setting','MX'),
											'type'	=>	'moreline',
											'moreline'	=> array(
													'page_number'	=> array(
																	'name'	=> __('Shop Page Items Number','MX'),
																	'type'	=>	'number',
																	'default'	=> 20, 
																	'property'	=> 'woocommerce-page-num'
																	),
													'search_enable'		=> array(
																	'title'	=> __('Enabled Header Product Search','MX'),
																	'name'	=> __('Enabled Header Product Search','MX'),
																	'type' 	=> 'pe',
																	'property' => 'woocommerce-search-enable',
																	'desc'	=> __('Turn on enabled product search form.','MX'),
																	),
													'cart_enable'		=> array(
																	'title'	=> __('Enable Cart','MX'),
																	'name'	=> __('Enable Cart on Menu Area','MX'),
																	'type' 	=> 'pe',
																	'property' => 'woocommerce-cart-enable',
																	),
													'wish_enable'		=> array(
																	'title'	=> __('Enable Wishlist','MX'),
																	'name'	=> __('Enable Wishlist on Menu Area','MX'),
																	'type' 	=> 'pe',
																	'property' => 'woocommerce-wish-enable',
																	'desc'	=> __('Before you need install "YITH WooCommerce Wishlist" plugin.','MX'),
																	),
													'enable_share'	=>	array(
																		'name'	=> __('Share Show','MX'),
																		'type'	=>	'pc',
																		'desc' => __('Turn on enable post page show share.','MX'),
																		'property'	=> 'woocommerce-share-enable',
																		'enable-element' => 'yes',
																		'enable-id'		=> '1-pe_woocommerce_share_enable',
																		'enable-group'	=> 'pe_woocommerce_share_enable_group'
																),
													'share_type'	=>	array(
																		'name'	=> __('Share Type','MX'),
																		'type'	=>	'radio',
																		'radios'	=> array(0 => __('Default','MX'), 1 => __('Custom Share','MX')),
																		'property'	=> 'woocommerce-share-type',
																		'enabled-id'		=> 'pe_woocommerce_share_enable',
																		'enable-group'	=> 'pe_woocommerce_share_enable_group'
																),
													'share_content'	=>	array(
																		'name'	=> __('Custom Share Content','MX'),
																		'type'	=>	'textarea',
																		'property'	=> 'woocommerce-share-content',
																		'enabled-id'		=> 'pe_woocommerce_share_enable',
																		'enable-group'	=> 'pe_woocommerce_share_enable_group'
																)
											)
								)
							)
					);
	/* Custom Fonts */
	$page_content[] = array(
			'section' => 'font',
			'icon'	=>	'fa-text-width',
			'name' => __('Font','MX'),
			'title' => __('Font Setting','MX'),
			'elements'	=> array(
					'font_enable'		=> array(
						'title'	=> __('Enable Font Setting','MX'),
						'name'	=> __('Enable Custom Font','MX'),
						'type' 	=> 'pe',
						'property' => 'custom-enable-font',
						'desc'	=> __('Just when enable custom font,then all choose font will run.','MX'),
						'enable-element' => 'yes',
						'enable-id'		=> '1-pe_custom_font',
						'enable-group'	=> 'pe_custom_font_group'
						),
					'font_setting'	=> array(
						'title'	=> __('Theme Font Setting','MX'),
						'type'	=>	'moreline',
						'enabled-id'		=> 'pe_custom_font',
						'enable-group'	=> 'pe_custom_font_group',
						'moreline'	=> array(
								'general_font' => array(
									'name'	=> __('General Font','MX'),
									'type' 	=> 'select',
									'property' => 'custom-general-font',
									'default_option'	=> 'Default: Lato',
									'option_array'	=> $google_fonts,
									'desc' => __('Now have 676+ Google web fonts for u choose!','MX')
									),
								'general_font_weight' => array(
									'name'	=> __('General Font Weight','MX'),
									'type' 	=> 'input',
									'default'	=> '300,300italic,400,400italic,700,700italic',
									'property' => 'custom-general-font-weight',
									'desc' => __('You can check font support style http://google.com/fonts/','MX')
									),
								'general_font_size' => array(
									'name'	=> __('General Font Size','MX'),
									'type' 	=> 'number',
									'default'	=>	14,
									'property' => 'custom-general-font-size',
									'after'	=>	'px'
									),
								'top_nav_font' => array(
									'name'	=> __('Header Menu Font','MX'),
									'type' 	=> 'select',
									'property' => 'custom-menu-font',
									'default_option'	=> 'Default: Lato',
									'option_array'	=> $google_fonts
									),
								'top_nav_font_weight' => array(
									'name'	=> __('Header Menu  Font Weight','MX'),
									'type' 	=> 'input',
									'default'	=> '300,300italic,400,400italic,700,700italic',
									'property' => 'custom-menu-font-weight',
									),
								'top_nav_font_size' => array(
									'name'	=> __('Header Menu Font Size','MX'),
									'type' 	=> 'number',
									'default'	=>	13,
									'property' => 'custom-menu-font-size',
									'after'	=>	'px'
									),
								'top_nav_sub_font_size' => array(
									'name'	=> __('Header Sub Menu Font Size','MX'),
									'type' 	=> 'number',
									'default'	=>	13,
									'property' => 'custom-menu-sub-font-size',
									'after'	=>	'px'
									),
								'top_nav_sub_title_font_size' => array(
									'name'	=> __('Header Menu Sub Title Font Size','MX'),
									'type' 	=> 'number',
									'default'	=>	11,
									'property' => 'custom-menu-sub-title-font-size',
									'after'	=>	'px'
									),
								'title_font' => array(
									'name'	=> __('H1-H6 Font','MX'),
									'type' 	=> 'select',
									'property' => 'custom-title-font',
									'default_option'	=> 'Default: Lato',
									'option_array'	=> $google_fonts
									),
								'title_font_weight' => array(
									'name'	=> __('H1-H6 Font Weight','MX'),
									'type' 	=> 'input',
									'default'	=> '300,300italic,400,400italic,700,700italic',
									'property' => 'custom-title-font-weight',
									),
								'subset_font' => array(
									'name'	=> __('Google Fonts Subsets','MX'),
									'type' 	=> 'input',
									'property' => 'google-font-subset',
									'desc' => __('Some of the fonts in the Google Font Directory support multiple scripts (like Latin and Cyrillic for example). Example: "latin,cyrillic" please use "," for more subsets ','MX')
									),
							)
					),
				)
			);
	
	/* Custom Colors */
	$page_content[] = array(
			'section' => 'color',
			'icon'	=>	'fa-magic',
			'name' => __('Color','MX'),
			'title' => __('Color Setting','MX'),
			'elements'	=> array(
					'enable_colors'		=> array(
						'title'	=> __('Enable Color','MX'),
						'name'	=> __('Enable Custom Color','MX'),
						'type' 	=> 'pc',
						'property' => 'custom-enable-color',
						'desc'	=> __('Just when enable custom color,then all choose color will run.','MX'),
						'enable-element' => 'yes',
						'enable-id'		=> '1-pe_custom_color',
						'enable-group'	=> 'pe_custom_color_group'
						),
					'theme_color'		=> array(
						'title'	=> __('Theme Colors Setting','MX'),
						'type'	=>	'moreline',
						'enabled-id' 	=> 'pe_custom_color',
						'enable-group'	=> 'pe_custom_color_group',
						'moreline'	=> array(
								'theme_color' => array(
									'name'	=> __('Theme Color','MX'),
									'type' 	=> 'color',
									'property' => 'theme-color'
									),
								'general_text_color' => array(
									'name'	=> __('General Text Color','MX'),
									'type' 	=> 'color',
									'property' => 'custom-general-color',
									'desc'	=> __('General default text color for div,p,span,a color','MX')
									),
								'a_color' => array(
									'name'	=> __('A default color','MX'),
									'type' 	=> 'color',
									'property' => 'custom-a-color'
									),
								'a_hover_color' => array(
									'name'	=> __('A hover color','MX'),
									'type' 	=> 'color',
									'property' => 'custom-a-hover-color'
									),
								'h_color' => array(
									'name'	=> __('Title default color','MX'),
									'type' 	=> 'color',
									'property' => 'custom-h-color',
									'desc'	=> __('h1,h2,h3,h4,h5,h6 default color','MX')
									),
								'theme_btn_color' => array(
									'name'	=> __('Theme Button Hover Color','MX'),
									'type' 	=> 'color',
									'property' => 'custom-theme-btn-hover-color',
									),
								'theme_title_color' => array(
									'name'	=> __('Page Title Color','MX'),
									'type' 	=> 'color',
									'property' => 'custom-page-title-color',
									),
								'theme_footer_widget_a_color' => array(
									'name'	=> __('Footer Widget A default Color','MX'),
									'type' 	=> 'color',
									'property' => 'custom-footer-widget-a-color',
									),
								'theme_footer_widget_a_hover_color' => array(
									'name'	=> __('Footer Widget A hover default Color','MX'),
									'type' 	=> 'color',
									'property' => 'custom-footer-widget-a-hover-color',
									),
								'theme_footer_a_color' => array(
									'name'	=> __('Footer Copyright A default Color','MX'),
									'type' 	=> 'color',
									'property' => 'custom-footer-a-color',
									),
								'theme_footer_a_hover_color' => array(
									'name'	=> __('Footer Copyright A hover default Color','MX'),
									'type' 	=> 'color',
									'property' => 'custom-footer-a-hover-color',
									)
							)
						),
					'theme_header_color'		=> array(
								'title'	=> __('Header Area Colors Setting','MX'),
								'type'	=>	'moreline',
								'enabled-id' 	=> 'pe_custom_color',
								'enable-group'	=> 'pe_custom_color_group',
								'moreline'	=> array(
										'header_top_banner_color' => array(
											'name'	=> __('Top Banner Background Color','MX'),
											'type' 	=> 'color',
											'property' => 'custom-topbanner-bg-color',
											'desc'	=> __('Header top banner area background color','MX')
											),
										'header_topbar_color' => array(
											'name'	=> __('Topbar Background Color','MX'),
											'type' 	=> 'color',
											'property' => 'custom-topbar-bg-color',
											'desc'	=> __('Header topbar area background color','MX')
											),
										'header_topbar_hover_bg_color' => array(
											'name'	=> __('Topbar Background Hover Color','MX'),
											'type' 	=> 'color',
											'property' => 'custom-topbar-bg-hover-color',
											'desc'	=> __('Header topbar area background hover color','MX')
											),
										'header_topbar_sub_hover_bg_color' => array(
											'name'	=> __('Topbar Sub Menu Background Hover Color','MX'),
											'type' 	=> 'color',
											'property' => 'custom-topbar-sub-bg-hover-color',
											'desc'	=> __('Header topbar area sub menu background hover color','MX')
											),
										'header_topbar_font_color' => array(
											'name'	=> __('Topbar Font Color','MX'),
											'type' 	=> 'color',
											'property' => 'custom-topbar-font-color',
											'desc'	=> __('Header topbar area font color','MX')
											),
										'header_topbar_font_over_color' => array(
											'name'	=> __('Topbar Hover Font Color','MX'),
											'type' 	=> 'color',
											'property' => 'custom-topbar-hover-font-color',
											'desc'	=> __('Header topbar area hover font color','MX')
											)
									)
							),
				'theme_menu_color'		=> array(
					'title'	=> __('Header Menu Colors Setting','MX'),
					'type'	=>	'moreline',
					'enabled-id' 	=> 'pe_custom_color',
					'enable-group'	=> 'pe_custom_color_group',
					'moreline'	=> array(
							'enable_menu_colors'		=> array(
									'name'	=> __('Enable Menu Custom Color','MX'),
									'type' 	=> 'pc',
									'property' => 'custom-menu-color-enable',
									'enable-element' => 'yes',
									'enable-id'		=> '1-pe_custom_menu_color',
									'enable-group'	=> 'pe_custom_menu_color_group'
								),
							'header_menu_bg_color' => array(
									'name'	=> __('Menu Area Background Color','MX'),
									'type' 	=> 'color',
									'property' => 'custom-menu-bg-color',
									'enabled-id'		=> 'pe_custom_menu_color',
									'enable-group'	=> 'pe_custom_menu_color_group'
								),
							'header_menu_border_top_color' => array(
									'name'	=> __('Menu Area Border Top Color','MX'),
									'type' 	=> 'color',
									'property' => 'custom-menu-border-top-color',
									'enabled-id'		=> 'pe_custom_menu_color',
									'enable-group'	=> 'pe_custom_menu_color_group'
								),
							'header_menu_border_bottom_color' => array(
									'name'	=> __('Menu Area Border Bottom Color','MX'),
									'type' 	=> 'color',
									'property' => 'custom-menu-border-bottom-color',
									'enabled-id'		=> 'pe_custom_menu_color',
									'enable-group'	=> 'pe_custom_menu_color_group'
								),
							'header_menu_item_color' => array(
									'name'	=> __('Menu Item Font Color','MX'),
									'type' 	=> 'color',
									'property' => 'custom-menu-item-font-color',
									'enabled-id'		=> 'pe_custom_menu_color',
									'enable-group'	=> 'pe_custom_menu_color_group'
								),
							'header_menu_item_hover_color' => array(
									'name'	=> __('Menu Item Hover Font Color','MX'),
									'type' 	=> 'color',
									'property' => 'custom-menu-item-hover-font-color',
									'enabled-id'		=> 'pe_custom_menu_color',
									'enable-group'	=> 'pe_custom_menu_color_group'
								),
							'header_menu_item_bg_hover_color' => array(
									'name'	=> __('Menu Item Hover Background Color','MX'),
									'type' 	=> 'color',
									'property' => 'custom-menu-item-hover-color',
									'enabled-id'		=> 'pe_custom_menu_color',
									'enable-group'	=> 'pe_custom_menu_color_group'
								),
							'header_submenu_item_color' => array(
									'name'	=> __('Menu Sub Item Font Color','MX'),
									'type' 	=> 'color',
									'property' => 'custom-submenu-item-font-color',
									'enabled-id'		=> 'pe_custom_menu_color',
									'enable-group'	=> 'pe_custom_menu_color_group'
								),
							'header_submenu_item_hover_color' => array(
									'name'	=> __('Menu Sub Item Hover Font Color','MX'),
									'type' 	=> 'color',
									'property' => 'custom-submenu-item-hover-font-color',
									'enabled-id'		=> 'pe_custom_menu_color',
									'enable-group'	=> 'pe_custom_menu_color_group'
								),
							'header_submenu_item_bg_color' => array(
									'name'	=> __('Menu Sub Item Background Color','MX'),
									'type' 	=> 'color',
									'property' => 'custom-submenu-item-bg-color',
									'enabled-id'		=> 'pe_custom_menu_color',
									'enable-group'	=> 'pe_custom_menu_color_group'
								),
							'header_submenu_item_bg_hover_color' => array(
									'name'	=> __('Menu Sub Item Hover Background Color','MX'),
									'type' 	=> 'color',
									'property' => 'custom-submenu-item-bg-hover-color',
									'enabled-id'		=> 'pe_custom_menu_color',
									'enable-group'	=> 'pe_custom_menu_color_group'
								),
							'header_submenu_item_border_color' => array(
									'name'	=> __('Menu Sub Item Border Color','MX'),
									'type' 	=> 'color',
									'property' => 'custom-submenu-item-border-color',
									'enabled-id'		=> 'pe_custom_menu_color',
									'enable-group'	=> 'pe_custom_menu_color_group'
								),
		
							'header_mega_menu_item_color' => array(
									'name'	=> __('Mega Menu Item Font Color','MX'),
									'type' 	=> 'color',
									'property' => 'custom-mega-menu-item-font-color',
									'enabled-id'		=> 'pe_custom_menu_color',
									'enable-group'	=> 'pe_custom_menu_color_group'
								),
							'header_mega_menu_item_hover_color' => array(
									'name'	=> __('Mega Menu Item Hover Font Color','MX'),
									'type' 	=> 'color',
									'property' => 'custom-mega-menu-item-hover-font-color',
									'enabled-id'		=> 'pe_custom_menu_color',
									'enable-group'	=> 'pe_custom_menu_color_group'
								),
								
							'header_mega_submenu_item_color' => array(
									'name'	=> __('Mega Sub Menu Item Font Color','MX'),
									'type' 	=> 'color',
									'property' => 'custom-mega-submenu-item-font-color',
									'enabled-id'		=> 'pe_custom_menu_color',
									'enable-group'	=> 'pe_custom_menu_color_group'
								),
							'header_mega_submenu_item_hover_color' => array(
									'name'	=> __('Mega Sub Menu Item Hover Font Color','MX'),
									'type' 	=> 'color',
									'property' => 'custom-mega-submenu-item-hover-font-color',
									'enabled-id'		=> 'pe_custom_menu_color',
									'enable-group'	=> 'pe_custom_menu_color_group'
								),
							
		
							'header_megamenu_bg_color' => array(
									'name'	=> __('Mega Background Color','MX'),
									'type' 	=> 'color',
									'property' => 'custom-mega-menu-background-color',
									'enabled-id'		=> 'pe_custom_menu_color',
									'enable-group'	=> 'pe_custom_menu_color_group'
								),
							'header_megamenu_border_color' => array(
									'name'	=> __('Mega Border Color','MX'),
									'type' 	=> 'color',
									'property' => 'custom-mega-menu-border-color',
									'enabled-id'		=> 'pe_custom_menu_color',
									'enable-group'	=> 'pe_custom_menu_color_group'
								),
							'header_megamenu_item_border_bottom_color' => array(
									'name'	=> __('Mega Item Border Bottom Color','MX'),
									'type' 	=> 'color',
									'property' => 'custom-mega-menu-item-border-bottom-color',
									'enabled-id'		=> 'pe_custom_menu_color',
									'enable-group'	=> 'pe_custom_menu_color_group'
								),
								
							'header_megamenu_vertical_border_color' => array(
									'name'	=> __('Mega Vertical Menu Border Color','MX'),
									'type' 	=> 'color',
									'property' => 'custom-mega-menu-ver-border-color',
									'enabled-id'		=> 'pe_custom_menu_color',
									'enable-group'	=> 'pe_custom_menu_color_group'
								),
						)
				)
			)
		);
		
	/* Custom CSS */
	$page_content[] = array(
			'section' => 'css',
			'icon'	=>	'fa-css3',
			'name' => __('CSS','MX'),
			'title' => __('Custom CSS Setting','MX'),
			'elements'	=> array(
					'custom_css'		=> array(
						'title'	=> __('Enable Custom CSS','MX'),
						'type'	=>	'moreline',
						'moreline'	=> array(
								'enable_css'		=> array(
									'name'	=> __('Enable Custom CSS','MX'),
									'type' 	=> 'pc',
									'desc' 	=> __('Check here enable custom css for theme','MX'),
									'property' => 'custom-enable-css',
									'enable-element' => 'yes',
									'enable-id'		=> '1-pe_custom_css',
									'enable-group'	=> 'pe_custom_css_group'
									),
								'custom_css' => array(
									'name'	=> __('Custom CSS','MX'),
									'type' 	=> 'textarea',
									'codetype' 	=> 'css',
									'property' => 'custom-css-content',
									'enabled-id' 	=> 'pe_custom_css',
									'enable-group'	=> 'pe_custom_css_group'
									),
								'custom_retina_css' => array(
									'name'	=> __('Custom Retina CSS','MX'),
									'type' 	=> 'textarea',
									'codetype' 	=> 'css',
									'property' => 'custom-css-retina-content',
									'enabled-id' 	=> 'pe_custom_css',
									'enable-group'	=> 'pe_custom_css_group'
									)
							)
						)
					)
			);
	
	/* Custom Scripts */
	$page_content[] = array(
			'section' => 'scripts',
			'icon'	=>	'fa-code',
			'name' => __('Scripts','MX'),
			'title' => __('Custom Scripts Setting','MX'),
			'elements'	=> array(
			'enable_custom_scripts'		=> array(
						'title'	=> __('Enable Custom Scripts','MX'),
						'type'	=>	'moreline',
						'moreline'	=> array(
								'enable_scripts' => array(
									'name'	=> __('Enable Custom Scripts','MX'),
									'type' 	=> 'pe',
									'desc' 	=> __('Check here enable custom scripts for theme','MX'),
									'property' => 'custom-enable-scripts',
									'enable-element' => 'yes',
									'enable-id'		=> '1-pe_custom_scripts',
									'enable-group'	=> 'pe_custom_scripts_group'
									),
								'custom_scripts' => array(
									'name'	=> __('Custom Scripts','MX'),
									'type' 	=> 'textarea',
									'codetype' 	=> 'javascript',
									'property' => 'custom-scripts-content',
									'enabled-id'		=> 'pe_custom_scripts',
									'enable-group'	=> 'pe_custom_scripts_group'
									)
							)
						)
					)
			);
			
	/* Blog Page */
	$page_content[] = array(
			'section' => 'blog',
			'icon'	=> 'fa-comments-o',
			'name' => __('Blog','MX'),
			'title' => __('Blog Setting','MX'),
			'elements'	=> array(
								'blog_setting'	=>	array(
									'title'	=> __('Default Blog Page Setting','MX'),
									'type' 	=> 'moreline',
									'moreline'	=> array(
														'blog_style'	=>	array(
																		'name'	=> __('Blog Style','MX'),
																		'type'	=>	'select',
																		'options'	=> array(0 => __('Normal Style ','MX'), 1 => __('Mini Style','MX')),
																		'property'	=> 'blog-post-show-style'
																),
														'blog_cats_style'	=>	array(
																		'name'	=> __('Blog Category, Tags Style','MX'),
																		'type'	=>	'select',
																		'options'	=> array(0 => __('Normal ','MX'), 1 => __('Masonry ','MX')),
																		'property'	=> 'blog-cats-show-style'
																),
														'blog_page'	=> array(
																		'name'	=> __('Default Masonry Page','MX'),
																		'type' 	=> 'select',
																		'property' => 'blog-masonry-page',
																		'desc'	=> __('Default blog page for category, tag show style just when you choose "Masonry" style.','MX'),
																		'options'	=> mx_get_all_template_type_pages(array('page-blog-ajax.php'))
															),
														'enable_default_post_thumbs' => array(
																		'name'	=> __('Enable Default Post Format Feature Image','MX'),
																		'type'	=>	'pe',
																		'desc' => __('Check to enable show default post format show the feature image.','MX'),
																		'property'	=> 'blog-enable-default-post-thumbs'
																),
														'enable_breadchrumb' => array(
																		'name'	=> __('Category for Single Post Breadchrumb','MX'),
																		'type'	=>	'pe',
																		'desc' => __('Check to enable show single post breadchrumb with category','MX'),
																		'property'	=> 'blog-enable-breadchrumb'
																),
														'enable_viewlike'	=>	array(
																		'name'	=> __('Post View & Like Count','MX'),
																		'type'	=>	'pc',
																		'desc' => __('Turn on enable post page show view, like count information.','MX'),
																		'property'	=> 'blog-viewlike-enable'
																	),
														'enable_author'	=>	array(
																		'name'	=> __('Author Information','MX'),
																		'type'	=>	'pc',
																		'desc' => __('Turn on enable post page show author information.','MX'),
																		'property'	=> 'blog-author-enable'
																	),
														'enable_related'	=>	array(
																		'name'	=> __('Related Post Show','MX'),
																		'type'	=>	'pc',
																		'desc' => __('Turn on enable post page show related posts.','MX'),
																		'property'	=> 'blog-related-enable',
																		'enable-element' => 'yes',
																		'enable-id'		=> '1-pe_blog_related_enable',
																		'enable-group'	=> 'pe_blog_share_related_group'
																	),
														'related_style'	=>	array(
																		'name'	=> __('Related Post Show Style','MX'),
																		'type'	=>	'select',
																		'options'	=> array(0 => __('Style 1','MX'), 1 => __('Style 2','MX'), 2 => __('Style 3','MX'), 3 => __('Style 4','MX'), 4 => __('Style 5','MX')),
																		'property'	=> 'blog-related-style',
																		'enabled-id'		=> 'pe_blog_related_enable',
																		'enable-group'	=> 'pe_blog_share_related_group'
																	),
														'enable_share'	=>	array(
																		'name'	=> __('Share Show','MX'),
																		'type'	=>	'pc',
																		'desc' => __('Turn on enable post page show share.','MX'),
																		'property'	=> 'blog-share-enable',
																		'enable-element' => 'yes',
																		'enable-id'		=> '1-pe_blog_share_enable',
																		'enable-group'	=> 'pe_blog_share_enable_group'
																	),
														'share_type'	=>	array(
																		'name'	=> __('Share Type','MX'),
																		'type'	=>	'radio',
																		'radios'	=> array(0 => __('Default','MX'), 1 => __('Custom Share','MX')),
																		'property'	=> 'blog-share-type',
																		'enabled-id'		=> 'pe_blog_share_enable',
																		'enable-group'	=> 'pe_blog_share_enable_group'
																	),
														'share_content'	=>	array(
																		'name'	=> __('Custom Share Content','MX'),
																		'type'	=>	'textarea',
																		'property'	=> 'blog-share-content',
																		'enabled-id'		=> 'pe_blog_share_enable',
																		'enable-group'	=> 'pe_blog_share_enable_group'
																	)
												)
								)
							)
					);
					
	/* Portfolio Page */
	$page_content[] = array(
			'section' => 'portfolio',
			'icon'	=> 'fa-th-large',
			'name' => __('Portfolio','MX'),
			'title' => __('Portfolio Setting','MX'),
			'elements'	=> array(
								'portfolio_default'	=> array(
											'title'	=> __('Default Portfolio Page Setting','MX'),
											'type'	=>	'moreline',
											'moreline'	=> array(
													'portfolio_page'	=> array(
																		'name'	=> __('Default Portfolio Page','MX'),
																		'type' 	=> 'select',
																		'property' => 'portfolio-default-page',
																		'desc'	=> __('Default portfolio page for category default show style.','MX'),
																		'options'	=> mx_get_all_template_type_pages(array('page-portfolio.php', 'page-portfolio-ajax.php'))
																),
													'enable_breadchrumb' => array(
																		'name'	=> __('Category for Single Post Breadchrumb','MX'),
																		'type'	=>	'pe',
																		'desc' => __('Check to enable show single post breadchrumb with category','MX'),
																		'property'	=> 'portfolio-enable-breadchrumb'
																),
													'enable_viewlike'	=>	array(
																		'name'	=> __('Post View & Like Count','MX'),
																		'type'	=>	'pc',
																		'desc' => __('Turn on enable post page show view, like count information.','MX'),
																		'property'	=> 'portfolio-viewlike-enable'
																	),
													'enable_related'	=>	array(
																		'name'	=> __('Related Post Show','MX'),
																		'type'	=>	'pc',
																		'desc' => __('Turn on enable post page show related posts.','MX'),
																		'property'	=> 'portfolio-related-enable',
																		'enable-element' => 'yes',
																		'enable-id'		=> '1-pe_portfolio_related_enable',
																		'enable-group'	=> 'pe_portfolio_share_related_group'
																),
													'related_style'	=>	array(
																		'name'	=> __('Related Post Show Style','MX'),
																		'type'	=>	'select',
																		'options'	=> array(0 => __('Style 1','MX'), 1 => __('Style 2','MX'), 2 => __('Style 3','MX'), 3 => __('Style 4','MX'), 4 => __('Style 5','MX'), 5 => __('Style 6','MX'), 6 => __('Style 7','MX'), 7 => __('Style 8','MX')),
																		'property'	=> 'portfolio-related-style',
																		'enabled-id'		=> 'pe_portfolio_related_enable',
																		'enable-group'	=> 'pe_portfolio_share_related_group'
																	),
													'enable_share'	=>	array(
																		'name'	=> __('Share Show','MX'),
																		'type'	=>	'pc',
																		'desc' => __('Turn on enable post page show share.','MX'),
																		'property'	=> 'portfolio-share-enable',
																		'enable-element' => 'yes',
																		'enable-id'		=> '1-pe_portfolio_share_enable',
																		'enable-group'	=> 'pe_portfolio_share_enable_group'
																),
													'share_type'	=>	array(
																		'name'	=> __('Share Type','MX'),
																		'type'	=>	'radio',
																		'radios'	=> array(0 => __('Default','MX'), 1 => __('Custom Share','MX')),
																		'property'	=> 'portfolio-share-type',
																		'enabled-id'		=> 'pe_portfolio_share_enable',
																		'enable-group'	=> 'pe_portfolio_share_enable_group'
																),
													'share_content'	=>	array(
																		'name'	=> __('Custom Share Content','MX'),
																		'type'	=>	'textarea',
																		'property'	=> 'portfolio-share-content',
																		'enabled-id'		=> 'pe_portfolio_share_enable',
																		'enable-group'	=> 'pe_portfolio_share_enable_group'
																)
											)
								),
								'portfolio_single_style'	=>	array(
									'title'	=> __('Single Page Style','MX'),
									'type' 	=> 'moreline',
									'moreline'	=> array(
														'portfolio_single_style'	=>	array(
																				'name'	=> __('Single Page Style','MX'),
																				'type'	=>	'select',
																				'options'	=> array(0 => __('Style 1','MX'), 1 => __('Style 2','MX'), 2 => __('Style 3','MX')),
																				'property'	=> 'portfolio-single-style'
																			),
													)
								)
							)
					);

	/* Social Page */			
	$page_content[] = array(
			'section' => 'social',
			'icon'	=> 'fa-twitter',
			'name' => __('Socials','MX'),
			'title' => __('Socials','MX'),
			'elements'	=> array(
				'social'	=> array(
					'title'	=> __('Social Links with http://','MX'),
					'type'	=>	'moreline',
					'moreline'	=> array(
							'social_email'	=> array(
									'name'	=> __('Email','MX'),
									'type' 	=> 'input',
									'property' => 'social-email'
								),
							'social_twitter'	=> array(
									'name'	=> __('Twitter','MX'),
									'type' 	=> 'input',
									'property' => 'social-twitter'
								),
							'social_facebook'	=> array(
									'name'	=> __('Facebook','MX'),
									'type' 	=> 'input',
									'property' => 'social-facebook'
								),
							'social_google_plus'	=> array(
									'name'	=> __('Google Plus','MX'),
									'type' 	=> 'input',
									'property' => 'social-google-plus'
								),
							'social_dribbble'	=> array(
									'name'	=> __('Dribbble','MX'),
									'type' 	=> 'input',
									'property' => 'social-dribbble'
								),
							'social_pinterest'	=> array(
									'name'	=> __('Pinterest','MX'),
									'type' 	=> 'input',
									'property' => 'social-pinterest'
								),
							'social_flickr'	=> array(
									'name'	=> __('Flickr','MX'),
									'type' 	=> 'input',
									'property' => 'social-flickr'
								),
							'social_skype'	=> array(
									'name'	=> __('Skype','MX'),
									'type' 	=> 'input',
									'property' => 'social-skype'
								),
							'social_youtube'	=> array(
									'name'	=> __('Youtube','MX'),
									'type' 	=> 'input',
									'property' => 'social-youtube'
								),
							'social_vimeo'	=> array(
									'name'	=> __('Vimeo','MX'),
									'type' 	=> 'input',
									'property' => 'social-vimeo'
								),
							'social_linkedin'	=> array(
									'name'	=> __('Linkedin','MX'),
									'type' 	=> 'input',
									'property' => 'social-linkedin'
								),
							'social_digg'	=> array(
									'name'	=> __('Digg','MX'),
									'type' 	=> 'input',
									'property' => 'social-digg'
								),
							'social_deviantart'	=> array(
									'name'	=> __('Deviantart','MX'),
									'type' 	=> 'input',
									'property' => 'social-deviantart'
								),
							'social_behance'	=> array(
									'name'	=> __('Behance','MX'),
									'type' 	=> 'input',
									'property' => 'social-behance'
								),
							'social_forrst'	=> array(
									'name'	=> __('Forrst','MX'),
									'type' 	=> 'input',
									'property' => 'social-forrst'
								),
							'social_lastfm'	=> array(
									'name'	=> __('Lastfm','MX'),
									'type' 	=> 'input',
									'property' => 'social-lastfm'
								),
							'social_xing'	=> array(
									'name'	=> __('XING','MX'),
									'type' 	=> 'input',
									'property' => 'social-xing'
								),
							'social_instagram'	=> array(
									'name'	=> __('Instagram','MX'),
									'type' 	=> 'input',
									'property' => 'social-instagram'
								),
							'social_stumbleupon'	=> array(
									'name'	=> __('StumbleUpon','MX'),
									'type' 	=> 'input',
									'property' => 'social-stumbleupon'
								),
							'social_picasa'	=> array(
									'name'	=> __('Picasa','MX'),
									'type' 	=> 'input',
									'property' => 'social-picasa'
								),
							'social_delicious'	=> array(
									'name'	=> __('Delicious','MX'),
									'type' 	=> 'input',
									'property' => 'social-delicious'
								),
							'social_codepen'	=> array(
									'name'	=> __('Codepen','MX'),
									'type' 	=> 'input',
									'property' => 'social-codepen'
								),
							'social_foursquare'	=> array(
									'name'	=> __('Foursquare','MX'),
									'type' 	=> 'input',
									'property' => 'social-foursquare'
								),
							'social_trello'	=> array(
									'name'	=> __('Trello','MX'),
									'type' 	=> 'input',
									'property' => 'social-trello'
								),
							'social_tumblr'	=> array(
									'name'	=> __('Tumblr','MX'),
									'type' 	=> 'input',
									'property' => 'social-tumblr'
								),
							'social_github'	=> array(
									'name'	=> __('Github','MX'),
									'type' 	=> 'input',
									'property' => 'social-github'
								)
						)
				)
			)
		);
		
	$page_content[] =  array('section' => 'update',	'icon'	=> 'fa-bullhorn','name' => __('Update Log','MX') ,'title' => __('Update History', 'MX'),'type'	=> 'update');
				
	$page_content[] =  array('section' => 'import',	'icon'	=> 'fa-retweet','name' => __('Import/Export','MX') ,'title' => __('Import/Export Options', 'MX'),'type'	=> 'import');
	
	$page_content[] =  array('section' => 'get_support','icon'	=> 'fa-question-circle','name' => __('Get Support','MX'),'title' => 'link','type'	=> 'link',	'class'	=>	'light','pagecontent'	=> 'http://support.themefocus.co');
	
	/**
	 * Option Default Value
	 */
	$options_custom_general = array(
		
		//general
		'theme-name'					=>	'',
		'theme-purchase-code'			=>	'',
		'theme-api'						=>	'',
		'theme-update-enable'			=>	'',
		'global-skin'					=>	0,
		'global-layout'					=>	0,
		'global-layout-boxed-padding'	=>	0,
		'global-mobile-enable'			=>	'on',
		'global-sidebar-layout'			=>	2,
		'global-title-align'			=>	0,
		'mega-menu-enable'				=>	'on',
		'bootstrap-fontawesome-cdn'		=>	'off',
		'favicon'						=>	$dir.'/img/favicon.png',
		'rss-feed'						=>	'',
		'google_analytics-position'		=>	1,
		'google_analytics-content'		=>	'',
		
		//header
		'header-banner-enable'			=>	'off',
		'header-topbar-enable'			=>	'off',
		'header-style'					=>	0,
		'header-search-enable'			=>	'on',
		'global-login-enable'			=>	'off',
		'header-social-enable'			=>	'on',
		'header-fixed-menu-enable'		=>	'on',
		'topbar-custom-style'			=>	'',
		'global-login-page'				=>	'',
		'topbar-content'				=>	'',
		'header-custom-enable'			=>	'off',
		'header-custom-content'			=>	'',
		'logo-enable'					=>	'on',
		'logo-image'					=>	$dir.'/img/logo.png',
		'logo-retina-image'				=>	$dir.'/img/logo@2x.png',
		'logo-image-width'				=>	60,
		'logo-image-height'				=>	60,
		'logo-image-padding-top'		=>	0,
		'header-social-padding-top'			=>	14,
		'header-custom-content-padding-top'	=>	10,
		'header-custom-cart-padding-top'	=>	14,
		'header-banner-id'					=>	'',
		'header-banner-content'				=>	'Input Content',

		//footer
		'footer-widget-style'			=>	0,
		'footer-bottom-style'			=>	0,
		'footer-menu-enable'			=>	'off',
		'footer-custom-content-left'	=>	'Copyright &copy; 2009-2017 <a href="http://themeforest.net/user/ThemeFocus">ThemeFocus</a>. All rights reserved.',
		'footer-custom-content-right'	=>	'',
		
		//minibar
		'minibar-enable'				=>	'off',
		'minibar-open'					=>	'off',
		'minibar-custom-style'			=>	'',
		'minibar-icon'					=>	'fa-bell',
		'minibar-content'				=>	'',
		
		//background
		 'global-bg-type'					=>	0,
		 'global-bg-pattern-width'			=>	105,
		 'global-bg-pattern-height'			=>	105,
		 'global-bg-pattern-image'			=>	$dir.'/img/project_papper.png',
		 'global-bg-pattern-retina'			=>	$dir.'/img/project_papper@2x.png',
		 'global-bg-image'					=>	'',
		 'global-bg-color'					=>	'ffffff',
		 
		 'global-header-bg-type'			=>	2,
		 'global-header-bg-pattern-width'	=>	100,
		 'global-header-bg-pattern-height'	=> 	100,
		 'global-header-bg-pattern-image'	=>	'',
		 'global-header-bg-pattern-retina'	=>	'',
		 'global-header-bg-image'			=>	'',
		 'global-header-bg-color'			=>	'ffffff',
		 
		 'global-title-bg-type'				=>	0,
		 'global-title-bg-pattern-width'	=>	200,
		 'global-title-bg-pattern-height'	=> 	200,
		 'global-title-bg-pattern-image'	=>	$dir.'/img/debut_light.png',
		 'global-title-bg-pattern-retina'	=>	$dir.'/img/debut_light@2x.png',
		 'global-title-bg-image'			=>	'',
		 'global-title-bg-color'			=>	'eeeeee',
		 
		 'global-content-bg-type'			=>	2,
		 'global-content-bg-pattern-width'	=>	100,
		 'global-content-bg-pattern-height'	=>	100,
		 'global-content-bg-pattern-image'	=>	'',
		 'global-content-bg-pattern-retina'	=>	'',
		 'global-content-bg-image'			=>	'',
		 'global-content-bg-color'			=>	'ffffff',
		 
		 'global-footer-bg-type'			=>	2,
		 'global-footer-bg-pattern-width'	=>	100,
		 'global-footer-bg-pattern-height'	=>	100,
		 'global-footer-bg-pattern-image'	=>	'',
		 'global-footer-bg-pattern-retina'	=>	'',
		 'global-footer-bg-image'			=>	'',
		 'global-footer-bg-color'			=>	'f9f9f9',
		 'global-footer-border-top-color'	=>	'e3e3e3',
		 'global-footer-border-bottom-color'=>	'e3e3e3',
		 'global-footer-copyright-bg-color'	=>	'f7f7f7',
		 'global-footer-copyright-border-top-color'	=>	'ffffff',

		//font
		'custom-enable-font'			=>	'off',
		'custom-general-font'			=>	0,
		'custom-general-font-weight'	=>	'400,300,700,300italic,400italic,700italic',
		'custom-general-font-size'		=> 14,
		'custom-menu-font'				=>	0,
		'custom-menu-font-weight'		=>	'400,300,700,300italic,400italic,700italic',
		'custom-menu-font-size'			=>	13,
		'custom-menu-sub-font-size'		=>	13,
		'custom-menu-sub-title-font-size'=>	11,
		'custom-title-font'				=>	0,
		'custom-title-font-weight'		=>	'400,300,700,300italic,400italic,700italic',
		'google-font-subset'			=>	'',
		
		//color
		'custom-enable-color'		=>	'off',
		
		//css
		'custom-enable-css'			=>	'off',
		'custom-css-content'		=>	'',
		'custom-css-retina-content'	=>	'',
		
		//scripts
		'custom-enable-scripts'		=>	'off',
		'custom-scripts-content'	=>	'',
		
		//woocommerce
		'woocommerce-page-num'		=>	'20',
		
		'woocommerce-cart-enable'	=>	'off',
		'woocommerce-search-enable'	=>	'on',
		'woocommerce-wish-enable'	=>	'off',
		'woocommerce-share-enable'	=>	'off',
		'woocommerce-share-type'	=>	0,
		'woocommerce-share-content'	=>	'',
		
		//blog
		'blog-post-show-style'		=>	0,
		'blog-enable-breadchrumb'	=>	'off',
		'blog-author-enable'		=>	'off',
		'blog-viewlike-enable'	=>	'off',
		'blog-related-enable'		=>	'off',
		'blog-related-style'		=>	2,
		'blog-share-enable'			=>	'off',
		'blog-share-type'			=>	0,
		'blog-share-content'		=>	'',
		'blog-enable-default-post-thumbs' => 'off',
		
		//portfolio
		'portfolio-default-page'		=>	0,
		'portfolio-enable-breadchrumb'	=>	'off',
		'portfolio-viewlike-enable'		=>	'off',
		'portfolio-related-enable'		=>	'off',
		'portfolio-related-style'		=>	3,
		'portfolio-share-enable'		=>	'off',
		'portfolio-share-type'			=>	0,
		'portfolio-share-content'		=>	'',
		'portfolio-single-style'		=>	0,
		 
		//social 
		'social-email'		=> "",
		'social-twitter'	=> "" ,
		'social-facebook'	=> "" ,
		'social-google-plus'=>	"" ,
		'social-pinterest'	=>	"",
		'social-github'		=>	"",
		'social-linkedin'	=>	"",
		'social-dribbble'	=>	"",
		'social-flickr'		=>	"",
		'social-skype'		=>	"",
		'social-vimeo'		=>	"",
		'social-digg'		=>	"",
		'social-deviantart'	=>	"",
		'social-behance'	=>	"",
		'social-forrst'		=>	"",
		'social-lastfm'		=>	"",
		'social-xing'		=>	"",
		'social-instagram'	=>	"",
		'social-stumbleupon'=>	"",
		'social-picasa'		=>	"",
		'social-delicious'	=>	"",
		'social-codepen'	=>	"",
		'social-foursquare'	=>	"",
		'social-trello'		=>	"",
		'social-tumblr'		=>	"",
		'social-github'		=>	""
					
	);
	
	$options_custom_color = array(
		//theme
		 'theme-color'						=>	'cc3333',
		 'custom-general-color'				=>	'666666',
		 'custom-a-color'					=>	'333333',
		 'custom-a-hover-color'				=>	'cc3333',
		 'custom-h-color'					=>	'666666',
		 'custom-theme-btn-hover-color'		=>	'242424',
		 'custom-page-title-color'			=>	'444444',
		 'custom-footer-widget-a-color'		=>	'555555',
		 'custom-footer-widget-a-hover-color'=>	'cc3333',
		 'custom-footer-a-color'			=>	'555555',
		 'custom-footer-a-hover-color'		=>	'cc3333',
		 
		//topbar
		'custom-topbanner-bg-color'			=>	'2ED5AE',
		'custom-topbar-bg-color'			=>	'343434',
		'custom-topbar-bg-hover-color'		=>	'000000',
		'custom-topbar-sub-bg-hover-color'	=>	'232323',
		'custom-topbar-font-color'			=>	'ffffff',
		'custom-topbar-hover-font-color'	=>	'cc3333',
		
		//menu
		'custom-menu-bg-color'				=>	'ffffff',
		'custom-menu-border-top-color'		=>	'eeeeee',
		'custom-menu-border-bottom-color'	=>	'cc3333',
		'custom-menu-item-hover-color'		=>	'cc3333',
		'custom-menu-item-font-color'		=>	'333333',
		'custom-menu-item-hover-font-color'	=>	'cc3333',
		
		'custom-submenu-item-font-color'		=>	'333333',
		'custom-submenu-item-hover-font-color'	=>	'000000',
		'custom-submenu-item-bg-color'		=>	'ffffff',
		'custom-submenu-item-bg-hover-color'	=>	'eeeeee',
		'custom-submenu-item-border-color'	=>	'e8e8e8',
		
		'custom-mega-menu-background-color'	=>	'ffffff',
		'custom-mega-menu-border-color'		=>	'e8e8e8',
		'custom-mega-menu-item-border-bottom-color'	=>	'eeeeee',
		'custom-mega-menu-item-font-color'		=>	'444444',
		'custom-mega-menu-item-hover-font-color'	=>	'444444',
		'custom-mega-submenu-item-font-color'		=>	'777777',
		'custom-mega-submenu-item-hover-font-color'	=>	'444444',
		
		'custom-mega-menu-ver-border-color'	=>	'cc3333',
		
		);
	
	$page_default_property = array_merge($options_custom_general,$options_custom_color);
	
	/**
	 * Option Config
	 */
	$optionsConfig = array(
		/* type -> menu,submenu */
		/* page_title,menu_title,capability,menu_slug,function,icon_url,position from 100 */
		'menu'	=> array(
				'type'			=>	'menu',
				'option_name' 	=>	'mx_options',
				'page_desc'		=>	'',
				'page_logo'		=>	'',
				'page_title' 	=>	'MX Options',
				'menu_title' 	=>	'MX',
				'capability' 	=>	'manage_options',
				'menu_slug'	 	=>	'mx_setting_page',
				'icon_url'		=>	get_template_directory_uri().'/img/penguin/penguin-icon.png',
				'position'		=>	99,
				'fun'			=>	'',
				'admin_bar'		=>	true,
				'backpage'		=>	true
			),
		'submenu'	=> array(
				'type'			=> 'submenu',
				'parent_slug' 	=> 'mx_setting_page',
				'option_name' 	=> 'mx_options',
				'page_desc'		=> __('Welcome to setting MX theme style!','MX'),
				'page_logo'		=>	get_template_directory_uri().'/img/penguin/penguin_logo.png',
				'page_logo_url'		=> 'http://themefocus.co/mx/',
				'page_title' 	=> 'MX Options',
				'menu_title' 	=> 'MX Options',
				'capability' 	=> 'manage_options',
				'menu_slug'	 	=> 'mx_setting_page',
				'pages'		 	=> $page_content,
				'pages_default_property'	=> $page_default_property,
				'link'			=>	'http://support.themefocus.co',
				'pid'			=>	'6601113',
				'notifier'		=> "http://support.themefocus.co/notifier/mx.xml",
				'update_history'		=> "http://support.themefocus.co/update/?theme=mx",
				'update_opt'		=> "yes"
			)
	);
	
	// custom metas field
	$metasConfig = array();
	
	// general element field
	$generalConfig = array(
			array(	'name' 	=> 'layout-type',
					'title'	=> __('Layout Type','MX'),
					'type'	=>	'radio',
					'radios' => array(__('Use Global','MX'),__('Full Width','MX'),__('Left Sidebar','MX'),__('Right Sidebar','MX')),
					'enable-element'=> 'yes',
					'enable-id'		=> '0-page_layout_type:2-page_layout_type:3-page_layout_type',
					'enable-group'	=> 'page_layout_type_group'
				),
			array(	'name' 	=> 'sidebar-type',
					'title'	=> __('Sidebar','MX'),
					'type'	=>	'selectname',
					'options' => 'wp_registered_sidebars',
					'enabled-id'	=> 'page_layout_type',
					'enable-group'	=> 'page_layout_type_group'
				),
			array(	'name' 	=> 'title-show',
					'title'	=> __('Show Page Header Title','MX'),
					'type'	=>	'pc',
					'default'	=> 'on',
					'enable-element'=> 'yes',
					'enable-id'		=> '1-page_title_show',
					'enable-group'	=> 'page_title_show_group'
			),
			array(	'name' 	=> 'title-align',
					'title'	=> __('Title Style','MX'),
					'type'	=>	'radio',
					'default'	=> 0,
					'radios' => array(__('Use Global','MX'), __('left','MX'),__('center','MX'),__('right','MX') ),
					'enabled-id' => 'page_title_show',
					'enable-group'	=> 'page_title_show_group'
				),
			array(	'name' 	=> 'title-content',
					'title'	=> __('Custom Title Content','MX'),
					'type'	=>	'textarea',
					'enabled-id' => 'page_title_show',
					'enable-group'	=> 'page_title_show_group',
					'desc'	=>	esc_html(__('Support HTML Format content.<h1 class="title"></h1>','MX')),
				),
			array(	'name' 	=> 'title-desc',
					'title'	=> __('Custom Title Description','MX'),
					'type'	=>	'textarea',
					'enabled-id' => 'page_title_show',
					'enable-group'	=> 'page_title_show_group',
					'desc'	=>	__('Support HTML Format content','MX'),
				),
			array(	'name' 	=> 'title-breadcrumb',
					'title'	=> __('Show Title Breadcrumb','MX'),
					'type'	=>	'pc',
					'default'	=> 'on',
					'enabled-id' => 'page_title_show',
					'enable-group'	=> 'page_title_show_group'
				),
			array(	'name' 	=> 'slide-type',
					'title'	=> __('Slider Type','MX'),
					'type'	=>	'radio',
					'radios' => array('None Slider','Layer Slider','Revolution Slider'),
					'enable-element' => 'yes',
					'enable-id'	=> '1-layer_slide_id:2-rev_slide_id',
					'enable-group'	=> 'layer_slide_group',

				),
			array(	'name' 	=> 'layer-slide-id',
					'title'	=> __('Select Layer Slider','MX'),
					'type'	=>	'select',
					'options' => penguin_get_layerslider(),
					'enabled-id' => 'layer_slide_id',
					'enable-group'	=> 'layer_slide_group'
				),
			array(	'name' 	=> 'rev-slide-id',
					'title'	=> __('Select Revolution Slider','MX'),
					'type'	=>	'select',
					'options' => penguin_get_revslider(),
					'enabled-id' => 'rev_slide_id',
					'enable-group'	=> 'layer_slide_group'
				)
		);
	
	// background element field
	$bgConfig = array(
			//background
			array(	'name' 	=> 'page-bg-type',
					'title'	=> __('Page Body Background Type','MX'),
					'type'	=>	'radio',
					'radios' => array(__('Use Global','MX'),__('Pattern','MX'),__('Image','MX'),__('Color','MX')),
					'enable-element'=> 'yes',
					'enable-id'		=> '1-page_bg_pattern:2-page_bg_image:3-page_bg_color',
					'enable-group'	=> 'page_bg_type_group'
				),
			array(	'name' 	=> 'page-bg-pattern-width',
					'title'	=> __('Pattern Image Width','MX'),
					'type'	=>	'number',
					'enabled-id'		=> 'page_bg_pattern',
					'enable-group'	=> 'page_bg_type_group'
			),
			array(	'name' 	=> 'page-bg-pattern-height',
					'title'	=> __('Pattern Image Height','MX'),
					'type'	=>	'number',
					'enabled-id'		=> 'page_bg_pattern',
					'enable-group'	=> 'page_bg_type_group'
			),
			array(	'name' 	=> 'page-bg-pattern-image',
					'title'	=> __('Pattern Image','MX'),
					'type'	=>	'upload',
					'enabled-id'		=> 'page_bg_pattern',
					'enable-group'	=> 'page_bg_type_group'
			),
			array(	'name' 	=> 'page-bg-pattern-retina',
					'title'	=> __('Pattern Retina Image @2x','MX'),
					'type'	=>	'upload',
					'enabled-id'		=> 'page_bg_pattern',
					'enable-group'	=> 'page_bg_type_group'
			),
			array(	'name' 	=> 'page-bg-image',
					'title'	=> __('Background Image','MX'),
					'type'	=>	'upload',
					'enabled-id'		=> 'page_bg_image',
					'enable-group'	=> 'page_bg_type_group'
			),
			array(	'name' 	=> 'page-bg-color',
					'title'	=> __('Background Color','MX'),
					'type'	=>	'color',
					'default'	=>	'ffffff',
					'enabled-id'		=> 'page_bg_color',
					'enable-group'	=> 'page_bg_type_group'
			),
			//header
			array(	'name' 	=> 'page-header-bg-type',
					'title'	=> __('Page Header Background Type','MX'),
					'type'	=>	'radio',
					'radios' => array(__('Use Global','MX'),__('Pattern','MX'),__('Image','MX'),__('Color','MX')),
					'enable-element'=> 'yes',
					'enable-id'		=> '1-page_header_bg_pattern:2-page_header_bg_image:3-page_header_bg_color',
					'enable-group'	=> 'page_header_bg_type_group'
				),
			array(	'name' 	=> 'page-header-bg-pattern-width',
					'title'	=> __('Pattern Image Width','MX'),
					'type'	=>	'number',
					'enabled-id'		=> 'page_header_bg_pattern',
					'enable-group'	=> 'page_header_bg_type_group'
			),
			array(	'name' 	=> 'page-header-bg-pattern-height',
					'title'	=> __('Pattern Image Height','MX'),
					'type'	=>	'number',
					'enabled-id'		=> 'page_header_bg_pattern',
					'enable-group'	=> 'page_header_bg_type_group'
			),
			array(	'name' 	=> 'page-header-bg-pattern-image',
					'title'	=> __('Pattern Image','MX'),
					'type'	=>	'upload',
					'enabled-id'		=> 'page_header_bg_pattern',
					'enable-group'	=> 'page_header_bg_type_group'
			),
			array(	'name' 	=> 'page-header-bg-pattern-retina',
					'title'	=> __('Pattern Retina Image @2x','MX'),
					'type'	=>	'upload',
					'enabled-id'		=> 'page_header_bg_pattern',
					'enable-group'	=> 'page_header_bg_type_group'
			),
			array(	'name' 	=> 'page-header-bg-image',
					'title'	=> __('Background Image','MX'),
					'type'	=>	'upload',
					'enabled-id'		=> 'page_header_bg_image',
					'enable-group'	=> 'page_header_bg_type_group'
			),
			array(	'name' 	=> 'page-header-bg-color',
					'title'	=> __('Background Color','MX'),
					'type'	=>	'color',
					'default'	=>	'ffffff',
					'enabled-id'		=> 'page_header_bg_color',
					'enable-group'	=> 'page_header_bg_type_group'
			),
			// title
			array(	'name' 	=> 'page-title-bg-type',
					'title'	=> __('Page Title Background Type','MX'),
					'type'	=>	'radio',
					'radios' => array(__('Use Global','MX'),__('Pattern','MX'),__('Image','MX'),__('Color','MX')),
					'enable-element'=> 'yes',
					'enable-id'		=> '1-page_title_bg_pattern:2-page_title_bg_image:3-page_title_bg_color',
					'enable-group'	=> 'page_title_bg_type_group'
				),
			array(	'name' 	=> 'page-title-bg-pattern-width',
					'title'	=> __('Pattern Image Width','MX'),
					'type'	=>	'number',
					'enabled-id'		=> 'page_title_bg_pattern',
					'enable-group'	=> 'page_title_bg_type_group'
			),
			array(	'name' 	=> 'page-title-bg-pattern-height',
					'title'	=> __('Pattern Image Height','MX'),
					'type'	=>	'number',
					'enabled-id'		=> 'page_title_bg_pattern',
					'enable-group'	=> 'page_title_bg_type_group'
			),
			array(	'name' 	=> 'page-title-bg-pattern-image',
					'title'	=> __('Pattern Image','MX'),
					'type'	=>	'upload',
					'enabled-id'		=> 'page_title_bg_pattern',
					'enable-group'	=> 'page_title_bg_type_group'
			),
			array(	'name' 	=> 'page-title-bg-pattern-retina',
					'title'	=> __('Pattern Retina Image @2x','MX'),
					'type'	=>	'upload',
					'enabled-id'		=> 'page_title_bg_pattern',
					'enable-group'	=> 'page_title_bg_type_group'
			),
			array(	'name' 	=> 'page-title-bg-image',
					'title'	=> __('Background Image','MX'),
					'type'	=>	'upload',
					'enabled-id'		=> 'page_title_bg_image',
					'enable-group'	=> 'page_title_bg_type_group'
			),
			array(	'name' 	=> 'page-title-bg-color',
					'title'	=> __('Background Color','MX'),
					'type'	=>	'color',
					'default'	=>	'ffffff',
					'enabled-id'		=> 'page_title_bg_color',
					'enable-group'	=> 'page_title_bg_type_group'
			),
			// content
			array(	'name' 	=> 'page-content-bg-type',
					'title'	=> __('Page Content Background Type','MX'),
					'type'	=>	'radio',
					'radios' => array(__('Use Global','MX'),__('Pattern','MX'),__('Image','MX'),__('Color','MX')),
					'enable-element'=> 'yes',
					'enable-id'		=> '1-page_content_bg_pattern:2-page_content_bg_image:3-page_content_bg_color',
					'enable-group'	=> 'page_content_bg_type_group'
				),
			array(	'name' 	=> 'page-content-bg-pattern-width',
					'title'	=> __('Pattern Image Width','MX'),
					'type'	=>	'number',
					'enabled-id'		=> 'page_content_bg_pattern',
					'enable-group'	=> 'page_content_bg_type_group'
			),
			array(	'name' 	=> 'page-content-bg-pattern-height',
					'title'	=> __('Pattern Image Height','MX'),
					'type'	=>	'number',
					'enabled-id'		=> 'page_content_bg_pattern',
					'enable-group'	=> 'page_content_bg_type_group'
			),
			array(	'name' 	=> 'page-content-bg-pattern-image',
					'title'	=> __('Pattern Image','MX'),
					'type'	=>	'upload',
					'enabled-id'		=> 'page_content_bg_pattern',
					'enable-group'	=> 'page_content_bg_type_group'
			),
			array(	'name' 	=> 'page-content-bg-pattern-retina',
					'title'	=> __('Pattern Retina Image @2x','MX'),
					'type'	=>	'upload',
					'enabled-id'		=> 'page_content_bg_pattern',
					'enable-group'	=> 'page_content_bg_type_group'
			),
			array(	'name' 	=> 'page-content-bg-image',
					'title'	=> __('Background Image','MX'),
					'type'	=>	'upload',
					'enabled-id'		=> 'page_content_bg_image',
					'enable-group'	=> 'page_content_bg_type_group'
			),
			array(	'name' 	=> 'page-content-bg-color',
					'title'	=> __('Background Color','MX'),
					'type'	=>	'color',
					'default'	=>	'ffffff',
					'enabled-id'		=> 'page_content_bg_color',
					'enable-group'	=> 'page_content_bg_type_group'
			),
			// footer
			array(	'name' 	=> 'page-footer-bg-type',
					'title'	=> __('Page Footer Background Type','MX'),
					'type'	=>	'radio',
					'radios' => array(__('Use Global','MX'),__('Pattern','MX'),__('Image','MX'),__('Color','MX')),
					'enable-element'=> 'yes',
					'enable-id'		=> '1-page_footer_bg_pattern:2-page_footer_bg_image:3-page_footer_bg_color',
					'enable-group'	=> 'page_footer_bg_type_group'
				),
			array(	'name' 	=> 'page-footer-bg-pattern-width',
					'title'	=> __('Pattern Image Width','MX'),
					'type'	=>	'number',
					'enabled-id'		=> 'page_footer_bg_pattern',
					'enable-group'	=> 'page_footer_bg_type_group'
			),
			array(	'name' 	=> 'page-footer-bg-pattern-height',
					'title'	=> __('Pattern Image Height','MX'),
					'type'	=>	'number',
					'enabled-id'		=> 'page_footer_bg_pattern',
					'enable-group'	=> 'page_footer_bg_type_group'
			),
			array(	'name' 	=> 'page-footer-bg-pattern-image',
					'title'	=> __('Pattern Image','MX'),
					'type'	=>	'upload',
					'enabled-id'		=> 'page_footer_bg_pattern',
					'enable-group'	=> 'page_footer_bg_type_group'
			),
			array(	'name' 	=> 'page-footer-bg-pattern-retina',
					'title'	=> __('Pattern Retina Image @2x','MX'),
					'type'	=>	'upload',
					'enabled-id'		=> 'page_footer_bg_pattern',
					'enable-group'	=> 'page_footer_bg_type_group'
			),
			array(	'name' 	=> 'page-footer-bg-image',
					'title'	=> __('Background Image','MX'),
					'type'	=>	'upload',
					'enabled-id'		=> 'page_footer_bg_image',
					'enable-group'	=> 'page_footer_bg_type_group'
			),
			array(	'name' 	=> 'page-footer-bg-color',
					'title'	=> __('Background Color','MX'),
					'type'	=>	'color',
					'default'	=>	'ffffff',
					'enabled-id'		=> 'page_footer_bg_color',
					'enable-group'	=> 'page_footer_bg_type_group'
			),
			array(	'name' 	=> 'page-footer-border-top-color',
					'title'	=> __('Border Top Color','MX'),
					'type'	=>	'color',
					'default'	=>	'e3e3e3',
					'enabled-id'		=> 'page_footer_bg_color page_footer_bg_image page_footer_bg_pattern',
					'enable-group'	=> 'page_footer_bg_type_group'
			),
			array(	'name' 	=> 'page-footer-border-bottom-color',
					'title'	=> __('Border Bottom Color','MX'),
					'type'	=>	'color',
					'default'	=>	'e3e3e3',
					'enabled-id'		=> 'page_footer_bg_color page_footer_bg_image page_footer_bg_pattern',
					'enable-group'	=> 'page_footer_bg_type_group'
			),
			array(	'name' 	=> 'page-footer-copyright-bg-color',
					'title'	=> __('Copyright Background Color','MX'),
					'type'	=>	'color',
					'default'	=>	'f7f7f7',
					'enabled-id'		=> 'page_footer_bg_color page_footer_bg_image page_footer_bg_pattern',
					'enable-group'	=> 'page_footer_bg_type_group'
			),
			array(	'name' 	=> 'page-footer-copyright-border-top-color',
					'title'	=> __('Copyright Border Top Color','MX'),
					'type'	=>	'color',
					'default'	=>	'ffffff',
					'enabled-id'		=> 'page_footer_bg_color page_footer_bg_image page_footer_bg_pattern',
					'enable-group'	=> 'page_footer_bg_type_group'
			)
		);
	
	//post
	$metasConfig[] = array(
			'id'		=>	'custom-post-setting',
			'type'		=>	'post',
			'priority'	=>	'high',
			'title' 	=>	__('Page Option Setting','MX'),
			'page_elements'	=>	array(	
							'element-general' => array(	
										'id'	=>	'custom-post-general',
										'icon'	=>	'fa-gear',
										'title'	=>	__('General','MX'),
										'fields'	=>	$generalConfig				
								),
							'element-template' => array(	
										'id'	=>	'custom-post-template',
										'icon'	=>	'fa-puzzle-piece',
										'title'	=>	__('Post Options','MX'),
										'fields'	=>	array(	
																array(	'name' 	=> 'video-type',
																		'title'	=> __('Video Type','MX'),
																		'type'	=>	'radio',
																		'radios'	=>	array('Youtube','Vimeo','Custom'),
																		'postformat'	=> 'video'
																),
																array(	'name' 	=> 'video-content',
																		'title'	=> __('Video ID or Custom Code','MX'),
																		'type'	=>	'textarea',
																		'desc'	=>	__('Youtube Id Example : " OapE7K5KyG0 "','MX'),
																		'postformat'	=> 'video'
																),
																array(	'name' 	=> 'gallery-images',
																		'title'	=> __('Gallery Images','MX'),
																		'type'	=>	'gallery',
																		'postformat'	=> 'gallery'
																),
																array(	'name' 	=> 'audio-type',
																		'title'	=> __('Audio Type','MX'),
																		'type'	=>	'radio',
																		'radios'	=>	array('Soundcloud','Custom'),
																		'postformat'	=> 'audio'
																),
																array(	'name' 	=> 'audio-content',
																		'title'	=> __('Soundcloud Url or Custom Code','MX'),
																		'type'	=>	'textarea',
																		'desc'	=>	__('Soundcloud Example: " http://api.soundcloud.com/tracks/38987054"','MX'),
																		'postformat'	=> 'audio'
																),
																array(	'name' 	=> 'related-style',
																		'title'	=> __('Related Post Show Style','MX'),
																		'type'	=>	'select',
																		'options'	=> array(0 => __('Global Style','MX'), 1 => __('Style 1','MX'), 2 => __('Style 2','MX'), 3 => __('Style 3','MX'), 4 => __('Style 4','MX'), 5 => __('Style 5','MX')),
																		'desc'	=>	__('As you alread enabld related show.','MX')
																)
										)
							),
							'element-background' => array(	
										'id'	=>	'custom-post-background',
										'icon'	=>	'fa-picture-o',
										'title'	=>	__('Background','MX'),
										'fields'	=>	$bgConfig
							),
							'element-style' => array(	
										'id'	=>	'custom-post-css-style',
										'icon'	=>	'fa-code',
										'title'	=>	__('Page Custom CSS, Scripts','MX'),
										'fields'	=>	array(	
																array(	'name' 	=> 'post-css-style',
																		'title'	=> __('Custom Page CSS','MX'),
																		'type'	=>	'textarea',
																		'codetype' => 'css'
																),
																array(	'name' 	=> 'post-css-retina-style',
																		'title'	=> __('Custom Page Retina CSS','MX'),
																		'type'	=>	'textarea',
																		'codetype' => 'css'
																),
																array(	'name' 	=> 'post-custom-scripts',
																		'title'	=> __('Custom Page Scripts','MX'),
																		'type'	=>	'textarea',
																		'codetype' => 'css'
																)
															)
							)
				)
		);
									
	//portfolio
	$metasConfig[] = array(
			'id'		=>	'custom-portfolio-setting',
			'type'		=>	'portfolio',
			'priority'	=>	'high',
			'title' 	=>	__('Page Option Setting','MX'),
			'page_elements'	=>	array(	
							'element-general' => array(	
										'id'	=>	'custom-portfolio-general',
										'icon'	=>	'fa-gear',
										'title'	=>	__('General','MX'),
										'fields'	=>	$generalConfig
							),
							'element-template' => array(	
										'id'	=>	'custom-post-template',
										'icon'	=>	'fa-puzzle-piece',
										'title'	=>	__('Portfolio Options','MX'),
										'fields'	=>	array(	
																array(	'name' 	=> 'post-foramt',
																		'title'	=> __('Portfolio Type','MX'),
																		'type'	=>	'radio',
																		'radios'	=>	array(__('Image','MX'),__('Gallery','MX'),__('Video','MX' )),
																		'enable-element' => 'yes',
																		'enable-id' => '0-portfolio_post_format_image:1-portfolio_post_format_gallery:2-portfolio_post_format_video',
																		'enable-group'	=> 'portfolio_post_format'
																		
																),
																array(	'name' 	=> 'gallery-images',
																		'title'	=> __('Gallery Images','MX'),
																		'type'	=>	'gallery',
																		'enabled-id' => 'portfolio_post_format_gallery',
																		'enable-group'	=> 'portfolio_post_format'
																),
																array(	'name' 	=> 'video-type',
																		'title'	=> __('Video Type','MX'),
																		'type'	=>	'radio',
																		'radios'	=>	array('Youtube','Vimeo','Custom'),
																		'enabled-id' => 'portfolio_post_format_video',
																		'enable-group'	=> 'portfolio_post_format'
																),
																array(	'name' 	=> 'video-content',
																		'title'	=> __('Video ID or Custom Code','MX'),
																		'type'	=>	'textarea',
																		'desc'	=>	__('Youtube Id Example : " OapE7K5KyG0 "','MX'),
																		'enabled-id' => 'portfolio_post_format_video',
																		'enable-group'	=> 'portfolio_post_format'
																),
																array(	'name' 	=> 'post-style',
																		'title'	=> __('Single Page Style','MX'),
																		'type'	=>	'select',
																		'options'	=>	array(__('Global Style','MX'),__('Style 1','MX'),__('Style 2','MX'),__('Style 3','MX')),
																),
																array(	'name' 	=> 'portfolio-client',
																		'title'	=> __('Client','MX'),
																		'type'	=>	'input'
																),
																array(	'name' 	=> 'portfolio-skills',
																		'title'	=> __('Skills','MX'),
																		'type'	=>	'input'
																),
																array(	'name' 	=> 'portfolio-download',
																		'title'	=> __('Download Link','MX'),
																		'type'	=>	'input'
																),
																array(	'name' 	=> 'portfolio-custom-fields',
																		'title'	=> __('Custom Portfolio Fields','MX'),
																		'type'	=>	'custom',
																		'fileds' => array('Name','Icon','Value'), 
																		'default'	=>	'Custom Name[|]fa-dollar[|]Custom Value',
																		'desc'	=> __('Icon field use fontawesome icon name','MX')
																),
																array(	'name' 	=> 'related-style',
																		'title'	=> __('Related Post Show Style','MX'),
																		'type'	=>	'select',
																		'options'	=> array(0 => __('Global Style','MX'), 1 => __('Style 1','MX'), 2 => __('Style 2','MX'), 3 => __('Style 3','MX'), 4 => __('Style 4','MX'), 5 => __('Style 5','MX'), 6 => __('Style 6','MX'), 7 => __('Style 7','MX'), 8 => __('Style 8','MX')),
																		'desc'	=>	__('As you alread enabld related show.','MX')
																)
																
										)
							),
							'element-background' => array(	
										'id'	=>	'custom-post-background',
										'icon'	=>	'fa-picture-o',
										'title'	=>	__('Background','MX'),
										'fields'	=>	$bgConfig
							),
							'element-style' => array(	
										'id'	=>	'custom-post-css-style',
										'icon'	=>	'fa-code',
										'title'	=>	__('Page Custom CSS, Scripts','MX'),
										'fields'	=>	array(	
																array(	'name' 	=> 'post-css-style',
																		'title'	=> __('Custom Page CSS','MX'),
																		'type'	=>	'textarea',
																		'codetype' => 'css'
																),
																array(	'name' 	=> 'post-css-retina-style',
																		'title'	=> __('Custom Page Retina CSS','MX'),
																		'type'	=>	'textarea',
																		'codetype' => 'css'
																),
																array(	'name' 	=> 'post-custom-scripts',
																		'title'	=> __('Custom Page Scripts','MX'),
																		'type'	=>	'textarea',
																		'codetype' => 'css'
																)
															)
							)
				)
			);
					
	//page								
	$metasConfig[] = array(
			'id'		=>	'custom-page-setting',
			'type'		=>	'page',
			'priority'	=>	'high',
			'title' 	=>	__('Page Option Setting','MX'),
			'page_elements'	=>	array(	
							'element-general' => array(	
										'id'	=>	'custom-post-general',
										'icon'	=>	'fa-gear',
										'title'	=>	__('General','MX'),
										'fields'	=>	$generalConfig			
							),
							'element-template' => array(	
										'id'	=>	'custom-post-template',
										'icon'	=>	'fa-puzzle-piece',
										'title'	=>	__('Template Options','MX'),
										'fields'	=>	array(	
																array(	'name' 	=> 'portfolio-show-style',
																		'title'	=> __('Portfolio Show Style','MX'),
																		'type'	=>	'select',
																		'options'	=>	array(__('Style 1','MX'),__('Style 2','MX'),__('Style 3','MX'),__('Style 4','MX'),__('Style 5','MX'),__('Style 6','MX'), __('Style 7','MX'), __('Style 8','MX')),
																		'template'	=>	'page-portfolio page-portfolio-ajax',
																),
																array(	'name' 	=> 'portfolio-show-columns',
																		'title'	=> __('Portfolio Show Columns','MX'),
																		'type'	=>	'select',
																		'default'	=>	1,
																		'options'	=>	array(__('2 Columns','MX'),__('3 Columns','MX'),__('4 Columns','MX')),
																		'template'	=>	'page-portfolio',
																),
																array(	'name' 	=> 'page-show-numbers',
																		'title'	=> __('Per Page Show Number','MX'),
																		'type'	=>	'number',
																		'default'	=>	12,
																		'template'	=>	'page-blog page-blog-timeline  page-portfolio page-blog-ajax page-portfolio-ajax',
																),
																array(	'name' 	=> 'page-image-no-crop',
																		'title'	=> __('Page Image Don\'t Crop','MX'),
																		'type'	=>	'pc',
																		'default'	=>	'off',
																		'desc'	=>	__('Turn on will show image didn\'t crop so that show full image.','MX'),
																		'template'	=>	'page-portfolio page-blog-ajax page-portfolio-ajax page-blog-timeline',
																),
																array(	'name' 	=> 'portfolio-show-filters',
																		'title'	=> __('Show Portfolio Filters','MX'),
																		'type'	=>	'pc',
																		'template'	=>	'page-portfolio',
																		'enable-element'	=>	'yes',
																		'enable-id' => '1-portfolio_show_filters',
																		'enable-group'	=> 'portfolio_show_filters_group'
																),
																array(	'name' 	=> 'portfolio-filters-cats',
																		'title'	=> __('Show Categories','MX'),
																		'type'	=>	'input',
																		'desc'	=>	__('Input portfolio category slug use "," like video,photo .','MX'),
																		'template'	=>	'page-portfolio'
																),
																array(	'name' 	=> 'portfolio-show-tags',
																		'title'	=> __('Support Tags','MX'),
																		'type'	=>	'pc',
																		'desc'	=>	__('If you enabled it then filters will support tags.','MX'),
																		'template'	=>	'page-portfolio'
																),
																array(	'name' 	=> 'portfolio-filters-tags',
																		'title'	=> __('Show Tags (Enabled Tags)','MX'),
																		'type'	=>	'input',
																		'desc'	=>	__('Input portfolio tags slug use "," like black,image .','MX'),
																		'template'	=>	'page-portfolio'
																),
																//contact
																array(	'name' 	=> 'contact-show-map',
																		'title'	=> __('Show Map','MX'),
																		'type'	=>	'pc',
																		'template'	=>	'page-contact',
																		'enable-element'=>'yes',
																		'enable-id' => '1-contact_show_map',
																		'enable-group'	=> 'contact_show_map_group'
																),
																array(	'name' 	=> 'contact-map-height',
																		'title'	=> __('Map Show Height','MX'),
																		'type'	=>	'number',
																		'default'	=>	 350,
																		'template'	=>	'page-contact',
																		'enabled-id' => 'contact_show_map',
																		'enable-group'	=> 'contact_show_map_group'
																),
																array(	'name' 	=> 'contact-map-theme',
																		'title'	=> __('Map Skin','MX'),
																		'type'	=>	'select',
																		'options'	=>	array('default','white','black'),
																		'template'	=>	'page-contact',
																		'enabled-id' => 'contact_show_map',
																		'enable-group'	=> 'contact_show_map_group'
																),
																array(	'name' 	=> 'contact-map-latlng',
																		'title'	=> __('Map Lat Lng','MX'),
																		'type'	=>	'input',
																		'desc'	=>	__('e.g., 40.716038,-74.080811','MX'),
																		'template'	=>	'page-contact',
																		'enabled-id' => 'contact_show_map',
																		'enable-group'	=> 'contact_show_map_group'
																),
																array(	'name' 	=> 'contact-map-address',
																		'title'	=> __('Map Address','MX'),
																		'type'	=>	'textarea',
																		'desc'	=> __('Support HTML , e.g., Company Name 123 street, New Valley , USA','MX'),
																		'template'	=>	'page-contact',
																		'enabled-id' => 'contact_show_map',
																		'enable-group'	=> 'contact_show_map_group'
																),
																

																array(	'name' 	=> 'contact-form',
																		'title'	=> __('Contact Form Enable','MX'),
																		'template' => 'page-contact',
																		'type'	=>	'pc',
																		'desc'	=>	__('turn on enabled default contact template contact form.','MX'),
																		'enable-element'=>'yes',
																		'enable-id' => '1-contact_form_enabld',
																		'enable-group'	=> 'contact_form_enabld_group'
																),
																array(	'name' 	=> 'contact-recipient',
																		'title'	=> __('Contact Recipient Email','MX'),
																		'template' => 'page-contact',
																		'type'	=>	'input',
																		'desc'	=>	__('It\'s just for default contact form. ','MX'),
																		'enabled-id' => 'contact_form_enabld',
																		'enable-group'	=> 'contact_form_enabld_group'
																),
																array(	'name' 	=> 'contact-backsender',
																		'title'	=> __('Sender Email Feedback','MX'),
																		'template' => 'page-contact',
																		'type'	=>	'pc',
																		'desc'	=>	__('If check sender will also get a success email when submit success. ','MX'),
																		'enabled-id' => 'contact_form_enabld',
																		'enable-group'	=> 'contact_form_enabld_group'
																),
																array(	'name' 	=> 'form-recaptcha',
																		'title'	=> __('Contact Form Recaptcha','MX'),
																		'type'	=>	'pc',
																		'template' => 'page-contact',
																		'enabled-id' => 'contact_form_enabld',
																		'enable-group'	=> 'contact_form_enabld_group'
																),
																array(	'name' 	=> 'recaptcha-pub-api',
																		'title'	=> __('Recaptcha Public Key','MX'),
																		'template' => 'page-contact',
																		'type'	=>	'input',
																		'desc' =>	__('<strong>The basic registration form requires</strong> that new users copy text from a "Captcha" image to keep spammers out of the site. You need an account at <a href="http://recaptcha.net/">recaptcha.net</a>. Signing up is FREE and easy. Once you have signed up, come back here and enter the following settings:','MX'),
																		'enabled-id' => 'contact_form_enabld',
																		'enable-group'	=> 'contact_form_enabld_group'
																),
																array(	'name' 	=> 'recaptcha-pri-api',
																		'title'	=> __('Recaptcha Private Key','MX'),
																		'template' => 'page-contact',
																		'type'	=>	'input',
																		'enabled-id' => 'contact_form_enabld',
																		'enable-group'	=> 'contact_form_enabld_group'
																),
																array(	'name' 	=> 'recaptcha-theme',
																		'title'	=> __('Recaptcha Theme','MX'),
																		'template' => 'page-contact',
																		'type'	=>	'selectname',
																		'options'	=> array('white', 'red', 'blackglass', 'clean'),
																		'enabled-id' => 'contact_form_enabld',
																		'enable-group'	=> 'contact_form_enabld_group'
																),
																array(	'name' 	=> 'recaptcha-lang',
																		'title'	=> __('Recaptcha Language','MX'),
																		'template' => 'page-contact',
																		'type'	=>	'selectname',
																		'options'	=> array('en','nl','fr','de','pt','ru','es','tr'),
																		'enabled-id' => 'contact_form_enabld',
																		'enable-group'	=> 'contact_form_enabld_group'
																),
																
																//ajax blog
																array(	'name' 	=> 'post-show-style',
																		'title'	=> __('Posts Show Style','MX'),
																		'type'	=>	'select',
																		'options'	=>	array(__('Style 1','MX'),__('Style 2','MX')),
																		'template'	=>	'page-blog page-blog-timeline page-blog-ajax',
																),
																array(	'name' 	=> 'ajax-show-columns',
																		'title'	=> __('Posts Show Columns','MX'),
																		'type'	=>	'select',
																		'default'	=>	1,
																		'options'	=>	array( __('2 Columns','MX'), __('3 Columns','MX'),__('4 Columns','MX' )),
																		'template'	=>	'page-blog-ajax page-portfolio-ajax',
																),
																array(	'name' 	=> 'ajax-enabld-auto',
																		'title'	=> __('Enabled Auto Load','MX'),
																		'type'	=>	'pc',
																		'default'	=>	'off',
																		'template'	=>	'page-blog-ajax page-blog-timeline page-portfolio-ajax',
																),
																array(	'name' 	=> 'ajax-cats',
																		'title'	=> __('Show Categories','MX'),
																		'type'	=>	'input',
																		'desc'	=>	__('Input posts category id use "," like video,photo .','MX'),
																		'template'	=>	'page-blog page-blog-timeline page-blog-ajax',
																		
																),
																array(	'name' 	=> 'portfolio-ajax-cats',
																		'title'	=> __('Show Categories','MX'),
																		'type'	=>	'input',
																		'desc'	=>	__('Input portfolio category slug use "," like video,photo .','MX'),
																		'template'	=>	'page-portfolio-ajax',
																		
																),
																array(	'name' 	=> 'portfolio-ajax-tags',
																		'title'	=> __('Show Tags','MX'),
																		'type'	=>	'input',
																		'desc'	=>	__('Input portfolio tag slug use "," like video,photo .','MX'),
																		'template'	=>	'page-portfolio-ajax',
																		
																),
										)
							),
							'element-background' => array(	
										'id'	=>	'custom-post-background',
										'icon'	=>	'fa-picture-o',
										'title'	=>	__('Background','MX'),
										'fields'	=>	$bgConfig
							),
							'element-style' => array(	
										'id'	=>	'custom-post-css-style',
										'icon'	=>	'fa-code',
										'title'	=>	__('Page Custom CSS, Scripts','MX'),
										'fields'	=>	array(	
																array(	'name' 	=> 'post-css-style',
																		'title'	=> __('Custom Page CSS','MX'),
																		'type'	=>	'textarea',
																		'codetype' => 'css'
																),
																array(	'name' 	=> 'post-css-retina-style',
																		'title'	=> __('Custom Page Retina CSS','MX'),
																		'type'	=>	'textarea',
																		'codetype' => 'css'
																),
																array(	'name' 	=> 'post-custom-scripts',
																		'title'	=> __('Custom Page Scripts','MX'),
																		'type'	=>	'textarea',
																		'codetype' => 'css'
																)
															)
							)
			)
		);
		
	//product							
	$metasConfig[] = array(
			'id'		=>	'custom-product-setting',
			'type'		=>	'product',
			'priority'	=>	'high',
			'title' 	=>	__('Page Option Setting','MX'),
			'page_elements'	=>	array(	
							'element-general' => array(	
										'id'	=>	'custom-post-general',
										'icon'	=>	'fa-gear',
										'title'	=>	__('General','MX'),
										'fields'	=>	$generalConfig			
							),
							'element-background' => array(	
										'id'	=>	'custom-post-background',
										'icon'	=>	'fa-picture-o',
										'title'	=>	__('Background','MX'),
										'fields'	=>	$bgConfig
							),
							'element-style' => array(	
										'id'	=>	'custom-post-css-style',
										'icon'	=>	'fa-code',
										'title'	=>	__('Page Custom CSS, Scripts','MX'),
										'fields'	=>	array(	
																array(	'name' 	=> 'post-css-style',
																		'title'	=> __('Custom Page CSS','MX'),
																		'type'	=>	'textarea',
																		'codetype' => 'css'
																),
																array(	'name' 	=> 'post-css-retina-style',
																		'title'	=> __('Custom Page Retina CSS','MX'),
																		'type'	=>	'textarea',
																		'codetype' => 'css'
																),
																array(	'name' 	=> 'post-custom-scripts',
																		'title'	=> __('Custom Page Scripts','MX'),
																		'type'	=>	'textarea',
																		'codetype' => 'css'
																)
															)
							)
			)
		);
	
	$postsConfig = array(
						'portfolio' => array(
											'id'					=>	'portfolio',
											'name'					=>	__('Portfolios','MX'),
											'menu_name'				=>	__('Portfolios','MX'),
											'singular_name'			=>	__('Portfolio','MX'),
											'add_new'				=>	__('Add New','MX'),
											'add_new_item'			=>	__('Add New','MX'),
											'edit_item'				=>	__('Edit Portfolio','MX'),
											'new_item'				=>	__('New Portfolio','MX'),
											'all_items'				=>	__('All Portfolios','MX'),
											'view_item'				=>	__('View Portfolio','MX'),
											'search_items'			=>	__('Search Portfolio','MX'),
											'not_found'				=>	__('No portfolio found','MX'),
											'not_found_in_trash'	=>	__('No portfolio found in Trash','MX'),
											'parent_item_colon'		=>	'',
											'menu_position'			=>	5,
											'rewrite'				=>	'portfolio',
											'rewrite_rule'			=>	'',
											'menu_icon'				=>	'\f180',
											'supports'				=>	array('title', 'editor' , 'thumbnail', 'comments'),
											'categories'			=>	array(
																			'portfolio_cats'	=>	array(
																										'id'			=>	'portfolio-cats',
																										'name'			=>	__( 'Portfolio Categories' ,'MX'),
																										'menu_name'		=>	__( 'Portfolio Categories' ,'MX'),
																										'singular_name'	=>	__( 'Portfolio Categories' ,'MX'),
																										'search_items'	=>	__( 'Search Portfolio Categories' ,'MX'),
																										'all_items'		=>	__( 'All Portfolio Categories' ,'MX'),
																										'parent_item'	=>	__( 'Parent Category' ,'MX'),
																										'parent_item_colon'	=>	__( 'Parent Category:' ,'MX'),
																										'edit_item'			=>	__( 'Edit Portfolio Category' ,'MX'),
																										'update_item'		=>	__( 'Update Portfolio Category' ,'MX'),
																										'add_new_item'		=>	__( 'Add Portfolio Category' ,'MX'),
																										'new_item_name'		=>	__( 'New Portfolio Category' ,'MX'),
																										'rewrite'			=>	'',
																										'hierarchical'		=>	true
																									),
																			'portfolio_tags'	=>	array(
																										'id'			=>	'portfolio-tags',
																										'name'			=>	__( 'Portfolio Tags' ,'MX'),
																										'menu_name'		=>	__( 'Portfolio Tags' ,'MX'),
																										'singular_name'	=>	__( 'Portfolio Tags' ,'MX'),
																										'search_items'	=>	__( 'Search Portfolio Tags' ,'MX'),
																										'all_items'		=>	__( 'All Portfolio Tags' ,'MX'),
																										'parent_item'	=>	__( 'Parent Tag' ,'MX'),
																										'parent_item_colon'	=>	__( 'Parent Tag:' ,'MX'),
																										'edit_item'			=>	__( 'Edit Portfolio Tag' ,'MX'),
																										'update_item'		=>	__( 'Update Portfolio Tag' ,'MX'),
																										'add_new_item'		=>	__( 'Add Portfolio Tag' ,'MX'),
																										'new_item_name'		=>	__( 'New Portfolio Tag' ,'MX'),
																										'rewrite'			=>	'',
																										'hierarchical'		=>	false
																									)
																		)
											
									)
					);
	$theme_options = get_option("mx_options");
	
	$postsColumnsConfig = array('portfolio' => array(
													'type'		=>	'portfolio',
													'fields'	=>	array(
																		array('id' => 'post-foramt', 'name' => __( 'Post Type' ,'MX')),
																	)
												)
								
					);
	if($theme_options){
		if( isset($theme_options['portfolio-viewlike-enable']) && $theme_options['portfolio-viewlike-enable'] == 'on'){
			$postsColumnsConfig['portfolio']['fields'][] = array('id' => 'post_views','key' => 'post_views_count', 'name' => __( 'Post View' ,'MX'),'type'=>'num');
			$postsColumnsConfig['portfolio']['fields'][] = array('id' => 'post_likes','key' => 'votes_count','name' => __( 'Post Like' ,'MX'),'type'=>'num');
		}
		if( isset($theme_options['blog-viewlike-enable']) && $theme_options['blog-viewlike-enable'] == 'on'){
			$postsColumnsConfig[] = array(
													'type'		=>	'post',
													'fields'	=>	array(
																		array('id' => 'post_views','key' => 'post_views_count', 'name' => __( 'Post View' ,'MX'),'type'=>'num'),
																		array('id' => 'post_likes','key' => 'votes_count', 'name' => __( 'Post Like' ,'MX'),'type'=>'num'),
																	)
												);
		}
	}
					
	// start penguin framework for them
	Penguin::$FRAMEWORK_PATH = "/inc/penguin";
	Penguin::$THEME_NAME = "MX";
	
	$mega_menu = true;
	if($theme_options && isset($theme_options['mega-menu-enable']) && $theme_options['mega-menu-enable'] == 'off'){
		$mega_menu = false;
	}
	
	Penguin::start($optionsConfig , $metasConfig , $postsConfig , $postsColumnsConfig, $mega_menu);
	
	// here need custom return value
	function Penguin_Custom_Posts_Columns_Value($type, $column_name, $id){
		global $mx_options;
		/* start */
		if($type == 'portfolio'){
			if($column_name == 'post-foramt'){
				switch(intval(mx_get_post_meta_key($column_name, $id))){
					case 0: _e('Image','MX');break;
					case 1: _e('Gallery','MX');break;
					case 2: _e('Video','MX');break;
				}
			}
			
			if(mx_get_options_key('portfolio-viewlike-enable') == "on"){
				if($column_name == 'post_views'){
					echo mx_get_post_meta_key('post_views_count', $id, 0);
				}else if($column_name == 'post_likes'){
					echo mx_get_post_meta_key('votes_count', $id , 0);
				}
			}
		}else if($type == 'post' && mx_get_options_key('blog-viewlike-enable') == "on"){
			if($column_name == 'post_views'){
				echo mx_get_post_meta_key('post_views_count', $id, 0);
			}else if($column_name == 'post_likes'){
				echo mx_get_post_meta_key('votes_count', $id , 0);
			}
		}
		/* end */
	}
	
	// here solve portfolio category, tags page nav problem.
	add_action( 'init', 'mx_portfolio_cates_modify_posts_per_page', 0);
	
	function mx_portfolio_cates_modify_posts_per_page(){
		add_filter( 'option_posts_per_page', 'mx_portfolio_cates_option_posts_per_page' );
	}
	
	function mx_portfolio_cates_option_posts_per_page($value){
		global $portfolio_per_page_numbers;
		if( is_tax("portfolio-cats") || is_tax("portfolio-tags") ){
			return $portfolio_per_page_numbers;
		}else{
			return $value;
		}
	}
	
	// theme plugins
	include_once('tools/sidebar_generator.php');
	include_once('plugins-config.php');

	// Disable LayerSlider auto-updates
	function penguin_layerslider_overrides() {
		$GLOBALS['lsAutoUpdateBox'] = false;
	}
	add_action('layerslider_ready', 'penguin_layerslider_overrides');
	
	// Disable VC auto-updates
	function penguin_vcSetAsTheme() {
		vc_set_as_theme(true);
	}
	//add_action( 'vc_before_init', 'penguin_vcSetAsTheme' );
	
	// Disable RevSlider auto-updates
	function penguin_set_revSetAsTheme() {
		if(function_exists( 'set_revslider_as_theme' )){
			set_revslider_as_theme();
		}
	}
	add_action( 'init', 'penguin_set_revSetAsTheme' );
	
	// Generate options CSS
	add_action('admin_init', 'mx_generate_options_css');
	
	// Theme License Notices
	function on_theme_license_notices(){
		global $pagenow;
		if($pagenow == "admin.php" && isset($_GET['page']) && $_GET['page'] == 'mx_setting_page'){
			
		}else{
			$output = 'Hi! Please <a href="'.admin_url().'admin.php?page=mx_setting_page">input your license information</a> of <strong>MX</strong> theme.';
			
			if(mx_get_options_key('theme-purchase-code') != "" && mx_get_options_key('theme-name') != "" && mx_get_options_key('theme-api') != ""){
				$output = '';
			}
			if($output != ''){
			?>
			<div id="penguin-notice-message" style="display:none;" class="updated below-h2"><p><?php echo $output;?><a id="penguin-license-close" href="#" class="penguin-notice-close" style="float: right;"><strong>X</strong></a></p></div>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					jQuery('#wpbody-content .wrap').prepend(jQuery('#penguin-notice-message'));
					jQuery('#penguin-notice-message').show();
					jQuery('#penguin-license-close').click(function() {
						jQuery('#penguin-notice-message').hide();
						return false;
					});
				});
			</script>
			<?php
			}
		}
	}
	add_action('admin_notices', 'on_theme_license_notices');
	
	// Theme Upgrader
	function on_envato_init(){
		if(mx_get_options_key('theme-update-enable') != "on" || mx_get_options_key('theme-purchase-code') == "" || mx_get_options_key('theme-name') == "" || mx_get_options_key('theme-api') == ""){
			 return false;
		}
		
		// include the library
		include_once(get_template_directory().'/envato-wordpress-toolkit-library/class-envato-wordpress-theme-upgrader.php');
		
                $theme_name = trim(mx_get_options_key('theme-name'));
                $theme_api  = trim(mx_get_options_key('theme-api'));

                $upgrader = new Envato_WordPress_Theme_Upgrader($theme_name , $theme_api );
        
	    
		/*
		 *  Uncomment to check if the current theme has been updated
		 */
		 $upgrader->check_for_theme_update(); 
	
		/*
		 *  Uncomment to update the current theme
		 */
		 $upgrader->upgrade_theme();
	}
	add_action('admin_init', 'on_envato_init');
?>