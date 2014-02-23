<?php get_header();
global $product;
global $post;
$_product = $product;  ?>

<?php get_template_part('/functions/page-title'); ?>
<div id="crumbs-container">
	<?php ocmx_breadcrumbs(); ?>
</div>

<div id="content" class="clearfix">
	<div id="left-column">
		<?php do_action('woocommerce_before_single_product', $post, $_product); ?>	
		<ul class="products">
			<?php  do_action('woocommerce_before_shop_loop'); ?>
        	<?php if (have_posts()) :
				woocommerce_product_subcategories(); 
            	while (have_posts()) :	the_post(); setup_postdata($post);
            		woocommerce_get_template_part( 'content', 'product' );
            	endwhile;
				woocommerce_product_loop_end();
            else :
                ocmx_no_posts();
            endif; ?>
		</ul>
		<?php motionpic_pagination("clearfix", "pagination clearfix"); ?>
	</div>
	<?php if(get_option("ocmx_shop_sidebar_layout") != "sidebarnone"): ?>
		<?php get_sidebar(); ?>
	<?php endif;?>
</div>

<?php get_footer(); ?>