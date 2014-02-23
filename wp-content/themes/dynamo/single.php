<?php get_header();
	if(get_post_type() == 'post') :
		$cat = get_the_category();
		$title = $cat[0]->name;
		$desc = $cat[0]->description; ?>
		<div id="title-container">		
			<div class="title-block">
		    	<h2><?php echo $title; ?></h2>
		    		<?php if($desc != '') echo '<p>'.$desc.'</p>'; ?>
		    </div>
		</div>
	<?php endif; ?>
    <div id="crumbs-container">
		<?php ocmx_breadcrumbs(); ?>     
	</div>
	<div id="content" class="clearfix">
    	<div id="left-column">
        	<ul class="post-list">
        	
        		<?php if (have_posts()) :
                    while (have_posts()) : the_post(); setup_postdata($post);
                        get_template_part("/functions/post-view");
                    endwhile;
                else :
                    ocmx_no_posts();
                endif; ?>
	                
            </ul>
            <?php if(comments_open()) {comments_template();} ?>
        </div>
        
        <?php if(get_option("ocmx_sidebar_layout") != "sidebarnone"): ?>
	        <?php get_sidebar(); ?>
	    <?php endif;?>
        
    </div>
	
<?php get_footer(); ?>