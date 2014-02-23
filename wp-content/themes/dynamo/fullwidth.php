<?php 
/* Template Name: Full Width */
get_header(); ?>
	
<?php get_template_part('/functions/page-title'); ?>

<div id="crumbs-container">
	<?php ocmx_breadcrumbs(); ?>     
</div>

<div id="content" class="clearfix">
    <div id="full-width" class="clearfix">                    
       <ul class="post-list">
        		<?php if (have_posts()) :
                    while (have_posts()) : the_post(); setup_postdata($post);
                        get_template_part("/functions/post-view");
                    endwhile;
                else :
                    ocmx_no_posts();
                endif; ?>
	                
            </ul>
            <?php if(comments_open()) { comments_template(); }?>
    </div>
</div>
<?php get_footer(); ?>