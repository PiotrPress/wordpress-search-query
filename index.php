<?php

/**
 * Plugin Name: Search Query
 * Plugin URI: https://github.com/PiotrPress/wordpress-search-query
 * Description: This WordPress plugin adds a Search Query block which renders the contents of the search WordPress query variable.
 * Version: 0.1.0
 * Requires at least: 6.4
 * Requires PHP: 7.4
 * Author: Piotr Niewiadomski
 * Author URI: https://piotr.press
 * License: GPL v3 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: piotrpress-search-query
 * Domain Path: /languages
 * Update URI: false
 */

defined( 'ABSPATH' ) or exit;

add_action( 'init', fn() => register_block_type( __DIR__, [ 'render_callback' => fn() => get_search_query( false ) ] ) );