	<?php global $obox_themeid; ?>
	</div><!--End Content Container -->
	
	<?php 
	$show_cta = get_option("ocmx_footer_cta_show");
	$cta_text = get_option("ocmx_footer_cta_text");
	$cta_button = get_option("ocmx_footer_cta_button_text");
	$cta_link = get_option("ocmx_footer_cta_button_link");
	
	if($show_cta == 'true') : ?>	
		<div id="site-wide-container">
			<div class="site-wide-cta">
				<?php if($cta_text !="") : ?>
					<span><?php echo $cta_text; ?></span>
				<?php endif; ?>
				<?php if($cta_button !="" || $cta_link !="") : ?>
					<a class="action-link" href="<?php echo $cta_link; ?>"><?php echo $cta_button; ?></a>
				<?php endif; ?>
			</div>
		</div>
	<?php endif; ?>
	         
	<?php /* <div id="footer-container">
	    
	    <div id="footer" class="clearfix">
	    	<ul class="footer-widgets four-column clearfix">
		        <?php dynamic_sidebar('footer-sidebar'); ?>
		    </ul>
	    </div> <!--End footer -->
	    
	</div> <!--end Footer Container --> */ ?>
	
	<div id="footer-base-container">
		<div class="footer-text">
            <div id="footer-navigation-container">
                <?php wp_nav_menu(array(
                    'menu' => 'Footer Nav',
                    'menu_id' => 'footer-nav',
                    'menu_class' => 'clearfix',
                    'sort_column' 	=> 'menu_order',
                    'theme_location' => 'secondary',
                    'container' => 'ul',
                    'fallback_cb' => 'ocmx_fallback_secondary')
                ); ?>
            </div>
            
            <p><?php echo get_option("ocmx_custom_footer"); ?></p>
            <?php if(get_option("ocmx_logo_hide") != "true") : ?>
                <div class="obox-credit">
                   <p><a href="http://www.obox-design.com/wordpress-themes/ecommerce.cfm">eCommerce WordPress Themes</a> by <a href="http://www.obox-design.com"><img src="<?php echo get_template_directory_uri(); ?>/images/obox-logo.png" alt="Theme created by Obox" /></a></p>
                </div>
            <?php endif; ?>
            <!--  add in the social links manually to this area -->
            <div class="social">
            	<table cellpadding=0 cellspacing=0 border=0>
            		<tr>
            			<td class='dealers'>authorized dealers</td>
            			<td class='press'>press stuff</td>
            			<?php $spd_base_path = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/"; ?>
            			<td><a href="#" target="_blank"><img class="social" src="<?php echo $spd_base_path; ?>wp-content/themes/dynamo/images/facebook.png" /></a></td>
            			<td><a href="#" target="_blank"><img class="social" src="<?php echo $spd_base_path; ?>wp-content/themes/dynamo/images/twitter.png" /></a></td>
            			<td><a href="#" target="_blank"><img class="social" src="<?php echo $spd_base_path; ?>wp-content/themes/dynamo/images/googleplus.png" /></a></td>
            			<td><a href="#" target="_blank"><img class="social" src="<?php echo $spd_base_path; ?>wp-content/themes/dynamo/images/youtube.png" /></a></td>
            		</tr>
            	</table>
            </div>
            
            <!-- 
            <div class="social"><a href="#" target="_blank"><img class="social" src="wp-content/themes/dynamo/images/youtube.png" /></a></div>
            <div class="social"><a href="#" target="_blank"><img class="social" src="wp-content/themes/dynamo/images/googleplus.png" /></a></div>
            <div class="social"><a href="#" target="_blank"><img class="social" src="wp-content/themes/dynamo/images/twitter.png" /></a></div>
            <div class="social"><a href="#" target="_blank"><img class="social" src="wp-content/themes/dynamo/images/facebook.png" /></a></div>
            <div class="social">press stuff</div>
            <div class="social">authorized dealers</div> -->
        </div>      
	</div> <!--end Footer Base Container -->
	
</div><!--end Wrapper -->

<!--Get Google Analytics -->
<?php 
	if(get_option("ocmx_googleAnalytics")) :
		echo stripslashes(get_option("ocmx_googleAnalytics"));
	endif;
?>

<?php wp_footer(); ?>
</body>
</html>

