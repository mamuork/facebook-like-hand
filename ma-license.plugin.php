<?php
/*
Plugin Name: Facebook Like Hand
Plugin URI: http://about.me/alessandro.mignogna
Description: A simple popup with Facebook Like Hand
Version: 1.0
Author: Alessandro Mignogna
Author URI: http://about.me/alessandro.mignogna
 */
?>

<?php function flh_footer_popup(){ ?>
	<div id="flh-popup">
		<div id="flh-content">
			<a href="javascript:void(0)" id="flh-popup-close" title="<?php _e("Close Popup","facebook-like-hand") ?>">
				<?php _e("Close Popup","facebook-like-hand") ?>
			</a>
			<div id="fhl-message">
				<?php _e("Like it","facebook-like-hand"); ?><br />
				<?php _e("and follow us on Facebook","facebook-like-hand"); ?>
			</div><!-- #fhl-message -->
			<div id="fhl-iframe">
				<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.acmilan.com&amp;width&amp;layout=box_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=65&amp;appId=242385965929759" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:65px;" allowTransparency="true"></iframe>
			</div>
		</div><!-- #flh-content -->
	</div><!-- #flh-popup --> 	
<?php } //fhl_footer_popup 
add_action("wp_footer","flh_footer_popup");
	
	
	
?>


