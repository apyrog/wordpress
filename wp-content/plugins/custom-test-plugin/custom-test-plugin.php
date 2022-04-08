<?php

/**
 * Plugin Name: Custom Test Plugin
 * Description: Description custom test plugin (140 char)
 * Plugin URI:  https://google.com/
 * Author URI:  https://google.com/
 * Author:      Test Author
 * Version:     1.0
 *
 * Text Domain: custom-test-plugin
 * Domain Path: Путь до файла перевода.
 * Requires at least: 2.5
 * Requires PHP: 5.4
 *
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 * Network:     Укажите "true" для возможности активировать плагин для сети Multisite.
 * Update URI: https://site.ru/link_to_update
 */

// plugin code
add_filter('show_admin_bar', '__return_false');
