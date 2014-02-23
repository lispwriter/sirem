<?php header('Content-type: text/css'); 
wp_reset_postdata();

if(get_option('ocmx_meta_date_page') && get_option('ocmx_meta_author_page') !='true' && is_page()) { ?>
.post-title-block{display: none;}

<?php } // Load customizer styles
if(get_option("obox_ignore_colours") != "yes"): ?>
	
	<?php 
	
	// Header - Menu
	
	if(get_option("obox_header_background")) : ?>
		#header-container{background-color: <?php echo get_option('obox_header_background');?>;}
	<?php endif;
	
	if(get_option("obox_navigation_font_color")) : ?>
		ul#nav li a{color: <?php echo get_option('obox_navigation_font_color');?>;}
	<?php endif;
	
	if(get_option("obox_navigation_hover")) : ?>
		ul#nav li a:hover{color: <?php echo get_option('obox_navigation_hover');?>;}
	<?php endif;
	
	if(get_option("obox_subnav_background")) : ?>
		ul#nav ul.sub-menu, ul#nav .children{background-color: <?php echo get_option('obox_subnav_background');?>;}
	<?php endif;
	
	if(get_option("obox_subnav_link")) : ?>
		ul#nav ul.sub-menu li a, ul#nav .children li a{color: <?php echo get_option('obox_subnav_link');?>;}
	<?php endif;
	
	if(get_option("obox_subnav_link_hover")) : ?>
		ul#nav ul.sub-menu li a:hover, ul#nav .children li a:hover{color: <?php echo get_option('obox_subnav_link_hover');?>;}
	<?php endif;
	
	
	// Header - Page Title
	
	if(get_option("obox_header_pagetitle_background")) : ?>
		#title-container{background-color: <?php echo get_option('obox_header_pagetitle_background');?>;}
	<?php endif;
	
	if(get_option("obox_header_pagetitle_text")) : ?>
		.title-block h2{color: <?php echo get_option('obox_header_pagetitle_text');?>;}
	<?php endif;
	
	if(get_option("obox_header_pagetitle_blurb")) : ?>
		.title-block p{color: <?php echo get_option('obox_header_pagetitle_blurb');?>;}
	<?php endif;
	
	
	// Header - Breadcrumbs
	
	if(get_option("obox_header_breadcrumbs_background")) : ?>
		#crumbs-container{background-color: <?php echo get_option('obox_header_breadcrumbs_background');?>;}
	<?php endif;
	
	if(get_option("obox_header_breadcrumbs_border")) : ?>
		#crumbs-container{border-color: <?php echo get_option('obox_header_breadcrumbs_border');?>; box-shadow: none;}
	<?php endif;
	
	if(get_option("obox_header_breadcrumbs_text")) : ?>
		#crumbs li, #crumbs .current, #crumbs .current a{color: <?php echo get_option('obox_header_breadcrumbs_text');?>;}
	<?php endif;
	
	if(get_option("obox_header_breadcrumbs_link")) : ?>
		#crumbs a{color: <?php echo get_option('obox_header_breadcrumbs_link');?>;}
	<?php endif;
	
	if(get_option("obox_header_breadcrumbs_link_hover")) : ?>
		#crumbs a:hover{color: <?php echo get_option('obox_header_breadcrumbs_link_hover');?>;}
	<?php endif;
	
	
	// Content - Contained
	if(get_option("obox_content_contained_pagebg")) : ?>
		#content-container, #content, #wrapper.boxed #widget-block, .slider, #content-container{background: <?php echo get_option('obox_content_contained_pagebg');?>;}   
	<?php endif;
	
	if(get_option("obox_content_contained_background")) : ?>
		#widget-block, .post-content, .products-single .type-product, .products .product, .portfolio-list .column, .content-widget .column, .portfolio-content, #comments, #disqus_thread, .features-widget .features-widget-item, #home_page_downs .widget_text, #home_page_sides .widget:nth-child(2n+2), .cart_totals table, .related, .upsells, .portfolio-categories{background: <?php echo get_option('obox_content_contained_background');?>;}
	<?php endif;
	
	if(get_option("obox_content_contained_background")) : ?>
    .testimonials-content-widget{background: none <?php echo get_option('obox_content_contained_background');?>;}
	<?php endif;
	
	if(get_option("obox_content_contained_posttitle")) : ?>
		.post-title, .post-title a, .contained .post-title a, .products .product h3, .product_title, .entry-content h2, .service-title a, .service-title, #comments h2, .content-widget .post-title a, .page-title, .page-title a, .copy h2, .copy h2 a, .copy h3 .copy h3 a, .copy h4, .copy h4 a, .related.products h2, .features-widget h2, .single h3.post-title a:hover, #reply-title{color: <?php echo get_option('obox_content_contained_posttitle');?>;}
	<?php endif;
	
	if(get_option("obox_content_contained_posttitle_hover")) : ?>
		.post-title:hover, .post-title a:hover, .contained .post-title a:hover, .service-title a:hover, .products .product h3:hover, .content-widget .post-title a:hover, .page-title a:hover, .copy h2 a:hover, .copy h3 a:hover, .copy h4 a:hover{color: <?php echo get_option('obox_content_contained_posttitle_hover');?>;}
	<?php endif;
	
	if(get_option("obox_content_contained_text")) : ?>
		.contained .copy p, .entry-content p, .content, #comments, .features-widget p, .features-widget h5, #home_page_downs .widgettitle{color: <?php echo get_option('obox_content_contained_text');?>;}
	<?php endif;
	
	if(get_option("obox_content_contained_link")) : ?>
		.contained .copy a, .post-date a, .content a, #comments a, .portfolio-categories a, .portfolio-meta a, .next-prev-post-nav a, .content-widget .read-more, .post-content .read-more{color: <?php echo get_option('obox_content_contained_link');?>;}
	<?php endif;
	
	if(get_option("obox_content_contained_link_hover")) : ?>
		.contained .copy a:hover, .post-date a:hover, .content a:hover, #comments a:hover, .portfolio-categories a:hover, .portfolio-meta a:hover, .next-prev-post-nav a:hover, .content-widget .read-more:hover, .post-content .read-more:hover{color: <?php echo get_option('obox_content_contained_link_hover');?>;}
	<?php endif;
	
	if(get_option("obox_content_contained_meta")) : ?>
		.contained .post-date, .content-widget .post-date, .comment .date{color: <?php echo get_option('obox_content_contained_meta');?>;}
	<?php endif;
	
	if(get_option("obox_content_contained_border")) : ?>
		ul#nav ul.sub-menu li, ul#nav .children li, .post-meta, .comment, .comment .children, .next-prev-post-nav, .features-widget .column, .portfolio-categories li, .portfolio-meta li, .portfolio-meta, .testimonials-content-widget{border-color: <?php echo get_option('obox_content_contained_border');?>;}
	<?php endif;
	
	if(get_option("obox_content_contained_comment_reply_background")) : ?>
		#respond{background-color: <?php echo get_option('obox_content_contained_comment_reply_background');?>;}
	<?php endif;
	
	if(get_option("obox_content_contained_comment_reply_text")) : ?>
		#respond #reply-title, #respond .comment-notes, #respond .logged-in-as, #respond label, #respond .form-allowed-tags, #respond .logged-in-as a{color: <?php echo get_option('obox_content_contained_comment_reply_text');?>;}
	<?php endif;
	
	
	// Content - Non Contained
	
	if(get_option("obox_content_not_contained_posttitle")) : ?>
		.non-contained .post-title a, #home_page_three_column .widgettitle, #home_page_three_column .widgettitle a, .single h3.post-title a:hover{color: <?php echo get_option('obox_content_not_contained_posttitle');?>;}
	<?php endif;
	
	if(get_option("obox_content_not_contained_posttitle_hover")) : ?>
		.non-contained .post-title a:hover, #home_page_three_column .widgettitle a:hover{color: <?php echo get_option('obox_content_not_contained_posttitle_hover');?>;}
	<?php endif;
	
	if(get_option("obox_content_not_contained_text")) : ?>
		.non-contained .copy p{color: <?php echo get_option('obox_content_not_contained_text');?>;}
	<?php endif;
	
	if(get_option("obox_content_not_contained_link")) : ?>
		.non-contained .copy a{color: <?php echo get_option('obox_content_not_contained_link');?>;}
	<?php endif;
	
	if(get_option("obox_content_not_contained_link_hover")) : ?>
		.non-contained .copy a:hover{color: <?php echo get_option('obox_content_not_contained_link_hover');?>;}
	<?php endif;
	
	if(get_option("obox_content_not_contained_link_hover")) : ?>
		.non-contained .copy a:hover{color: <?php echo get_option('obox_content_not_contained_link_hover');?>;}
	<?php endif;
	
	
	// Content - eCommerce
	
	if(get_option("obox_content_ecommerce_borders")) : ?>
		table td, table th, .cart_totals th, .cart_totals td, .cart_totals table, .shipping-calculator-form, .shipping-calculator-form p{border-color: <?php echo get_option('obox_content_ecommerce_borders');?>;}
	<?php endif;
	
	if(get_option("obox_content_ecommerce_price")) : ?>
		.price{color: <?php echo get_option('obox_content_ecommerce_price');?>;}
	<?php endif;
	
	if(get_option("obox_content_ecommerce_sale")) : ?>
		.onsale{background-color: <?php echo get_option('obox_content_ecommerce_sale');?>;}
	<?php endif;
	
	if(get_option("obox_content_ecommerce_tab_background")) : ?>
		.tabs li a{background-color: <?php echo get_option('obox_content_ecommerce_tab_background');?>;}
	<?php endif;
	
	if(get_option("obox_content_ecommerce_tab_active")) : ?>
		.tabs li.active a{background-color: <?php echo get_option('obox_content_ecommerce_tab_active');?>;}
	<?php endif;
	
	if(get_option("obox_content_ecommerce_tab_border")) : ?>
		.tabs li a, .tabs, .upsells .products, .related, .related .products, .upsells .product, .related .product, .products .product img, .product_list_widget img{border-color: <?php echo get_option('obox_content_ecommerce_tab_border');?>;}
	<?php endif;
	
	if(get_option("obox_content_ecommerce_tab_text")) : ?>
		.tabs li a, .tabs li.active a{color: <?php echo get_option('obox_content_ecommerce_tab_text');?>;}
	<?php endif;
	
	
	// Buttons - Content
	
	if(get_option("obox_button_background")) : ?>
		#searchform input[type=submit]{background-color: <?php echo get_option('obox_button_background');?>;}
	<?php endif;
	
	if(get_option("obox_button_text")) : ?>
		#searchform input[type=submit], a.read-more{color: <?php echo get_option('obox_button_text');?>;}
	<?php endif;
	
	if(get_option("obox_button_background_hover")) : ?>
		#searchform input[type=submit]:hover{background-color: <?php echo get_option('obox_button_background_hover');?>;}
	<?php endif;
	
	if(get_option("obox_button_text_hover")) : ?>
		#searchform input[type=submit]:hover, a.read-more:hover{color: <?php echo get_option('obox_button_text_hover');?>;}
	<?php endif;
	
	if(get_option("obox_button_readmore")) : ?>
		.content-widget .read-more, .post-content .read-more{color: <?php echo get_option('obox_button_readmore');?>;}
	<?php endif;
	
	if(get_option("obox_button_readmore_hover")) : ?>
		.content-widget .read-more:hover, .post-content .read-more:hover{color: <?php echo get_option('obox_button_readmore_hover');?>;}
	<?php endif;
	
	if(get_option("obox_button_comment_background")) : ?>
		#respond #submit{background-color: <?php echo get_option('obox_button_comment_background');?>;}
	<?php endif;
	
	if(get_option("obox_button_comment_text")) : ?>
		#respond #submit{color: <?php echo get_option('obox_button_comment_text');?>;}
	<?php endif;
	
	if(get_option("obox_button_comment_background_hover")) : ?>
		#respond #submit:hover{background-color: <?php echo get_option('obox_button_comment_background_hover');?>;}
	<?php endif;
	
	if(get_option("obox_button_comment_text_hover")) : ?>
		#respond #submit:hover{color: <?php echo get_option('obox_button_comment_text_hover');?>;}
	<?php endif;
	
	if(get_option("obox_button_pagination_background")) : ?>
		.pagination .next a, .pagination .previous a{background-color: <?php echo get_option('obox_button_pagination_background');?>;}
	<?php endif;
	
	if(get_option("obox_button_pagination_background_hover")) : ?>
		.pagination .next a:hover, .pagination .previous a:hover{background-color: <?php echo get_option('obox_button_pagination_background_hover');?>;}
	<?php endif;
	
	
	// Buttons - eCommerce
	
	if(get_option("obox_button_ecommerce_background")) : ?>
		.add_to_cart_button, .added_to_cart, .single_add_to_cart_button, .button.product_type_variable, .widget_shopping_cart .button, .woocommerce-message .button, .products .product .added_to_cart, .widget_shopping_cart .button.checkout, .shop_table .checkout-button, .price_slider_wrapper .button, #payment .place-order input[type=submit], input[name=update_cart], .widget_shopping_cart .button.checkout, .shop_table .checkout-button{background-color: <?php echo get_option('obox_button_ecommerce_background');?>;}
	<?php endif;
	
	if(get_option("obox_button_ecommerce_text")) : ?>
		.add_to_cart_button, .added_to_cart, .single_add_to_cart_button, .button.product_type_variable, .widget_shopping_cart .button, .woocommerce-message .button, .products .product .added_to_cart, .widget_shopping_cart .button.checkout, .shop_table .checkout-button, .price_slider_wrapper .button, #payment .place-order input[type=submit], input[name=update_cart], .widget_shopping_cart .button.checkout, .shop_table .checkout-button{color: <?php echo get_option('obox_button_ecommerce_text');?>;}
	<?php endif;
	
	if(get_option("obox_button_ecommerce_background_hover")) : ?>
		.add_to_cart_button:hover, .added_to_cart:hover, .single_add_to_cart_button:hover, .button.product_type_variable:hover, .widget_shopping_cart .button:hover, .woocommerce-message .button:hover, .products .product .added_to_cart:hover, .widget_shopping_cart .button.checkout:hover, .shop_table .checkout-button:hover, .price_slider_wrapper .button:hover, #payment .place-order input[type=submit]:hover, input[name=update_cart]:hover, .widget_shopping_cart .button.checkout:hover, .shop_table .checkout-button:hover{background-color: <?php echo get_option('obox_button_ecommerce_background_hover');?>;}
	<?php endif;
	
	if(get_option("obox_button_ecommerce_text_hover")) : ?>
		.add_to_cart_button:hover, .added_to_cart:hover, .single_add_to_cart_button:hover, .button.product_type_variable:hover, .widget_shopping_cart .button:hover, .woocommerce-message .button:hover, .products .product .added_to_cart:hover, .widget_shopping_cart .button.checkout:hover, .shop_table .checkout-button:hover, .price_slider_wrapper .button:hover, #payment .place-order input[type=submit]:hover, input[name=update_cart]:hover, .widget_shopping_cart .button.checkout:hover, .shop_table .checkout-button:hover{color: <?php echo get_option('obox_button_ecommerce_text_hover');?>;}
	<?php endif;
	
	if(get_option("obox_button_quantity")) : ?>
		.quantity .plus, .quantity .minus{background-color: <?php echo get_option('obox_button_quantity');?>;}
	<?php endif;
	
	if(get_option("obox_button_quantity_hover")) : ?>
		.quantity .plus:hover, .quantity .minus:hover{background-color: <?php echo get_option('obox_button_quantity_hover');?>;}
	<?php endif;
	
	if(get_option("obox_button_coupon")) : ?>
		td .coupon .button{background-color: <?php echo get_option('obox_button_coupon');?>;}
	<?php endif;
	
	if(get_option("obox_button_coupon_text")) : ?>
		td .coupon .button{color: <?php echo get_option('obox_button_coupon_text');?>;}
	<?php endif;
	
	if(get_option("obox_button_coupon_hover")) : ?>
		td .coupon .button:hover{background-color: <?php echo get_option('obox_button_coupon_hover');?>;}
	<?php endif;
	
	if(get_option("obox_button_coupon_text_hover")) : ?>
		td .coupon .button:hover{color: <?php echo get_option('obox_button_coupon_text_hover');?>;}
	<?php endif;
	
	
	// Sidebar - Blog
	
	if(get_option("obox_sidebar_blog_background")) : ?>
		.blog-sidebar, .related-services-container{background-color: <?php echo get_option('obox_sidebar_blog_background');?>;}
	<?php endif;
	
	if(get_option("obox_sidebar_blog_widgettitle")) : ?>
		.blog-sidebar .widgettitle, .related-services-container .widgettitle{color: <?php echo get_option('obox_sidebar_blog_widgettitle');?>;}
	<?php endif;
	
	if(get_option("obox_sidebar_blog_text")) : ?>
		.blog-sidebar, .blog-sidebar p, .related-services-container, .related-services-container p{color: <?php echo get_option('obox_sidebar_blog_text');?>;}
	<?php endif;
	
	if(get_option("obox_sidebar_blog_link")) : ?>
		.blog-sidebar a, .related-services-container a{color: <?php echo get_option('obox_sidebar_blog_link');?>;}
	<?php endif;
	
	if(get_option("obox_sidebar_blog_link_hover")) : ?>
		.blog-sidebar a:hover, related-services-container a:hover{color: <?php echo get_option('obox_sidebar_blog_link_hover');?>;}
	<?php endif;
	
	
	// Sidebar - eCommerce
	
	if(get_option("obox_sidebar_ecommerce_background")) : ?>
		.shop-sidebar{background-color: <?php echo get_option('obox_sidebar_ecommerce_background');?>;}
	<?php endif;
	
	if(get_option("obox_sidebar_ecommerce_widgettitle")) : ?>
		.shop-sidebar .widgettitle{color: <?php echo get_option('obox_sidebar_ecommerce_widgettitle');?>;}
	<?php endif;
	
	if(get_option("obox_sidebar_ecommerce_text")) : ?>
		.shop-sidebar, .shop-sidebar p, .widget_shopping_cart .total{color: <?php echo get_option('obox_sidebar_ecommerce_text');?>;}
	<?php endif;
	
	if(get_option("obox_sidebar_ecommerce_link")) : ?>
		.shop-sidebar a{color: <?php echo get_option('obox_sidebar_ecommerce_link');?>;}
	<?php endif;
	
	if(get_option("obox_sidebar_ecommerce_link_hover")) : ?>
		.shop-sidebar a:hover{color: <?php echo get_option('obox_sidebar_ecommerce_link_hover');?>;}
	<?php endif;
	
	if(get_option("obox_sidebar_ecommerce_separator")) : ?>
		.product_list_widget li{border-color: <?php echo get_option('obox_sidebar_ecommerce_separator');?>;}
	<?php endif;
	
	
	// Site Wide - Call to Action
	
	if(get_option("obox_sitewide_cta_background")) : ?>
		#site-wide-container{background-color: <?php echo get_option('obox_sitewide_cta_background');?>;}
	<?php endif;
	
	if(get_option("obox_sitewide_cta_text")) : ?>
		.site-wide-cta span{color: <?php echo get_option('obox_sitewide_cta_text');?>;}
	<?php endif;
	
	if(get_option("obox_sitewide_cta_link_background")) : ?>
		.site-wide-cta .action-link{background-color: <?php echo get_option('obox_sitewide_cta_link_background');?>;}
	<?php endif;
	
	if(get_option("obox_sitewide_cta_link_text")) : ?>
		.site-wide-cta .action-link{color: <?php echo get_option('obox_sitewide_cta_link_text');?>;}
	<?php endif;
	
	if(get_option("obox_sitewide_cta_link_border")) : ?>
		.site-wide-cta .action-link{border-color: <?php echo get_option('obox_sitewide_cta_link_border');?>;}
	<?php endif;
	
	
	if(get_option("obox_sitewide_cta_link_background_hover")) : ?>
		.site-wide-cta .action-link:hover{background-color: <?php echo get_option('obox_sitewide_cta_link_background_hover');?>;}
	<?php endif;
	
	if(get_option("obox_sitewide_cta_link_text_hover")) : ?>
		.site-wide-cta .action-link:hover{color: <?php echo get_option('obox_sitewide_cta_link_text_hover');?>;}
	<?php endif;
	
	if(get_option("obox_sitewide_cta_link_border_hover")) : ?>
		.site-wide-cta .action-link:hover{border-color: <?php echo get_option('obox_sitewide_cta_link_border_hover');?>;}
	<?php endif;
	
	
	// Footer - Container
	
	if(get_option("obox_footer_container_background")) : ?>
		#footer-container{background-color: <?php echo get_option('obox_footer_container_background');?>;}
	<?php endif;
	
	if(get_option("obox_footer_container_border")) : ?>
		#footer-container, .footer-widgets, #site-wide-container{border-color: <?php echo get_option('obox_footer_container_border');?>;}
	<?php endif;
	
	
	// Footer - Widgets
	
	if(get_option("obox_footer_widgets_widgettitle")) : ?>
		.footer-widgets .widgettitle{color: <?php echo get_option('obox_footer_widgets_widgettitle');?>;}
	<?php endif;
	
	if(get_option("obox_footer_widgets_text")) : ?>
		.footer-widgets, .footer-widgets .dater{color: <?php echo get_option('obox_footer_widgets_text');?>;}
	<?php endif;
	
	if(get_option("obox_footer_widgets_link")) : ?>
		.footer-widgets a{color: <?php echo get_option('obox_footer_widgets_link');?>;}
	<?php endif;
	
	if(get_option("obox_footer_widgets_link_hover")) : ?>
		.footer-widgets a:hover{color: <?php echo get_option('obox_footer_widgets_link_hover');?>;}
	<?php endif;
	
	if(get_option("obox_footer_widgets_separator")) : ?>
		.footer-widgets .widget li{color: <?php echo get_option('obox_footer_widgets_separator');?>;}
	<?php endif;
	
	
	// Footer - Base
	
	if(get_option("obox_footer_base_background")) : ?>
		#footer-base-container{background-color: <?php echo get_option('obox_footer_base_background');?>;}
	<?php endif;
	
	if(get_option("obox_footer_base_text")) : ?>
		.footer-text, .footer-text p{color: <?php echo get_option('obox_footer_base_text');?>;}
	<?php endif;
	
	if(get_option("obox_footer_base_link")) : ?>
		.footer-text a{color: <?php echo get_option('obox_footer_base_link');?>;}
	<?php endif;
	
	if(get_option("obox_footer_base_link_hover")) : ?>
		.footer-text a:hover, ul#footer-nav li a:hover{color: <?php echo get_option('obox_footer_base_link_hover');?>;}
	<?php endif;
		
endif;

// Load custom CSS
if(get_option("ocmx_custom_css") != ""): ?>
	<?php echo get_option("ocmx_custom_css"); ?>
<?php endif;

// Load header background
if(get_header_image() != "") : ?>  
	#title-container{background: url(<?php header_image(); ?>) no-repeat top center;}
<?php endif;

// Load header background
if(get_background_color() != "") : ?>  
	body{background-image: none;}
	#widget-block{background-image: none; background: #<?php echo background_color(); ?>;}
<?php endif;


// $background is the saved custom image, or the default image.
$background = set_url_scheme( get_background_image() );

// $color is the saved custom color.
// A default has to be specified in style.css. It will not be printed here.
$color = get_theme_mod( 'background_color' );

if ( ! $background && ! $color )
	return;

$style = $color ? "background-color: #$color;" : '';

if ( $background ) {
	$image = " background-image: url('$background');";

	$repeat = get_theme_mod( 'background_repeat', 'repeat' );
	if ( ! in_array( $repeat, array( 'no-repeat', 'repeat-x', 'repeat-y', 'repeat' ) ) )
		$repeat = 'repeat';
	$repeat = " background-repeat: $repeat;";

	$position = get_theme_mod( 'background_position_x', 'left' );
	if ( ! in_array( $position, array( 'center', 'right', 'left' ) ) )
		$position = 'left';
	$position = " background-position: top $position;";

	$attachment = get_theme_mod( 'background_attachment', 'scroll' );
	if ( ! in_array( $attachment, array( 'fixed', 'scroll' ) ) )
		$attachment = 'scroll';
	$attachment = " background-attachment: $attachment;";

	$style .= $image . $repeat . $position . $attachment;
} ?>

#widget-block{ <?php echo trim( $style ); ?>; } 