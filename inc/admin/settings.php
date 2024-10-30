<?php
//ADMIN STYLE
add_action( 'admin_enqueue_scripts', 'ig_shortcodes_admin_style' );
function ig_shortcodes_admin_style($hook) {
    
    global $ig_shortcodes_settings_page;
	if( $hook != $ig_shortcodes_settings_page ) 
        return;
    
        wp_register_style( 'ig-shortcodes-settings', plugins_url( 'settings.css', __FILE__ ) );
        wp_enqueue_style( 'ig-shortcodes-settings' );
}
//SETTINGS
add_action( 'admin_menu', 'ig_shortcodes_register_menu_page' );
function ig_shortcodes_register_menu_page(){
    global $ig_shortcodes_settings_page;
    $ig_shortcodes_settings_page = add_menu_page( 'IG Shortcodes', 'IG Shortcodes', 'manage_options', 'ig-shortcodes', 'ig_shortcodes_menu_page', 'dashicons-editor-code' );
}

function ig_shortcodes_menu_page() {
?>
<div class="wrap about-wrap">
    <h1><?php esc_html_e('IG Shortcodes Settings', 'ig-shortcodes') ?></h1>
    <p><?php esc_html_e( 'Thank you to use our plugin for your website.', 'ig-shortcodes'); ?>
    <ul class="ig-intro">
        <li class="evidence">
            <h2><?php esc_html_e('Upgrade to premium', 'ig-shortcodes') ?></h3>
            <p><?php esc_html_e( 'Upgrade to the premium version to get all plugin features and have access to priority support.', 'ig-shortcodes' ); ?></p>
            <a href="http://www.iograficathemes.com/document/shortcodes-attributes/" target="_blank" class="button-upgrade">
                <?php esc_html_e( 'More info', 'ig-shortcodes' ); ?>
            </a>
        </li>
        <li>
            <h2><?php esc_html_e('Documentation', 'ig-shortcodes') ?></h3>
            <p><?php esc_html_e('Learn more about your new plugin, visit our website to read the plugin documentation.', 'ig-shortcodes') ?></p>
            <a href="http://www.iograficathemes.com/document/shortcodes-attributes/" target="_blank" class="button">
                <?php esc_html_e( 'Read the documentation', 'ig-shortcodes' ); ?>
            </a>
        </li>
    </ul>
    <ul class="ig-footer">
        <li>
            <h3><?php esc_html_e( 'Can i contribute?', 'boxed-wp' ); ?></h3>
            <p><?php esc_html_e( 'Would you like to translate the plugin into your language?', 'ig-shortcodes' ); ?></p>
            <a href="<?php echo esc_url('http://www.iograficathemes.com/document/make-a-translation/'); ?>" target="_blank" class="button">
                <?php esc_html_e( 'Read how to make a translation', 'boxed-wp' ); ?>
            </a>
        </li>
        <li>
            <h3><?php esc_html_e( 'Having Trouble, Need Support?', 'boxed-wp' ); ?></h3>
            <p><?php esc_html_e( 'You can ask for support in the WordPress support forum.', 'ig-shortcodes' ); ?></p>
            <a href="<?php echo esc_url('https://wordpress.org/support/plugin/ig-shortcodes'); ?>" target="_blank" class="button">
                <?php esc_html_e( 'Ask for support', 'boxed-wp' ); ?>
            </a>
        </li>
        <li>
            <h3><?php esc_html_e( 'Can\'t find a feature?', 'ig-shortcodes' ); ?></h3>
            <p><?php esc_html_e( 'Please suggest and vote on ideas / feature requests at the feedback forum.', 'ig-shortcodes' ); ?></p>
            <a href="https://iograficathemes.uservoice.com" target="_blank" class="button">
                <?php esc_html_e( 'Submit your feedback', 'ig-shortcodes' ); ?>
            </a>
        </li>
        <li>
            <h3><?php esc_html_e( 'Do you like the plugin?', 'ig-shortcodes' ); ?></h3>
            <p><?php esc_html_e( 'Why not leave a review on WordPress.org? We\'d really appreciate it!', 'ig-shortcodes' ); ?></p>
            <a href="https://wordpress.org/support/view/plugin-reviews/ig-shortcodes" target="_blank" class="button">
                <?php esc_html_e( 'Submit your review', 'ig-shortcodes' ); ?>
            </a>
        </li>
    </ul>
</div>
<?php } ?>
