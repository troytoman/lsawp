<?php
/*
 Plugin Name: Rescue Shortcodes
 Plugin URI: https://github.com/RescueThemes/rescue-shortcodes
 Description: A lightweight shortcodes plugin for themes developed by <a href="http://themeforest.net/user/RescueThemes">Rescue Themes</a>
 Author: Rescue Themes
 Author URI: http://themeforest.net/user/RescueThemes
 Version: 1.4
 License: GNU General Public License version 2.0
 License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

/*----------------------------------------------------*/
/*  Exit if accessed directly
/*----------------------------------------------------*/
if ( ! defined( 'ABSPATH' ) ) exit;

/*----------------------------------------------------*/
/* JS and CSS
/*----------------------------------------------------*/
require_once( dirname(__FILE__) . '/includes/scripts.php' );

/*----------------------------------------------------*/
/*  Shortcode functions
/*----------------------------------------------------*/
require_once( dirname(__FILE__) . '/includes/shortcode-functions.php');

/*----------------------------------------------------*/
/*  Add button to WP editor
/*----------------------------------------------------*/
require_once( dirname(__FILE__) . '/includes/mce/rescue_shortcodes_tinymce.php');
