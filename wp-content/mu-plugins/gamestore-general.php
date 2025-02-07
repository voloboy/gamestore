<?php
/*
 * Plugin name: Gamestore General
 * Description: Core Code for Gamestore
 * Version: 1.0
 * Author: Yulia Voloboy
 * Author URI: https://yvoloboy.ru
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

 function gamestore_remove_dashboard_widgets(){
    global $wp_meta_boxes;
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
 }
 add_action('wp_dashboard_setup', 'gamestore_remove_dashboard_widgets');