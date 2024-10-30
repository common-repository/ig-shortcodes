<?php
/**
 * Plugin Name:IG Shortcodes
 * Plugin URI: http://www.iograficathemes.com/downloads/ig-shortcodes
 * Description: A complete set of WordPress shortcodes to add beautiful and useful elements to your theme.
 * Version: 3.1
 * Author: iografica
 * Author URI: http://www.iograficathemes.com/
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */
 // Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/*---------------------------------------------------------------------------------
 * Deactivate premium plugin
----------------------------------------------------------------------------------*/
register_activation_hook(__FILE__, 'ig_shortcodes_activation');
function ig_shortcodes_activation() {
    deactivate_plugins('ig-shortcodes-premium/ig-shortcodes-premium.php');
}
/*---------------------------------------------------------------------------------
 * Start plugin class
----------------------------------------------------------------------------------*/
if (!class_exists('IG_Shortcodes') && !class_exists('IG_Shortcodes_Plugin')) {
//start class
class IG_Shortcodes_Plugin {
    public function __construct() {
        add_action( 'wp_enqueue_scripts', array( $this, 'ig_shortcodes_scripts' ) );
        add_action('admin_head',  array( $this, 'ig_shortcodes_mce_button'));
    }
    /* Add shortcodes scripts file */
    public function ig_shortcodes_scripts() {
        wp_enqueue_style('ig-shortcodes-css', plugins_url( 'shortcodes.css', __FILE__ ) );
        wp_enqueue_style('ig-genericons-css', plugins_url( 'inc/genericons/genericons.css', __FILE__ ) );
        wp_enqueue_script('jquery');
        wp_register_script('ig-shortcodes-js', plugins_url( 'inc/js/shortcodes.js', __FILE__ ));
        wp_enqueue_script('ig-shortcodes-js');
    }
    // Hooks your functions into the correct filters
    public function ig_shortcodes_mce_button() {
        // check user permissions
        if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) ) {
            return;
        }
        // check if WYSIWYG is enabled
        if ( 'true' == get_user_option( 'rich_editing' ) ) {
            add_filter( 'mce_external_plugins', array( $this, 'ig_shortcodes_tinymce_plugin' ));
            add_filter( 'mce_buttons', array( $this, 'ig_register_mce_button' ));
        }
    }

    // Declare script for new button
    public function ig_shortcodes_tinymce_plugin( $plugin_array ) {
        $plugin_array['ig_shortcodes_mce_button'] = plugins_url('/inc/js/mce-button.js', __FILE__);
        return $plugin_array;
    }

    // Register new button in the editor
    public function ig_register_mce_button( $buttons ) {
        array_push( $buttons, 'ig_shortcodes_mce_button' );
        return $buttons;
    }
//end of class
}
$igshortcodes = new IG_Shortcodes_Plugin();

/*---------------------------------------------------------------------------------
 * Settings page.
----------------------------------------------------------------------------------*/
    require_once( dirname(__FILE__) . '/inc/admin/settings.php' );
/*---------------------------------------------------------------------------------
 * Shortcodes
----------------------------------------------------------------------------------*/
    require_once( dirname(__FILE__) . '/inc/shortcodes/free-shortcodes.php' );
/*---------------------------------------------------------------------------------
 * Load plugin textdomain.
----------------------------------------------------------------------------------*/
    add_action( 'plugins_loaded', 'ig_shortcodes_textdomain' );
    function ig_shortcodes_textdomain() {
        load_plugin_textdomain( 'ig-shortcodes', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
    }
//end if class class_exists
}
