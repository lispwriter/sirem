<?php get_header();
$parentpage = get_template_link("services.php"); ?>
	<?php get_template_part('/functions/page-title'); ?>
	<div id="crumbs-container">
	    <?php ocmx_breadcrumbs(); ?>     
	</div>
	<div id="content" class="contained clearfix">
		<div id="left-column">
	        <div class="post-content">    
				<?php if (have_posts()) :
			        global $post;
			        while (have_posts()) :	the_post(); setup_postdata($post);
						$args  = array('postid' => $post->ID, 'width' => 650, 'height' => 488, 'hide_href' => true, 'exclude_video' => true, 'imglink' => false, 'imgnocontainer' => true, 'resizer' => '4-3-medium');
						$image = get_obox_media($args); 
						$icon = get_post_meta( $post->ID, 'icon', true );?>
                        <div class="service-title-block">
                            <h3 class="service-title">
	                        	<?php if($icon != '') : ?>
	                                <span class="service-icon">
	                                    <img src="<?php echo $icon; ?>" alt="" />
	                                </span>
                                <?php endif; ?>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                        </div>
	                    <div class="post-image">
	                    	<?php echo $image; ?>
	                    </div>
	                    <div class="copy">
	                        <?php the_content(); ?>
	                    </div>
					<?php endwhile; 
				else :
			        ocmx_no_posts();
			    endif; ?>
		    </div>
		</div>
		 <div id="right-column">
	     	<div class="related-services-container">
	            <h4 class="widgettitle"><?php echo $parentpage->post_title; ?></h4>
	            <ul class="related-services">
	               <?php $args = array( 'post_type' => 'services', 'post_status' => 'publish', 'orderby' => 'menu_order',  'order' => 'ASC', "posts_per_page" => '-1',
	                    'post__not_in' => array( $post->ID ) // $post *should* be the featured review, since it was the last post queried/worked on 
	                );
	               
	                $related = new WP_Query($args);
	
	                while ( $related->have_posts() ) : $related->the_post(); 
	                    $args  = array('postid' => $post->ID, 'width' => 50, 'height' => 38, 'hide_href' => true, 'exclude_video' => true, 'imglink' => false, 'imgnocontainer' => true, 'resizer' => '50x38');
	                    $image = get_obox_media($args); 
	                    $icon = get_post_meta( $post->ID, 'icon', true ); ?>
	                    <li>
							<?php if($icon !='') : ?>
                                <img class="icon" src="<?php echo $icon; ?>" alt="" /> 
                            <?php else :
                                echo $image;
                            endif; ?>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	                    </li>
	                <?php endwhile; ?>
	            </ul>
	        </div>
	    </div> <!-- END #right-column -->
	    
	</div> <!-- END #content -->
<?php get_footer(); ?>