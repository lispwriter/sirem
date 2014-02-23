<?php  global $obox_themename, $input_prefix;

/*****************/
/* Theme Details */

$obox_themename = "Dynamo";
$obox_themeid = "dynamo";
$obox_productid = "1720";
$obox_presstrendsid = "q65mdrz1qw5zkikpdimtrwy39peuxga3i";

/**********************/
/* Include OCMX files */
$include_folders = array("/ocmx/includes/", "/ocmx/theme-setup/", "/ocmx/widgets/", "/ocmx/front-end/", "/ajax/", "/ocmx/interface/");
include_once (get_template_directory()."/ocmx/folder-class.php");
include_once (get_template_directory()."/ocmx/load-includes.php");
include_once (get_template_directory()."/ocmx/custom.php");
include_once (get_template_directory()."/ocmx/maps-custom.php");

/*******************/
/* Set theme setup */

if(!get_option("ocmx_font_support"))
	update_option("ocmx_font_support", true);
add_theme_support( 'woocommerce' );

/*********************/
/* Load Localization */
load_theme_textdomain('ocmx', get_template_directory() . '/lang');

/***********************/
/* Add OCMX Menu Items */

add_action('admin_menu', 'ocmx_add_admin');
function ocmx_add_admin() {
	global $wpdb;

	add_object_page("Theme Options", "Theme Options", 'edit_themes', basename(__FILE__), '', 'http://obox-design.com/images/ocmx-favicon.png');
	add_submenu_page(basename(__FILE__), "General Options", "General", "edit_theme_options", basename(__FILE__), 'ocmx_general_options');
	add_submenu_page(basename(__FILE__), "Adverts", "Adverts", "administrator",  "ocmx-adverts", 'ocmx_advert_options');
	add_submenu_page(basename(__FILE__), "Typography", "Typography", "edit_theme_options", "ocmx-fonts", 'ocmx_font_options');
	add_submenu_page(basename(__FILE__), "Customize", "Customize", "edit_theme_options", "customize.php");
	add_submenu_page(basename(__FILE__), "Help", "Help", "edit_theme_options", "obox-help", 'ocmx_welcome_page');
};

/*****************/
/* Add Nav Menus */

if (function_exists('register_nav_menus')) :
	register_nav_menus( array(
		'top' => __('Top Navigation', '$obox_themename'),
		'primary' => __('Primary Navigation', '$obox_themename'),
		'secondary' => __('Secondary Navigation', '$obox_themename')
	) );
endif;

/************************************************/
/* Fallback Function for WordPress Custom Menus */

function ocmx_fallback() {
	echo '<ul id="nav" class="clearfix">';
	wp_list_pages('title_li=&');
	echo '</ul>';
}


/*******************/
/* Widgetized Page */
function add_widgetized_pages(){
	global $wpdb;
	$get_widget_pages = $wpdb->get_results("SELECT * FROM ".$wpdb->postmeta." WHERE `meta_key` = '_wp_page_template' AND  `meta_value` = 'widget-page.php'");
	foreach($get_widget_pages as $pages) :
		$post = get_post($pages->post_id);
		register_sidebar(array("name" => $post->post_title." Slider", "description" => "Place all 'Home Page Widgets' here."));
		register_sidebar(array("name" => $post->post_title." Body", "description" => "Place all 'Home Page Widgets' here.", "before_title" => '<h4 class="widgettitle">', "after_title" => '</h4><div class="content">', 'before_widget' => '<li id="%1$s" class="widget %2$s">', 'after_widget' => '</div></li>'));
	endforeach;
}
add_action("init", "add_widgetized_pages");


/**************************/
/* WP 3.4 Support         */
global $wp_version;
if ( version_compare( $wp_version, '3.4', '>=' ) )
	add_theme_support( 'custom-background' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );

if ( ! isset( $content_width ) ) $content_width = 980;


/************************/
/* Add WP Custom Header */
function ocmx_header_style() { $do = "nothing"; }
function ocmx_admin_header_style() { $do = "nothing"; }

/// Add support for custom headers
$headerargs = array( 'wp-head-callback' => 'ocmx_header_style', 'admin-head-callback' => 'ocmx_admin_header_style', 'width' => '2000', 'height' => '520',  'header-text' => false, 'random-default' => true);
add_theme_support( 'custom-header', $headerargs );


/******************************************************************************/
/* Each theme has their own "No Posts" styling, so it's kept in functions.php */

function ocmx_no_posts(){ ?>
<li class="post">
	<h2 class="post-title"><a href="#"><?php _e("No Content Found", "ocmx"); ?></a></h2>
	<div class="copy <?php echo $image_class; ?>">
		<?php _e("The content you are looking for does not exist", "ocmx"); ?>
	</div>
</li>
<?php
}

/**************************/
/* Set Up Thumbnails */
function ocmx_setup_image_sizes() {
	//image info: (name, width, height, force-crop)
	add_image_size('4-3-large', 1000, 750, true);
	add_image_size('4-3-medium', 660, 495, true);
	add_image_size('4-3-medium-nocrop', 660, 495, false);
	add_image_size('1-1-medium', 660, 660, true);
	add_image_size('1000auto', 1000);
	add_image_size('660auto', 660);
}

add_action( 'after_setup_theme', 'ocmx_setup_image_sizes' );

/**************************/
/* Facebook Support      */
function get_fbimage() {
	global $post;
	if ( !is_single() ){
		return '';
	}
	$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '', '' );
	$fbimage = null;
	if ( has_post_thumbnail($post->ID) ) {
		$fbimage = $src[0];
	} else {
		global $post, $posts;
		$fbimage = '';
		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i',
		$post->post_content, $matches);
		if(!empty($matches[1]))
			$fbimage = $matches [1] [0];
	}
	if(empty($fbimage)) {
		$fbimage = get_the_post_thumbnail($post->ID);
	}
	return $fbimage;
}


/**********************/
/* CUSTOM LOGIN LOGO  */
function my_custom_login_logo() {
	echo '<style type="text/css">
		h1 a { background-image:url('.get_option("ocmx_custom_login", true).') !important; }
	</style>';
}

add_action('login_head', 'my_custom_login_logo');

/********************/
/* SHOW META ******/
function show_meta() {
	if ( class_exists( 'Woocommerce' ) ) {
		if ( !( is_cart() || is_checkout() ) ) {
			return TRUE;
		}
	} else {
		 return TRUE;
	}
} // show_meta