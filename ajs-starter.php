<?php
/**
 * AJS Starter WordPress Plugin
 *
 * @package     KnowTheCode
 * @author      ajskelton
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: AJS Starter WordPress Plugin
 * Plugin URI:  https://anthonyskelton.com/labs/
 * Description: Know the Code Starter Sandbox plugin. Use this plugin for all of the Know the Code demo labs and Docx.
 * Version:     1.0.0
 * Author:      Anthony Skelton
 * Author URI:  https://anthonyskelton.com
 * Text Domain: knowthecode
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */
namespace KnowTheCode;

if( ! defined( 'ABSPATH' ) ) {
	exit( 'Cheatin&#8217; uh?' );
}

require_once( __DIR__ . '/assets/vendor/autoload.php' );

add_action( 'init', __NAMESPACE__ . '\launch' );
function launch() {

}