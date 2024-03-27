<?php
/**
 * Plugin Name:         After_ MU-Loader
 * Description:         A MU-plugin to auto-load MU-plugins in directories.
 * Requires at least: 	6.4.3
 * Requires PHP:      	8.1.0
 * Version:           	1.0.0
 * Author:            	Andrew Hateley-Browne
 * Author URI:			https://afterword.com.au
 * Update URI:			https://afterword.com.au/plugins/after-mu-loader
 * License:           	GPL-2.0-or-later
 * License URI:       	https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       	after-mu-loader
 *
 * @link       https://afterword.com.au/plugins/after-loader
 * @package    Afterword\MU_Loader_Plugin
 * @author     Andrew Hateley-Browne <andrew@afterword.com.au>
 *
 */

namespace Afterword;

// Include all MU-Plugins
$plugins = scandir( WPMU_PLUGIN_DIR );

foreach( $plugins as $plugin ) {
    if ( is_file( trailingslashit( WPMU_PLUGIN_DIR ) .  $plugin . '/' . $plugin . '.php' ) ) {
        return trailingslashit( WPMU_PLUGIN_DIR ) .  $plugin . '/' . $plugin . '.php';
    }
}