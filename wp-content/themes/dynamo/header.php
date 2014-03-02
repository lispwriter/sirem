<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!--Set Viewport for Mobile Devices -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>
<?php
	global $page, $paged, $post;
	$tmp = wp_title( '|', false, 'right' );
	echo "NO:$tmp";
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'ocmx' ), max( $paged, $page ) );
?>
</title>
<!-- Setup OpenGraph support-->
<?php if(get_option("ocmx_open_graph") !="yes") {
	$default_thumb = get_option('ocmx_site_thumbnail');
	$fb_image = get_fbimage();
	if(is_home()) : 	
?>

<meta property="og:title" content="<?php bloginfo('name'); ?>"/>
<meta property="og:description" content="<?php bloginfo('description'); ?>"/>
<meta property="og:url" content="<?php echo home_url(); ?>"/>
<meta property="og:image" content="<?php if(isset($default_thumb) && $default_thumb !==""){echo $default_thumb; } else {echo $fb_image;}?>"/>
<meta property="og:type" content="<?php echo "website";?>"/>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>

<?php else : ?>
<meta property="og:title" content="<?php the_title(); ?>"/>
<meta property="og:description" content="<?php echo strip_tags($post->post_excerpt); ?>"/>
<meta property="og:url" content="<?php the_permalink(); ?>"/>
<meta property="og:image" content="<?php if($fb_image ==""){echo $default_thumb;} else {echo $fb_image;} ?>"/>
<meta property="og:type" content="<?php echo "article"; ?>"/>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>

<?php endif; 
}?>
<!-- Begin Styling -->
<?php $spd_base_path = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/"; ?> 
<link rel="stylesheet" type="text/css" href="<?php echo $spd_base_path; ?>wp-content/themes/dynamo/Planer/Planer_Bold/MyFontsWebfontsKit/MyFontsWebfontsKit.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $spd_base_path; ?>wp-content/themes/dynamo/Planer/Planer_Light/MyFontsWebfontsKit/MyFontsWebfontsKit.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $spd_base_path; ?>wp-content/themes/dynamo/Planer/Planer_Medium/MyFontsWebfontsKit/MyFontsWebfontsKit.css" />


<?php if(get_option("ocmx_custom_favicon") != "") : ?>
	<link href="<?php echo get_option("ocmx_custom_favicon"); ?>" rel="icon" type="image/png" />
<?php endif; ?>
<?php wp_head(); ?>
<?php  // Load custom header image for spectific pages
$parentpage = get_template_link(get_post_type().".php");

if(!empty($parentpage) && !is_page())
	$headerid = $parentpage->ID;
elseif(is_page())
	$headerid = $post->ID;

if(isset($headerid)) :
$header_bg_image = get_post_meta($headerid, "header_image", true);
$header_bg_attributes = get_post_meta($headerid, "header_image_attributes", true);

if($header_bg_image  != '' || !empty($header_bg_attributes["colour"])) : ?>
	<style>#title-container{
		background-image: <?php if($header_bg_image != '') echo "url($header_bg_image);"; ?>;
		background-repeat: <?php echo $header_bg_attributes['repeat']; ?>;
		background-position: <?php echo $header_bg_attributes['position']; ?>;
		background-color: <?php echo $header_bg_attributes['colour']; ?>;
		}
	</style>
<?php endif;
endif; ?>

</head>

<body <?php body_class(''); ?>>

<div id="wrapper" class="<?php echo get_option("ocmx_site_layout"); ?> <?php if(!is_active_sidebar('slider')) echo "no-slider"; ?>">

	<div id="header-container">
		<?php 
		$show_contact = get_option("ocmx_header_contact_show");
		$phone = get_option("ocmx_header_contact_phone");
		$email = get_option("ocmx_header_contact_email");
		$facebook = get_option("ocmx_header_contact_facebook");
		$twitter = get_option("ocmx_header_contact_twitter");
		$linkedin = get_option("ocmx_header_contact_linkedin");
		$googleplus = get_option("ocmx_header_contact_gplus");
		$pinterest = get_option("ocmx_header_contact_pinterest");
		$search = get_option("ocmx_header_search");
		if($show_contact !="false" ) : ?>
			<div id="header-contact-container" class="clearfix">
				<div id="header-contacts" class="clearfix">
					<?php if(isset($search) && $search !="no") : ?>
						<div class="header-search">
							<form action="<?php bloginfo("url"); ?>" method="get" class="header-form">
								<input type="text" name="s" id="s" class="search-form" maxlength="50" value="" placeholder="Search" />
								<input type="submit" class="search_button" value="" />
								<span class="icon-search"></span>
							</form>
						</div>
					<?php endif; ?>
					<?php if ( $phone != '' || $email != '' ) { ?>
						<ul class="header-contact">
							<?php if( $phone !="" ) : ?><li class="header-number"><?php echo $phone; ?></li><?php endif; ?>
							<?php if( $email !="" ) : ?><li class="header-email"><a href="mailto:<?php echo $email; ?>" target="_blank"><?php echo $email; ?></a></li><?php endif; ?>
						</ul>
					<?php } // If contact details

					if( $facebook !="" || $twitter !="" || $linkedin !="" || $pinterest !="") { ?>
						<ul class="header-social">
							<?php if($facebook !="") : ?><li class="header-facebook"><a href="<?php echo $facebook; ?>" target="_blank"><?php _e("Facebook"); ?></a></li><?php endif; ?>
							<?php if($twitter !="") : ?><li class="header-twitter"><a href="<?php echo $twitter; ?>" target="_blank"><?php _e("Twitter"); ?></a></li><?php endif; ?>
							<?php if($linkedin !="") : ?><li class="header-linkedin"><a href="<?php echo $linkedin; ?>" target="_blank"><?php _e("LinkedIn"); ?></a></li><?php endif; ?>
							<?php if($googleplus !="") : ?><li class="header-gplus"><a href="<?php echo $googleplus; ?>" target="_blank"><?php _e("Google Plus"); ?></a></li><?php endif; ?>
							<?php if($pinterest !="") : ?><li class="header-pinterest"><a href="<?php echo $pinterest; ?>" target="_blank"><?php _e("Pinterest"); ?></a></li><?php endif; ?>
						</ul>
					<?php }; // If social icons ?>

					<?php
					$headercart = get_option("ocmx_headercart");

					if ( class_exists( "WooCommerce" ) && $headercart =="yes") {
						get_template_part( 'functions/header-cart' );
					} // If WooCommerce is Active ?>

					<div id="top-navigation-container">
						<?php wp_nav_menu(array(
								'menu' => 'Top Obox Nav',
								'menu_id' => 'top-nav',
								'menu_class' => 'clearfix',
								'sort_column' 	=> 'menu_order',
								'theme_location' => 'top',
								'container' => 'ul')
							); ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
		
	    <div id="header" class="clearfix">
	        <div class="logo">
	        	<h1>
	                <a href="<?php echo home_url(); ?>">
	                    <?php if(get_option("ocmx_custom_logo")) : ?>
	                        <img src="<?php echo get_option("ocmx_custom_logo"); ?>" alt="<?php bloginfo('name'); ?>" />
	                    <?php else : ?>
	                    	<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" />
	                    <?php endif; ?>
	                </a>
	            </h1>
	        </div> 
	        <a id="menu-drop-button" href="#"></a>
	        <div id="navigation-container" class="clearfix">
	        	<?php if (function_exists("wp_nav_menu")) :	
			            wp_nav_menu(array(
			                'menu' => 'Bettech Nav',
			                'menu_id' => 'nav',
			                'menu_class' => 'clearfix',
			                'sort_column' 	=> 'menu_order',
			                'theme_location' => 'primary',
			                'container' => 'ul',
			                'fallback_cb' => 'ocmx_fallback')
			
			        );
			    endif; ?>
	        </div>
	    </div>
	</div>
	<div id="content-container" class="<?php if(is_tax('product_cat') || is_post_type_archive('product') || is_singular('product')) : echo get_option("ocmx_shop_sidebar_layout"); else : echo get_option("ocmx_sidebar_layout"); endif;?> clearfix">