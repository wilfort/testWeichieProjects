<?php
/**
 * @package All Bootstrap Blocks
 * @version 1.3.2
 * 
 * Plugin Name:     All Bootstrap Blocks
 * Text Domain:     all-bootstrap-blocks
 * Plugin URI:      https://areoi.io/all-bootstrap-blocks/
 * Description:     Create fully responsive Bootstrap 5 page layouts. 37 free blocks including containers, rows, columns, modals, accordions, cards, buttons and much more.
 * Author:          AREOI
 * Author URI:      https://areoi.io/
 * Version:         1.3.2
 * License:         GPL v2 or later
 * License URI:     https://www.gnu.org/licenses/gpl-2.0.html
*/

$areoi_version = '1.3.2';

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
    echo esc_attr( 'Hi there!  I\'m just a plugin, not much I can do when called directly.' );
    exit;
}

// Define globals properties
define( 'AREOI__VERSION', $areoi_version );
define( 'AREOI__NAME', 'AREOI' );
define( 'AREOI__MINIMUM_WP_VERSION', '5.8' );
define( 'AREOI__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'AREOI__PLUGIN_URI', plugin_dir_url( __FILE__ ) );
define( 'AREOI__PLUGIN_LIGHTSPEED_DIR', plugin_dir_path( __FILE__ ) . 'lightspeed/' );
define( 'AREOI__PLUGIN_LIGHTSPEED_URI', plugin_dir_url( __FILE__ ) . 'lightspeed/' );
define( 'AREOI__BOOTSTRAP_VERSION', get_option( 'areoi-dashboard-global-bootstrap-version', '5.0.2' ) );
define( 'AREOI__PREPEND', 'areoi' );
define( 'AREOI__TEXT_DOMAIN', 'all-bootstrap-blocks' );

// Include required classes
require_once( AREOI__PLUGIN_DIR . 'vendors/scssphp-1.6.0/scss.inc.php' );
require_once( AREOI__PLUGIN_DIR . 'helpers.php' );
require_once( AREOI__PLUGIN_DIR . 'class.areoi.php' );
require_once( AREOI__PLUGIN_DIR . 'class.areoi.blocks.php' );
require_once( AREOI__PLUGIN_DIR . 'class.areoi.settings.php' );
require_once( AREOI__PLUGIN_DIR . 'class.areoi.styles.php' );
require_once( AREOI__PLUGIN_DIR . 'class.areoi.api.php' );
require_once( AREOI__PLUGIN_DIR . 'class.areoi.activate.php' );
require_once( AREOI__PLUGIN_DIR . 'class.areoi.export.php' );
require_once( AREOI__PLUGIN_DIR . 'class.areoi.reset.php' );
require_once( AREOI__PLUGIN_LIGHTSPEED_DIR . 'classes/class.areoi.plugins.php' );
require_once( AREOI__PLUGIN_LIGHTSPEED_DIR . 'classes/class.areoi.lightspeed.php' );

// Trigger initialise actions across different classes
add_action( 'init', array( 'AREOI', 'init' ) );
add_action( 'init', array( 'AREOI_Blocks', 'init' ) );    
add_action( 'init', array( 'AREOI_Settings', 'init' ) );    
add_action( 'init', array( 'AREOI_Styles', 'init' ) ); 
add_action( 'init', array( 'AREOI_Export', 'init' ) );   
add_action( 'init', array( 'AREOI_Reset', 'init' ) );   
add_action( 'init', array( 'AREOI_Plugins', 'init' ) );    
add_action( 'rest_api_init', array( 'AREOI_Api', 'init' ) );
register_activation_hook( __FILE__, array( 'AREOI_Activate', 'init' ) );

// Updated compiled scss whenever the version number changes
if ( get_option( 'areoi-version' ) != $areoi_version && get_option( 'areoi-dashboard-global-bootstrap-css' ) ) {
    $_settings = new AREOI_Settings();
    $_settings->compile_scss();
    update_option( 'areoi-version', $areoi_version );
}

// Recompile if theme.json exists and has been updated
if ( $theme_json = areoi_get_theme_json() && get_option( 'areoi-dashboard-global-bootstrap-css' ) ) {
    $cur_filetime   = areoi_get_theme_json_last_update();
    $prev_filetime  = get_option( 'areoi-theme-json-updated' );

    if ( !$prev_filetime || $prev_filetime < $cur_filetime ) {

        $_settings = new AREOI_Settings();
        $_settings->compile_scss();
    }
}

$notices = array( 'areoi-roiai-notice-6' => array('date' => '2023-02-01 00:00:00' ) );
foreach ( $notices as $notice_key => $notice ) {
    register_setting( 'areoi', $notice_key );
    if ( !get_option( $notice_key ) ) {
        add_action( 'admin_notices', function() use ( $notice_key, $notice ) {
            if ( !empty( $notice['date'] ) && $notice['date'] > date('Y-m-d H:i:s') ) return '';
            ?>
            <div class="notice areoi-notice" style="position: relative;">
                
                <p class="areoi-notice-col">
                    <img src="<?php echo esc_url( AREOI__PLUGIN_URI . 'assets/img/AI_Logo_Light.svg' ) ?>" width="100">
                </p>

                <div class="areoi-notice-col areoi-notice-col-content">
                    <div class="areoi-notice-col-content-inner">
                        <h3>Try our new AI website builder.</h3>
                        <p>ROI.AI is an AI powered website builder that can design, build and populate your next website 500 times faster. 
                            Providing you with lower costs, better quality websites and much faster delivery times. <strong>Try the free beta now.</strong></p>
                    </div>
                </div>

                <div class="areoi-notice-col areoi-notice-cta">
                    <a style="background: #ff7676;" href="https://tryroi.ai" target="_blank" class="areoi-button">Visit tryroi.ai</a>

                    <form method="post" action="options.php" enctype="multipart/form-data"> 
                        <?php settings_fields( 'areoi' ); ?>
                        <input type="hidden" name="<?php echo $notice_key ?>" value="<?php echo date( 'd-m-Y H:i:s' ) ?>">
                        <button type="submit" style="white-space: nowrap;">No thanks</button>
                    </form>
                </div>

            </div>
            <?php 
        } );
    }
}