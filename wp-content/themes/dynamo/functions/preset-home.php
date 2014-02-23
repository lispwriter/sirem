<?php			
if (get_option("ocmx_slider_cat") != '1') :
	            	
	//SLIDER
	the_widget("obox_feature_posts_widget", array(
		"posttype" => "slider",
		"post_category" => get_option("ocmx_slider_cat"),
		"post_count" => get_option("ocmx_feature_post_count"),
		"auto_interval" => get_option("ocmx_feature_post_interval")
	));
	
endif; ?>


<div id="widget-block" class="clearfix <?php if (get_option("ocmx_slider_cat") != '1') : ?>home-page <?php else : ?>no-slider <?php endif;?>">
    <ul id="home_page_downs" class="widget-list">
    	<?php
			     
		if (get_option("ocmx_services_three_col_cat") != 1) :
		    	
        	// SERVICES THREE COL
        	the_widget("obox_content_widget", array(
        		"title" => get_option("ocmx_services_three_col_title"),
				"posttype" => "services",
				"post_count" => get_option("ocmx_services_three_col_post_count"),
				"layout_columns" => 'three',
				"postfilter" => "services-category",
				"filterval" => get_option("ocmx_services_three_col_cat"),
				"post_thumb" => get_option("ocmx_services_three_col_images"),
				"show_excerpts" => get_option("ocmx_services_three_col_excerpt"), 
			));
			
		endif; 
		
		if (get_option("ocmx_portfolio_three_col_cat") != 1) :
			
			// PORTFOLIO THREE COL
        	the_widget("obox_content_widget", array(
        		"title" => get_option("ocmx_portfolio_three_col_title"),
				"posttype" => "portfolio",
				"post_count" => get_option("ocmx_portfolio_three_col_post_count"),
				"layout_columns" => 'three',
				"postfilter" => "portfolio-category",
				"filterval" => get_option("ocmx_portfolio_three_col_cat"),	
				"post_thumb" => get_option("ocmx_portfolio_three_col_images"),
				"show_excerpts" => get_option("ocmx_portfolio_three_col_excerpt"), 
			));
			
		endif; 
		
		if (get_option("ocmx_partners_four_col_cat") != 1) :
			
			// PARTNERS FOUR COL
        	the_widget("obox_content_widget", array(
        		"title" => get_option("ocmx_partners_four_col_title"),
				"posttype" => "partners",
				"post_count" => get_option("ocmx_partners_four_col_post_count"),
				"layout_columns" => 'four',
				"postfilter" => "partners-category",
				"filterval" => get_option("ocmx_partners_four_col_cat"),
				"post_thumb" => "",
			));
			
		endif;
		
		if (get_option("ocmx_testimonials_cat") != 1) :
			
			// TESTIMONIALS WIDGET
        	the_widget("obox_content_testimonials_widget", array(
        		"title" => get_option("ocmx_testimonials_title"), 
        		"posttype" => "testimonials",
				"post_count" => get_option("ocmx_testimonials_post_count"),
				"post_category" => get_option("ocmx_testimonials_cat"),
				"auto_interval" => get_option("ocmx_testimonials_interval")
			));
			
		endif;

		?>
 	</ul>
</div>