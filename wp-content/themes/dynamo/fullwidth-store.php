<?php 
/* Template Name: Fullwidth Store */
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
                        get_template_part("/functions/page-view");
                    endwhile;
                else :
                    ocmx_no_posts();
                endif; ?>
	                
            </ul>
    </div>
</div>

<div id="newsletter-store-block" class="clearfix">
	<div style="width:auto;">
		<span class="bold">BE THE FIRST TO KNOW.</span> JOIN MERIS NEWSLETTER.
		<form action="http://meris.us3.list-manage2.com/subscribe/post?u=262a5ef676b8bbf7ec53f0c20&amp;id=6e265d9b7e" 
		      method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			<input type="email" value="" name="EMAIL" size="34" class="email" id="mce-EMAIL" placeholder="email address" required>
			<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			<div style="position: absolute; left: -5000px;"><input type="text" name="b_262a5ef676b8bbf7ec53f0c20_6e265d9b7e" value=""></div>
			<!--<input type="submit" value="sign up" name="subscribe" id="mc-embedded-subscribe" class="button">&nbsp;-->
			<a class="button" href="javascript:{}" onclick="document.getElementById('mc-embedded-subscribe-form').submit();">sign up</a></form>
	</div>
</div>
<?php /*
	<div id="newsletter-store-block" class="clearfix">
		<div style="width:auto;">
			<span class="bold">BE THE FIRST TO KNOW.</span> JOIN MERIS NEWSLETTER.
			<form action="http://meris.us3.list-manage2.com/subscribe/post?u=262a5ef676b8bbf7ec53f0c20&amp;id=6e265d9b7e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<input type="email" value="" name="EMAIL" size="34" class="email" id="mce-EMAIL" placeholder="email address" required>
				<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				<div style="position: absolute; left: -5000px;"><input type="text" name="b_262a5ef676b8bbf7ec53f0c20_6e265d9b7e" value=""></div>
				<input type="submit" value="sign up" name="subscribe" id="mc-embedded-subscribe" class="button"></form>
		</div>
	</div>
*/ ?>
<?php get_footer(); ?>