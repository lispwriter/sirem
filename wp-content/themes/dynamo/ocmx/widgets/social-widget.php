<?php
class obox_social_widget extends WP_Widget {
	/** constructor */
	function obox_social_widget() {
		parent::WP_Widget(false, $name = '(Obox) Social Links', $widget_options = 'Link people up to your social Profiles.');	
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance) {		
		extract( $args );
		$instance_args = wp_parse_args( $instance, array() );
		extract( $instance_args, EXTR_SKIP ); 
		if(isset($instance["title"]))
			$title = esc_attr($instance["title"]);
		?>

		<?php echo $before_widget; ?>
			<?php echo $before_title;
				if(isset($title)) {echo $title;}
			echo $after_title; ?>

			<?php  $html = ''; 
			$networks = array(
				'facebook',
				'googleplus',
				'twitter',
				'youtube',
				'vimeo',
				'skype',
				'tumblr',
				'linkedin',
				'fivehundredpx',
				'aim',
				'android',
				'badoo',
				'dailybooth',
				'dribbble',
				'emailz',
				'envato',
				'foursquare',
				'flickr',
				'feedly',
				'github',
				'hipstamatic',
				'icq',
				'instagram',
				'kiva',
				'kickstarter',
				'lastfm',
				'path',
				'pinterest',
				'picasa',
				'quora',
				'rdio',
				'reddit',
				'rss',
				'spotify',
				'soundcloud',
				'thefancy',
				'xbox',
				'zerply'
			);

			foreach( $networks as $network ){
				if($instance["$network"]) :
					$html .= '<li><a target="_blank" class="' . $network . '" href="' . $instance["$network"]. '"></a></li>';
				endif;
			}
			?>
			
			<?php if( $html != '' ) { ?>
				<ul class="social-icons clearfix">
					<?php echo $html; ?>
				</ul>
			<?php } // if html blank ?>
		<?php echo $after_widget;

	}

	/** @see WP_Widget::update */
	function update($new_instance, $old_instance) {
		return $new_instance;
	}

	/** @see WP_Widget::form */
	function form($instance) {
		$instance_args = wp_parse_args( $instance, array() );
		extract( $instance_args, EXTR_SKIP ); 
		if(isset($instance["title"]))
			$title = esc_attr($instance["title"]);
		?>
			<h3><?php _e("Enter the full URL to your profiles. Example: http://www.facebook.com/oboxthemes","ocmx"); ?></h3>
	<p><label for="<?php echo $this->get_field_id('title'); ?>">Title<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php if(isset($title)) {echo $title;} ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('facebook'); ?>">Facebook<input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php if(isset($instance["facebook"])) echo $instance["facebook"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('googleplus'); ?>">Googleplus<input class="widefat" id="<?php echo $this->get_field_id('googleplus'); ?>" name="<?php echo $this->get_field_name('googleplus'); ?>" type="text" value="<?php if(isset($instance["googleplus"])) echo $instance["googleplus"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('twitter'); ?>">Twitter<input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php if(isset($instance["twitter"])) echo $instance["twitter"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('youtube'); ?>">YouTube<input class="widefat" id="<?php echo $this->get_field_id('youtube'); ?>" name="<?php echo $this->get_field_name('youtube'); ?>" type="text" value="<?php if(isset($instance["youtube"])) echo $instance["youtube"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('vimeo'); ?>">Vimeo<input class="widefat" id="<?php echo $this->get_field_id('vimeo'); ?>" name="<?php echo $this->get_field_name('vimeo'); ?>" type="text" value="<?php if(isset($instance["vimeo"]))  echo $instance["vimeo"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('skype'); ?>">Skype<input class="widefat" id="<?php echo $this->get_field_id('skype'); ?>" name="<?php echo $this->get_field_name('skype'); ?>" type="text" value="<?php if(isset($instance["skype"]))  echo $instance["skype"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('tumblr'); ?>">Tumblr<input class="widefat" id="<?php echo $this->get_field_id('tumblr'); ?>" name="<?php echo $this->get_field_name('tumblr'); ?>" type="text" value="<?php if(isset($instance["tumblr"]))  echo $instance["tumblr"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('linkedin'); ?>">Linkedin<input class="widefat" id="<?php echo $this->get_field_id('linkedin'); ?>" name="<?php echo $this->get_field_name('linkedin'); ?>" type="text" value="<?php if(isset($instance["linkedin"]))  echo $instance["linkedin"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('fivehundredpx'); ?>">500px<input class="widefat" id="<?php echo $this->get_field_id('fivehundredpx'); ?>" name="<?php echo $this->get_field_name('fivehundredpx'); ?>" type="text" value="<?php if(isset($instance["fivehundredpx"]))  echo $instance["fivehundredpx"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('aim'); ?>">Aim<input class="widefat" id="<?php echo $this->get_field_id('aim'); ?>" name="<?php echo $this->get_field_name('aim'); ?>" type="text" value="<?php if(isset($instance["aim"]))  echo $instance["aim"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('android'); ?>">Android<input class="widefat" id="<?php echo $this->get_field_id('android'); ?>" name="<?php echo $this->get_field_name('android'); ?>" type="text" value="<?php if(isset($instance["android"]))  echo $instance["android"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('badoo'); ?>">Badoo<input class="widefat" id="<?php echo $this->get_field_id('badoo'); ?>" name="<?php echo $this->get_field_name('badoo'); ?>" type="text" value="<?php if(isset($instance["badoo"]))  echo $instance["badoo"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('dailybooth'); ?>">Dailybooth<input class="widefat" id="<?php echo $this->get_field_id('dailybooth'); ?>" name="<?php echo $this->get_field_name('dailybooth'); ?>" type="text" value="<?php if(isset($instance["dailybooth"]))  echo $instance["dailybooth"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('dribbble'); ?>">Dribbble<input class="widefat" id="<?php echo $this->get_field_id('dribbble'); ?>" name="<?php echo $this->get_field_name('dribbble'); ?>" type="text" value="<?php if(isset($instance["dribbble"]))  echo $instance["dribbble"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('emailz'); ?>">Email<input class="widefat" id="<?php echo $this->get_field_id('emailz'); ?>" name="<?php echo $this->get_field_name('emailz'); ?>" type="text" value="<?php if(isset($instance["emailz"]))  echo $instance["emailz"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('envato'); ?>">Envato<input class="widefat" id="<?php echo $this->get_field_id('envato'); ?>" name="<?php echo $this->get_field_name('envato'); ?>" type="text" value="<?php if(isset($instance["envato"]))  echo $instance["envato"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('foursquare'); ?>">Foursquare<input class="widefat" id="<?php echo $this->get_field_id('foursquare'); ?>" name="<?php echo $this->get_field_name('foursquare'); ?>" type="text" value="<?php if(isset($instance["foursquare"]))  echo $instance["foursquare"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('flickr'); ?>">flickr<input class="widefat" id="<?php echo $this->get_field_id('flickr'); ?>" name="<?php echo $this->get_field_name('flickr'); ?>" type="text" value="<?php if(isset($instance["flickr"]))  echo $instance["flickr"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('feedly'); ?>">feedly<input class="widefat" id="<?php echo $this->get_field_id('feedly'); ?>" name="<?php echo $this->get_field_name('feedly'); ?>" type="text" value="<?php if(isset($instance["feedly"]))  echo $instance["feedly"]; ?>" /></label></p>  
			<p><label for="<?php echo $this->get_field_id('github'); ?>">Github<input class="widefat" id="<?php echo $this->get_field_id('github'); ?>" name="<?php echo $this->get_field_name('github'); ?>" type="text" value="<?php if(isset($instance["github"]))  echo $instance["github"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('hipstamatic'); ?>">Hipstamatic<input class="widefat" id="<?php echo $this->get_field_id('hipstamatic'); ?>" name="<?php echo $this->get_field_name('hipstamatic'); ?>" type="text" value="<?php if(isset($instance["hipstamatic"]))  echo $instance["hipstamatic"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('icq'); ?>">ICQ<input class="widefat" id="<?php echo $this->get_field_id('icq'); ?>" name="<?php echo $this->get_field_name('icq'); ?>" type="text" value="<?php if(isset($instance["icq"]))  echo $instance["icq"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('instagram'); ?>">Instagram<input class="widefat" id="<?php echo $this->get_field_id('instagram'); ?>" name="<?php echo $this->get_field_name('instagram'); ?>" type="text" value="<?php if(isset($instance["instagram"]))  echo $instance["instagram"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('kiva'); ?>">Kiva<input class="widefat" id="<?php echo $this->get_field_id('kiva'); ?>" name="<?php echo $this->get_field_name('kiva'); ?>" type="text" value="<?php if(isset($instance["kiva"]))  echo $instance["kiva"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('kickstarter'); ?>">Kickstarter<input class="widefat" id="<?php echo $this->get_field_id('kickstarter'); ?>" name="<?php echo $this->get_field_name('kickstarter'); ?>" type="text" value="<?php if(isset($instance["kickstarter"]))  echo $instance["kickstarter"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('lastfm'); ?>">LastFM<input class="widefat" id="<?php echo $this->get_field_id('lastfm'); ?>" name="<?php echo $this->get_field_name('lastfm'); ?>" type="text" value="<?php if(isset($instance["lastfm"]))  echo $instance["lastfm"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('path'); ?>">Path<input class="widefat" id="<?php echo $this->get_field_id('path'); ?>" name="<?php echo $this->get_field_name('path'); ?>" type="text" value="<?php if(isset($instance["path"]))  echo $instance["path"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('pinterest'); ?>">Pinterest<input class="widefat" id="<?php echo $this->get_field_id('pinterest'); ?>" name="<?php echo $this->get_field_name('pinterest'); ?>" type="text" value="<?php if(isset($instance["pinterest"]))  echo $instance["pinterest"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('picasa'); ?>">Picasa<input class="widefat" id="<?php echo $this->get_field_id('picasa'); ?>" name="<?php echo $this->get_field_name('picasa'); ?>" type="text" value="<?php if(isset($instance["picasa"]))  echo $instance["picasa"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('quora'); ?>">Quora<input class="widefat" id="<?php echo $this->get_field_id('quora'); ?>" name="<?php echo $this->get_field_name('quora'); ?>" type="text" value="<?php if(isset($instance["quora"]))  echo $instance["quora"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('rdio'); ?>">Rdio<input class="widefat" id="<?php echo $this->get_field_id('rdio'); ?>" name="<?php echo $this->get_field_name('rdio'); ?>" type="text" value="<?php if(isset($instance["rdio"]))  echo $instance["rdio"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('reddit'); ?>">Reddit<input class="widefat" id="<?php echo $this->get_field_id('reddit'); ?>" name="<?php echo $this->get_field_name('reddit'); ?>" type="text" value="<?php if(isset($instance["reddit"]))  echo $instance["reddit"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('rss'); ?>">RSS<input class="widefat" id="<?php echo $this->get_field_id('rss'); ?>" name="<?php echo $this->get_field_name('rss'); ?>" type="text" value="<?php if(isset($instance["rss"]))  echo $instance["rss"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('spotify'); ?>">Spotify<input class="widefat" id="<?php echo $this->get_field_id('spotify'); ?>" name="<?php echo $this->get_field_name('spotify'); ?>" type="text" value="<?php if(isset($instance["spotify"]))  echo $instance["spotify"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('soundcloud'); ?>">Soundcloud<input class="widefat" id="<?php echo $this->get_field_id('soundcloud'); ?>" name="<?php echo $this->get_field_name('soundcloud'); ?>" type="text" value="<?php if(isset($instance["soundcloud"]))  echo $instance["soundcloud"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('thefancy'); ?>">The Fancy<input class="widefat" id="<?php echo $this->get_field_id('thefancy'); ?>" name="<?php echo $this->get_field_name('thefancy'); ?>" type="text" value="<?php if(isset($instance["thefancy"]))  echo $instance["thefancy"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('xbox'); ?>">Xbox<input class="widefat" id="<?php echo $this->get_field_id('xbox'); ?>" name="<?php echo $this->get_field_name('xbox'); ?>" type="text" value="<?php if(isset($instance["xbox"]))  echo $instance["xbox"]; ?>" /></label></p>
			<p><label for="<?php echo $this->get_field_id('zerply'); ?>">zerply<input class="widefat" id="<?php echo $this->get_field_id('zerply'); ?>" name="<?php echo $this->get_field_name('zerply'); ?>" type="text" value="<?php if(isset($instance["zerply"]))  echo $instance["zerply"]; ?>" /></label></p>         
		<?php 
	}

} // class FooWidget

//This sample widget can then be registered in the widgets_init hook:

// register FooWidget widget
add_action('widgets_init', create_function('', 'return register_widget("obox_social_widget");'));

?>