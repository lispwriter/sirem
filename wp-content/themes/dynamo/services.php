<?php /* Template Name: Services  */
get_header();
$layout = get_post_meta($post->ID, "layout", true);
if($layout == '' ) $layout = 'two-column'; ?>

	<?php get_template_part('/functions/page-title'); ?>
    <div id="crumbs-container">
        <?php ocmx_breadcrumbs(); ?>     
    </div>
	
	<div id="content" class="non-contained clearfix">
    	
    	<?php 
    	$content = get_the_content();
    	if($content !="") : ?>
			<div class="copy page-feature-copy">
				<?php the_content(); ?>
	        </div>
	   	<?php endif; ?>
        
		<ul class="grid <?php echo $layout; ?> services">
			<?php // Services Query
			$args = array( "post_type" => 'services', 'orderby' => 'menu_order', 'order' => 'ASC', 'post_status' => 'publish', 'showposts' => '-1' );
        	$services = new WP_Query($args);
    
    		while ( $services->have_posts() ) : $services->the_post(); 
				global $post;
		        $icon = get_post_meta( $post->ID, 'icon', true );
		        if($icon == '') :
			        $args  = array('postid' => $post->ID, 'width' => 400, 'height' => 225, 'hide_href' => true, 'exclude_video' => true, 'imglink' => false, 'imgnocontainer' => true, 'resizer' => '4-3-medium');
			        $image = get_obox_media($args); 
			    endif; ?>
		
		    	<li class="column">
		        	<a class="post-image" href="<?php echo get_permalink($post->ID); ?>">
		        		<?php if(isset($image)): ?>
		        			<?php echo $image; ?>
		        		<?php elseif($icon != '') : ?>
		        			<img src="<?php echo $icon; ?>" alt="<?php the_title(); ?>" /> 
		        		<?php endif; ?>
		        	</a>
		            <h3 class="post-title"><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a></h3>
		            <div class="copy">
		            	<?php the_excerpt(); ?>
		            </div>
		        </li>
			<?php endwhile; ?>
	    </ul>
	</div>
	
<?php get_footer(); ?>