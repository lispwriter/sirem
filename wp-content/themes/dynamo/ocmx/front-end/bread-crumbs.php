<?php function ocmx_breadcrumbs($container_id = 'crumbs') { 
	global $wp_query, $post;
	
	if(get_option("ocmx_breadcrumbs") == 'no')
		return;
	//Posts
	if(get_post_type() == "post") : 
		
		$catTitle = single_cat_title( "", false );
		$cat = get_cat_ID( $catTitle ); 
		$cats = get_the_category(); 
		$cats = $cats[0]; ?> 

		<ul id="<?php echo $container_id; ?>">
			<li><a href="<?php echo home_url(); ?>"><?php _e('Home','ocmx'); ?></a></li>
			<li> / </li>
			<?php if ( is_category()) : ?>
				<li><span class="current"><?php echo(get_category_parents($cat, TRUE, '<li> / </li><li>')); ?></span></li>
			<?php elseif ( is_single() ) : ?>
				<li><?php echo(get_category_parents($cats, TRUE, '')); ?></li>
				<li> / </li>
				<li><span class="current"><?php the_title(); ?></span></li>
			<?php endif; ?>
		</ul>
		
	<?php //Pages
	elseif(is_page()): ?>
		<ul id="<?php echo $container_id; ?>">
			<li><a href="<?php echo home_url(); ?>"><?php _e('Home','ocmx'); ?></a></li>
			<li> / </li>
			<li><?php the_title(); ?></li>
		</ul>
	
	<?php else : 
		
		$post_type = get_post_type_object(get_post_type());
		if(!empty($post_type) && isset($post_type->labels->slug)) :
			$category = $post_type->labels->slug;
			$parentpage = get_template_link($category.".php");
		endif;
		if(is_post_type_archive( 'product' ) || ( get_post_type() == "product")) :
			$taxonomy = 'product_cat';
		elseif(isset($category)) :
			$taxonomy = $category.'-category';
		endif;
		if(isset($taxonomy))
			$terms = get_the_terms($post->ID, $taxonomy); ?>
	
		<ul id="<?php echo $container_id; ?>">
		    <li><a href="<?php echo home_url(); ?>"><?php _e('Home','ocmx'); ?></a></li>
		    <?php if(is_post_type_archive( 'product' ) || ( get_post_type() == "product")) : ?>
			    <li> / </li>
		    	<li><a href="<?php echo home_url(); ?>/shop"><?php _e("Shop", "ocmx"); ?></a></li>
		    <?php elseif(isset($parentpage) && !empty($parentpage)): ?>
			    <li> / </li>
		    	<li><a href="<?php echo get_permalink($parentpage->ID); ?>"><?php echo $parentpage->post_title; ?></a></li>
		    <?php endif; ?>
		    <?php if(isset($terms) &&  !empty( $terms ) ) : ?>
		        <li> / </li>
		        <li>
		            <?php if( is_array( $terms ) )
		            $first_term = array_shift( $terms ); ?>
		            <a href="<?php echo get_term_link($first_term->slug, $taxonomy); ?>"><?php echo $first_term->name; ?></a>
		        </li>
		    <?php endif; ?>
		    <?php if(is_single() || is_page()): ?>
			    <li> / </li>
			    <li><span class="current"><?php the_title(); ?></span></li>
			<?php endif; ?>
		</ul>
		
	<?php endif;
}