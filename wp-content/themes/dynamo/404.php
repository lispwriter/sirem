<?php get_header(); ?>

<div id="content" class="clearfix">
    <div id="full-width" class="clearfix">  
    	<div class="error-block">
    		<h2><?php _e("404", "ocmx"); ?></h2>
    		<p><?php _e("The page you are looking for does not exist.", "ocmx"); ?></p>
    		<a class="action-link" href="<?php echo home_url(); ?>">&larr; Return to Home Page</a>
    	</div>
    </div>
</div>

<?php get_footer(); ?>