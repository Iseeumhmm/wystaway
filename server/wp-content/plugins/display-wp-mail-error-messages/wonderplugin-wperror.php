<?php
/*
Plugin Name: Display wp_mail Error Messages
Plugin URI: https://www.wonderplugin.com/display-wordpress-error-messages/
Description: Display wp_mail error messages
Version: 1.0
Author: Magic Hills Pty Ltd
Author URI: https://www.wonderplugin.com
*/

define('WONDERPLUGIN_WPERROR_URL', plugin_dir_url( __FILE__ ));

class WonderPlugin_WPError_Messages_Plugin {

	function __construct() {

		$this->init();
	}
	
	function init() {
						
		add_action( 'admin_menu', array($this, 'register_menu') );
		add_action( 'init', array($this, 'register_script') );
		
		add_action( 'wp_mail_failed', array($this, 'log_mail_errors') );
	}
	
	function register_menu() {
	
		$menu = add_menu_page(
				__('WP Error Messages', 'wonderplugin_wperror'),
				__('WP Error Messages', 'wonderplugin_wperror'),
				'manage_options',
				'wonderplugin_wperror_overview',
				array($this, 'show_errors'),
				WONDERPLUGIN_WPERROR_URL . 'logo-16.png' );
		add_action( 'admin_print_styles-' . $menu, array($this, 'enqueue_admin_script') );
		
		$menu = add_submenu_page(
				'wonderplugin_wperror_overview',
				__('Show Errors', 'wonderplugin_wperror'),
				__('Show Errors', 'wonderplugin_wperror'),
				'manage_options',
				'wonderplugin_wperror_overview',
				array($this, 'show_errors' ));
		add_action( 'admin_print_styles-' . $menu, array($this, 'enqueue_admin_script') );
		
		$menu = add_submenu_page(
				'wonderplugin_wperror_overview',
				__('Settings', 'wonderplugin_wperror'),
				__('Settings', 'wonderplugin_wperror'),
				'manage_options',
				'wonderplugin_wperror_edit_settings',
				array($this, 'edit_settings' ) );
		add_action( 'admin_print_styles-' . $menu, array($this, 'enqueue_admin_script') );
	}
	
	function register_script() {
		
		wp_register_style('wonderplugin-wperror-admin-css', WONDERPLUGIN_WPERROR_URL . 'wonderplugin-wperror.css');
	}
	
	function enqueue_admin_script($hook) {
		
		wp_enqueue_style('wonderplugin-wperror-admin-css');
	}
	
	function show_errors() {
		
		$messages = get_option( 'wonderplugin_wperror_mail', '' );
		
		if (empty($messages))
			$messages = '<p>No error messages.</p>';
		
		$messages = '<h3>wp_mail Error Messages:</h3>' . $messages;
		print_r($messages);
	}
	
	function log_mail_errors($wp_error) {
		
		$settings = $this->get_settings();
		$maxlength = $settings['maxlength'];
		
		$messages = get_option( 'wonderplugin_wperror_mail', '' );
		if (strlen($messages) > $maxlength)
			$messages = '';
		
		$messages .= '<p class="wonderplugin-wperror-title">' . date('Y-m-d H:i:s') . '</p><p>' . print_r($wp_error, true) . '</p>';
		update_option( 'wonderplugin_wperror_mail', $messages );
	}
	
	function save_settings($options) {
		
		if (!isset($options) || !isset($options['maxlength']))
			$options['maxlength'] = 4096;
		
		update_option( 'wonderplugin_wperror_maxlength', $options['maxlength'] );
	}
	
	function get_settings() {
		
		$settings = array(
				'maxlength' => get_option( 'wonderplugin_wperror_maxlength', 4096 )
			);
		
		return $settings;
	}
	
	function edit_settings() {
		
		?>
		<div class='wrap'>			
		<h2><?php _e( 'Settings', 'wonderplugin_wperror' ); ?> </h2>
		
		<?php
		if ( isset($_POST['save-wperror-options']) && check_admin_referer('wonderplugin-wperror', 'wonderplugin-wperror-settings') )
		{
			$this->save_settings($_POST);
			echo '<div class="updated"><p>Settings saved.</p></div>';
		}
		$settings = $this->get_settings();
		?>
		
		<form method="post">
		<?php wp_nonce_field('wonderplugin-wperror', 'wonderplugin-wperror-settings'); ?>
		
		<table class="form-table">
		<tr>
			<th>Maximum Length of Error Messages (bytes):</th>
			<td><input name='maxlength' type='number' id='maxlength' class='medium-text' value='<?php if (isset($settings['maxlength'])) echo $settings['maxlength']; ?>' /></td>
		</tr>
		</table>
		
		<p class="submit"><input type="submit" name="save-wperror-options" id="save-wperror-options" class="button button-primary" value="Save Changes"  /></p>
		
		</form>
		<?php
	}
}

$wonderplugin_wperror_messages_plugin = new WonderPlugin_WPError_Messages_Plugin();