<?php get_header(); ?>
    
    <?php get_template_part('/functions/page-title'); ?>
    <div id="crumbs-container">
        <?php ocmx_breadcrumbs(); ?>     
    </div>
    <div id="content" class="clearfix">
        <div id="left-column">
            <?php 
                $content = get_the_content(); 
                if(!(preg_match('/woocommerce/i', $content))) {
                    echo $content;
                }
            ?>
            <ul class="post-list">                
                <?php if (have_posts()) :
                    while (have_posts()) : the_post(); setup_postdata($post);
                        get_template_part("/functions/post-view");
                    endwhile;
                else :
                    ocmx_no_posts();
                endif; ?>
                    
            </ul>
        </div>
    </div>
    
<?php get_footer(); ?>