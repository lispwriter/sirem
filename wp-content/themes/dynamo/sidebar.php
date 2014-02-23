<div id="right-column">
	<?php if(is_post_type_archive( 'product' ) || ( get_post_type() == "product")) : ?>	
		<ul class="widget-list shop-sidebar">
			<?php
			//Shop Sidebar
			dynamic_sidebar('shopsidebar');
			?>
		</ul>
	<?php else : ?>
		<ul class="widget-list blog-sidebar">
			<?php
			//Blog Sidebar
			dynamic_sidebar('sidebar');
			?>
		</ul>
	<?php endif; ?>
</div>