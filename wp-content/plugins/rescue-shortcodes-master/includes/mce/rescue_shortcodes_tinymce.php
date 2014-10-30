<?php

class RESCUE_TinyMCE_Buttons {
    function __construct() {
        add_action( 'init', array(&$this,'init') );
    }
    function init() {
        if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
            return;
        if ( get_user_option('rich_editing') == 'true' ) {
            add_filter( 'mce_external_plugins', array(&$this, 'add_plugin') );
            add_filter( 'mce_buttons', array(&$this,'register_button') );
            add_action( 'admin_head', array(&$this, 'rescue_admin_head') );
        }
    }
    function add_plugin($plugin_array) {
        $plugin_array['rescue_shortcodes'] = plugin_dir_url( __FILE__ ) .'js/rescue_shortcodes_tinymce.js';
        return $plugin_array;
    }
    function register_button($buttons) {
        array_push($buttons, 'rescue_shortcodes_button');
        return $buttons;
    }
    function rescue_admin_head() {
        ?>
        <style>
        .mce-menu-item-title { background: transparent none !important; cursor: default !important; }
        .mce-menu-item-title span { color: #000 !important; font-weight: bold; }
        </style>
        <?php
    }
}
$rescueshortcode = new RESCUE_TinyMCE_Buttons;
