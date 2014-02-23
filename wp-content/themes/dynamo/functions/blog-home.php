<div id="title-container">
	<div class="title-block">
    	<h2><?php the_title(); ?></h2>
	</div>
</div>
<div id="crumbs-container">
	<?php ocmx_breadcrumbs(); ?>
</div>
<div id="content" class="clearfix">
    <div id="left-column">
        <ul class="post-list">
            <?php if (have_posts()) :
                while (have_posts()) :	the_post(); setup_postdata($post);
                    get_template_part("/functions/post-list");
                endwhile;
            else :
                ocmx_no_posts();
            endif; ?>
        </ul>
        <?php motionpic_pagination("clearfix", "pagination clearfix"); ?>
    </div>

    <?php if(get_option("ocmx_sidebar_layout") != "sidebarnone"): ?>
        <?php get_sidebar(); ?>
    <?php endif;?>
</div>
