<?php
// code add muc luc setting admin
function Viet_share_options_page() {
	global $vietshare_options;
	ob_start(); ?>
	<div class="wrap" style="font-size:15px;">
		<h2 style="background: rgb(118,163,18);background: linear-gradient(87deg, rgba(118,163,18,1) 0%, rgba(0,148,214,1) 100%);padding:10px;color:#fff;border-radius:10px;"><b><?php echo __('VIET SHARE SETTINGS', 'viet-share'); ?></b></h2>
		<form method="post" action="options.php">
			<?php settings_fields('vietshare_settings_group'); ?>
		   <h4 style="font-size:28px;color:#666"><?php _e('Set up the options below', 'viet-share'); ?></h4>
		   <div style="margin-top:20px;background:#fff;padding:20px;border-radius:10px;box-shadow:0px 0px 4px #999">
		       <div style="margin-bottom:20px;"><b style="font-size:18px;"><?php _e('Change color', 'viet-share'); ?></b></div>
		       <?php $styles = array('Blue', 'Green', 'Black', 'Moss', 'Nature', 'Jade', 'Quartz', 'Sky', 'Icon', 'Icon2', 'Icon3', 'Pro', 'Pro2', 'Pro3', 'Pro4', 'Pro5'); ?>
               <select style="border:2px solid #aaa;border-radius:10px;width:150px;" name="vietshare_settings[theme]" id="vietshare_settings[theme]" > 
               <?php foreach($styles as $style) { ?> 
               <?php if($vietshare_options['theme'] == $style) { $selected = 'selected="selected"'; } else { $selected = ''; } ?>
               <option value="<?php echo $style; ?>" <?php echo $selected; ?>><?php echo $style; ?></option> 
               <?php } ?> 
               </select>
               <br><br>
		       <div style="margin-bottom:20px;"><b style="font-size:18px;"><?php _e('Effects on hover', 'viet-share'); ?></b></div>
		       <?php $hovers = array('Opacity', 'Zoom', 'Blur', 'Shadow'); ?>
               <select style="border:2px solid #aaa;border-radius:10px;width:150px;" name="vietshare_settings[hover]" id="vietshare_settings[hover]" > 
               <?php foreach($hovers as $hover) { ?> 
               <?php if($vietshare_options['hover'] == $hover) { $selecteh = 'selected="selecteh"'; } else { $selecteh = ''; } ?>
               <option value="<?php echo $hover; ?>" <?php echo $selecteh; ?>><?php echo $hover; ?></option> 
               <?php } ?> 
               </select>
               <br><br>
		       <div style="margin-bottom:20px;"><b style="font-size:18px;"><?php _e('Display location', 'viet-share'); ?></b></div>
		       <?php $locas = array('Bottom', 'Top'); ?>
               <select style="border:2px solid #aaa;border-radius:10px;width:150px;" name="vietshare_settings[loca]" id="vietshare_settings[loca]" > 
               <?php foreach($locas as $loca) { ?> 
               <?php if($vietshare_options['loca'] == $loca) { $selecte = 'selected="selecte"'; } else { $selecte = ''; } ?>
               <option value="<?php echo $loca; ?>" <?php echo $selecte; ?>><?php echo $loca; ?></option> 
               <?php } ?> 
               </select>
               <br><br>
		       <div style="margin-bottom:20px;"><b style="font-size:18px;"><?php _e('Border styles', 'viet-share'); ?></b></div>
		       <?php $boviens = array('Round', 'Square', 'Leaves', 'Mushroom', 'light'); ?>
               <select style="border:2px solid #aaa;border-radius:10px;width:150px;" name="vietshare_settings[bovien]" id="vietshare_settings[bovien]" > 
               <?php foreach($boviens as $bovien) { ?> 
               <?php if($vietshare_options['bovien'] == $bovien) { $selectebo = 'selected="selectebo"'; } else { $selectebo = ''; } ?>
               <option value="<?php echo $bovien; ?>" <?php echo $selectebo; ?>><?php echo $bovien; ?></option> 
               <?php } ?> 
               </select>
		   </div>
		   		   
		   <div style="margin-top:20px;background:#fff;padding:20px;border-radius:10px;box-shadow:0px 0px 4px #999">
		       <div style="margin-bottom:20px;"><b style="font-size:18px;"><?php _e('Hide social icons', 'viet-share'); ?></b></div>
		       <input id="vietshare_settings[facebook]" type="checkbox" name="vietshare_settings[facebook]" value="1" <?php checked('1', $vietshare_options['facebook']); ?> />
               <label class="description"><?php _e('Hidden Facebook', 'viet-share'); ?></label>
			   <br><br>
			   <input id="vietshare_settings[twitter]" type="checkbox" name="vietshare_settings[twitter]" value="1" <?php checked('1', $vietshare_options['twitter']); ?> />
               <label class="description"><?php _e('Hidden Twitter', 'viet-share'); ?></label>
			   <br><br>
			   <input id="vietshare_settings[pinterest]" type="checkbox" name="vietshare_settings[pinterest]" value="1" <?php checked('1', $vietshare_options['pinterest']); ?> />
               <label class="description"><?php _e('Hidden Pinterest', 'viet-share'); ?></label>
			   <br><br>
			   <input id="vietshare_settings[zalo]" type="checkbox" name="vietshare_settings[zalo]" value="1" <?php checked('1', $vietshare_options['zalo']); ?> />
               <label class="description"><?php _e('Hidden Zalo', 'viet-share'); ?></label>
			   <br><br>
		   </div>

		   <div style="margin-top:20px;background:#fff;padding:20px;border-radius:10px;box-shadow:0px 0px 4px #999">
		        <div style="font-size:18px;margin-bottom:5px;"><b style="font-size:18px;"><?php _e('Add Official Account ID', 'viet-share'); ?></b></div>
				<?php _e('Must enter the OAID code, Zalo can operate.', 'viet-share'); ?><p />
				<p><label class="description" for="vietshare_settings[title-name]"><?php _e('Zalo OAID:', 'viet-share'); ?> <a href="https://oa.zalo.me/">https://oa.zalo.me/</a></label></p>
				<input style="border:1px solid #aaa;border-radius:10px;background:#e0fff5;padding:10px;width:150px;" id="vietshare_settings[oaid]" name="vietshare_settings[oaid]" type="text" value="<?php echo $vietshare_options['oaid']; ?>"/>
			</div>
			
			<div style="margin-top:20px;background:#fff;padding:20px;border-radius:10px;box-shadow:0px 0px 4px #999">
		       <div style="margin-bottom:5px;"><b style="font-size:18px;"><?php _e('Hide auto show', 'viet-share'); ?></b></div>
			   <?php _e('Hide to use the code shortcode below.', 'viet-share'); ?><p />
		       <input id="vietshare_settings[enable]" type="checkbox" name="vietshare_settings[enable]" value="1" <?php checked('1', $vietshare_options['enable']); ?> />
               <label class="description" for="mfwp_settings[enable]"><?php _e('Hidden', 'viet-share'); ?></label>
			   <div style="margin-top:20px;margin-bottom:5px;"><b style="font-size:18px;"><?php _e('Using Shortcode, add the position you want to display', 'viet-share'); ?></b></div>
			   <?php _e('You can use the shortcode below to paste in your post, or code where you want to display the Viet share.', 'viet-share'); ?>
			   <div style="font-size:20px;background:#faffcc;color:#111;padding:10px;border:1px solid #777;border-radius:10px;max-width:500px;margin-top:20px;">[vietshare]</div>
			   <div style="font-size:20px;background:#faffcc;color:#111;padding:10px;border:1px solid #777;border-radius:10px;max-width:500px;margin-top:10px;">&lt;?php echo do_shortcode( &#39;[vietshare]&#39; ); ?&gt;</div>
		   </div>
			
		   <div class="submit"><input style="background:#444;color:#fff;padding: 2px 30px 2px 30px;border:none;font-size:18px;border-radius:10px" type="submit" class="button-primary" value="<?php _e('Save settings', 'viet-share'); ?>" /></div>
		</form>
	<div style="font-size:14px;"><?php _e('Thank you for using our plugin', 'viet-share'); ?> | <?php _e('by', 'viet-share'); ?> <a href="https://caodem.com">caodem.com</a></div>
	</div>
	<?php
	echo ob_get_clean();
}
// add muc luc menu admin
function Viet_share_add_options_link() {
	add_options_page('Viet share', 'Viet share', 'manage_options', 'vietshare-options', 'viet_share_options_page');
}
add_action('admin_menu', 'Viet_share_add_options_link');
// add thong tin vao database
function Viet_share_register_settings() {
	register_setting('vietshare_settings_group', 'vietshare_settings');
}
add_action('admin_init', 'Viet_share_register_settings');