<?php /* Template Name: Partners */
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

		<ul class="grid <?php echo $layout; ?> partners">
			<?php // Partners Query
			$args = array( "post_type" => 'partners', 'orderby' => 'menu_order', 'order' => 'ASC', 'post_status' => 'publish', 'showposts' => '-1' );
			$partners = new WP_Query($args);

			while ( $partners->have_posts() ) : $partners->the_post();
				global $post;
				$args  = array('postid' => $post->ID, 'width' => 490, 'height' => 368, 'hide_href' => true, 'exclude_video' => true, 'imglink' => false, 'imgnocontainer' => true, 'resizer' => '4-3-medium');
				$image = get_obox_media($args);
				$link = get_post_meta($post->ID, "link", true); ?>
				<li class="column">
					<?php if(isset($image) && $image !='' ): ?>
						<div class="post-image">
							<?php if(isset($link) && $link !='' ): ?>
								<a target="_blank" href="<?php echo $link; ?>"><?php echo $image; ?></a>
							<?php else : ?>
								<?php echo $image; ?>
							<?php endif;?>
						</div>
					<?php endif;?>
					<h3 class="post-title">
						<?php if(isset($link) && $link !='' ): ?>
							<a target="_blank" href="<?php echo $link; ?>"><?php the_title(); ?></a>
						<?php else : ?>
							<?php the_title(); ?>
						<?php endif;?>
					</h3>
					<div class="copy">
						<?php the_excerpt(); ?>
					</div>
				</li>

			<?php endwhile; ?>

		</ul>

	</div>

<?php get_footer(); ?>