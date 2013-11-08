<?php
/**
 * Represents the view for the public-facing component of the plugin.
 *
 * This typically includes any information, if any, that is rendered to the
 * frontend of the theme when the plugin is activated.
 *
 * @package   Plugin_Name
 * @author    Your Name <email@example.com>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2013 Your Name or Company Name
 */
?>

<!-- This file is used to markup the public facing aspect of the plugin. -->

<div id="flh-popup" class="<?php echo get_option( "flh_hand_size" ); ?>">
	<div class="flh-content">
		<a href="#" class="flh-popup-close" title="<?php _e("Close Popup","facebook-like-hand") ?>">
			<?php _e("Close Popup","facebook-like-hand") ?>
		</a>
		<div class="flh-message">
			<?php if( "big" == get_option( "flh_hand_size" ) ) { ?>
				<strong><?php _e( "Please like it!", "facebook-like-hand" ); ?></strong><br />
			<?php } ?>
			<?php _e("Follow us on Facebook","facebook-like-hand"); ?>
		</div><!-- .flh-message -->
		<div class="flh-iframe">
			<?php if( "small" == get_option( "flh_hand_size" ) ){ ?>
				<iframe src="//www.facebook.com/plugins/like.php?href=<?php echo urlencode(
				 get_option( "flh_url" ) ); ?>&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=21&amp;appId=242385965929759" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe>
			<?php } else { ?>
				<iframe src="//www.facebook.com/plugins/like.php?href=<?php echo urlencode( get_option( "flh_url" ) ); ?>&amp;width&amp;layout=box_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=65&amp;appId=242385965929759" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:65px;" allowTransparency="true"></iframe>
			<?php } ?>
		</div><!-- .flh-iframe -->
	</div><!-- .flh-content -->
</div><!-- #flh-popup -->