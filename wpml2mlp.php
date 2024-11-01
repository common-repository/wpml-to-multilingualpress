<?php
/**
 * Plugin Name: WPML to MultilingualPress
 * Plugin URI:  https://github.com/inpsyde/wpml2mlp
 * Description: This plugin is not maintained, please remove them from your installation.
 * Version:     2.0.1
 */

defined( 'ABSPATH' ) or die( 'No direct access!' );

add_filter(
    'admin_init',
    function () {
        deactivate_plugins( plugin_basename( __FILE__ ) );;
    }
);