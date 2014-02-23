<?php dynamic_sidebar('slider'); ?>
<?php /* modified this if to force the home-page-sides display to be on top and to display with or without the hompage */ ?>
<?php if (function_exists('dynamic_sidebar') && (is_active_sidebar('homepage') || is_active_sidebar('homepage-secondary'))) : ?> 
	<?php /* inserted newsletter block */ ?>
	<div id="newsletter-block" class="clearfix">
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
	<div id="widget-block" class="clearfix">
	    <!--  ul class="widget-list clearfix" id="home_page_downs">
	    	<li>Hello, world</li>
	        <?php /* dynamic_sidebar('homepage'); */ ?>
	    </ul -->
	    <?php if(is_active_sidebar('homepage-secondary')) : // Sidebar 2 Column ?>
		    <ul class="widget-list clearfix" id="home_page_sides">
		        <?php dynamic_sidebar('homepage-secondary'); ?>
	        </ul>
        <?php endif; ?>	
        <?php if(is_active_sidebar('homepage-threecol')) : // Sidebar 3 Column ?>
		    <ul class="widget-list clearfix" id="home_page_three_column">
		        <?php dynamic_sidebar('homepage-threecol'); ?>
	        </ul>
        <?php endif; ?>	       
	</div>
<?php endif; ?>

