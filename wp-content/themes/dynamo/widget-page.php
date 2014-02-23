<?php 
/* Template Name: Widgetized Page */
get_header();
global $post; 
$widgetpage = $post->post_title; 
$title_display = get_post_meta($post->ID, "title-display", true);
?>
<!--Display Slider unless Title is set in Page Options -->
<?php if(isset($title_display) && $title_display == 'slider') {
		dynamic_sidebar($widgetpage." Slider"); }
	else {  
		get_template_part('/functions/page-title'); ?>

		<div id="crumbs-container">
			<?php ocmx_breadcrumbs(); ?>     
		</div>
<?php } ?>

<div id="<?php if(isset($title_display) && $title_display == 'slider') {echo 'widget-block'; } else{ echo 'widgetized-widget-block';} ?>" class="clearfix">
	<!--Display Widgetized Home Widgets -->
	<ul class="widget-list clearfix" id="home_page_downs">
		<?php dynamic_sidebar($widgetpage." Body"); ?>
	</ul>
	
	<!--Begin Page Content -->
	<div id="content" class="clearfix">
		<div id="full-width" class="widget-page clearfix">        
			<?php if (have_posts()) :
				global $show_author, $post;
				$show_author = 1;
				while (have_posts()) : the_post(); setup_postdata($post);
					$link = get_permalink($post->ID); 
					$args  = array('postid' => $post->ID, 'width' => 1000, 'height' => '', 'hide_href' => false, 'imglink' => true, 'imgnocontainer' => true, 'resizer' => '1000auto');
					$image = get_obox_media($args); ?>
					<div class="post-content clearfix">
						<!--Show the Title -->
						<div class="page-title-block">
							<h3 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</div>
						<!--Show the Featured Image -->
						<?php if($image !="") : ?>
							<div class="post-image">
								<?php echo $image; ?>
							</div>
						<?php endif; ?>
						 <!--Get the Content -->           
						<div class="copy <?php echo $image_class; ?> clearfix">
							 <?php the_content(""); ?>
						</div>
					</div>
				<?php endwhile;
				else :
					ocmx_no_posts();
				endif; ?>
			</div>
	</div>
</div>
<?php get_footer(); ?>