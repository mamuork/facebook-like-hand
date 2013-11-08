<?php
/**
 * Represents the view for the administration dashboard.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package   Plugin_Name
 * @author    Your Name <email@example.com>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2013 Your Name or Company Name
 */
?>
<?php 
	global $locations;
	global $handsizes;
?>
<div class="wrap">

	<?php screen_icon(); ?>
	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

    <div class="wrap">
    <form method="post" action="options.php">
	<?php settings_fields('flh_options_group'); ?>
	<table class="form-table>
		<tbody>
			<tr valign="top">
				<th scope="row">
					<label for="flh_url"><?php _e( "Facebook Fan Page URL","facebook-like-hand" ); ?></label>
				</th>
				<td>
					<input placeholder="http://" type="text" id="flh_url" value="<?php echo get_option('flh_url'); ?>" name="flh_url" />
					<span class="description"><?php _e("If you haven't a fanpage, you can use your website.","facebook-like-hand") ?></span>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row">
					<label for="flh_hand_size"><?php _e( "Hand size","facebook-like-hand" ); ?></label>
				</th>
				<td>
					<select id="flh_hand_size" name="flh_hand_size">
						<?php foreach( $handsizes as $size){ ?>
							<option value="<?php echo $size; ?>" <?php if( get_option( "flh_hand_size" ) == $size ) echo 'selected="selected"'; ?>><?php echo $size; ?></option>
						<?php } ?>
					</select>
					<span class="description"></span>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row">
					<label for="flh_locations"><?php _e( "Where do you want to show popup?","facebook-like-hand" ); ?></label>
				</th>
				<td>
					<?php 
					foreach( $locations as $loc){ ?>
					<input type="checkbox" id="flh_locations" name="flh_locations[<?php echo $loc; ?>]" value="<?php echo $loc ?>" <?php if( is_array( get_option( 'flh_locations' ) ) && in_array($loc, get_option( 'flh_locations' ) ) ) echo 'checked="checked"'; ?> />
					<?php echo $loc ?><br />
					<?php } ?>
					
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

</div>
