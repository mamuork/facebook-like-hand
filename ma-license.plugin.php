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
		<div class="flh-content">
			<a href="#" class="flh-popup-close" title="<?php // _e("Close Popup","facebook-like-hand") ?>">
				<?php // _e("Close Popup","facebook-like-hand") ?>
			</a>
			<div class="flh-message">
				<?php  //_e("Like it!","facebook-like-hand"); ?><br />
				<?php // _e("Follow us on Facebook","facebook-like-hand"); ?>
			</div><!-- .flh-message -->
			<div class="flh-iframe">
				<iframe src="//www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_option("flh_url")); ?>&amp;width&amp;layout=box_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=65&amp;appId=242385965929759" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:65px;" allowTransparency="true"></iframe>
			</div>
		</div><!-- .flh-content -->
	</div><!-- #flh-popup --> 	
<?php } //flh_footer_popup 

add_action("wp_footer","flh_footer_popup");

function register_my_styles(){
	wp_register_style('flh-style', WP_PLUGIN_URL . '/facebook-like-hand/css/style.css');
	wp_enqueue_style('flh-style');
}
add_action( 'wp_enqueue_scripts', 'register_my_styles' ); 

function register_my_scripts(){
	wp_register_script('flh-script', WP_PLUGIN_URL . '/facebook-like-hand/js/flh-script.js',array('jquery'),"1.0",true);
	wp_enqueue_script('flh-script');
}
add_action( 'wp_enqueue_scripts', 'register_my_scripts' ); 

function flh_activate_set_default_options(){
    update_option('flh_url', get_bloginfo("url"));
}
register_activation_hook( __FILE__, 'flh_activate_set_default_options');

function flh_register_options_group()
{
    register_setting('flh_options_group', 'flh_url');
}
add_action ('admin_init', 'flh_register_options_group');

function flh_update_options_form()
{
    ?>
    <h1>Pagina delle impostazioni di Facebook Like Hand</h1>
    <div class="wrap">
    <div class="icon32" id="icon-options-general"><br /></div>
    <h2>Configurazione di License Box</h2>
    <form method="post" action="options.php">
	<?php settings_fields('flh_options_group'); ?>
	<table class="form-table>
		<tbody>
			<tr valign="top">
				<th scope="row">
					<label for="flh_url">URL da collegare:</label>
				</th>
				<td>
					<input type="text" id="flh_url" value="<?php echo get_option('flh_url'); ?>" name="flh_url" />
					<span class="description"></span>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"></th>
					<td>
						<p><input type="submit" class="button-primary" id="submit" name="submit" value="<?php _e('Save Changes') ?>" />
						</p>
					</td>
				</tr>
		</tbody>
	</table>
    </div><!-- .wrap -->
    <?php
}

function flh_add_option_page()
{
    add_options_page('Facebook Like Hand', 'Facebook Like Hand Options', 'administrator', 'flh-options-page', 'flh_update_options_form');
}
 
add_action('admin_menu', 'flh_add_option_page');



?>