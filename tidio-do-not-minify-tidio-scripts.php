<?php
/**
 * Plugin Name: Tidio | Do not minify Tidio scripts
 * Description: Based on WP Rocket | External JS Hosts plugin. Prevents WP Rocket’s minification process for Tidio scripts.
 * Version:     0.0.1
 * Plugin URI:  https://github.com/dominiczaq/wp-rocket-tidiochat
 * Author:      Grzegorz Dominiczak
 * License:     GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 */

namespace Tidio\Helpers;

// Standard plugin security, keep this line in place.
defined( 'ABSPATH' ) or die();

/**
 * Exclude external scripts from WP Rocket’s file optimization.
 *
 * @param  array  $external_js_urls Array of external domains
 * @return array                    Extended array of external domains
 */
function tidioDomains( $external_js_hosts ) {

	$external_js_hosts[] = 'code.tidio.co';

	return $external_js_hosts;
}
add_filter( 'rocket_minify_excluded_external_js', __NAMESPACE__ . '\tidioDomains' );
